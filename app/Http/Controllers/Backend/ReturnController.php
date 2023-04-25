<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReturnController extends Controller
{
    public function returnRequest(){

        $id = Auth::user()->id;
        $orders = Order::where('admins_id', $id)->where('return_order',1)->orderBy('id','DESC')->get();
        return view('backend.return_order.return_request',compact('orders'));

    }

    public function returnRequestApprove($order_id){
        $id = Auth::user()->id;
        Order::where('admins_id', $id)->where('id',$order_id)->update(['return_order' => 2]);

        $notification = array(
            'message' => 'Return Order Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end mehtod


    public function returnAllRequest(){
        $id = Auth::user()->id;
        $orders = Order::where('admins_id', $id)->where('return_order',2)->orderBy('id','DESC')->get();
        return view('backend.return_order.all_return_request',compact('orders'));

    }
}
