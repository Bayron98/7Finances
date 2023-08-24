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
        $messages = [
            'email.required' => 'Le champ de l\'adresse email est requis',
            'email.email' => 'L\'adresse email sélectionnée n\'est pas valide',
            'email.exists' => 'L\'adresse email n\'existe pas',
            'password.required' => 'Le champ du mot de passe est requis',
        ];

        $validatedData = $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ], $messages);
        if(Auth::attempt($validatedData)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->withErrors([
                'password' => 'mot de passe incorrecte'
            ])->withInput(['email'=>$request->email]);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
