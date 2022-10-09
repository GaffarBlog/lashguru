<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Img;

class ImgController extends Controller
{
     // controller
     public function index()
     {
         return view('addnewurl');
     }
 
     public function store(request $request)
     {
 
         $request->validate([
             'url' => 'required|unique:addurls'
         ]);
         $urls = Str::of($request->cwaddurl)->explode(',');
         foreach ($urls as $value) {
             Img::create([
                 'url' => $value,
 
             ]);
         }
         return response()->with();
     }
 
     //  After insert query view insert data there downloadimg
     public function view()
     {
         $url = Img::all();
         return view('img', ['url' => $url]);
     }
 
     public function update(request $request , $url_id)
     {
         $url = Img:: where('url_id', $url_id)->update([
             'done_id' => $request->cwaddurl,
         ]);
         if ($url) {
             return response()->json([
                 'status' => true,
                 'message' => "User updated successfully."
             ]);
         }
 
         return response()->json([
             'status' => false,
             'message' => "Failed to updated user."
         ]);
     }
}
