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
    return view('intro');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/hobbies', function(){
    return view('hobbies');
});

Route::get('/professional', function(){
    return view('professional');
});