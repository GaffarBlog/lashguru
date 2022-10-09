<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\CatManageColors;

class CatManageColorsController extends Controller
{

    public function index()
    {
        return view('cat-manage-colors');
    }

    public function store(request $request)
    {
        $cat_search_filters = Str::of($request->cwaddbc)->explode(',');
        if( isset($_GET['leveltwo']) ) {
            $level_two_id = $_GET['leveltwo'];
            foreach ($cat_search_filters as $cat_search_filters) {
                CatManageColors::create([
                    'color_name' => $cat_search_filters,
                    'level_two' => $level_two_id,
                ]);
            }
            return redirect('cat-manage-colors?leveltwo=' . $level_two_id)->with('success', 'Category has been successfully added!');
        } else {
            foreach ($cat_search_filters as $cat_search_filters) {
                CatManageColors::create([
                    'color_name' => $cat_search_filters,
                ]);
            }
            return redirect('cat-manage-colors')->with('success', 'Category has been successfully added!');
        }
    }

    public function view()
    { 
        $count = [];
        if( isset($_GET['leveltwo']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_two = CatManageColors::where('level_two', $level_two_id)->get();
            return view('cat-manage-colors', ['level_two' => $level_two]);
        } else {
            $cat_search_filters = CatManageColors::where('level_two', 0)->get();
            foreach( $cat_search_filters as $category ) {
                $count[] = CatManageColors::where('level_two', $category->id)->count();
            }
            return view('cat-manage-colors', ['cat_search_filters' => $cat_search_filters, 'count' => $count]);
        }
    }

    public function destroy($id)
    {
        $current_category = CatManageColors::where('id', $id)->first();
        if( $current_category->level_two == 0 ) {
            CatManageColors::where('id', $id)->delete();
            CatManageColors::where('level_two', $id)->delete();
        } else {
            CatManageColors::where('id', $id)->delete();
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
        $cat_search_filters  = CatManageColors::where('id', $id)->first();
        return response()->json([
            'status' => true,
            'cat_search_filters' => $cat_search_filters
        ]);
    }

    public function update(request $request , $id)
    {
        $cat_search_filters = CatManageColors:: where('id', $id)->update([
            'color_name' => $request->catname,
        
        ]);
        if ($cat_search_filters) {
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