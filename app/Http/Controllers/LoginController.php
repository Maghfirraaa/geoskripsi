<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function postLogin(Request $request){
        
        $request->validate(([
            'email'=>'required',
            'password'=>'required',
        ]));
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            // Autentikasi berhasil
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

       return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);

    }

    public function Logout(Request $request){
        // dd($request->all());
        Auth::logout();
        return redirect('/');

    }
}
