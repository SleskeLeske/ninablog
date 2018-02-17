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

//HER ER EN KOMMENTAR!!!!!!

/*FRONT*/
Route::get('/', 'FrontController@index');

/*POSTS*/
Route::get('/post/create', 'PostController@create');
Route::post('/posts', 'PostController@store')->name('post.store');

/*ART*/
Route::get('/art/create', 'ArtController@create');
Route::post('/art', 'ArtController@store')->name('art.store');

/*ADMIN LOGIN*/
Route::get('/login','SessionsController@login')->name('login');
Route::post('/login', 'SessionsController@store');
/*ADMIN*/
Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () {

    Route::get('/', function() {
      return view('admin.index');
    })->name('admin.index');

    Route::resource('post', 'PostController');
    Route::resource('art', 'ArtController');
});
