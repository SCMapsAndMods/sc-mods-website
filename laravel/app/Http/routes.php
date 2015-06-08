<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/items', 'ItemController@index');
Route::get('/items/{pageNumber}', 'ItemController@index');
Route::get('/item/{slug}', 'ItemController@show');

/*
|--------------------------------------------------------------------------
| Administrative Routes
|--------------------------------------------------------------------------
|
| These routes deal with administrative functionality, mainly the CRUD
| interface
|
*/

Route::get('/admin/', 'AdminController@index');
Route::get('/admin/view', 'AdminController@view');
Route::get('/admin/edit', 'AdminController@edit');
Route::post('/admin/edit', 'AdminController@edit');

// Create Entry
// - Upload files

// Update Entry

// View a list of entries
// View a specific entry

// Delete Entry

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
