<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\BusinessCategories;

class BusinessCategoriesController extends Controller
{

    public function index()
    {
        return view('business-categories');
    }

    public function store(request $request)
    {
        $business_categories = Str::of($request->cwaddbc)->explode(',');
        if( isset($_GET['leveltwo']) && isset($_GET['levelthree']) && isset($_GET['levelfour']) && isset($_GET['levelfive']) && isset($_GET['levelsix']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_four_id = $_GET['levelfour'];
            $level_five_id = $_GET['levelfive'];
            $level_six_id = $_GET['levelsix'];
            foreach ($business_categories as $business_categories) {
                BusinessCategories::create([
                    'category_name' => $business_categories,
                    'level_two' => $level_two_id,
                    'level_three' => $level_three_id,
                    'level_four' => $level_four_id,
                    'level_five' => $level_five_id,
                    'level_six' => $level_six_id,
                ]);
            }
            return redirect('business-categories?leveltwo=' . $level_two_id . '&levelthree=' . $level_three_id . '&levelfour=' . $level_four_id . '&levelfive=' . $level_five_id . '&levelsix=' . $level_six_id)->with('success', 'Category has been successfully added!');
        } elseif( isset($_GET['leveltwo']) && isset($_GET['levelthree']) && isset($_GET['levelfour']) && isset($_GET['levelfive']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_four_id = $_GET['levelfour'];
            $level_five_id = $_GET['levelfive'];
            foreach ($business_categories as $business_categories) {
                BusinessCategories::create([
                    'category_name' => $business_categories,
                    'level_two' => $level_two_id,
                    'level_three' => $level_three_id,
                    'level_four' => $level_four_id,
                    'level_five' => $level_five_id,
                ]);
            }
            return redirect('business-categories?leveltwo=' . $level_two_id . '&levelthree=' . $level_three_id . '&levelfour=' . $level_four_id . '&levelfive=' . $level_five_id)->with('success', 'Category has been successfully added!');
        } elseif( isset($_GET['leveltwo']) && isset($_GET['levelthree']) && isset($_GET['levelfour']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_four_id = $_GET['levelfour'];
            foreach ($business_categories as $business_categories) {
                BusinessCategories::create([
                    'category_name' => $business_categories,
                    'level_two' => $level_two_id,
                    'level_three' => $level_three_id,
                    'level_four' => $level_four_id,
                ]);
            }
            return redirect('business-categories?leveltwo=' . $level_two_id . '&levelthree=' . $level_three_id . '&levelfour=' . $level_four_id)->with('success', 'Category has been successfully added!');
        } elseif( isset($_GET['leveltwo']) && isset($_GET['levelthree']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            foreach ($business_categories as $business_categories) {
                BusinessCategories::create([
                    'category_name' => $business_categories,
                    'level_two' => $level_two_id,
                    'level_three' => $level_three_id,
                ]);
            }
            return redirect('business-categories?leveltwo=' . $level_two_id . '&levelthree=' . $level_three_id)->with('success', 'Category has been successfully added!');
        } elseif( isset($_GET['leveltwo']) ) {
            $level_two_id = $_GET['leveltwo'];
            foreach ($business_categories as $business_categories) {
                BusinessCategories::create([
                    'category_name' => $business_categories,
                    'level_two' => $level_two_id,
                ]);
            }
            return redirect('business-categories?leveltwo=' . $level_two_id)->with('success', 'Category has been successfully added!');
        } else {
            foreach ($business_categories as $business_categories) {
                BusinessCategories::create([
                    'category_name' => $business_categories,
                ]);
            }
            return redirect('business-categories')->with('success', 'Category has been successfully added!');
        }
    }

    public function view()
    { 
        $count = [];
        if( isset($_GET['leveltwo']) && isset($_GET['levelthree']) && isset($_GET['levelfour']) && isset($_GET['levelfive']) && isset($_GET['levelsix']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_four_id = $_GET['levelfour'];
            $level_five_id = $_GET['levelfive'];
            $level_six_id = $_GET['levelsix'];
            $level_six = BusinessCategories::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', $level_three_id ], 
                    ['level_four', $level_four_id], 
                    ['level_five', $level_five_id], 
                    ['level_six', $level_six_id],
                ]
            )->get();
            return view('business-categories', ['level_six' => $level_six]);
        } elseif( isset($_GET['leveltwo']) && isset($_GET['levelthree']) && isset($_GET['levelfour']) && isset($_GET['levelfive']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_four_id = $_GET['levelfour'];
            $level_five_id = $_GET['levelfive'];
            $level_five = BusinessCategories::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', $level_three_id], 
                    ['level_four', $level_four_id], 
                    ['level_five', $level_five_id], 
                    ['level_six', 0],
                ]
            )->get();
            foreach( $level_five as $category ) {
                $count[] = BusinessCategories::where( 
                    [
                        ['level_two', $category->level_two], 
                        ['level_three', $category->level_three], 
                        ['level_four', $category->level_four], 
                        ['level_five', $category->level_five], 
                        ['level_six', $category->id],
                    ]
                )->count();
            }
            return view('business-categories', ['level_five' => $level_five, 'count' => $count]);
        } elseif( isset($_GET['leveltwo']) && isset($_GET['levelthree']) && isset($_GET['levelfour']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_four_id = $_GET['levelfour'];
            $level_four = BusinessCategories::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', $level_three_id ], 
                    ['level_four', $level_four_id], 
                    ['level_five', 0], 
                    ['level_six', 0],
                ]
            )->get();
            foreach( $level_four as $category ) {
                $count[] = BusinessCategories::where( 
                    [
                        ['level_two', $category->level_two], 
                        ['level_three', $category->level_three], 
                        ['level_four', $category->level_four], 
                        ['level_five', $category->id], 
                        ['level_six', 0],
                    ]
                )->count();
            }
            return view('business-categories', ['level_four' => $level_four, 'count' => $count]);
        } elseif( isset($_GET['leveltwo']) && isset($_GET['levelthree']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_three_id = $_GET['levelthree'];
            $level_three = BusinessCategories::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', $level_three_id ], 
                    ['level_four', 0], 
                    ['level_five', 0], 
                    ['level_six', 0],
                ]
            )->get();
            foreach( $level_three as $category ) {
                $count[] = BusinessCategories::where( 
                    [
                        ['level_two', $category->level_two], 
                        ['level_three', $category->level_three], 
                        ['level_four', $category->id], 
                        ['level_five', 0], 
                        ['level_six', 0],
                    ]
                )->count();
            }
            return view('business-categories', ['level_three' => $level_three, 'count' => $count]);
        } elseif( isset($_GET['leveltwo']) ) {
            $level_two_id = $_GET['leveltwo'];
            $level_two = BusinessCategories::where(
                [
                    ['level_two', $level_two_id], 
                    ['level_three', 0], 
                    ['level_four', 0], 
                    ['level_five', 0], 
                    ['level_six', 0],
                ] 
            )->get();
            foreach( $level_two as $category ) {
                $count[] = BusinessCategories::where( 
                    [
                        ['level_two', $category->level_two], 
                        ['level_three', $category->id], 
                        ['level_four', 0], 
                        ['level_five', 0], 
                        ['level_six', 0],
                    ]
                )->count();
            }
            return view('business-categories', ['level_two' => $level_two, 'count' => $count]);
        } else {
            $business_categories = BusinessCategories::where('level_two', 0)->get();
            foreach( $business_categories as $category ) {
                $count[] = BusinessCategories::where( 
                    [
                        ['level_two', $category->id], 
                        ['level_three', 0], 
                        ['level_four', 0], 
                        ['level_five', 0], 
                        ['level_six', 0],
                    ]
                )->count();
            }
            return view('business-categories', ['business_categories' => $business_categories, 'count' => $count]);
        }
    }

    public function destroy($id)
    {
        $current_category = BusinessCategories::where('id', $id)->first();
        if( $current_category->level_two == 0 && $current_category->level_three == 0 && $current_category->level_four == 0 && $current_category->level_five == 0 && $current_category->level_six == 0 ) {
            BusinessCategories::where('id', $id)->delete();
            BusinessCategories::where('level_two', $id)->delete();
        } elseif( $current_category->level_three == 0 && $current_category->level_four == 0 && $current_category->level_five == 0 && $current_category->level_six == 0 ) {
            BusinessCategories::where('id', $id)->delete();
            BusinessCategories::where('level_three', $id)->delete();
        } elseif( $current_category->level_four == 0 && $current_category->level_five == 0 && $current_category->level_six == 0 ) {
            BusinessCategories::where('id', $id)->delete();
            BusinessCategories::where('level_four', $id)->delete();
        } elseif( $current_category->level_five == 0 && $current_category->level_six == 0 ) {
            BusinessCategories::where('id', $id)->delete();
            BusinessCategories::where('level_five', $id)->delete();
        } elseif( $current_category->level_six == 0 ) {
            BusinessCategories::where('id', $id)->delete();
            BusinessCategories::where('level_six', $id)->delete();
        } else {
            BusinessCategories::where('id', $id)->delete();
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
        $business_categories  = BusinessCategories::where('id', $id)->first();
        return response()->json([
            'status' => true,
            'business_categories' => $business_categories
        ]);
    }

    public function update(request $request , $id)
    {
        $business_categories = BusinessCategories:: where('id', $id)->update([
            'category_name' => $request->catname,
        
        ]);
        if ($business_categories) {
            return response()->json([
                'status' => true,
                'message' => "Business category updated successfully."
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => "Failed to update the category."
        ]);
    }
}
