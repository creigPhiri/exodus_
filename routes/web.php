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
    return redirect(route('login'));
});

Auth::routes();

Route::get('/index', 'PostsController@index')->name('home');

//Route::get('posts/{id}','PostsController@index');         ****merely repeats the route above

Route::post('/index','PostsController@store');

Route::post('comment','CommentsController@store');

Route::get('logout','Auth\LoginController@destroy');

Route::get('delete','PostsController@destroy');

Route::get('update','PostsController@update');

Route::get('users','UsersController@showAll');