<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\CatManageUserRoles;

class CatManageUserRolesController extends Controller
{

    public function index()
    {
        return view('cat-manage-user-roles');
    }

    public function store(request $request)
    {
        $cat_manage_user_roles = Str::of($request->cwaddbc)->explode(',');
        if($cat_manage_user_roles) {
            foreach ($cat_manage_user_roles as $cat_manage_user_roles) {
                CatManageUserRoles::create([
                    'user_role' => $cat_manage_user_roles,
                ]);
            }
            return redirect('cat-manage-user-roles')->with('success', 'Category has been successfully added!');
        }
    }

    public function view()
    { 
        $cat_manage_user_roles = CatManageUserRoles::all();
        return view('cat-manage-user-roles', ['cat_manage_user_roles' => $cat_manage_user_roles]);
    }

    public function destroy($id)
    {
        CatManageUserRoles::where('id', $id)->delete();

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
        $cat_manage_user_roles  = CatManageUserRoles::where('id', $id)->first();
        return response()->json([
            'status' => true,
            'cat_manage_user_roles' => $cat_manage_user_roles
        ]);
    }

    public function update(request $request , $id)
    {
        $cat_manage_user_roles = CatManageUserRoles:: where('id', $id)->update([
            'user_role' => $request->catname,
        
        ]);
        if ($cat_manage_user_roles) {
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