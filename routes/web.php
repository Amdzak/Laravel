<?php

use App\Models\Posts;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    /*  penambahan parameter pada retunr view dapat di lakukan dengan tujuan untuk menampilkan data yang di inginkan
        hanya dengan menambahkan array assosiatif */ 
    return view('about',[
        "title" => "About",
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
        "categories" => Category::all(),
    ]);    
});

Route::get("/categories/{category:slug}",function(Category $category){
    return view("category",[
        "title" => $category->name,
        "post" => $category->content,
        "name" => $category->name,
    ]);
});

Route::get("/authors/{author:username}",function(User $author){
    return view("post",[
        "title" => "Author Post",
        "posts" => $author->post,
    ]);
});