<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\CatManageSocialIcons;

class CatManageSocialIconsController extends Controller
{

    public function index()
    {
        return view('cat-manage-social-icons');
    }

    public function store(request $request)
    {
        $cat_manage_social_icons = Str::of($request->cwaddbc)->explode(',');
        if($cat_manage_social_icons) {
            foreach ($cat_manage_social_icons as $cat_manage_social_icons) {
                CatManageSocialIcons::create([
                    'social_icon' => $cat_manage_social_icons,
                ]);
            }
            return redirect('cat-manage-social-icons')->with('success', 'Category has been successfully added!');
        }
    }

    public function view()
    { 
        $cat_manage_social_icons = CatManageSocialIcons::all();
        return view('cat-manage-social-icons', ['cat_manage_social_icons' => $cat_manage_social_icons]);
    }

    public function destroy($id)
    {
        CatManageSocialIcons::where('id', $id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Category successfully delted!',
        ]);

        return response()->json([
            'status' => false,
            'message' => "Failed to delete the category."
        ]);
    }

    public function edit($id)
    {
        $cat_manage_social_icons  = CatManageSocialIcons::where('id', $id)->first();
        return response()->json([
            'status' => true,
            'cat_manage_social_icons' => $cat_manage_social_icons
        ]);
    }

    public function update(request $request , $id)
    {
        $cat_manage_social_icons = CatManageSocialIcons:: where('id', $id)->update([
            'social_icon' => $request->catname,
        
        ]);
        if ($cat_manage_social_icons) {
            return response()->json([
                'status' => true,
                'message' => "Category updated successfully."
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => "Failed to update the category."
        ]);
    }
}