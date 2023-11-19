<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Posts extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    protected $with = ["author","category"];

    public function scopeFilter($query, array $filter){

        // if(isset($filter["search"]) ? $filter["search"] : false){
        //     return $query->where("judul", "like" , "%".$filter["search"]."%")
        //                  ->orWhere("content", "like" , "%".$filter["search"]."%");
        // }

        /*  menggunakan function when() yang memungkinkan kita meringkas penulisan,
            jika ada kondisi true di awal maka akan menjalankan fungsi callback yang sudah di buat
        */

        /*  menggunakan null coalising jika perintah awal true maka pilih true jika salah maka pilih false
         */
        $query->when($filter["search"] ?? false, function($query,$search){
            return $query->where("judul", "like" , "%".$search."%")
                         ->orWhere("content", "like" , "%".$search."%");
        });

        // Categories
        $query->when($filter["categories"] ?? false, function($query,$category){
            // relasi anter table category
            return $query->whereHas("category", function($query) use($category){
                $query->where("slug",$category);
            });
        });

        // Authors
        // $query->when($filter["authors"] ?? false, function($query,$author){
        //     // relasi anter table User(author)
        //     return $query->whereHas("author", function($query) use($author){
        //         $query->where("username",$author);
        //     });
        // });

        //Arrow versi function
        $query->when($filter["authors"] ?? false, fn($query,$author) =>
            $query->whereHas("author", fn($query) =>
                $query->where("username",$author)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class,"user_id");
    }

    public function getRouteKeyName(): string{
        return 'slug';
    }
}

/* cara di bawah merupakan cara pengisian database dengan lebih mudah via tinker
    tetapi dengan syarat harus di isi dengan fillabe
    kalau mau melakukan update menggunakan Posts::find(idKe)->update(["yang lama" => "yang baru"])

Post::create([
   "key" => "nilai",
   "key" => "nilai2",
])

*/


/*
Posts::create([
    "judul" => "Berita 03",
    "author" => "admin",
    "slug" => "berita-03",
    "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam labore recusandae a dolore minus nemo hic exercitationem dolorem.",
    "content" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam labore recusandae a dolore minus nemo hic vero doloremque? Incidunt rem et, eum ab mollitia itaque quis, eos voluptatum dignissimos reiciendis exercitationem dolorem esse cumque corrupti atque quod ipsa numquam adipisci.</p><p> In odit quae, labore eveniet inventore obcaecati molestias? Temporibus possimus esse rem distinctio eos! Iure dolores nihil sit eveniet voluptates corrupti! Sunt sit alias inventore autem. </p><p>Alias totam saepe reiciendis iusto minus inventore reprehenderit accusamus rerum dolorem, qui quia quos id voluptatibus animi veniam sint dolorum ullam laborum nisi est sapiente perferendis incidunt minima! Debitis culpa sequi, aperiam minima harum natus! Doloribus, architecto. Deleniti debitis obcaecati voluptatibus error. Doloremque perferendis ipsum dolore alias nesciunt deleniti, beatae atque ex incidunt culpa!</p>",
]);
*/
