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

Route::get('/', 'PagesController@landing');
Route::get('/landing', 'PagesController@landing');
Route::get('/userHome', 'PagesController@userHome');
Route::get('/newReport', 'PagesController@newReport');
Route::get('/error', 'PagesController@error');
Route::get('/viewReport', 'PagesController@viewReport');

Route::resource('posts', 'PostsController');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
