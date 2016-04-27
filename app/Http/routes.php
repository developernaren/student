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

Route::get('/', function () {
    return "hELLO wORLD";
});

Route::get('users','SiteController@index');

Route::get('users/{id}', 'SiteController@show');

Route::get('users/{id}/edit', 'SiteController@edit');

