<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ["nama" => "Howard"]);
});

Route::get('/blog', function () {
    return view('blog', ["nama" => "Howard"]);
});

Route::get('/contact', function () {
    return view('contact', ["nama" => "Howard"]);
});
