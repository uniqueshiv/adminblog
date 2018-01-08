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
    Route::get('/','HomeController@index');
    Route::get('post','PostController@index')->name('post');
});


// Route::get('post',function(){
//   return view('user/post');
// })->name('post');
//
// Route::get('admin/posts',function(){
//   return view('admin.post.index');
// })->name('post');

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

});
