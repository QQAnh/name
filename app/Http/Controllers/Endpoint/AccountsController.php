<?php

namespace App\Http\Controllers\Endpoint;

use App\Accounts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = Accounts::all();
        return response()->json($account, 201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $accountJson = $request->json()->all();
        try {
            $account = new Accounts();
            $account->fullname = $accountJson['fullname'];
            $account->phone = $accountJson['phone'];
            $account->password = $accountJson['password'];
            $account->email = $accountJson['email'];
            $account->gender = $accountJson['gender'];
            $account->salt = $accountJson['salt'];
            $account->role = $accountJson['role'];
            $account->status = $accountJson['status'];
            $account->save();
            return response()->json($accountJson, 201);
        } catch (EXCEPTION $exception) {
            return response()->json($exception->errors(), 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = Accounts::find($id);
        return response()->json($account, 201);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    public function getByPhone(Request $phone){
        $account = Accounts::where('phone', 'like', $phone)->get();
        return response()->json($account,200);    }
}
