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

//Route::get('blog/{slug}/{id}', ['as'=>'blog.single', 'uses'=>'BlogController@getSingle']);
Route::get('blog/{slug}', 'BlogController@getSingle')->name('blog.single')->where('slug', '[\w\d\-\_]+');
Route::get('blog', 'BlogController@getIndex')->name('blog.index');
Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');

//\Illuminate\Support\Facades\Auth::routes()
Auth::routes();

Route::get('/home', 'HomeController@index');
