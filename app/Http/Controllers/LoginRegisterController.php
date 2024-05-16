<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    public function login()
    {
        return view('fontend.login');
    }

    public function register()
    {
        return view('fontend.register');
    }

    public function processRegister(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login')->with('message', 'User Created Successfully');
    }

    public function processLogin(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if(Auth::user()->role == 'admin') {
                return redirect('/admin')->with('message', 'User Login Successfully');
            }
            else
            {
                return redirect('/')->with('message', 'User Login Successfully');
            }
        }
        else {
            return redirect('/login')->with('message', 'Invalid Credentials');
        }
    }


    public function logout()
    {
        Auth::logout();
        return Redirect('login');
    }
}
