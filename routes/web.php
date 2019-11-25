<?php

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('index',function()
// {
// return view('index');
// });
// Route::view('/', 'index');
Route::view('userpage', 'userpage');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
