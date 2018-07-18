<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function check(Request $request)
    {
        $data=[
            'phone'=>$request->phone,
            'password'=>$request->password,
        ];
        if(Auth::attempt($data)){
            //true
        }else{
            //false
        }
    }
}