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
    $medium = resolve('medium-sdk');
    dd($medium);
//    return view('welcome');
});

Route::get('/custom', function () {
   //dd(config('app.developers'));
   //dd(config('blog.administrators'));
   dd(config('blog.creator'));
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
