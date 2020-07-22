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
            $user = User::find($id);
            $user->firstname = $request->get('firstname');
            $user->lastname = $request->get('lastname');
            $user->email = $request->get('email');
            $user->password = bcrypt($request->get('new_password'));
            if ($request->hasfile('profile')){
                $file = $request->file('profile');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). ".".$extension;
                $file->move('images/', $filename);
                $user->profile = $filename;
            }
            $user->save();
            return redirect()->back();

            
    }
    // function to get all city from json file
    public function city(){
        $jsonString = file_get_contents('https://raw.githubusercontent.com/russ666/all-countries-and-cities-json/6ee538beca8914133259b401ba47a550313e8984/countries.json');
        $datas = json_decode($jsonString, true);
        // dd($datas);
        return view('auth.register',compact('datas'));
    }
    // function to delete profile user.
    public function delete(){
        $auth = Auth::user();
        $imageName = time().'.'.request()->picture = 'user.png';
        $auth -> profile = $imageName;
        $auth -> save();
        return back();
    }

}
