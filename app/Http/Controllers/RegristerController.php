<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegristerController extends Controller
{
    public function index(){
        return view("regrister.index",[
            "title" => "Regrister User",
            "active" => "regrister"
        ]);
    }
}
