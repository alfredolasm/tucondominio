<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use PHPUnit\Runner\Filter\GroupFilterIterator;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')-> group(function(){

    Route::resource('users','UsersController');
   
    Route::get('users/{id}/destroy',[
        'uses' => 'UsersController@destroy',
        'as'    => 'users.destroy'     

    ]);

    Route::resource('categories','CategoriesController');

    Route::get('categories/{id}/destroy',[
        'uses' => 'CategoriesController@destroy',
        'as'   => 'categories.destroy'
    ]);

    Route::resource('states','StatesController');
    Route::get('states/{id}/destroy',[
        'uses' => 'StatesController@destroy',
        'as'   => 'states.destroy'
    ]);
    Route::resource('cities','CitiesController');
    Route::get('cities/{id}/destroy',[
        'uses' => 'CitiesController@destroy',
        'as'   => 'cities.destroy'
    ]);
    Route::resource('urbans','UrbansController');
    Route::get('urbans/{id}/destroy',[
        'uses' => 'UrbansController@destroy',
        'as'   => 'urbans.destroy'
    ]);
    Route::resource('rules' ,'RulesController');
    Route::get('rules/{id}/destroy',[
        'uses' => 'RulesController@destroy',
        'as'   => 'rules.destroy'
    ]);
    Route::resource('beneficiaries','BeneficiariesController');
    Route::get('beneficiaries/{id}/destroy',[
        'uses' => 'BeneficiariesController@destroy',
        'as'   => 'beneficiaries.destroy'
    ]);
    Route::resource('properties','PropertiesController');
    Route::get('properties/{id}/destroy',[
        'uses' => 'PropertiesController@destroy',
        'as'   => 'properties.destroy'
    ]);
    Route::resource('payments','PaymentsController');
    Route::get('payments/{id}/destroy',[
        'uses' => 'PaymentsController@destroy',
        'as'   => 'payments.destroy'
    ]);
    Route::resource('imagebenes','ImagebenesController');
    Route::get('imagebenes/{id}/destroy',[
        'uses' => 'ImagebenesController@destroy',
        'as'   => 'imagebenes.destroy'
    ]);
    Route::resource('imagepropes','ImagepropesController');
    Route::get('imagepropes/{id}/destroy',[
        'uses' => 'ImagepropesController@destroy',
        'as'   => 'imagepropes.destroy'
    ]);
    Route::resource('imagepays','ImagepaysController');
    Route::get('imagepays/{id}/destroy',[
        'uses' => 'ImagepaysController@destroy',
        'as'   => 'imagepays.destroy'
    ]);


});
