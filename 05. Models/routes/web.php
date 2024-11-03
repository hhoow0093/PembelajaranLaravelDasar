<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home', ["title" => "Home page"]);
});

Route::get('/about', function () {
    return view('about', ["nama" => "Howard", "title" => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ["title" => "Blog page", "posts" => Post::all()]);
});

// membuat halaman 404 jika tidak mendapatkan data
Route::get('/posts/{slug}', function($slug){
    $post = Post::find($slug);
    return  view('post', ['title' => 'Single Posts', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact Page"]);
});
