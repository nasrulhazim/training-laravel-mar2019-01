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


/**
 * Using Closure
 */
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/**
 * Using Controller's Action
 */
Route::get('/home', 
	'HomeController@index'
)->name('home');


Route::resource('users', 'UserController');



