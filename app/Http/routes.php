<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'], function() {

//    Route options

//    Route::get('articles', 'ArticlesController@index');
//    Route::get('articles/create', 'ArticlesController@create');
//    Route::get('articles/{id}', 'ArticlesController@show');
//    Route::post('articles', 'ArticlesController@store');
//    Route::get('articles/{id}/edit', 'ArticlesController@edit');

    Route::resource('articles', 'ArticlesController');
});
Route::group(['middleware' => 'web'], function() {
    Route::get('/', 'PagesController@homepage');
    Route::get('profile', 'PagesController@profile');
    Route::get('userarticles', 'UserController@userarticles');
    Route::get('contacts', 'PagesController@contacts');
});

Route::group(['middleware' => 'web'], function() {
    Route::auth();
    Route::get('homepages', 'AdminController@homepages');
    Route::get('unpublished', 'AdminController@unpublished');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

