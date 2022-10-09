<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\CatManageSvgFiles;

class CatManageSvgFilesController extends Controller
{

    public function index()
    {
        return view('cat-manage-svg-files');
    }

    public function store(request $request)
    {
        $cat_manage_svg_files = Str::of($request->cwaddbc)->explode(',');
        if( isset($_GET['leveltwo']) && isset($_GET['levelthree']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            foreach ($cat_manage_svg_files as $cat_manage_svg_files) {
                CatManageSvgFiles::create([
                    'svg_file' => $cat_manage_svg_files,
                    'level_two' => $level_two_id,
                    'level_three' => $level_three_id,
                ]);
            }
            return redirect('cat-manage-svg-files?leveltwo=' . $level_two_id . '&levelthree=' . $level_three_id)->with('success', 'Category has been successfully added!');
        } elseif( isset($_GET['leveltwo']) ) {
            $level_two_id = $_GET['leveltwo'];
            foreach ($cat_manage_svg_files as $cat_manage_svg_files) {
                CatManageSvgFiles::create([
                    'svg_file' => $cat_manage_svg_files,
                    'level_two' => $level_two_id,
                ]);
            }
            return redirect('cat-manage-svg-files?leveltwo=' . $level_two_id)->with('success', 'Category has been successfully added!');
        } else {
            foreach ($cat_manage_svg_files as $cat_manage_svg_files) {
                CatManageSvgFiles::create([
                    'svg_file' => $cat_manage_svg_files,
                ]);
            }
            return redirect('cat-manage-svg-files')->with('success', 'Category has been successfully added!');
        }
    }

    public function view()
    {
        $count = [];
        if( isset($_GET['leveltwo']) && isset($_GET['levelthree']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_three = CatManageSvgFiles::where(
                [
                    ['level_two', $level_two_id],
                    ['level_three', $level_three_id ],
                ]
            )->get();
            return view('cat-manage-svg-files', ['level_three' => $level_three]);
        } elseif( isset($_GET['leveltwo']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_two = CatManageSvgFiles::where(
                [
                    ['level_two', $level_two_id],
                    ['level_three', 0]
                ]
            )->get();
            foreach( $level_two as $category ) {
                $count[] = CatManageSvgFiles::where(
                    [
                        ['level_two', $category->level_two],
                        ['level_three', $category->id]
                    ]
                )->count();
            }
            return view('cat-manage-svg-files', ['level_two' => $level_two, 'count' => $count]);
        } else {
            $cat_manage_svg_files = CatManageSvgFiles::where('level_two', 0)->get();
            foreach( $cat_manage_svg_files as $category ) {
                $count[] = CatManageSvgFiles::where(
                    [
                        ['level_two', $category->id],
                        ['level_three', 0]
                    ]
                )->count();
            }
            return view('cat-manage-svg-files', ['cat_manage_svg_files' => $cat_manage_svg_files, 'count' => $count]);
        }
    }

    public function destroy($id)
    {
        $current_category = CatManageSvgFiles::where('id', $id)->first();
        if( $current_category->level_two == 0 && $current_category->level_three == 0 ) {
            CatManageSvgFiles::where('id', $id)->delete();
            CatManageSvgFiles::where('level_two', $id)->delete();
        } elseif( $current_category->level_three == 0 ) {
            CatManageSvgFiles::where('id', $id)->delete();
            CatManageSvgFiles::where('level_three', $id)->delete();
        } else {
            CatManageSvgFiles::where('id', $id)->delete();
        }

        return response()->json([
            'status' => true,
            'message' => 'Category successfully delted!',
        ]);

        return response()->json([
            'status' => false,
            'message' => "Failed to delete the category."
        ]);
    }

    public function edit($id)
    {
        $cat_manage_svg_files  = CatManageSvgFiles::where('id', $id)->first();
        return response()->json([
            'status' => true,
            'cat_manage_svg_files' => $cat_manage_svg_files
        ]);
    }

    public function update(request $request , $id)
    {
        $cat_manage_svg_files = CatManageSvgFiles:: where('id', $id)->update([
            'svg_file' => $request->catname,

        ]);
        if ($cat_manage_svg_files) {
            return response()->json([
                'status' => true,
                'message' => "Category updated successfully."
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => "Failed to update the category."
        ]);
    }
}
