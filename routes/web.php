<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
// use App\Http\Controllers\NewsletterController;
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
    return view('life.laravel');
});

Route::get('/', function (){
    return view('life.intro');
});

Route::get('about', function(){
    return view('life.about');
});


Route::get('contact', function(){
    return view('contacts.index');
});
Route::post('contact', function(){
    return view('contacts.create');
});


Route::get('hobbies', function(){
    return view('life.hobbies');
});

Route::get('professional', function(){
    return view('life.professional');
});


// Route::get('thoughts', function(){
//     return view('posts.index');
// });
Route::get('/thoughts', [PostController::class, 'index']);
Route::get('/thoughts/{post:slug}', [PostController::class, 'show']);  


Route::middleware('can:admin')->group(function () {
    Route::resource('admin/thoughts', AdminPostController::class)->except('show');});
// Route::get('/admin/thoughts', [AdminPostController::class, 'index'])->middleware('admin');
// Route::post('/admin/thougts', [AdminPostController::class, 'store'])->middleware('admin');
// Route::get('/admin/thoughts/create', [AdminPostController::class, 'create'])->middleware('admin');
// Route::get('/admin/{post}/edit', [AdminPostController::class, 'edit'])->middleware('admin');
// Route::patch('/admin/{post}', [AdminPostController::class, 'update'])->middleware('admin');
// Route::delete('/admin/{post}', [AdminPostController::class, 'destroy'])->middleware('admin');

Route::get('/thoughts/admin/create', [PostController::class, 'create'])->middleware('admin');
Route::post('/thoughts/admin', [PostController::class, 'store'])->middleware('admin');


Route::post('/thoughts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
// Route::post('newsletter', NewsletterController::class);

