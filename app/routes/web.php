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

Route::resource('admin/photos', 'Admin\\PhotosController');
Route::resource('admin/posts', 'Api\\postsController');
Route::resource('api/posts', 'api\\postsController');
Route::resource('contacts', 'ContactController');