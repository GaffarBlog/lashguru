<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manageTemplatesController extends Controller
{
    //
    public function index()
    {
        return view('manage-templates');
    }
}
