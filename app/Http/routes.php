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

/* XHR */
Route::post('/xhr/filter/catalog', 'XHR\FilterController@getCatalogById');
Route::post('/xhr/filter/main_catalog', 'XHR\FilterController@getMainCatalogById');

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
    });

    /* Company REST*/
    Route::resource('company', 'CompanyController');
    /* AD REST*/
    Route::resource('ad', 'AdController');

});