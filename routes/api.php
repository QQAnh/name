<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/getTodoList', 'TodoController@getList');

});


Route::post('/account','Endpoint\AccountsController@store');

//Route::get('/account/{phone}','Endpoint\AccountsController@getByPhone');

Route::resource('/product','Endpoint\ProductsController');
Route::resource('/category','Endpoint\CategoriesController');
Route::get('/product/category/{id}','Endpoint\ProductsController@getByCategory');



Route::resource('/order','OrderApiController');

//Route::resource('/orderDetail','OrderDetailController');
Route::get('/orderDetail', function (){
    $entries = \App\OrderDetail::all();
    return response()->json($entries, 200);

});
