<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessCategories;
use App\Models\BusinessContent;

class txtAddTextController extends Controller
{
    public function index()
    {   
        return view('txt-add-text');
    }

    public function view() {
        $business_categories = BusinessCategories::all();
        $business_contents = BusinessContent::paginate(10);
        $content_counts = BusinessContent::all()->count();
        return view('txt-add-text', ['business_categories' => $business_categories, 'business_contents' => $business_contents, 'content_counts' => $content_counts]);
    }

    public function leveltwo($id) {
        $current_cat = BusinessCategories::where(
            [
                ['level_two', $id],
                ['level_three', 0],
                ['level_four', 0],
                ['level_five', 0]
            ]
        )->get();

        return response()->json([
            'status' => true,
            'message' => $current_cat
        ]);

        return response()->json([
            'status' => false,
            'message' => 'Some problem occur on your server!'
        ]);
    }

    public function levelthree($id) {
        $current_cat = BusinessCategories::where(
            [
                ['level_three', $id],
                ['level_four', 0],
                ['level_five', 0]
            ]
        )->get();

        return response()->json([
            'status' => true,
            'message' => $current_cat
        ]);

        return response()->json([
            'status' => false,
            'message' => 'Some problem occur on your server!'
        ]);
    }

    public function levelfour($id) {
        $current_cat = BusinessCategories::where(
            [
                ['level_four', $id],
                ['level_five', 0]
            ]
        )->get();

        return response()->json([
            'status' => true,
            'message' => $current_cat
        ]);

        return response()->json([
            'status' => false,
            'message' => 'Some problem occur on your server!'
        ]);
    }

    public function levelfive($id) {
        $current_cat = BusinessCategories::where(
            [
                ['level_five', $id]
            ]
        )->get();

        return response()->json([
            'status' => true,
            'message' => $current_cat
        ]);

        return response()->json([
            'status' => false,
            'message' => 'Some problem occur on your server!'
        ]);
    }

    public function store(Request $request) {
        if( isset($request->cwaddcontent) ) {
            $level_one = $request->levelone;
            $level_two = $request->leveltwo;
            $level_three = $request->levelthree;
            $level_four = $request->levelfour;
            $level_five = $request->levelfive;
            $business_text = $request->businesstext;
            $business_data = BusinessContent::create([
                'level_one' => $level_one,
                'level_two' => $level_two,
                'level_three' => $level_three,
                'level_four' => $level_four,
                'level_five' => $level_five,
                'content' => $business_text
            ]);
            if( $business_data == true ) {
                return redirect('txt-add-text')->with('success', 'Content Successfuly Inserted!');
            } else {
                return redirect('txt-add-text')->with('error', 'Some problem occur while inserting the content!');
            }
        }
    }
}
