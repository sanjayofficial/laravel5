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

$routes_inc = [
	'posts',
	'auth',
	'dashboard',
	'reports'
];



foreach ($routes_inc as $routes) {

	$file = base_path().'/routes/inc/'.$routes.'.php';
	 if ( ! file_exists($file))
    {
        $msg = "Route partial [{$routes}] not found.";
        throw new \Illuminate\Filesystem\FileNotFoundException($msg);
    }
	require_once $file;
}


