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
// TODO: Fix link paths in all views

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hi', function () {
    return storage_path();
});


//main website

Route::get('kontakt', 'WebsiteController@contact');
Route::get('news', 'WebsiteController@news');
Route::get('articles', 'WebsiteController@articles');


//admin panel
Route::get('home', 'HomeController@index');
Route::post('home', 'HomeController@send');

//Banners Controller
Route::resource('home/banners', 'BannerController');
//Teachers Controller
Route::resource('home/teachers', 'TeacherController');
//Articles Controller
Route::resource('home/articles', 'ArticleController');
//Page Controller
Route::resource('home/pages', 'PageController');



// Authentication routes...
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);