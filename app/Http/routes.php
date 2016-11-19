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


//Main website
Route::get('', 'WebsiteController@index');
Route::get('contact', 'WebsiteController@contact');
Route::get('news', 'WebsiteController@news');
Route::get('articles', 'WebsiteController@articles');
Route::get('gallery', 'WebsiteController@gallery');
Route::get('teachers', 'WebsiteController@teachers');
Route::get('teachers/{id}', 'WebsiteController@singleTeacher');

// Images view
Route::get('images/{directory}/{filename}', 'WebsiteController@images');

// Admin panel
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
	Route::get('/', 'AdminController@index');
	Route::post('/', 'AdminController@send');

	Route::resource('banners', 'BannerController');
	Route::resource('teachers', 'TeacherController');
	Route::resource('articles', 'ArticleController');
	Route::resource('pages', 'PageController');
	Route::resource('galleries', 'GalleryController');
	Route::post('galleries/{photography}', 'GalleryController@deletePhotography');
});

// Authentication routes...
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);