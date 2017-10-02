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
//refers to url /welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
   return view('about');
});

Route::get('/subjects', function () {
   return view('subjects');
});

Route::get('/social', function () {
   return view('social');
});

Route::get('/education', function () {
   return view('education');
});

Route::get('/aboutphp', function () {
   return view('aboutphp');
});

//database test
Route::get('database-test', function() {
	if(DB::connection()->getDatabaseName() )
	{
		echo 'Connected successfully to database ' .DB::connection()->getDatabaseName();
	}
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/about', 'HomeController@about')->name('about');
