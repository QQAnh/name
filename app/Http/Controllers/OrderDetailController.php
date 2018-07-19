<?php

namespace App\Http\Controllers;

use App\Order_detail;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Order_detail::all();
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
        try{
            $orderdetailJson = $request->json()->all();
//            $validator = Validator::make($orderdetailJson, [
//                'orderId' => 'required|unique:order_details|max:50',
//                'productId'=>'required',
//                'quantity'=>'required',
//            ]);
//
//            if ($validator->fails()) {
//                return response()->json($validator->errors(), 400);
//
//            }
            $orderdetailJson1 = $request->json()->all();
            $orderdetail = new Order_detail();
            $orderdetail->orderId = $orderdetailJson1['orderId'];
            $orderdetail->productId = $orderdetailJson1['productId'];
            $orderdetail->quantity = $orderdetailJson1['quantity'];
            $orderdetail->save();
            return response()->json($orderdetailJson1, 201);
        }catch (EXCEPTION $exception){
            return response()->json($exception);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entries = Order_detail::find($id);
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
        try
        {
            $productJson = $request->json()->all();
            $validator = Validator::make($request->all(), [
                'orderId' => 'bail|required|unique:order_details|max:50',
                'productId'=>'required',
                'quantity'=>'required',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }
                $order = Order_detail::find($id);
                $order->orderId = $productJson['orderId'];
                $order->productId = $productJson['productId'];
                $order->quantity = $productJson['quantity'];
                $order->save();
                return response()->json($productJson, 201);
        }catch (EXCEPTION $exception) {
            return response()->json($exception);
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
            $user = Order_detail::destroy($id);
            return response()->json($user,201);
        }catch (Exception $exception){
            return response()->json($exception);
        }
    }
}
