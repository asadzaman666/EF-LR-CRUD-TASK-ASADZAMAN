<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@welcome')->name('welcome');

    Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
    Route::get('/posts', 'PostController@index')->name('post.index');
    Route::post('/posts', 'PostController@store')->name('post.store');
    Route::get('/post/{id}', 'PostController@edit')->name('post.edit');
    Route::delete('/post/{id}', 'PostController@destroy')->name('post.destroy');
    Route::put('/post/{id}', 'PostController@update')->name('post.update');
