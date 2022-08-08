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
            'email' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/',
            'password' => 'required|regex:/(^[A-Za-z0-9 ]+$)+/'
        ];
    }

    public function halamanLogin()
    {
        return view('login.login');
    }


    // public function postLogin(Request $request)
    // {
    //     // return $request;
    //     // dd($request);

    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('/dashboard');
    //     }

    //     return redirect()->intended('/dashboard');

    // $validator = Validator::make($request->all(), $this->rules);
    // if ($validator->fails()) {
    //     return back()->with('message', 'Silahkan Login Kembali');
    // } else {
    //     $email = $request->email;
    //     $password = $request->password_pengguna;

    //     $cek = DB::table('users')->where('username', $email)->where('password', $password)->first();
    //     // dd($cek);
    //     if ($cek == TRUE) {
    //         $request->session()->put("id", $cek->id_pengguna);
    //         $request->session()->put("username", $cek->nama_pengguna);

    //         return redirect()->route('dashboard')->with('message', 'Selamat Datang');
    //     } else {
    //         return back()->with('message', 'Silahkan Login Kembali');
    //     }
    // }
    // }
    public function postLogin(Request $request)
    {
        // $validator = Validator::make($request->all(), $this->rules);
        // if ($validator->fails()) {
        //     return back()->with('message', 'Silahkan Login Kembali');
        // } else {
        //     $email = $request->email;
        //     $password = $request->password;

        //     $cek = DB::table('users')->where('email', $email)->where('password', $password)->first();
        //     // dd($cek);
        //     if ($cek == TRUE) {
        //         $request->session()->put("id", $cek->id);
        //         $request->session()->put("nama", $cek->nama);
        //         $request->session()->put("username", $cek->username);

        //         return redirect()->route('dashboard')->with('message', 'Selamat Datang');
        //     } else {
        //         return back()->with('message', 'Silahkan Login Kembali');
        //     }
        // }
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        return redirect('adminLogin');
    }
}
