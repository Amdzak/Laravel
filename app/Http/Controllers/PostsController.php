<?php


namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('post',[
            "title" => "Blog",
            "posts" => Posts::all()
        ]);
    }

    public function show($slug){
        return view('posts',[
            "title" => "Single post",
            "berita" => Posts::find($slug)
        ]);
    }
}
