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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'tires'], function (){
    Route::get('/', function () {
        return redirect('/tires/all');
    });
    Route::get('/all', 'TireController@index');
    Route::get('/all/{slug}', 'TireController@show');
    Route::get('/{winter}', 'TireController@showBySeason');
    Route::get('/{summer}', 'TireController@showBySeason');
    Route::get('/{all-weather}', 'TireController@showBySeason');
    Route::get('/{season}/{slug}', 'TireController@show');
});


Route::get('/{slug}', 'PageController@index');


//роуты для админки
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', ['as' => 'admin', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::get('/password/reset', ['as' => 'password.request', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::get('/password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
});

