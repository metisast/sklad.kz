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
Route::post('/xhr/filter/industry', 'XHR\FilterController@getIndustry');
Route::post('/xhr/filter/category', 'XHR\FilterController@getCategoryByIndustry');
Route::post('/xhr/filter/product-type', 'XHR\FilterController@getProductCatByCategory');

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

    /* Create company REST*/
    Route::resource('company', 'CompanyController');

});