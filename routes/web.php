<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\user;

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

Route::get('/', function () {
    return view('home', [
        'title' => "Home"
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => "posts"
    ]);
});

Route::get('/post', function () {
    return view('post', [
        'title' => "post"
    ]);
});

Route::get('/karir', function () {
    return view('karir', [
        'title' => "karir"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        "nama" => "Gagas Rashad Prakoso",
        "email" => "gagasprakoso06@gmail.com",
        "image" => "SAVE_20220330_225655.jpg",
    ]);
});




//Route::get('/posts', [PostController::class, 'index']);
//halaman single post
//Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('post', [
        'title' => 'Post Categories',
        'category' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts,
    ]);
});


Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts,
    ]);
});