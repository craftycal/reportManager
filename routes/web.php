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

Route::get('/chart', function () {
    return view('chart');
});

Route::get('testPage', function () {

	$posts = DB::table('posts')->get();
	$users = DB::table('users')->get();
    return view('testPage', compact('posts', 'users'));

});

Route::get('posts/create', function () {
    return view('posts/create', compact('post'));
});

Route::get('posts/delete', function () {
    return view('posts/create', compact('post'));
});

Route::get('posts/edit/{id}', function () {

	$posts = DB::table('posts')->get();
	$id = DB::table('posts')->get(id);
    return view('posts/edit', compact('posts'));
});

Route::get('posts/create', 'PostsController@create');
Route::get('posts/delete', 'PostsController@create');
Route::get('posts/edit/{id}', 'PostsController@edit');

Route::post('post', 'PostsController@store');
Route::post('delete', 'PostsController@destroy');
Route::post('edit', 'PostsController@update');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('resizeImage', 'ImageController@resizeImage');
Route::post('resizeImagePost',['as'=>'resizeImagePost','uses'=>'ImageController@resizeImagePost']);

Auth::routes();

Route::resource('post','PostsController');


