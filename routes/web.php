<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Models\Posts;

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

Route::get('about', function () {
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
Route::get('blog',[PostsController::class,'index']);
// hal post
Route::get('posts/{slug}',[PostsController::class,"show"]);