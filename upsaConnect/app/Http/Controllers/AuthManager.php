<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthManager extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('feed'));
        }

        session()->flash('error', 'Login details are not valid');

        return redirect(route('login'));
    }


    public function registerPost(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'index_number' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['index_number'] = $request->index_number;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            session()->flash('error', 'Registration failed');
            return redirect(route('register'));


        }
        Auth::login($user);
        session()->flash('success', 'Registration successful');
        return redirect(route('feed'));

    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route("login"))->with("success","logged out");
    }
}


