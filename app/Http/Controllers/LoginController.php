<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class LoginController extends Controller
{
    public function login()
    {
        if(auth()->user()){
            return redirect()->route('/');
        }
        return view('login-register.login');
    }

    public function loginPost(Request $request)
    {
        
    }

    public function register()
    {
        return view('login-register.register');
    }

    public function registerPost(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        return redirect()->route('/');
    }
}
