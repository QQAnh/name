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

Route::get('/','Client\HomepageController@index');
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
//Route::get('/', function (){
//    return view('client.listClient.register');
//});
Route::resource('user','AccountsController');
Route::resource('/order','OrderController');
Route::resource('/admin/smartphone','ProductSmartPhonesController');
Route::post('admin/smartphone/destroy/{id}','ProductSmartPhonesController@destroy');




Route::get('/admin/pc','ProductSmartPhonesController@showPC');
Route::post('/admin/pc','ProductSmartPhonesController@storePC');
Route::get('/admin/pc/create','ProductSmartPhonesController@createPC');
Route::get('/admin/pc/{id}/edit','ProductSmartPhonesController@editPC');
Route::put('/admin/pc/{id}','ProductSmartPhonesController@updatePC');


Route::get('/admin/laptop','ProductSmartPhonesController@showLaptop');
Route::post('/admin/laptop','ProductSmartPhonesController@storeLaptop');
Route::get('/admin/laptop/create','ProductSmartPhonesController@createLaptop');
Route::get('/admin/laptop/{id}/edit','ProductSmartPhonesController@editLaptop');
Route::put('/admin/laptop/{id}','ProductSmartPhonesController@updateLaptop');



Route::get('/admin/console','ProductSmartPhonesController@showConsole');
Route::post('/admin/console','ProductSmartPhonesController@storeConsole');
Route::get('/admin/console/create','ProductSmartPhonesController@createConsole');
Route::get('/admin/console/{id}/edit','ProductSmartPhonesController@editConsole');
Route::put('/admin/console/{id}','ProductSmartPhonesController@updateConsole');








Route::get('/smartphone','Client\HomepageController@getListSmartPhone');
Route::get('/laptop','Client\HomepageController@getListLaptop');
Route::get('/pc','Client\HomepageController@getListPC');
Route::get('/console','Client\HomepageController@getListConsole');




//Route::get('/admin/category',function (){
//    $category = Category::all();
//    return view('admin.listAdmin.SmartPhone.listProductPhone')->with('category',$category);
//});
Route::get('hello',function (){
   return "hello";
});



Route::get('/intro','Client\HomepageController@index3');
Route::get('/contact','Client\HomepageController@index4');
