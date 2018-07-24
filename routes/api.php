<?php

use App\Order;
use App\OrderDetail;
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



//Route::resource('/order','OrderApiController');
Route::get('/order',function (){
    $entries = Order::all();
    return response()->json($entries, 200);
});
Route::post('/order',function ( Request $request){
    $jsonRequest = $request->json()->all();

    try{
//            DB::beginTransaction();
        $order = new Order();
        $order->UserId = $jsonRequest['userId'];
        $order->nameBuyes = $jsonRequest['nameBuyer'];
        $order->phoneBuyes = $jsonRequest['phoneBuyer'];
        $order->nameReceiver = $jsonRequest['name'];
        $order->phoneReceiver = $jsonRequest['phone'];
        $order->addressReceiver = $jsonRequest['address'];
        $order->totalMoney = $jsonRequest['total'];
        $order->note = $jsonRequest['note'];
        $order->save();
        $list_order_details = $jsonRequest['list_Order'];

        for ($i=0; $i < count($list_order_details); $i++){
            $order_detail = new OrderDetail();
            $order_detail -> orderId = $order->id;
            $order_detail -> productId = $list_order_details[$i]['ProductID'];
            $order_detail -> quantity = $list_order_details[$i]['Quantity'];
            $order_detail -> save();
        }
//            DB::commit();
    }catch (EXCEPTION $exception) {
//            DB::rollback();
    }
});

//Route::resource('/orderDetail','OrderDetailController');

//Route::get('/orderDetail', function (){
//    $entries = \App\OrderDetail::all();
//    return response()->json($entries, 200);
//
//});
