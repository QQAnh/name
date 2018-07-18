<?php

namespace App\Http\Controllers\Client;

use App\Order_detail;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
        return view('client\listProduct\orderDetails');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.listProduct.orderDetails')->with([
           "product"=> new OrderDetail(),
            "action"=>"/shoppingCart",
            "method"=>"POST"
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$productId)
    {
        $validator = Validator::make($request->all(), [
            'productId' => 'required|unique:order_details|max:50',
            'quantity'=>'required',
            'price'=>'required',
        ]);
        if ($validator->fails()) {
            return redirect('shoppingCart/create')
                ->withErrors($validator->errors())
                ->withInput();
        }

        $cart = new OrderDetail();
        $cart->productId = $request->get('productId');
        $cart->quantity = $request->get('quantity');
        $cart->totalMoney = $request->get('price')*$request->get('quantity') ;
        $cart->save();

        return redirect('/listItem');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $product = DB::table('products')
//            ->select('products.title')
//            ->where('products.id','=', $productId)
//            ->get();

//        $product = Product::find($productId);
//        $id1 = $product->id;
//        return response()->json($id1 , 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = OrderDetail::find($id);
        if ($order==null){
            return redirect("errors");
        }
        return view('client.listProduct.orderDetails')->with([
            "product"=> $order,
            "action"=>"/shoppingCart/" . $order->id,
            "method"=>"PUT"
        ]) ;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
