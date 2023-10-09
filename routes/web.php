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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('about', function () {
    /*  penambahan parameter pada retunr view dapat di lakukan dengan tujuan untuk menampilkan data yang di inginkan
        hanya dengan menambahkan array assosiatif */ 
    return view('about',[
        "title" => "About",
        "nama" => "Amdzak",
        "email" => "awdjsa@mail.co",
        "addr" => "indonesia",
        "gbr" => "hehe.jpg"
    ]);
});

Route::get('blog', function () {
    $berita = [
        [
            "judul" => "Berita 01",
            "author" => "Azk",
            "slug" => "berita-01",
            "content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda tempore ipsa itaque molestias enim praesentium distinctio quam natus at inventore magnam nobis animi pariatur incidunt veritatis aspernatur commodi, nesciunt hic, consequatur necessitatibus porro doloremque. Ipsam velit inventore optio delectus praesentium quis alias magni in vel mollitia, dolorem, dolore ratione impedit quibusdam non sit quas doloremque. Aliquam ipsum nisi, iusto doloribus voluptates excepturi asperiores ad iure et enim! Doloribus, facere provident!"
        ],
        [
            "judul" => "Berita 02",
            "author" => "admin",
            "slug" => "berita-02",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae rem atque voluptate eum, omnis dolore amet libero quia. Doloribus quo neque, dolorum qui sunt sint ut dolore harum impedit mollitia repellendus, inventore vitae vel optio minus pariatur adipisci excepturi, facilis atque nesciunt id distinctio ratione? Iusto ipsum dignissimos asperiores dolorum. Sint tempora, commodi velit nam laborum quas at tempore dolorem distinctio iusto ratione voluptatibus delectus maxime natus ea! Placeat officia eveniet alias et doloribus magnam pariatur dolores ipsum, soluta maiores temporibus. Pariatur sunt optio, dolores sint maiores voluptate doloribus vero? Maiores illo nobis sed. Soluta recusandae sapiente eius nulla molestias?"
        ],
    ];
    return view('post',[
        "title" => "Blog",
        "posts" => $berita
    ]);
});

// hal post

Route::get('posts/{slug}',function($slug){
    $berita = [
        [
            "judul" => "Berita 01",
            "author" => "Azk",
            "slug" => "berita-01",
            "content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda tempore ipsa itaque molestias enim praesentium distinctio quam natus at inventore magnam nobis animi pariatur incidunt veritatis aspernatur commodi, nesciunt hic, consequatur necessitatibus porro doloremque. Ipsam velit inventore optio delectus praesentium quis alias magni in vel mollitia, dolorem, dolore ratione impedit quibusdam non sit quas doloremque. Aliquam ipsum nisi, iusto doloribus voluptates excepturi asperiores ad iure et enim! Doloribus, facere provident!"
        ],
        [
            "judul" => "Berita 02",
            "author" => "admin",
            "slug" => "berita-02",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae rem atque voluptate eum, omnis dolore amet libero quia. Doloribus quo neque, dolorum qui sunt sint ut dolore harum impedit mollitia repellendus, inventore vitae vel optio minus pariatur adipisci excepturi, facilis atque nesciunt id distinctio ratione? Iusto ipsum dignissimos asperiores dolorum. Sint tempora, commodi velit nam laborum quas at tempore dolorem distinctio iusto ratione voluptatibus delectus maxime natus ea! Placeat officia eveniet alias et doloribus magnam pariatur dolores ipsum, soluta maiores temporibus. Pariatur sunt optio, dolores sint maiores voluptate doloribus vero? Maiores illo nobis sed. Soluta recusandae sapiente eius nulla molestias?"
        ],
    ];

    $new_post = [];
    foreach ($berita as $post) {
        if ($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('posts',[
        "title" => "Single post",
        "berita" => $new_post
    ]);
});