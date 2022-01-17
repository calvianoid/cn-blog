<?php

namespace App\Models;

use Faker\Provider\Lorem;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Calviano Nathanael",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, sunt sapiente quos in asperiores quia repellat mollitia quae cum, libero temporibus pariatur. Aut totam debitis obcaecati excepturi dolore nemo ipsum, delectus deserunt dignissimos architecto odit fugit enim hic quidem. Laudantium amet cum, praesentium laborum maiores molestias sapiente officia sed nesciunt veniam deleniti impedit error. Aliquid, ab. Veritatis ipsam minima totam, repudiandae sed doloremque vero numquam odio nisi adipisci nemo est beatae ad consectetur voluptatum cum neque nam dolore aut quibusdam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nathan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptatibus nihil id dolorum amet debitis deserunt placeat, est officiis porro perferendis sunt maiores, voluptatum repellat laudantium molestiae. At incidunt rem voluptatem beatae neque cupiditate vel porro esse saepe, pariatur voluptates necessitatibus quia doloribus odio ducimus fuga facere modi accusamus maxime rerum? Dignissimos molestiae deleniti harum alias debitis sequi id ad! Tempora consequuntur a molestiae aspernatur assumenda dolorem animi quibusdam doloribus rem recusandae modi quos est deserunt, repudiandae quisquam inventore quidem repellendus odit beatae. Saepe explicabo corporis obcaecati sint debitis quia, quos temporibus laborum adipisci culpa! Placeat excepturi natus unde soluta?"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
