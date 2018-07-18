<?php
namespace App\Http\Controllers;
use App\UserMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index(){
        return view('admin.listAdmin.dashboard');
    }
    public function loginAdmin(){
        return view('admin.listAdmin.login');
    }
//    public function listOrderUser(){
////        $order = DB::table('orders')->join('user_members','orders.UserId','=','user_members.id')
////            ->select('orders.*','user_members.fullname','user_members.avatar')->where('user_members.id','=','3')
////            ->get();
//        $order = DB::table('orders_detail')->join('user_members','orders_detail.UserId','=','user_members.id')
//            ->select('orders_detail.*','user_members.fullname','user_members.avatar')
//            ->get();
//        return view('admin.listAdmin.Order.OrderUser')->with('order',$order);
//    }
    public function searchPhone(Request $request){
        $key = $request->input('title');
        $user = UserMember::where('fullname','like', '%'.$key.'%')
            ->orwhere('phone', 'like','%'.$key.'%')
            ->get();
        return view('admin.listAdmin.Product.listProduct')->with('user', $user) ;
    }
    public function demoSearch(){
        return view('admin.listAdmin.Product.formProduct');
    }
//    public function chart(){
//        return view('admin.listAdmin.Chart.HighChart');
//    }
//    public function listUser(){
//        $user = UserMember::all();
//        return view('admin.listAdmin.User.ListUser')->with('user',$user) ;
//    }
//    public function formUser(){
//        return view('admin.listAdmin.User.FormUser');
//    }
//}
}