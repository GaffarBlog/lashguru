<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manageTextsController extends Controller
{
    //
    public function index()
    {
        return view('manage-texts');
    }
}
