<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhamad F",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem impedit, consequatur possimus repudiandae nostrum excepturi hic beatae. Aut dicta earum inventore accusamus alias. Nemo, harum aperiam in aliquam aspernatur nihil recusandae amet reiciendis, temporibus accusamus pariatur. Praesentium eum, numquam optio ad quia incidunt natus id temporibus! Ducimus laborum sapiente, mollitia, deserunt inventore dignissimos magnam error 
                        cupiditate voluptatibus soluta, necessitatibus numquam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhamad F",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos corrupti, ducimus maxime molestiae iure vero voluptatibus reiciendis libero accusantium facere."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
