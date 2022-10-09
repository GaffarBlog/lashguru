<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\CatManageBrands;

class CatManageBrandsController extends Controller
{

    public function index()
    {
        return view('cat-manage-brands');
    }

    public function store(request $request)
    {
        $cat_manage_brands = Str::of($request->cwaddbc)->explode(',');
        if($cat_manage_brands) {
            foreach ($cat_manage_brands as $cat_manage_brands) {
                CatManageBrands::create([
                    'brand_name' => $cat_manage_brands,
                ]);
            }
            return redirect('cat-manage-brands')->with('success', 'Category has been successfully added!');
        }
    }

    public function view()
    { 
        $cat_manage_brands = CatManageBrands::all();
        return view('cat-manage-brands', ['cat_manage_brands' => $cat_manage_brands]);
    }

    public function destroy($id)
    {
        CatManageBrands::where('id', $id)->delete();

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
        $cat_manage_brands  = CatManageBrands::where('id', $id)->first();
        return response()->json([
            'status' => true,
            'cat_manage_brands' => $cat_manage_brands
        ]);
    }

    public function update(request $request , $id)
    {
        $cat_manage_brands = CatManageBrands:: where('id', $id)->update([
            'brand_name' => $request->catname,
        
        ]);
        if ($cat_manage_brands) {
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