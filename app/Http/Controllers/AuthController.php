<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.auth');
        
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request -> session()->regenerate();
            return redirect('success.index');
            
            
        }

        // L'authentification a échoué, retourner l'utilisateur vers la page de connexion avec un message d'erreur
        return back()->withErrors([
            'email' => 'Les identifiants fournis ne correspondent pas à nos enregistrements.',
        ]);
    }


    


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    
 }
