<?php


namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('post',[
            "title" => "Blog",
            // "posts" => Posts::all()
            "posts" => Posts::latest()->get()
        ]);
    }

    // menggunakan route model bindings tetapi di bagian routenya harus sama dalam penulisan varialbelnya
    public function show(Posts $post){
        return view('posts',[
            "title" => "Single post",
            "berita" => $post,
        ]);
    }
}
