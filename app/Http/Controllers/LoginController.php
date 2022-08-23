<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->rules = [
            'username' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/',
            'password' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/'
        ];
    }

    public function halamanLogin()
    {
        return view('login.login');
    }


    public function postLogin(Request $request)
    {
        // return $request;
        // dd($request);

        $messages = [
            'username.required' => 'Username is required!',
            'password.required' => 'Password is required!'
        ];

        $validatedData = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ], $messages);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }


        return back()->with('loginError', 'Login failed');
    }


    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        return redirect('adminLogin');
    }
}
