<?php

namespace App\Models;


class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Gagas Prakoso",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo quasi architecto delectus adipisci velit aliquam a sit
             asperiores iusto ut repudiandae incidunt dicta excepturi officiis id repellendus laboriosam quod modi quaerat doloremque,
              est saepe autem? Enim voluptatibus a architecto. Quod excepturi animi voluptatibus libero asperiores sequi voluptate eius placeat perferendis."

        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Gagas Prakoso",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo quasi architecto delectus adipisci velit aliquam a sit
             asperiores iusto ut repudiandae incidunt dicta excepturi officiis id repellendus laboriosam quod modi quaerat doloremque,
              est saepe autem? Enim voluptatibus a architecto. Quod excepturi animi voluptatibus libero asperiores sequi voluptate eius placeat perferendis."

        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}