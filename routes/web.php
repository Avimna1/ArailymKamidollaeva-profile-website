<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


use App\Models\Client;
use App\Models\Post;
use App\Models\Blog;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;


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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/user', function(){
    return view('user');
})->name('user');

Route::get('/home', function(){
    return "home";
});

Route::get('client/add', function(){
    DB::table('client')->insert([
        'name' => 'Arailym', 
        'surname' => 'Kamidollaeva',
        'age' => 18
    ]);
});

Route::get('client', function(){
    $client = Client::find(1);
    return $client;
});

Route::get('post/add', function(){
    DB::table('postss')->insert([
        'title' => 'Harry Potter', 
        'body' => 'Minerva McGonagall is my absolute favorite Harry Potter character.',
    ]);
});
Route::get('post', [PostController::class, 'index']);
Route::get('post/create', function(){
    return view('post.create');
});
Route::post('post/create', [PostController::class, 'store'])->name('add-post');

Route::get('post/{id}', [PostController::class, 'get_post']);


Route::get('blog/add', function(){
    DB::table('blog')->insert([
        'name' => 'Nurai',
        'surname' => 'Samenova',
        'age' => 18
    ]);
});

Route::get('blog', [BlogController::class, 'index']);
Route::get('blog/create', function(){
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-blog');

Route::get('blog/{id}', [BlogController::class, 'get_blog']);