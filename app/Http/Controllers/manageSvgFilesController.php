<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatManageSvgFiles;
use App\Models\SubCatManageSvgFile;

class manageSvgFilesController extends Controller
{
    public function index()
    {
        $subCategories = SubCatManageSvgFile::with('svg_category');
        if(request()->cat_manage_svg_file_id){
            $subCategories = $subCategories->where('cat_manage_svg_file_id', request()->cat_manage_svg_file_id);
        }

        $subCategories = $subCategories->paginate(20);
        $cat_manage_svg_files = CatManageSvgFiles::where('level_two', 0)->get();
        return view('manage-svg-files', ['cat_manage_svg_files' => $cat_manage_svg_files, 'subCategories' => $subCategories]);
    }

    public function store(Request $request) {
       $request->validate([
        'cat_manage_svg_file_id' => 'required|integer:gt:0',
        'title' => 'required|max:255',
        'width_in_px' => 'required|integer|gt:0',
        'height_in_px' => 'required|integer|gt:0',
        'content_type' => 'required|max:20'
       ]);

       $data = array(
        'cat_manage_svg_file_id' => $request->cat_manage_svg_file_id,
        'title' => $request->title,
        'width_in_px' => $request->width_in_px,
        'height_in_px' => $request->height_in_px,
        'content_type' => $request->content_type,
        'created_at' => now()
       );

       SubCatManageSvgFile::insert($data);
       return back()->with('success', 'SVG sub category successfully added!');
    }

    public function destroy(Request $request, $id){
        $subCategory = SubCatManageSvgFile::findOrFail($id);
        $subCategory->delete();
       return back()->with('success', 'SVG sub category deleted successfully');
    }
}
