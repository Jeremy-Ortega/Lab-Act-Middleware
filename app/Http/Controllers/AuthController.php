<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }

    public function logout(Request $request){
        // Session::flush();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register(){
        return view('auth.register');
    }

    public function dashboard(){
        return view('dashboard');
    }

    //=====

    public function loginPost(request $request){
        
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if(auth::attempt($credentials)){
            $request -> session()->regenerate();
            return redirect() ->intended('/dashboard');
        }

        // throw ValidationException::withMessages(['credentials' => 'Invalid Credentials']);
        // return back()->withErrors(['email'=>'Invalid Credentials']);
    }

    public function registerPost(request $request){
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:7|confirmed'
        ]);

        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        // $user = User::create($request);

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
