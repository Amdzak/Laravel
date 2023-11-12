<?php


namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        // melakukan pengecekan  pencarian jika ada search yang di kirimkan akan masuk kedalam model Posts.php

        $judul = '';
        if (request("categories")) {
            $kategori = Category::firstWhere("slug",request("categories"));
            $judul = " in " . $kategori->name;
        }

        if (request("authors")){
            $author = User::firstWhere("username",request("authors"));
            $judul = " By ". $author->name;
        }

        return view('post',[
            "title" => "All Post" . $judul,
            "active" => "blog",
            // "posts" => Posts::all()
            // unutk menghindari n+1 problems yang mana memanggil banyak query tetapi yang di buthkan cuma 3 biji
            // biasanya terjadi saat penggunaan looping EAGER LOADING
            "posts" => Posts::latest()->Filter(request(["search","categories","authors"]))->paginate(7)->withQueryString(), /* Filter() terdapat pada model Posts ynag berfungsi untuk melihat apakah ada pencarian atau tidak */
        ]);
    }

    // menggunakan route model bindings tetapi di bagian routenya harus sama dalam penulisan varialbelnya
    public function show(Posts $post){
        return view('posts',[
            "active" => "blog",
            "title" => "Single post",
            "berita" => $post,
        ]);
    }
}
