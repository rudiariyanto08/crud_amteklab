<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/member','Member@memberpage');

Route::get('/member/create','Member@create');
Route::post('/member','Member@store');

Route::get('/member/view/{id}','Member@viewmember');

Route::get('/member/edit/{id}','Member@edit');
Route::put('/member/{id}','Member@prosesedit');

Route::delete('/member/{id}','Member@hapus');

