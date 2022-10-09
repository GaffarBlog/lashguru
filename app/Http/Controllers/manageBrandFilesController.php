<?php

namespace App\Http\Controllers;

use App\Models\ManageBrand;
use Illuminate\Http\Request;

class manageBrandFilesController extends Controller
{
    public function index()
    {
        $manageBrands = ManageBrand::paginate(10);

        return view('manage-brand-files',['manageBrands' => $manageBrands]);
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'positive' => 'required|mimes:svg, png',
            'nagetive' => 'required|mimes:svg, png',
            'colored' => 'required|mimes:svg, png',
        ]);
        
        $manageBrand = new ManageBrand();
        $manageBrand->title = $request->title;
        if ($request->hasFile('positive')) {
            $image = $request->file('positive');
            $ext = $image->extension();
            $image_name = 'positive' . time() . '.' . $ext;
            $image->move('assets/images/brand/', $image_name);
            $manageBrand->positive = $image_name;
        }
        if ($request->hasFile('nagetive')) {
            $image = $request->file('nagetive');
            $ext = $image->extension();
            $image_name = 'nagetive' . time() . '.' . $ext;
            $image->move('assets/images/brand/', $image_name);
             $manageBrand->negative = $image_name;
        }
        if ($request->hasFile('colored')) {
            $image = $request->file('colored');
            $ext = $image->extension();
            $image_name = 'colored' . time() . '.' . $ext;
            $image->move('assets/images/brand/', $image_name);
             $manageBrand->colored = $image_name;
        }
        $manageBrand->save();
        return back()->with('success', "Brand add successfully!!");
    }
    public function delete(Request $request){
        $manageBrand = ManageBrand::find($request->id);
    
        if($manageBrand->positive){
            unlink('assets/images/brand/' . $manageBrand->positive);
        }
        if($manageBrand->negative){
            unlink('assets/images/brand/' . $manageBrand->negative);
        }
        if($manageBrand->colored){
            unlink('assets/images/brand/' . $manageBrand->colored);
        }
        $manageBrand->delete();
        return back()->with('deleteMessage', 'Brand File delete successfully!1');
       
    }
}
