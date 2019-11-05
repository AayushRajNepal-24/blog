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

Route::view('/', 'frontend.welcome');
Route::view('/contact', 'frontend.contact');
Route::get('aayush-raj-nepal', 'FrontendController@index');
Route::get('posts/{postId}','FrontendController@show_post');
Route::get('post/{postId}','FrontendController@show_post');
Route::group(['prefix' => 'adminpanel'], function () {
    Route::get('addimage','GalleryController@create_image');
    Route::post('addimage','GalleryController@add_image');
    Route::get('addpost','PostController@create');
    Route::post('addpost','PostController@store');
    Route::get('posts/{postId}','PostController@back_show');
    Auth::routes();
    Route::get('/', 'BackendController@index')->name('home');
    Route::get('home', 'BackendController@index')->name('home');
    Route::get('admin', 'AdminController@admin')->middleware('is_admin')->name('admin');

});

