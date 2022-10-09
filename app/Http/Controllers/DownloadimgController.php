<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DownloadImg;

class DownloadimgController extends Controller
{
     //downoadimg controller 
     public function index()
     {
         return view('downloadimg');
     }

     public function view()
    {
        $url = DownloadImg::all();
        return view('addurl', ['url' => $url]);
    }
}
