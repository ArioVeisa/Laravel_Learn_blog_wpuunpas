<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-post-1',
                'title' => 'judul post 1',
                'author' => 'randomname',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit a alias laborum, ex
amet, recusandae eius
cupiditate praesentium, minima minus harum doloremque est beatae suscipit odit perferendis ab doloribus quae
accusamus corporis porro? Molestiae earum reprehenderit eligendi rerum excepturi necessitatibus error, ea
hic cumque debitis, voluptatem eos culpa rem, assumenda minima? Reprehenderit consequuntur'
            ],
            [
                'id' => 2,
                'slug' => 'judul-post-2',
                'title' => 'judul post 2',
                'author' => 'randomname2',
                'body' => 'Mnima minus harum doloremque est beatae suscipit odit perferendis ab doloribus quae
accusamus corporis porro? Molestiae earum reprehenderit eligendi rerum excepturi necessitatibus error, ea
hic cumque debitis, voluptatem eos culp
a rem, assumenda minima? Reprehenderit consequuntur'
            ],
        ];
    }

    public static function find($slug): array
    {
        // $posts = static::all();
        // return  Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
