<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function getList(){
        $todo =Todo::get();
        return response()->json([
           'todo'=>$todo
        ]);
    }
}
