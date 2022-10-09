<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\CatManageTemplates;

class CatManageTemplatesController extends Controller
{

    public function index()
    {
        return view('cat-manage-templates');
    }

    public function store(request $request)
    {
        $cat_manage_templates = Str::of($request->cwaddbc)->explode(',');
        if( isset($_GET['leveltwo']) && isset($_GET['levelthree']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            foreach ($cat_manage_templates as $cat_manage_templates) {
                CatManageTemplates::create([
                    'temp_name' => $cat_manage_templates,
                    'level_two' => $level_two_id,
                    'level_three' => $level_three_id,
                ]);
            }
            return redirect('cat-manage-templates?leveltwo=' . $level_two_id . '&levelthree=' . $level_three_id)->with('success', 'Category has been successfully added!');
        } elseif( isset($_GET['leveltwo']) ) {
            $level_two_id = $_GET['leveltwo'];
            foreach ($cat_manage_templates as $cat_manage_templates) {
                CatManageTemplates::create([
                    'temp_name' => $cat_manage_templates,
                    'level_two' => $level_two_id,
                ]);
            }
            return redirect('cat-manage-templates?leveltwo=' . $level_two_id)->with('success', 'Category has been successfully added!');
        } else {
            foreach ($cat_manage_templates as $cat_manage_templates) {
                CatManageTemplates::create([
                    'temp_name' => $cat_manage_templates,
                ]);
            }
            return redirect('cat-manage-templates')->with('success', 'Category has been successfully added!');
        }
    }

    public function view()
    { 
        $count = [];
        if( isset($_GET['leveltwo']) && isset($_GET['levelthree']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_three = CatManageTemplates::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', $level_three_id ], 
                ]
            )->get();
            return view('cat-manage-templates', ['level_three' => $level_three]);
        } elseif( isset($_GET['leveltwo']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_two = CatManageTemplates::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', 0]
                ] 
            )->get();
            foreach( $level_two as $category ) {
                $count[] = CatManageTemplates::where( 
                    [
                        ['level_two', $category->level_two], 
                        ['level_three', $category->id]
                    ]
                )->count();
            }
            return view('cat-manage-templates', ['level_two' => $level_two, 'count' => $count]);
        } else {
            $cat_manage_templates = CatManageTemplates::where('level_two', 0)->get();
            foreach( $cat_manage_templates as $category ) {
                $count[] = CatManageTemplates::where( 
                    [
                        ['level_two', $category->id], 
                        ['level_three', 0]
                    ]
                )->count();
            }
            return view('cat-manage-templates', ['cat_manage_templates' => $cat_manage_templates, 'count' => $count]);
        }
    }

    public function destroy($id)
    {
        $current_category = CatManageTemplates::where('id', $id)->first();
        if( $current_category->level_two == 0 && $current_category->level_three == 0 ) {
            CatManageTemplates::where('id', $id)->delete();
            CatManageTemplates::where('level_two', $id)->delete();
        } elseif( $current_category->level_three == 0 ) {
            CatManageTemplates::where('id', $id)->delete();
            CatManageTemplates::where('level_three', $id)->delete();
        } else {
            CatManageTemplates::where('id', $id)->delete();
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
        $cat_manage_templates  = CatManageTemplates::where('id', $id)->first();
        return response()->json([
            'status' => true,
            'cat_manage_templates' => $cat_manage_templates
        ]);
    }

    public function update(request $request , $id)
    {
        $cat_manage_templates = CatManageTemplates:: where('id', $id)->update([
            'temp_name' => $request->catname,
        
        ]);
        if ($cat_manage_templates) {
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