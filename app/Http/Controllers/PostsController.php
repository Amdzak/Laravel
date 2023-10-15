<?php


namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('post',[
            "title" => "All Post",
            // "posts" => Posts::all()
            // unutk menghindari n+1 problems yang mana memanggil banyak query tetapi yang di buthkan cuma 3 biji
            // biasanya terjadi saat penggunaan looping EAGER LOADING
            "posts" => Posts::with(["author","category"])->latest()->get()
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
