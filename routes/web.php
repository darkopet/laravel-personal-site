<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// LARAVEL Welcome

Route::get('/laravel', function () {
    return view('laravel');
});

Route::get('/', function (){
    return view('life.intro');
});

Route::get('about', function(){
    return view('life.about');
});

Route::get('thoughts', function(){
    return view('posts.index');
});

Route::get('contact', function(){
    return view('life.contact');
});

Route::get('hobbies', function(){
    return view('life.hobbies');
});

Route::get('professional', function(){
    return view('life.professional');
});