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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',['as' => 'posts.index',   'uses' => 'PostsController@index']);
Route::get('about',['as' => 'posts.about',   'uses' => 'PostsController@about']);
Route::get('blog',['as' => 'posts.blog',   'uses' => 'PostsController@blog']);
Route::get('contact',['as' => 'posts.contact',   'uses' => 'PostsController@contact']);