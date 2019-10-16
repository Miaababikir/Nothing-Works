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



Route::prefix('/dashboard')->group(function () {
    Route::view('/', 'dashboard.index');
    Route::view('/posts', 'dashboard.posts.index');
    Route::view('/posts/show', 'dashboard.posts.show');
    Route::view('/posts/create', 'dashboard.posts.create');
    Route::view('/tags', 'dashboard.tags.index');
});

