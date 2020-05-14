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
Route::group(['prefix'=>'admin'],function(){
    Route::get('/', 'AdminController@get_index');
    Route::get('/ayarlar', 'AdminController@get_ayarlar');
    Route::post('/ayarlar', 'AdminController@post_ayarlar');
    Route::get('/hakkimizda', 'AdminController@get_hakkimizda');
    Route::post('/hakkimizda', 'AdminController@post_hakkimizda');
    Route::get('/kategori', 'AdminController@get_kategori');

    Route::group(['prefix'=>'blog'],function(){
        Route::get('/', 'AdminController@get_blog');
        Route::post('/', 'AdminController@post_blog_sil');
        Route::post('/blog-duzenle/{slug}', 'AdminController@get_blog_duzenle');
        Route::get('/blogEkle', 'AdminController@get_blogEkle');
        Route::post('/blogEkle', 'AdminController@post_blogEkle');
    });
});

Route::get('/', 'HomeGetController@get_index');
Route::get('/iletisim', 'HomeGetController@get_iletisim');
Route::get('/hakkimizda', 'HomeGetController@get_hakkimizda');
Route::get('/blog', 'HomeGetController@get_blog');
Route::get('/blog/blog_detay', 'HomeGetController@get_blog_detay');

