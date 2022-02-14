<?php

use App\Models\Category;
use App\Models\Post;
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

Route::get('/outra', function () {
    return view('welcome');
});

Route::get('/dos', function () {
    return view('axuda');
});

Route::get('/tres', function () {
    return view('contacto');
});

Route::get('/', function () {
    //$posts = Post::all();

    return view('posts',[
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {
    // atopar un post polo seu slug e pasalo á vista chamada "post"
    // $post => Post::findOrFail($slug);
    
    return view('post',[
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts',[
        'posts' => $category->posts
    ]);
});