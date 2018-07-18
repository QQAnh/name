<?php

namespace App\Http\Controllers\Client;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


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

    public function getLogin()
    {
        return view('client.listClient.login');

    }

    public function postLogin(Request $request)
    {
        $rules = [
            'phone' => 'required|phone',
            'password' => 'required'
        ];
        $messages = [
            'phone.required' => 'Email là trường bắt buộc',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $email = $request->input('phone');
            $password = $request->input('password');

            if (Auth::attempt(['phone' => $email, 'password' => $password])) {
                return redirect()->intended('/');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Phone hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }

    public function getListSmartPhone(){
        $category = Category::all();
        $product = Product::where('category',1)->get();
        return view('client.listClient.smartphone')->with('category',$category)->with('product',$product);
    }

    public function getListPC()
{
    $category = Category::all();
    $product = Product::where('category', 3)->get();
    return view('client.listClient.pc')->with('category', $category)->with('product', $product);
}
    public function getListLaptop()
    {
        $category = Category::all();
        $product = Product::where('category', 2)->get();
        return view('client.listClient.laptop')->with('category', $category)->with('product', $product);
    }
    public function getListConsole()
    {
        $category = Category::all();
        $product = Product::where('category', 4)->get();
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
}