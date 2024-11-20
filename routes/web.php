<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
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
            "id" => 2,
            "slug" => "judul-post-2",
            'title' => 'judul post 2',
            'author' => 'randomname2',
            'body' => 'Mnima minus harum doloremque est beatae suscipit odit perferendis ab doloribus quae
            accusamus corporis porro? Molestiae earum reprehenderit eligendi rerum excepturi necessitatibus error, ea
            hic cumque debitis, voluptatem eos culpa rem, assumenda minima? Reprehenderit consequuntur'
        ],

    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            "slug" => "judul-post-1",
            'title' => 'judul post 1',
            'author' => 'randomname',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit a alias laborum, ex
        amet, recusandae eius
        cupiditate praesentium, minima minus harum doloremque est beatae suscipit odit perferendis ab doloribus quae
        accusamus corporis porro? Molestiae earum reprehenderit eligendi rerum excepturi necessitatibus error, ea
        hic cumque debitis, voluptatem eos culpa rem, assumenda minima? Reprehenderit consequuntur'
        ],
        [
            "id" => 2,
            "slug" => "judul-post-2",
            'title' => 'judul post 2',
            'author' => 'randomname2',
            'body' => 'Mnima minus harum doloremque est beatae suscipit odit perferendis ab doloribus quae
        accusamus corporis porro? Molestiae earum reprehenderit eligendi rerum excepturi necessitatibus error, ea
        hic cumque debitis, voluptatem eos culpa rem, assumenda minima? Reprehenderit consequuntur'
        ],

    ];


    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'single post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'babi']);
});
