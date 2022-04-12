<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerForm()
    {
        return view('Auth.register');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
        ]);
        $user = new User();
        $user->username = $request->get('name');
        $user->email = $request->get('email');
        $user->password= $request->get('password');
        // $user->save();
        // return redirect()->route('register');
        // dd($user->all());
        

        if($user->save()){
            return redirect()->route('register')->with(['msg'=>'register is successful']);
            return redirect()->route('register')->withErrors(['msg'=>'User cannot register at this moment']);
        }

    }

    public function loginForm()
    {
        return view('Auth.login');
    }
}
