<?php

namespace App\Models;

// jika ingin ter integrasi dengan database bisa di nyalakan
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Posts extends Model
// {
//     use HasFactory;
// }

class Posts{
    static $berita = [
        [
            "judul" => "Berita 01",
            "author" => "Azk",
            "slug" => "berita-01",
            "content" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda tempore ipsa itaque molestias enim praesentium distinctio quam natus at inventore magnam nobis animi pariatur incidunt veritatis aspernatur commodi, nesciunt hic, consequatur necessitatibus porro doloremque. Ipsam velit inventore optio delectus praesentium quis alias magni in vel mollitia, dolorem, dolore ratione impedit quibusdam non sit quas doloremque. Aliquam ipsum nisi, iusto doloribus voluptates excepturi asperiores ad iure et enim! Doloribus, facere provident!"
        ],
        [
            "judul" => "Berita 04",
            "author" => "admin",
            "slug" => "berita-02",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae rem atque voluptate eum, omnis dolore amet libero quia. Doloribus quo neque, dolorum qui sunt sint ut dolore harum impedit mollitia repellendus, inventore vitae vel optio minus pariatur adipisci excepturi, facilis atque nesciunt id distinctio ratione? Iusto ipsum dignissimos asperiores dolorum. Sint tempora, commodi velit nam laborum quas at tempore dolorem distinctio iusto ratione voluptatibus delectus maxime natus ea! Placeat officia eveniet alias et doloribus magnam pariatur dolores ipsum, soluta maiores temporibus. Pariatur sunt optio, dolores sint maiores voluptate doloribus vero? Maiores illo nobis sed. Soluta recusandae sapiente eius nulla molestias?"
        ],
    ];

    public static function all(){
        // karena static maka menggunakan keyword self collect merupakan array collection yang membuat kita bisa menggunakan function di dalamnya
        return collect(self::$berita);
    }

    public static function find($slug){
        // static::all untuk mengambil function static yang ada
        $postingan = static::all();

        // $post = [];
        
        // foreach ($postingan as $p) {
        //     if ($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $postingan->firstWhere("slug",$slug);
    }
}