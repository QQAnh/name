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

Auth::routes();

Route::get('/homepage','Client\HomepageController@index');
Route::get('/test/{id}','Client\HomepageController@test');
Route::get('/register','Client\HomepageController@register');
Route::get('/login','Client\HomepageController@getLogin');
Route::post('/logintest','Client\testController@check');



Route::get('/smartphone','Client\HomepageController@getListSmartPhone');
Route::get('/laptop','Client\HomepageController@getListLaptop');
Route::get('/pc','Client\HomepageController@getListPC');
Route::get('/console','Client\HomepageController@getListConsole');


Route::get('/intro','Client\HomepageController@index3');
Route::get('/contact','Client\HomepageController@index4');
