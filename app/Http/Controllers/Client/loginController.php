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
        $account = Accounts::where('phone', $request->input('phone'))->get();


    }



}
