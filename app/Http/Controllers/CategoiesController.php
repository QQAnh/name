<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = \Illuminate\Support\Facades\DB::table('categories')->get();
        return view('admin.listAdmin.Category.listCategory')->with('category',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            return view('admin.listAdmin.Category.formCategory')->with([
                "product"=> new \App\Category(),
                "action"=>"/admin/category",
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
            'thumbnail' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/admin/category/create')
                ->withErrors($validator->errors())
                ->withInput();
        }
        $product = new \App\Category();
        $product->title = $request->get("title");
        $product->image_url = $request->get("avatar2");
        $product->save();
        return redirect('/admin/category');
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
        $product = \App\Category::find($id);
        if ($product==null){
            return redirect("errors");
        }
        return view('admin.listAdmin.Category.formCategory')->with([
            "product"=> $product,
            "action"=>"/admin/category/" . $product->id,
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
        $product = \App\Category::find($id);
        if ($product == null) {
            return view("errors.404");
        }
        $product->title = $request->get("title");
        $product->image_url = $request->get('avatar2');
        $product->save();
        if ($request->get("isAjax")) {
            return $product;
        } else {
            return redirect("/admin/category");
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
        $categoy =  \App\Category::find($id);
        $categoy->delete();
        return redirect("/admin/category");
    }
}
