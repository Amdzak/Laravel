<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("login.index",[
            "title" => "Login Users",
            "active" => "login",
        ]);
    }

    public function login(Request $request){
        $valid = $request->validate([
            "email" => "required|email:dns",
            "password" => "required",
        ]);

        if(Auth::attempt($valid)){
            $request->session()->regenerate();

            return redirect()->intended("/dashboard");
        }

        return back()->with("gagal", "Login Gagal");

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }
}
