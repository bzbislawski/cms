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

// TODO: Storing files with Storage Class
// TODO: Give parent class for User and Teacher, so the methods are not reapeted stupidly
// TODO: Fix paths to images
// TODO: All links and url's need to be called either linnks or url
// TODO: Analyze forms DELETE in adminpanel

// TODO: Figure out how helper funcs work and use them for multilanguage website

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hi', function () {
	App::setLocale('pl');
    return test();
});


//Main website
Route::get('kontakt', 'WebsiteController@contact');
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