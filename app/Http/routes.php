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
Route::get('images/{directory}/{filename}', 'WebsiteController@images');

// Admin panel
Route::group(['prefix' => 'admin'], function () {
	Route::get('/', 'Admin\AdminController@index');
	Route::post('/', 'Admin\AdminController@send');

	Route::resource('banners', 'Admin\BannerController');
	Route::resource('teachers', 'Admin\TeacherController');
	Route::resource('articles', 'Admin\ArticleController');
	Route::resource('pages', 'Admin\PageController');
	Route::resource('galleries', 'Admin\GalleryController');
	Route::post('galleries/{photography}', 'Admin\GalleryController@deletePhotography');
});

// Authentication routes...
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);