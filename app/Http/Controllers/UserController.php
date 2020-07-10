<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function register() {
        return view('auths.register');
    }
    // --------------------- [ User login ] ---------------------
    public function userLogin(Request $request)
    {
        $request->session()->put('data',$request->input());
        if(Auth::attempt($request->session()->get('data'))) {
            return redirect('mainView');   
        }
        return back()->with('error', 'Whoops! invalid username or password.');
    }
    // --------------------- [ Register user ] ----------------------
    public function userPostRegistration(Request $request)
    {
        $user = new User();
        $user->firstname = $request->fname;
        $user->lastname = $request->lname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/');     
    }
    // ------------------- [ User logout function ] ----------------------
    public function logout(Request $request)
    {
        $request->session()->forget('data');
        return redirect('/');
    }
}
