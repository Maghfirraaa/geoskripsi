<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index(){
        $data['title']='Register';
        return view('auth.register',$data);
    }

    public function create(Request $request){
        // Session::flash('name',$request->name);
        // Session::flash('email',$request->email);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|required|min:6',
            'password_confirmation'=>'required|same:password'
        ]
        ,[
          'name.required' => 'Username wajib diisi',
          'email.required' => 'Email wajib diisi',
          'email.email' => 'Silahkan masukkan email yang valid',
          'email.unique' => 'Email sudah pernah digunakan, pilih email yang lain',
          'password.required' => 'Password wajib diisi',
          'password.min' => 'Minimal password 6 karakter',
          'password_confirmation.required' => 'Password tidak sama'
        ]
    );

        $user= new User([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        // User::create($data);
        $user->save();
        return redirect()->route('login')->with('succes','Registration Succes');
        
    }
}
