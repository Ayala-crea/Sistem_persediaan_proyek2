<?php

namespace App\Http\Controllers;

use App\Models\ModelDataStaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthLogin extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard'); // Replace with your intended route
        } else {
            return redirect()->route('barang')->withErrors('Invalid credentials');
        }
    }

    public function register(){
        return view('login.register');
    }
}
