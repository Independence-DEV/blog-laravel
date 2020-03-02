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

Route::get('/', 'PostController@posts');

Route::get('/posts/{id?}', 'PostController@posts');

Route::get('/post/{id}', 'PostController@post');

Auth::routes();

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::resource('post', 'PostController');
    //Route::resource('category', 'CategoryController');
});

/*
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/post/edit/{id}', 'AdminController@editPost')->name('adminPostEdit');
Route::post('/admin/post/edit/{id}', 'AdminController@editPost')->name('adminPostEdit');

Route::get('/admin/post/create', 'AdminController@createPost')->name('adminPostCreate');
Route::post('/admin/post/create', 'AdminController@storePost')->name('adminPostStore');
*/
