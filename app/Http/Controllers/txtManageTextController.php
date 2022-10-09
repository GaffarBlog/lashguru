<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessCategories;
use App\Models\BusinessContent;

class txtManageTextController extends Controller
{
    public function index()
    {   
        return view('txt-manage-text');
    }

    public function view() {
        $business_contents = BusinessContent::paginate(10);
        $content_counts = BusinessContent::all()->count();
        return view('txt-manage-text', ['business_contents' => $business_contents, 'content_counts' => $content_counts]);
    }

    public function destroy($id) {
        $delete_content = BusinessContent::where('id', $id)->delete();

        if( $delete_content == true ) {
            return response()->json([
                'status' => true,
                'message' => 'Content Successfully Deleted!'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Some Problem Occur!'
            ]);
        }
    }

    public function levelone() {
        $current_cat = BusinessCategories::where(
            [
                ['level_two', 0],
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

    public function edit($id) {
        $current_content = BusinessContent::where('id', $id)->first();
        if( $current_content == true ) {
            return response()->json([
                'status' => true,
                'message' => $current_content
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Some Problem Occur While Fetching the Data!'
            ]);
        }
    }

    public function update(Request $request, $id) {
        $content = BusinessContent:: where('id', $id)->update([
            'level_one' => $request->levelone,
            'level_two' => $request->leveltwo,
            'level_three' => $request->levelthree,
            'level_four' => $request->levelfour,
            'level_five' => $request->levelfive,
            'content' => $request->businesstext,
        ]);
        if ($content == true) {
            return response()->json([
                'status' => true,
                'message' => "Content updated successfully."
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Failed to update content."
            ]);
        }
    }
}
