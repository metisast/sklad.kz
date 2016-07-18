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
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => 'auth'], function(){

    Route::group(['as' => 'profile::'], function(){
        /* Index profile page */
        Route::get('/profile',[
            'as' => 'index',
            'uses' => 'ProfileController@index'
        ]);
        /* Index profile page */
        Route::get('/profile/test',[
            'as' => 'create',
            'uses' => 'ProfileController@create'
        ]);
    });

    /* Create company REST*/
    Route::resource('company', 'CompanyController');

});