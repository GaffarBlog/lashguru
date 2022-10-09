<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    //Error 404 controller 
    public function index()
    {
        return view('404');
    }
}
