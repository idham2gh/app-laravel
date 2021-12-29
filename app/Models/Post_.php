<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Idham Rahadian",
            "body" => "
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat quidem voluptatum, non vitae commodi quos excepturi tenetur minus ea sit architecto doloribus quaerat hic sequi odio mollitia? Blanditiis iusto delectus fugit ab corrupti modi, eligendi dolores. Sint fuga vel iure iusto sit quae praesentium non eveniet aut, asperiores totam error, neque dolorum dolor culpa! Delectus aliquam sequi necessitatibus voluptatum quidem ab doloribus rem, amet consequuntur vel iusto, vero sint et, numquam voluptatibus laudantium debitis esse blanditiis repellat eligendi? Non, neque.
    "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Riko Ceper",
            "body" => "
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat quidem voluptatum, non vitae commodi quos excepturi tenetur minus ea sit architecto doloribus quaerat hic sequi odio mollitia? Blanditiis iusto delectus fugit ab corrupti modi, eligendi dolores. Sint fuga vel iure iusto sit quae praesentium non eveniet aut, asperiores totam error, neque dolorum dolor culpa! Delectus aliquam sequi necessitatibus voluptatum quidem ab doloribus rem, amet consequuntur vel iusto, vero sint et, numquam voluptatibus laudantium debitis esse blanditiis repellat eligendi? Non, neque.
    "
        ]
    ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}
