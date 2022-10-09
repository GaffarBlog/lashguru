<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manageUrlsController extends Controller
{
    public function index()
    {
        return view('manage-urls');
    }
}
