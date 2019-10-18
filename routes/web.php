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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');



Route::prefix('/dashboard')->middleware('auth')->group(function () {

    Route::get('/tags', 'Dashboard\TagController@index');
    Route::post('/tags', 'Dashboard\TagController@store');
    Route::put('/tags/{tag}', 'Dashboard\TagController@update');
    Route::delete('/tags/{tag}', 'Dashboard\TagController@destroy');

    Route::get('/posts', 'Dashboard\PostController@index');
    Route::get('/posts/create', 'Dashboard\PostController@create');
    Route::post('/posts', 'Dashboard\PostController@store');
    Route::get('/posts/{post}', 'Dashboard\PostController@show');
    Route::put('/posts/{post}', 'Dashboard\PostController@update');
    Route::get('/posts/{post}/edit', 'Dashboard\PostController@edit');

    Route::view('/', 'dashboard.index');

});

