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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hi', function () {
//     return "Hi";
// });

// Route::get('/hi/{id}', function ($id) {
//     return "Hi $id";
// });

// Route::get('/hi/{id}/{name}', function ($id,$name) {
//     return "Hi no $id, name $name";
// });

// Route::get('/post/{id}', 'PostsController@index');

// Route::resource('/posts','PostsCOntroller');

Route::get('/contact','PostsController@contact');

Route::get('/post/{id}/{name}/{pw}','PostsController@showposts');

