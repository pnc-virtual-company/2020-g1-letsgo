<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    
    public function updateUser($id,Request $request)
    { 
        $request->validate([ 
            'confirm_password' => ['same:new_password'],
        ]);
        $user = User::find($id);
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        return back();
    }


     //change photo of users
     public function addoreditprofile(){
        $auth = Auth::user();
        $imageName = time().'.'.request()->picture->getClientOriginalExtension();
        request()->picture->move(public_path('/images/'), $imageName);

        $auth ->profile = $imageName;

        $auth ->save();
        return back();
    }

// function to delete profile user.
public function delete(){
    $auth = Auth::user();
    if(Auth::user()->profile != 'user.png'){
    $imageName = time().'.'.request()->picture = 'user.png';
    $auth -> profile = $imageName;
    $auth -> save();
    return back();
    }
}

}
