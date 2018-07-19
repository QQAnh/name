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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/homepage','Client\HomepageController@index');
Route::get('/test/{id}','Client\HomepageController@test');

Route::resource('/register','Client\RegisterController');

//Route::get('/login','Client\loginController@getLogin');
//Route::get('','Client\HomepageController@getIndex');
Route::get('/listItem','Client\HomepageController@listItem');


Route::get('/login','Client\loginController@getLogin');
Route::post('/login','Client\loginController@getPhone');
//Route::get('/register',function (){
//    return view('client.listClient.register');
//});
//Route::post('/register','Client\RegisterController@store');


Route::get('/admin', function (){
    return view('admin.listAdmin.dashboard');
});
Route::get('/', function (){
    return view('client.listClient.register');
});
Route::resource('user','AccountsController');
Route::resource('/order','OrderController');
Route::resource('/admin/smartphone','ProductSmartPhonesController');
Route::get('/admin/pc','ProductSmartPhonesController@showPC');
Route::get('/admin/laptop','ProductSmartPhonesController@showLaptop');
Route::get('/admin/console','ProductSmartPhonesController@showConsole');




//Route::get('get-form',['uses'=> 'Client\loginController@getLogin']);
//Route::post('handle-form',['uses'=> 'Client\loginController@handleRequest']);




Route::get('/smartphone','Client\HomepageController@getListSmartPhone');
Route::get('/laptop','Client\HomepageController@getListLaptop');
Route::get('/pc','Client\HomepageController@getListPC');
Route::get('/console','Client\HomepageController@getListConsole');


Route::get('/intro','Client\HomepageController@index3');
Route::get('/contact','Client\HomepageController@index4');
