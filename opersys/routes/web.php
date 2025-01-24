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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/postpage', function () {
    return view('postpage');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/hima', function () {
    return view('hima');
});

Route::get('/koma', function () {
    return view('koma');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
