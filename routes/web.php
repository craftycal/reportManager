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

Route::resource('post', 'postController');

// 
// Route::get('/', function () {
//     return view('landing');
// });
// 
// Route::get('/newReport', function () {
//     return view('newReport');
// });
// 
// Route::get('/viewReport', function () {
//     return view('viewReport');
// });
// 
// Route::get('/404', function () {
//     return view('404');
// });
// 
// Route::get('/home', function () {
//     return view('home');
// });



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
