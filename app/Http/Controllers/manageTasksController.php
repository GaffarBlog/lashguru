<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manageTasksController extends Controller
{
    public function index()
    {
        return view('manage-tasks');
    }
}
