<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/','Client\HomepageController@index');
Route::get('/test/{id}','Client\HomepageController@test');

Route::resource('/register','Client\RegisterController');

//Route::get('/login','Client\loginController@getLogin');
//Route::get('','Client\HomepageController@getIndex');
Route::get('/listItem','Client\HomepageController@listItem');


Route::get('/login','Client\loginController@getLogin');
Route::post('/login','Client\loginController@getPhone');
//Route::get('/register',function (){
//    return view('client.listClient.register');
//});
//Route::post('/register','Client\RegisterController@store');


Route::get('/admin', function (){
    return view('admin.listAdmin.dashboard');
});
//Route::get('/', function (){
//    return view('client.listClient.register');
//});
Route::resource('user','AccountsController');
Route::resource('/order','OrderController');
Route::resource('/admin/smartphone','ProductSmartPhonesController');
Route::post('admin/smartphone/destroy/{id}','ProductSmartPhonesController@destroy');




Route::get('/admin/pc','ProductSmartPhonesController@showPC');
Route::post('/admin/pc','ProductSmartPhonesController@storePC');
Route::get('/admin/pc/create','ProductSmartPhonesController@createPC');
Route::get('/admin/pc/{id}/edit','ProductSmartPhonesController@editPC');
Route::put('/admin/pc/{id}','ProductSmartPhonesController@updatePC');


Route::get('/admin/laptop','ProductSmartPhonesController@showLaptop');
Route::post('/admin/laptop','ProductSmartPhonesController@storeLaptop');
Route::get('/admin/laptop/create','ProductSmartPhonesController@createLaptop');
Route::get('/admin/laptop/{id}/edit','ProductSmartPhonesController@editLaptop');
Route::put('/admin/laptop/{id}','ProductSmartPhonesController@updateLaptop');



Route::get('/admin/console','ProductSmartPhonesController@showConsole');
Route::post('/admin/console','ProductSmartPhonesController@storeConsole');
Route::get('/admin/console/create','ProductSmartPhonesController@createConsole');
Route::get('/admin/console/{id}/edit','ProductSmartPhonesController@editConsole');
Route::put('/admin/console/{id}','ProductSmartPhonesController@updateConsole');





Route::get('/admin/category',function (){
    $category = \Illuminate\Support\Facades\DB::table('categories')->get();
    return view('admin.listAdmin.Category.listCategory')->with('category',$category);
});
Route::post('/admin/category',function (\Illuminate\Http\Request $request){
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
});
Route::get('/admin/category/create',function (){
    return view('admin.listAdmin.Category.formCategory')->with([
        "product"=> new \App\Category(),
        "action"=>"/admin/category",
        "method"=>"POST"
    ]);
});
Route::get('/admin/category/{id}/edit',function ($id){
    $product = \App\Category::find($id);
    if ($product==null){
        return redirect("errors");
    }
    return view('admin.listAdmin.Category.formCategory')->with([
        "product"=> $product,
        "action"=>"/admin/category/" . $product->id,
        "method"=>"PUT"
    ]) ;
});
Route::put('/admin/category/{id}',function (\Illuminate\Http\Request $request,$id){
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
});

Route::delete('/admin/category/destroy/{id}',function ($id){

     $categoy =  \App\Category::destroy($id);
    return redirect("/admin/category");
});





//////////////////     CLIENT      //////////////////////


Route::get('/smartphone','Client\HomepageController@getListSmartPhone');
Route::get('/laptop','Client\HomepageController@getListLaptop');
Route::get('/pc','Client\HomepageController@getListPC');
Route::get('/console','Client\HomepageController@getListConsole');




//Route::get('/admin/category',function (){
//    $category = Category::all();
//    return view('admin.listAdmin.SmartPhone.listProductPhone')->with('category',$category);
//});



Route::get('/intro','Client\HomepageController@index3');
Route::get('/contact','Client\HomepageController@index4');
