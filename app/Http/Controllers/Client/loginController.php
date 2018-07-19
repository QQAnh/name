<?php

namespace App\Http\Controllers\Client;

use App\Account;
use App\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
    public function getLogin()
    {
        return view('client.listClient.login');

    }

    public function getPhone(Request $request)
    {


//        $phone = $request->input('phone');
//        $password = $request->input('password');
//        $account = Accounts::where('phone', $phone)->where('password',$password)->get();
//        if ($account == null) {
//            return "tai khoan ko ton tai";
//
//
//        } else {
//            return "success";
//        }
//        return $request->input('phone');

        $phone = $request->input('phone');
        $password = $request->input('password');


        $salt = Account::where('phone',$phone)->value('salt');
        $passwordGet = Account::where('phone',$phone)->value('password');
        $passwordNonEncrypt = $password . $salt;
        $passwordEncrypt = md5($passwordNonEncrypt);
        $role =  Account::where('phone',$phone)->value('role');
        if ($passwordGet == $passwordEncrypt && $role == 'Admin'){

            return view('admin/listAdmin/dashboard');
        }else{

            return view('client.listClient.login')->flash('successMsg','Saved succesfully!');
        }
//        return md5($password.$salt);
//        $account = DB::table('accounts')->where('phone',$phone)->get();
//        $account = Account::where('phone',$phone)->get();
        return  ;






//        if ($phone == '12345' && $password =='Admin'){
//            return view('admin/listAdmin/dashboard');
//
//        }else{
//            return view('client.listClient.login');
//        }
//        $account = Account::where('phone',$phone)->value('password');

        return $account ;



    }


    public function handleRequest(Request $request)
    {
        return $request->input('name');
    }

}
