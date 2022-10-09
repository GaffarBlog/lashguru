<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatManageSvgFiles;
use App\Models\SubCatManageSvgFile;
use App\Models\SvgMainContent;

class addSvgFilesController extends Controller
{
    public function index()
    {
        $SvgMainContent = SvgMainContent::paginate(10);
        $categories = CatManageSvgFiles::where('level_two', 0)->get();
        $subCategories = SubCatManageSvgFile::get();

        return view('add-svg-files', compact('categories', 'subCategories', 'SvgMainContent'));
    }

    public function store(Request $request){
        $request->validate([
            'sub_category_id' => 'required|exists:sub_cat_manage_svg_files,id'
        ]);
         $svg = new SvgMainContent();
         $svg->sub_cat_manage_svg_file_id = $request->sub_category_id;
       
        if ($request->main_file_one) {
            $image = $request->file('main_file_one');
            $ext = $image->extension();
            $image_name = "main_file_one" . time() . '.' . $ext;
            $image->move('assets/svg', $image_name);
            $svg->main_file_one = $image_name;
        }
        if ($request->main_file_two) {
            $image = $request->file('main_file_two');
            $ext = $image->extension();
            $image_name = "main_file_two" . time() . '.' . $ext;
            $image->move('assets/svg', $image_name);
            $svg->main_file_two = $image_name;
        }
        if ($request->main_file_three) {
            $image = $request->file('main_file_three');
            $ext = $image->extension();
            $image_name = "main_file_three" . time() . '.' . $ext;
            $image->move('assets/svg', $image_name);
            $svg->main_file_three = $image_name;
        }
        if ($request->main_file_four) {
            $image = $request->file('main_file_four');
            $ext = $image->extension();
            $image_name = "main_file_four" . time() . '.' . $ext;
            $image->move('assets/svg', $image_name);
            $svg->main_file_four = $image_name;
        }



        if ($request->extension_1) {
            $image = $request->file('extension_1');
            $ext = $image->extension();
            $image_name = "extension_1" . time() . '.' . $ext;
            $image->move('assets/svg', $image_name);
            $svg->extension_one = $image_name;
        }
        if ($request->extension_2) {
            $image = $request->file('extension_2');
            $ext = $image->extension();
            $image_name = "extension_2" . time() . '.' . $ext;
            $image->move('assets/svg', $image_name);
            $svg->extension_two = $image_name;
        }
        if ($request->extension_3) {
            $image = $request->file('extension_3');
            $ext = $image->extension();
            $image_name = "extension_3" . time() . '.' . $ext;
            $image->move('assets/svg', $image_name);
            $svg->extension_three = $image_name;
        }
        if ($request->extension_4) {
            $image = $request->file('extension_4');
            $ext = $image->extension();
            $image_name = "extension_4" . time() . '.' . $ext;
            $image->move('assets/svg', $image_name);
            $svg->extension_four = $image_name;
        }
        if ($request->extension_5) {
            $image = $request->file('extension_5');
            $ext = $image->extension();
            $image_name = "extension_5" . time() . '.' . $ext;
            $image->move('assets/svg', $image_name);
            $svg->extension_five = $image_name;
        }
        if ($request->extension_6) {
            $image = $request->file('extension_6');
            $ext = $image->extension();
            $image_name = "extension_6" . time() . '.' . $ext;
            $image->move('assets/svg', $image_name);
            $svg->extension_six = $image_name;
        }
        if ($request->extension_7) {
            $image = $request->file('extension_7');
            $ext = $image->extension();
            $image_name = "extension_7" . time() . '.' . $ext;
            $image->move('assets/svg', $image_name);
            $svg->extension_seven = $image_name;
        }
        if ($request->extension_8) {
            $image = $request->file('extension_8');
            $ext = $image->extension();
            $image_name = "extension_8" . time() . '.' . $ext;
            $image->move('assets/svg', $image_name);
            $svg->extension_eight = $image_name;
        }
        if ($request->extension_9) {
            $image = $request->file('extension_9');
            $ext = $image->extension();
            $image_name = "extension_9" . time() . '.' . $ext;
            $image->move('assets/svg', $image_name);
            $svg->extension_nine = $image_name;
        }

        if($request->hasFile('main_file_one')){
            $svg->main_file_one = $this->uploadFile($request->main_file_one);
        }
        $svg->save();

        return redirect('add-svg-files')->with('success', 'Add Svg file successfully!');
    }

    protected function uploadFile($file){

    }
}
