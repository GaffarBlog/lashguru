<?php

namespace App\Http\Controllers;

use App\Models\ManageBrand;
use Illuminate\Http\Request;

class contentImgWebsiteElementsController extends Controller
{
    public function index()
    {   
        $manageBrands = ManageBrand::all();
        return view('content-img-website-elements', ['manageBrands' => $manageBrands]);
    }

    public function color2()
    {   
        return view('content-img-website-elements-color-2');
    }
}
