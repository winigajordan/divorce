<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.secu');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return back()
            ->with('success', 'Utilisateur créee avec succès.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('produit.index')
            ->with('success', 'Utilisateur connecté.');
        }
 
        return back()->withErrors([
            'error' => 'Mot de passe ou email incorrect.',
        ])->onlyInput('email');
    }


    public function logout(Request $request)
    {
        Auth::logout();
            $request->session()->invalidate();
    
        $request->session()->regenerateToken();
        return redirect()->route('auth.index')
            ->with('success', 'Utilisateur déconnecté.');
    }
}
