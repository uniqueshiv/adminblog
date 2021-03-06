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
//User routes
Route::group(['namespace'=>'User'],function(){
    Route::get('/','HomeController@index')->name('home');
    Route::get('post/{post}','PostController@post')->name('post');

    Route::get('post/tag/{tag}','HomeController@tag')->name('tag');

    Route::get('post/category/{category}','HomeController@category')->name('category');
});



//admin routes
Route::group(['namespace'=>'Admin'],function(){

  Route::get('admin/home','HomeController@index')->name('admin.home');

  //Post Routes

  Route::resource('admin/post','PostController');

  //Tags Routes

  Route::resource('admin/tag','TagController');

  //Category Routes

  Route::resource('admin/category','CategoryController');

  //User RouteServiceProvider

  Route::resource('admin/user','UserController');

  //admin Routes
  Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
  Route::post('admin-login','Auth\LoginController@login');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
