<?php

use App\Models\Posts;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegristerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// MENGGUNAKAN CLOSURE
Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    /*  penambahan parameter pada retunr view dapat di lakukan dengan tujuan untuk menampilkan data yang di inginkan
        hanya dengan menambahkan array assosiatif */
    return view('about',[
        "title" => "About",
        "active" => "about",
        "nama" => "Peach",
        "email" => "peach@mail.com",
        "addr" => "indonesia",
        "gbr" => "peach.png"
    ]);
});


// MENGGUNAKAN CONTROLLER
Route::get('/blog',[PostsController::class,'index']);

// hal post yang di query adlah slugnya karena ada simbol :
Route::get('/posts/{post:slug}',[PostsController::class,"show"]);

Route::get("/categories",function(){
    return view("categories",[
        "title" => "Post Kategori",
        "active" => "category",
        "categories" => Category::all(),
    ]);
});

Route::get("/login",[LoginController::class,"index"]);
Route::get("/regristasi",[RegristerController::class,"index"]);

// TIDAK TERPAKAI

/* Route::get("/categories/{category:slug}",function(Category $category){
    return view("post",[
        "title" => "Post By Category : $category->name",
        "active" => "category",
        "posts" => $category->content->load("author","category"),
    ]);
});

Route::get("/authors/{author:username}",function(User $author){
    return view("post",[
        "title" => "Post by Author: $author->name ",
        // untuk menghindari n +1 problem jika menggunakan teknik route model binding
        // hanya dengan menambahkan load() saja
        "posts" => $author->post->load("category","author"),
    ]);
});
 */
