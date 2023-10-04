<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('blog', function () {
    return view('post');
});

Route::get('about', function () {
    /*  penambahan parameter pada retunr view dapat di lakukan dengan tujuan untuk menampilkan data yang di inginkan
        hanya dengan menambahkan array assosiatif */ 
    return view('about',[
        "nama" => "Amdzak",
        "email" => "awdjsa@mail.co",
        "addr" => "indonesia",
        "gbr" => "hehe.jpg"
    ]);
});
