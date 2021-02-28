<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;

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

