<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (){
        return view('auth.login');
    }
    public function authenticate (Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email|string|exists:users',
            'password' => 'required|string'
        ]);
        if(Auth::attempt($validatedData)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->withErrors([
                'ids' => 'identifiants invalides'
            ]);
        }
    }
}
