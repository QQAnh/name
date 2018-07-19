<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Account::all();
        return view('admin.listAdmin.User.ListUser')->with('user',$user);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.listAdmin.User.FormUser')->with([
            "product"=> new Account(),
            "action"=>"/user",
            "method"=>"POST"
        ]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Account();
        $user->fullname = $request->get("fullname");
        $user->phone = $request->get("phone");
        $user->password = $request->get("password");
        $user->gender = $request->get("gender");
        $user->email = $request->get("email");
        $user->salt = rand();
        $user->role = 1;
        $user->status = '1';
        $user->avatar = $request->get('avatar2');
        $user->save();
        return redirect('user');
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
        $user = Account::find($id);
        if ($user==null){
            return redirect("errors");
        }
        return view('admin.listAdmin.User.FormUser')->with([
            "product"=> $user,
            "action"=>"/user/" . $user->id,
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
        $user = Account::find($id);
        if ($user == null) {
            return view("errors.404");
        }
        $password = $request->input('password');
        $user->salt = rand();
        $passwordselect = $password.$user->salt;
//        $user->fullname = $request->get("fullname");
//        $user->phone = $request->get("phone");
        $passwordpost = md5($passwordselect);
//        $user->password = $request->get($passwordpost);
         return  $passwordpost;
//        $user->password = $request->get($passwordpost);
//        $user->gender = $request->get("gender");
//        $user->email = $request->get("email");
//        $user->role = 'Member';
//        $user->status = 1;
//        $user->avatar = $request->get('avatar2');
//        $user->save();
//        if ($request->get("isAjax")) {
//            return $user;
//        } else {
//            return redirect("user");
//        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
