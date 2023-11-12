<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegristerController extends Controller
{
    public function index(){
        return view("regrister.index",[
            "title" => "Regrister User",
            "active" => "regrister"
        ]);
    }

    public function store(Request $request){
        $validate = $request->validate([
            "email" => "required|unique:users|email:dns",
            "username" => "required|min:5|unique:users",
            "name" => "required|max:255",
            "password" => "required|min:5",
        ]);

        User::create($validate);

        // cara lama jika ingin membawa hasil di session
        // $request->session()->flash("success","Regristasion Success");

        return redirect("/login")->with("success","Regristasion Success. Please Login");
    }
}
