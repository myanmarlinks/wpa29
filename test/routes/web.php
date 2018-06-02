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
    return view('welcome');
});

Route::get("hello", function(){
	return "Hello World";
});

Route::get("car", function(){
	return "Car";
});

Route::get("sidecar", function(){
	return "Side Car";
})->middleware("auth");

Route::get("sidecon", 'SidecarController@index');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
