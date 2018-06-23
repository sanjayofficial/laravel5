<?php
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
| Auth routes are defined here
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('logout','Auth\LoginController@logout');
Auth::routes();