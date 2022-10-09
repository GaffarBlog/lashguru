<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\CatSearchFilters;

class CatSearchFiltersController extends Controller
{

    public function index()
    {
        return view('cat-search-filters');
    }

    public function store(request $request)
    {
        $cat_search_filters = Str::of($request->cwaddbc)->explode(',');
        if( isset($_GET['leveltwo']) && isset($_GET['levelthree']) && isset($_GET['levelfour']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_four_id = $_GET['levelfour'];
            foreach ($cat_search_filters as $cat_search_filters) {
                CatSearchFilters::create([
                    'filter_name' => $cat_search_filters,
                    'level_two' => $level_two_id,
                    'level_three' => $level_three_id,
                    'level_four' => $level_four_id,
                ]);
            }
            return redirect('cat-search-filters?leveltwo=' . $level_two_id . '&levelthree=' . $level_three_id . '&levelfour=' . $level_four_id)->with('success', 'Category has been successfully added!');
        } elseif( isset($_GET['leveltwo']) && isset($_GET['levelthree']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            foreach ($cat_search_filters as $cat_search_filters) {
                CatSearchFilters::create([
                    'filter_name' => $cat_search_filters,
                    'level_two' => $level_two_id,
                    'level_three' => $level_three_id,
                ]);
            }
            return redirect('cat-search-filters?leveltwo=' . $level_two_id . '&levelthree=' . $level_three_id)->with('success', 'Category has been successfully added!');
        } elseif( isset($_GET['leveltwo']) ) {
            $level_two_id = $_GET['leveltwo'];
            foreach ($cat_search_filters as $cat_search_filters) {
                CatSearchFilters::create([
                    'filter_name' => $cat_search_filters,
                    'level_two' => $level_two_id,
                ]);
            }
            return redirect('cat-search-filters?leveltwo=' . $level_two_id)->with('success', 'Category has been successfully added!');
        } else {
            foreach ($cat_search_filters as $cat_search_filters) {
                CatSearchFilters::create([
                    'filter_name' => $cat_search_filters,
                ]);
            }
            return redirect('cat-search-filters')->with('success', 'Category has been successfully added!');
        }
    }

    public function view()
    { 
        $count = [];
        if( isset($_GET['leveltwo']) && isset($_GET['levelthree']) && isset($_GET['levelfour']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_four_id = $_GET['levelfour'];
            $level_four = CatSearchFilters::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', $level_three_id ], 
                    ['level_four', $level_four_id], 
                ]
            )->get();
            return view('cat-search-filters', ['level_four' => $level_four]);
        } elseif( isset($_GET['leveltwo']) && isset($_GET['levelthree']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_three = CatSearchFilters::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', $level_three_id ], 
                    ['level_four', 0]
                ]
            )->get();
            foreach( $level_three as $category ) {
                $count[] = CatSearchFilters::where( 
                    [
                        ['level_two', $category->level_two], 
                        ['level_three', $category->level_three], 
                        ['level_four', $category->id]
                    ]
                )->count();
            }
            return view('cat-search-filters', ['level_three' => $level_three, 'count' => $count]);
        } elseif( isset($_GET['leveltwo']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_two = CatSearchFilters::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', 0], 
                    ['level_four', 0]
                ] 
            )->get();
            foreach( $level_two as $category ) {
                $count[] = CatSearchFilters::where( 
                    [
                        ['level_two', $category->level_two], 
                        ['level_three', $category->id], 
                        ['level_four', 0]
                    ]
                )->count();
            }
            return view('cat-search-filters', ['level_two' => $level_two, 'count' => $count]);
        } else {
            $cat_search_filters = CatSearchFilters::where('level_two', 0)->get();
            foreach( $cat_search_filters as $category ) {
                $count[] = CatSearchFilters::where( 
                    [
                        ['level_two', $category->id], 
                        ['level_three', 0], 
                        ['level_four', 0]
                    ]
                )->count();
            }
            return view('cat-search-filters', ['cat_search_filters' => $cat_search_filters, 'count' => $count]);
        }
    }

    public function destroy($id)
    {
        $current_category = CatSearchFilters::where('id', $id)->first();
        if( $current_category->level_two == 0 && $current_category->level_three == 0 && $current_category->level_four == 0 ) {
            CatSearchFilters::where('id', $id)->delete();
            CatSearchFilters::where('level_two', $id)->delete();
        } elseif( $current_category->level_three == 0 && $current_category->level_four == 0 ) {
            CatSearchFilters::where('id', $id)->delete();
            CatSearchFilters::where('level_three', $id)->delete();
        } elseif( $current_category->level_four == 0 ) {
            CatSearchFilters::where('id', $id)->delete();
            CatSearchFilters::where('level_four', $id)->delete();
        } else {
            CatSearchFilters::where('id', $id)->delete();
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
        $cat_search_filters  = CatSearchFilters::where('id', $id)->first();
        return response()->json([
            'status' => true,
            'cat_search_filters' => $cat_search_filters
        ]);
    }

    public function update(request $request , $id)
    {
        $cat_search_filters = CatSearchFilters:: where('id', $id)->update([
            'filter_name' => $request->catname,
        
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