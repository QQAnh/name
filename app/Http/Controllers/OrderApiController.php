<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class OrderApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Order::all();
        return response()->json($entries, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $jsonRequest = $request->json()->all();
        Log::debug($jsonRequest);
//        try{
////            DB::beginTransaction();
//            $order = new Order();
//            $order->UserId = $jsonRequest['userId'];
//            $order->nameBuyes = $jsonRequest['nameBuyer'];
//            $order->phoneBuyes = $jsonRequest['phoneBuyer'];
//            $order->nameReceiver = $jsonRequest['name'];
//            $order->phoneReceiver = $jsonRequest['phone'];
//            $order->addressReceiver = $jsonRequest['address'];
//            $order->totalMoney = $jsonRequest['total'];
//            $order->note = $jsonRequest['note'];
//            $order->save();
//            $list_order_details = $jsonRequest['list_Order'];
//            for ($i=0; $i < count($list_order_details); $i++){
//                $order_detail = new OrderDetail();
//                $order_detail -> orderId = $order->id;
//                $order_detail -> productId = $list_order_details[$i]['ProductId'];
//                $order_detail -> quantity = $list_order_details[$i]['Quantity'];
//                $order_detail -> save();
//            }
////            DB::commit();
//        }catch (EXCEPTION $exception) {
////            DB::rollback();
//        }
        return $jsonRequest;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entries = Order::find($id);
        if ($entries === null){
            return view("errors.404");
        }
        return response()->json($entries, 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
        $productJson = $request->json()->all();
        $validator = Validator::make($request->all(), [
            'nameBuyes' => 'required|unique:orders|max:50',
            'nameReceiver' => 'required',
            'addressReceiver' => 'required',
            'phoneBuyes' => 'required',
            'phoneReceiver' => 'required',
            'totalMoney' => 'required',
            'note' => 'required',
            'UserId'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);

        }

            $order = Order::find($id);
            $order->nameBuyes = $productJson['nameBuyes'];
            $order->nameReceiver = $productJson['nameReceiver'];
            $order->addressReceiver = $productJson['addressReceiver'];
            $order->phoneBuyes = $productJson['phoneBuyes'];
            $order->phoneReceiver = $productJson['phoneReceiver'];

            $order->totalMoney = $productJson['totalMoney'];

            $order->note = $productJson['note'];

            $order->UserId = $productJson['UserId'];
            $order->save();
            return response()->json($productJson, 201);

        }catch (EXCEPTION $exception) {
            return response()->json($exception->errors(), 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $user = Order::destroy($id);
            return response()->json($user,201);
        }catch (Exception $exception){
            return response()->json($exception);
        }
    }
}
