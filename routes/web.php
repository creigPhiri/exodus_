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

Route::get('/index', 'PostsController@index')->name('home');        //directs to home

Route::post('/makePost', "PostsController@store");                      //used to store new post

Route::post('comment','CommentsController@store');                  //used to store new comment

Route::get('logout','Auth\LoginController@destroy');                //destroy session (logout)

Route::get('delete','PostsController@destroy');                     //deletes the selected post

Route::get('update','PostsController@update');                      //used to update a post

Route::get('user/{user}','UsersController@viewProfile');            //redirects to the relevant profile page

Route::get('follow','UsersController@follow');

Route::get('unfollow','UsersController@unfollow');

Route::get('test','UsersController@test');

Route::get('caro',function (){return view('test_folder.carossel_main');});

Route::get('trending',function (){return view('test_folder.trending');});

Route::get('profile',function (){return view('test_folder.profile');});

Route::post('imageUpload','UsersController@imageUpload');

Route::get('comments',function(){return view('test_folder.comments'); });

Route::get('post/{id}','PostsController@show');