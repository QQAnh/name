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
        $product1 = DB::table('products')
            ->where('category','=',1)
            ->get();
        $product = $product1->where('status',1);
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
            "action"=>"/admin/smartphone",
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
            return redirect('/admin/smartphone/create')
                ->withErrors($validator->errors())
                ->withInput();
        }
        $product = new Product();
        $product->title = $request->get("title");
        $product->description = $request->get("description");
        $product->price = $request->get("price");
        $product->thumbnail = $request->get("avatar2");
        $product->category = 1;
        $product->save();
        return redirect('/admin/smartphone');
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
            "action"=>"/admin/smartphone/" . $product->id,
            "method"=>"PUT"
        ]) ;
    }
    public function deleteSmartPhone($id)
    {

    }
    public function updateStatus(Request $request, $id)
    {

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
            return redirect("/admin/smartphone");
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

    }











    public function showPC()
    {
        $product1 =Product::where('category','=',3)
            ->get();
        $product = $product1->where('status','=',1);
//        return response()->json($product, 200);
        return view('admin.listAdmin.Product.PC.listProductPC')->with('product',$product);
    }
    public function createPC()
    {
        return view('admin.listAdmin.Product.PC.formProductPC')->with([
            "product"=> new Product(),
            "action"=>"/admin/pc",
            "method"=>"POST"
        ]);
    }
    public function storePC(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'bail|required|unique:products|max:50',
            'description' => 'required',
            'price' => 'required',
            'thumbnail' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/admin/pc/create')
                ->withErrors($validator->errors())
                ->withInput();
        }
        $product = new Product();
        $product->title = $request->get("title");
        $product->description = $request->get("description");
        $product->price = $request->get("price");
        $product->thumbnail = $request->get("avatar2");
        $product->category = 3;
        $product->save();
        return redirect('/admin/pc');
    }
    public function editPC($id)
    {
        $product = Product::find($id);
        if ($product==null){
            return redirect("errors");
        }
        return view('admin.listAdmin.Product.PC.formProductPC')->with([
            "product"=> $product,
            "action"=>"/admin/pc/" . $product->id,
            "method"=>"PUT"
        ]) ;
    }
    public function updatePC(Request $request, $id)
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
            return redirect("/admin/pc");
        }
    }















    public function showLaptop()
    {
        $product1 =Product::where('category','=',2)
            ->get();
        $product = $product1->where('status','=',1);

//        return response()->json($product, 200);
        return view('admin.listAdmin.Product.Laptop.listProductLaptop')->with('product',$product);
    }
    public function createLaptop()
    {
        return view('admin.listAdmin.Product.Laptop.formProductLaptop')->with([
            "product"=> new Product(),
            "action"=>"/admin/laptop",
            "method"=>"POST"
        ]);
    }
    public function storeLaptop(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'bail|required|unique:products|max:50',
            'description' => 'required',
            'price' => 'required',
            'thumbnail' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/admin/laptop/create')
                ->withErrors($validator->errors())
                ->withInput();
        }
        $product = new Product();
        $product->title = $request->get("title");
        $product->description = $request->get("description");
        $product->price = $request->get("price");
        $product->thumbnail = $request->get("avatar2");
        $product->category = 2;
        $product->save();
        return redirect('/admin/laptop');
    }
    public function editLaptop($id)
    {
        $product = Product::find($id);
        if ($product==null){
            return redirect("errors");
        }
        return view('admin.listAdmin.Product.Laptop.formProductLaptop')->with([
            "product"=> $product,
            "action"=>"/admin/laptop/" . $product->id,
            "method"=>"PUT"
        ]) ;
    }
    public function updateLaptop(Request $request, $id)
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
            return redirect("/admin/laptop");
        }
    }














    public function showConsole()
    {
        $product1 =Product::where('category','=',4)
            ->get();
        $product = $product1->where('status','=',1);

//        return response()->json($product, 200);
        return view('admin.listAdmin.Product.Console.listProductConsole')->with('product',$product);
    }
    public function createConsole()
    {
        return view('admin.listAdmin.Product.Console.formProductConsole')->with([
            "product"=> new Product(),
            "action"=>"/admin/console",
            "method"=>"POST"

        ]);
    }
    public function storeConsole(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'bail|required|unique:products|max:50',
            'description' => 'required',
            'price' => 'required',
            'thumbnail' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/admin/console/create')
                ->withErrors($validator->errors())
                ->withInput();
        }
        $product = new Product();
        $product->title = $request->get("title");
        $product->description = $request->get("description");
        $product->price = $request->get("price");
        $product->thumbnail = $request->get("avatar2");
        $product->category = 4;
        $product->save();
        return redirect('/admin/console');
    }
    public function editConsole($id)
    {
        $product = Product::find($id);
        if ($product==null){
            return redirect("errors");
        }
        return view('admin.listAdmin.Product.Console.formProductConsole')->with([
            "product"=> $product,
            "action"=>"/admin/console/" . $product->id,
            "method"=>"PUT"
        ]) ;
    }
    public function updateConsole(Request $request, $id)
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
            return redirect("/admin/console");
        }
    }

}
