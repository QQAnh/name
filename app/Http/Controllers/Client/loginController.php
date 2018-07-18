<?php

namespace App\Http\Controllers\Client;

use App\Accounts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
    public function getLogin()
    {
        return view('client.listClient.login');

    }
    public function getPhone(Request $request){


            $phone = $request->input('phone');
            $password = $request->input('password');

            if( Auth::attempt(['email' => $phone, 'password' =>$password])) {
                return redirect()->intended('/');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Số điện thoại hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }



}
