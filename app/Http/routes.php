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
Route::post('/xhr/company_features', 'XHR\CompanyController@getCompanyFeatures');
Route::post('/xhr/city', 'XHR\RegionCityController@getCitiesByRegionId');

Route::post('/xhr/company-photo-upload', 'XHR\ImageUploadController@companyUploadLogoImage');
Route::post('/xhr/company-photo-delete', 'XHR\ImageUploadController@companyDeleteLogoImage');

Route::post('/xhr/ad-list/modal', 'XHR\AdController@showModal');
Route::post('/xhr/ad-list/heading', 'XHR\AdController@getIndustriesByMainCatalog');
Route::post('/xhr/ad-list/heading/catalog', 'XHR\AdController@getCatalogByParentId');

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

    /* AD REST*/
    Route::resource('ad', 'AdController');

    /* Company REST*/
    Route::resource('company', 'CompanyController');

});