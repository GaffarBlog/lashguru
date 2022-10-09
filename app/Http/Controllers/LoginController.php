<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //index controller 
    public function index()
    {
        return view('login');
    }
}
