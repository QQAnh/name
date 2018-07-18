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
//        $account = Accounts::where('phone', $request->input('phone'))->get();


        $rules = [
            'phone' =>'required',
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
            $phone = $request->input('phone');
            $password = $request->input('password');

            if( Auth::attempt(['email' => $phone, 'password' =>$password])) {
                return redirect()->intended('/');
            } else {
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }



}
