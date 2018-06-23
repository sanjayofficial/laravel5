<?php

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| 
| 
|
*/


Route::get('/dashboard', 'DashboardController@index');
Route::get('/home', 'DashboardController@index');
Route::get('/', 'DashboardController@index');