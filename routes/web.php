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
    return view('onair.home_onair');
});

Route::get('slider', function () {
    return view('onsite.slider');
});

Route::group(array('prefix' => 'onair'), function() {
			Route::get('/dashboard', function () {
		    return view('backsite.dashboard');
		});
	});
// Route::get('/header', function () {
//     return view('onsite.header');
// });

// Route::get('/footer', function () {
//     return view('onsite.footer');
// });