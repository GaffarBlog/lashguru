<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\App as FacadesApp;

class indexController extends Controller
{
    //index controller 
    public function index()
    {
        return view('index');
    }

    public function change(Request $request)
    {
        FacadesApp::setLocale($request->lang);
        session()->put('locale', $request->lang);
  
        return redirect()->back();
    }

    
}
