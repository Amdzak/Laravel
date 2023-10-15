<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Posts;
use \App\Models\User;
use \App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // seeding secara manual yaitu tinggal tulisakan seperti apa yang kita lakukna di dalam tinker
        // User::create([
        //     "name" => "Amdzak",
        //     "email" => "Amdzak@mai.com",
        //     "password" => bcrypt(12345),
        // ]);

        // User::create([
        //     "name" => "admin",
        //     "email" => "admin@mai.com",
        //     "password" => bcrypt(12345),
        // ]);

        User::factory(3)->create();

        Category::create([
            "name" => "Pemrograman",
            "slug" => "pemrograman",
        ]);

        Category::create([
            "name" => "Web Desain",
            "slug" => "web-desain",
        ]);

        Posts::factory(20)->create();

        // Posts::create([
        //     "user_id" => 1,
        //     "category_id" => 1,
        //     "judul" => "Cara Coding",
        //     "slug" => "cara-coding",
        //     "content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero nobis eum praesentium repudiandae quasi quo, rem cumque dignissimos neque, illum eveniet autem blanditiis nisi dolore eaque minus sed possimus accusantium ex a quis optio natus. Aperiam, officia minima. Illum labore rerum quos explicabo ex dicta assumenda in provident, libero veniam. Voluptates soluta, voluptate consequatur expedita excepturi ipsum laborum. Minus assumenda voluptatibus laborum, earum beatae ipsum. Labore dolorum maxime dolorem a quisquam dolor autem, delectus vero ex, ipsam eaque ratione hic voluptas. In vel fuga dolorem quis expedita esse porro nobis distinctio est molestias. Debitis praesentium perferendis aperiam, in omnis minima!",
        //     "excerpt" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero nobis eum praesentium repudiandae quasi quo, rem cumque dignissimos neque, illum eveniet autem blanditiis nisi dolore eaque minus sed possimus"
        // ]);

        // Posts::create([
        //     "user_id" => 2,
        //     "category_id" => 2,
        //     "judul" => "Cara Desain",
        //     "slug" => "cara-desain",
        //     "content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero nobis eum praesentium repudiandae quasi quo, rem cumque dignissimos neque, illum eveniet autem blanditiis nisi dolore eaque minus sed possimus accusantium ex a quis optio natus. Aperiam, officia minima. Illum labore rerum quos explicabo ex dicta assumenda in provident, libero veniam. Voluptates soluta, voluptate consequatur expedita excepturi ipsum laborum. Minus assumenda voluptatibus laborum, earum beatae ipsum. Labore dolorum maxime dolorem a quisquam dolor autem, delectus vero ex, ipsam eaque ratione hic voluptas. In vel fuga dolorem quis expedita esse porro nobis distinctio est molestias. Debitis praesentium perferendis aperiam, in omnis minima!",
        //     "excerpt" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero nobis eum praesentium repudiandae quasi quo, rem cumque dignissimos neque, illum eveniet autem blanditiis nisi dolore eaque minus sed possimus"
        // ]);

        // Posts::create([
        //     "user_id" => 1,
        //     "category_id" => 1,
        //     "judul" => "Cara Makan",
        //     "slug" => "cara-makan",
        //     "content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero nobis eum praesentium repudiandae quasi quo, rem cumque dignissimos neque, illum eveniet autem blanditiis nisi dolore eaque minus sed possimus accusantium ex a quis optio natus. Aperiam, officia minima. Illum labore rerum quos explicabo ex dicta assumenda in provident, libero veniam. Voluptates soluta, voluptate consequatur expedita excepturi ipsum laborum. Minus assumenda voluptatibus laborum, earum beatae ipsum. Labore dolorum maxime dolorem a quisquam dolor autem, delectus vero ex, ipsam eaque ratione hic voluptas. In vel fuga dolorem quis expedita esse porro nobis distinctio est molestias. Debitis praesentium perferendis aperiam, in omnis minima!",
        //     "excerpt" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero nobis eum praesentium repudiandae quasi quo, rem cumque dignissimos neque, illum eveniet autem blanditiis nisi dolore eaque minus sed possimus"
        // ]);

        // Posts::create([
        //     "user_id" => 1,
        //     "category_id" => 1,
        //     "judul" => "Cara Minum",
        //     "slug" => "cara-minum",
        //     "content" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero nobis eum praesentium repudiandae quasi quo, rem cumque dignissimos neque, illum eveniet autem blanditiis nisi dolore eaque minus sed possimus accusantium ex a quis optio natus. Aperiam, officia minima. Illum labore rerum quos explicabo ex dicta assumenda in provident, libero veniam. Voluptates soluta, voluptate consequatur expedita excepturi ipsum laborum. Minus assumenda voluptatibus laborum, earum beatae ipsum. Labore dolorum maxime dolorem a quisquam dolor autem, delectus vero ex, ipsam eaque ratione hic voluptas. In vel fuga dolorem quis expedita esse porro nobis distinctio est molestias. Debitis praesentium perferendis aperiam, in omnis minima!",
        //     "excerpt" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero nobis eum praesentium repudiandae quasi quo, rem cumque dignissimos neque, illum eveniet autem blanditiis nisi dolore eaque minus sed possimus"
        // ]);
    }
}
