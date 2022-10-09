<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessCategories;
use App\Models\BusinessContent;

class contentTxtGetTextController extends Controller
{
    public function index()
    {
        return view('content-txt-get-text');
    }

    public function view() {
        $business_categories = BusinessCategories::all();
        return view('content-txt-get-text', ['business_categories' => $business_categories]);
    }

    public function getcontent(Request $request) {
        $levelone = $request->levelone;
        $leveltwo = $request->leveltwo;
        $levelthree = $request->levelthree;
        $levelfour = $request->levelfour;
        $levelfive = $request->levelfive;
        $business_content = BusinessContent::where([
            ['level_one', $levelone],
            ['level_two', $leveltwo],
            ['level_three', $levelthree],
            ['level_four', $levelfour],
            ['level_five', $levelfive],
        ])->get();

        if( $business_content == true ) {
            return response()->json([
                'status' => true,
                'data' => $business_content
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "No, Result Found!"
            ]);
        }
    }
}
