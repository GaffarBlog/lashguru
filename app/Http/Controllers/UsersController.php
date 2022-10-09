<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //Users controller
    public function index()
    {
        return view('manage-users');
    }

    public function store(request $request)
    {
        // insert query
        $user = new user;
        $user->FirstName = $request['cwfname'];
        $user->LastName = $request['cwlname'];
        $user->DateOfBirth = $request['cwdateofbirth'];
        $user->MailID = $request['cwmailid'];
        $user->username = $request['cwusername'];
        $user->password = $request['cwpassword'];
        $user->save();
        // print_r($request->all());
        return redirect('/manage-users');
    }
    //  After insert query view insert data there
    public function view()
    {
        $user = user::all();
        return view('manage-users', ['user' => $user]);
    }
    //  After insert query view insert data and there is a function for delete
    public function delete($user_id)
    {
        user::where('user_id', $user_id)->delete();
        return redirect('/manage-users');
    }
    //edit data
    public function edit($user_id)
    {
        $user  = User::where('user_id', $user_id)->first();
        return response()->json([
            'status' => true,
            'user' => $user
        ]);
    }

    public function update(request $request , $user_id)
    {
        $user = User:: where('user_id', $user_id)->update([
            'FirstName' => $request->cwfupname,
            'LastName' => $request->cwlupname,
            'DateOfBirth' => $request->cwupdateofbirth,
            'MailID' => $request->cwupmailid,
            'username' => $request->cwupusername,
            'password' => $request->cwuppassword,
        ]);
        if ($user) {
            return response()->json([
                'status' => true,
                'message' => "User updated successfully."
            ]);
        }

        return response()->json([
            'status' => false,
            'message' => "Failed to updated user."
        ]);
    }
}
