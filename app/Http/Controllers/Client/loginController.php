<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
    public function phone()
    {
        return 'phone';
    }
    public function password(){
        return 'password';
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
}
