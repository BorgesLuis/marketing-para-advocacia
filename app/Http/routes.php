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

Route::get('/', 'BlogController@landing');
Route::get('/blog', 'BlogController@index');

Route::get('post', 'PostController@index');
Route::get('post/{post}', 'PostController@show');

Route::post('/lead', 'LeadController@store');

//------------------ Area administrativa ------------------//
Route::get('/admin', 'AdminController@index');
Route::post('/login', 'AdminController@doLogin');
Route::get('/logout', 'AdminController@doLogout');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/lead', 'LeadController@index');
    Route::delete('/lead/{id}', 'LeadController@destroy');

    /* CRUD Postagens */
    Route::group(['middleware' => ['role:administrador|produtor']], function () {
        Route::get('post/create', 'PostController@create');
        Route::post('post', 'PostController@store');
        Route::get('post/{post}/edit', 'PostController@edit');
        Route::patch('post/{post}', 'PostController@update');
        Route::delete('post/{post}', 'PostController@destroy');
    });
});