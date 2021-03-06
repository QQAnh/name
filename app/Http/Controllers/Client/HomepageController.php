<?php

namespace App\Http\Controllers\Client;

use App\Category;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class HomepageController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('client.layoutHomepage.master')->with('category', $category);
    }

    public function test($id)
    {
        $product = Product::find($id);
        return view('client.listClient.dashboard')->with('product', $product);
    }

    public function register()
    {
        return view('client.listClient.register');

    }

//    public function getLogin()
//    {
//        return view('client.listClient.login');
//
//    }
    public function listItem(){
        $product = Product::paginate(8);
        $category = Category::all();
        return view('client.listProduct.listItemHomepage')
            ->with('product',$product)
            ->with('category',$category)  ;
    }

    public function getIndex() {
        return 'Đăng nhập thành công!!!';
    }

    public function getListSmartPhone(){
        $category = Category::all();
        $product = Product::where('category',1)->where('status',1)->get();
        return view('client.listClient.smartphone')->with('category',$category)->with('product',$product);
    }

    public function getListPC()
{
    $category = Category::all();
    $product = Product::where('category', 3)->where('status',1)->get();
    return view('client.listClient.pc')->with('category', $category)->with('product', $product);
}
    public function getListLaptop()
    {
        $category = Category::all();
        $product = Product::where('category', 2)->where('status',1)->get();
        return view('client.listClient.laptop')->with('category', $category)->with('product', $product);
    }
    public function getListConsole()
    {
        $category = Category::all();
        $product = Product::where('category', 4)->where('status',1)->get();
        return view('client.listClient.console')->with('category', $category)->with('product', $product);
    }
    public function index3()
    {
        $category = Category::all();
        return view('client.listClient.introduce')->with('category', $category);
    }
    public function index4()
    {
        $category = Category::all();
        return view('client.listClient.contact')->with('category', $category);
    }
    public function getAddCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('OrderDetail')? Session::get('OrderDetail'):null;
        $cart = new OrderDetail($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('OrderDetail',$cart);
//        dd($request->session()->get('OrderDetail'));
        return redirect()->back();
    }
    public function getShopingCart(){
        $oldCart = Session::get('OrderDetail');
        $cart = new OrderDetail($oldCart);
        return view('client.listClient.shopingCart',['products' => $cart->items,
            'totalPrice'=>$cart->totalMoney, 'totalQty' =>$cart->totalQty
        ]);
    }
}