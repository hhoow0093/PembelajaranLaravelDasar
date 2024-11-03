<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home page"]);
});

Route::get('/about', function () {
    return view('about', ["nama" => "Howard", "title" => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ["title" => "Blog page", "posts" => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => "Judul Artikel 1",
            'author' => "Howard",
            'body' => " Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Temporibus doloremque dolores amet eveniet ut, iste aliquam sequi, 
                        dolor in laboriosam exercitationem repudiandae optio ex suscipit quis 
                        blanditiis nostrum numquam sit."
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => "Judul Artikel 2",
            'author' => "Howard",
            'body' => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Neque ex quo eaque inventore, tempora deserunt eius suscipit aspernatur ipsum! 
                        Placeat debitis in numquam incidunt rem. 
                        Repellendus laboriosam quos beatae nulla."
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = 
    [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => "Judul Artikel 1",
            'author' => "Howard",
            'body' => " Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Temporibus doloremque dolores amet eveniet ut, iste aliquam sequi, 
                        dolor in laboriosam exercitationem repudiandae optio ex suscipit quis 
                        blanditiis nostrum numquam sit."
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => "Judul Artikel 2",
            'author' => "Howard",
            'body' => " Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Neque ex quo eaque inventore, tempora deserunt eius suscipit aspernatur ipsum! 
                        Placeat debitis in numquam incidunt rem. 
                        Repellendus laboriosam quos beatae nulla."
        ]
    ];
    $post = Arr::first($posts, function($post) use ($slug) {
        return $post["slug"] ==   $slug;
    });
    return  view('post', ['title' => 'Single Posts', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact Page"]);
});
