<?php

namespace App\Http\Controllers\Client;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function productDetail($id){
        $product = Product::find($id);
        return view('client.listProduct.productDetails')->with('product',$product);
    }
}
