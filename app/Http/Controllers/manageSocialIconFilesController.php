<?php

namespace App\Http\Controllers;

use App\Models\SocialIcon;
use App\Models\CatManageSocialIcons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class manageSocialIconFilesController extends Controller
{
    public function index()
    {
        $socialIcon = SocialIcon::paginate(10);
        $categories = CatManageSocialIcons::all();
        return view('manage-social-icon-files', [
            'socialIcon' => $socialIcon,
            'categories' => $categories
        ]);
    }
    public function store(Request $request){
        $validator = $request->validate([
            "images"    => "required|array"
        ]);
           
        $imagesName = '';
       foreach ($request->images as $key => $value) {
       if ($value) {
            $ext = $value->extension();
            $image_name = $key . time() . '.' . $ext;
            $value->move('assets/images', $image_name);
            $imagesName = $imagesName . ',' .  $image_name;
        }
       }

        if (!$imagesName) {
           return back()->with('error', 'Please Upload mimimum one file')->withErrors($validator)->withInput();
        }
        $count = explode(',', $imagesName);
        
        $socialIcon = new SocialIcon();
        $socialIcon->title = 'Social Incon Set' . $socialIcon->id;
        $socialIcon->images = $imagesName;
        $socialIcon->count = count($count) - 1;
        $socialIcon->save();
         return redirect('manage-social-icon-files')->with('success', 'Social Icon Add Successfully');
    }
    public function delete(Request $request){
        $socialIcon =SocialIcon::find($request->id);
        $images = explode(',', $socialIcon->images);
        foreach ($images as $key => $value) {
            if($value){
                unlink(('assets/images/' . $value));
            }
        }
        $socialIcon->delete();
        return back()->with('deleteMessage', 'Social Icon delete successfully!');
    }
    public function showScialIcon(){

        $SocialIcon = SocialIcon::all();
        return view('social-icon-show', ['SocialIcon' => $SocialIcon]);
    }
}
