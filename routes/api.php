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
Route::group(['middleware'=>'auth:api'],function (){
    Route::get('/getTodoList','TodoController@getList');

});




Route::get('/user', function(Request $request){
   $entries =
        [[
            'Fullname' => 'Hoàng Quynh Anh',
            'Date_of_Birth' => '01-07-1999',
            'Email'=>'hoangquynhanh@gmail.com',
            'Phone'=>'012321313',
            'Address'=>'Ha noi ',

        ],[
            'Fullname' => 'Nguyen Van Loc ',
            'Date_of_Birth' => '02-07-1999',
            'Email'=>'nguyenvanloc@gmail.com',
            'Phone'=>'1231311313',
            'Address'=>'Ninh Binh',

        ],[
            'Fullname' => 'Tran Binh Minh',
            'Date_of_Birth' => '03-04-1995',
            'Email'=>'tranbinhminh@gmail.com',
            'Phone'=>'0123123123',
            'Address'=>'Nghe An',

        ],[
            'Fullname' => 'Vu Tran Hoang',
            'Date_of_Birth' => '11-12-1992',
            'Email'=>'vutranhoang@gmail.com',
            'Phone'=>'123123132',
            'Address'=>'Ha Tinh',
        ],
    ];
    return response()->json($entries, 200);
});