<?php

namespace App\Models;

// UNTUK SEMENTARA PENGGUNAAN USE BISA DI HAPUS KARENA TIDAK KONEKSI KE DATABASE 

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// EXTEDNS MODEL TIDAK DIPAKAI DULU 
// Kita hanya pergunakan classnya saja 
class Post
{
    private static $blog_post = [
        [
            "title" => "Artikel Judul Pertama",
            "slug" => "artikel-judul-pertama",
            "author"   => "Sigit Septiadi",
            "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eos natus quae vitae optio similique ab dignissimos illo, ipsam pariatur praesentium porro! Neque numquam sed ad, veniam dolorum necessitatibus quia cum, quis labore quo ratione soluta officia excepturi inventore pariatur velit doloribus exercitationem molestiae modi voluptatum dolores repudiandae? Earum hic amet accusantium, ducimus non eaque quae dolorum asperiores provident saepe a quia ad officiis vel at! Quaerat quisquam facere voluptate repellat corrupti aut blanditiis corporis a suscipit maxime at ipsam cupiditate fugiat quo, doloremque quidem natus iure, officia ut numquam aliquid accusantium! Provident voluptates non dignissimos officia saepe beatae recusandae?"
        ],
        [
            "title" => "Artikel Judul Kedua",
            "slug" => "artikel-judul-kedua",
            "author"   => "Iqlima Nur Izzati",
            "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident eos natus quae vitae optio similique ab dignissimos illo, ipsam pariatur praesentium porro! Neque numquam sed ad, veniam dolorum necessitatibus quia cum, quis labore quo ratione soluta officia excepturi inventore pariatur velit doloribus exercitationem molestiae modi voluptatum dolores repudiandae? Earum hic amet accusantium, ducimus non eaque quae dolorum asperiores provident saepe a quia ad officiis vel at! Quaerat quisquam facere voluptate repellat corrupti aut blanditiis corporis a suscipit maxime at ipsam cupiditate fugiat quo, doloremque quidem natus iure, officia ut numquam aliquid accusantium! Provident voluptates non dignissimos officia saepe beatae recusandae?"
        ],

    ];

    public static function all()
    {
        // return self::$blog_post;
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        //  $posts = self::$blog_post; // DATA DITAMPUNG DULU DENGAN VARIABEL $ BEBAS 
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
