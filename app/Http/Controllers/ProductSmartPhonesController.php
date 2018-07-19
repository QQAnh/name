<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductSmartPhonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product =Product::where('category','=',1)
            ->get();
//        return response()->json($product, 200);
        return view('admin.listAdmin.Product.SmartPhone.listProductPhone')->with('product',$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.listAdmin.Product.SmartPhone.formProductPhone')->with([
            "product"=> new Product(),
            "action"=>"/smartphone",
            "method"=>"POST"
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'bail|required|unique:products|max:50',
            'description' => 'required',
            'price' => 'required',
            'thumbnail' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('smartphone/create')
                ->withErrors($validator->errors())
                ->withInput();
        }

        $product = new Product();
        $product->title = $request->get("title");
        $product->description = $request->get("description");
        $product->price = $request->get("price");
        $product->thumbnail = $request->get("avatar2");
        $product->categoryId = 1;
        $product->save();
        return redirect('/smartphone');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        if ($product==null){
            return redirect("errors");
        }
        return view('admin.listAdmin.Product.SmartPhone.formProductPhone')->with([
            "product"=> $product,
            "action"=>"/smartphone/" . $product->id,
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
        $product = Product::find($id);
        if ($product == null) {
            return view("errors.404");
        }

        $product->title = $request->get("title");
        $product->description = $request->get("description");
        $product->price = $request->get("price");
        $product->thumbnail = $request->get('avatar2');
        $product->save();
        if ($request->get("isAjax")) {
            return $product;
        } else {
            return redirect("smartphone");
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
        $user = Product::find($id);
        $user->delete();
        return redirect('smartphone');
    }


    public function showPC()
    {
        $product =Product::where('category','=',3)
            ->get();
//        return response()->json($product, 200);
        return view('admin.listAdmin.Product.SmartPhone.listProductPhone')->with('product',$product);
    }
    public function showLaptop()
    {
        $product =Product::where('category','=',2)
            ->get();
//        return response()->json($product, 200);
        return view('admin.listAdmin.Product.SmartPhone.listProductPhone')->with('product',$product);
    }
    public function showConsole()
    {
        $product =Product::where('category','=',4)
            ->get();
//        return response()->json($product, 200);
        return view('admin.listAdmin.Product.SmartPhone.listProductPhone')->with('product',$product);
    }

}
