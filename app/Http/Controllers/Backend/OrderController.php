<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Pending Orders
    public function pendingOrders(){

        $id = Auth::user()->id;
        $orders = Order::where('admins_id', $id)->where('status','pending')->orderBy('id','DESC')->get();
        return view('backend.orders.pending_orders',compact('orders'));
    } // end mehtod

//     Pending Order Details
    public function pendingOrdersDetails($order_id){
        $id = Auth::user()->id;
        $order = Order::where('admins_id', $id)->with('division','district','state','user')->where('id',$order_id)->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
        return view('backend.orders.pending_orders_details',compact('order','orderItem'));

    } // end method

    // Confirmed Orders
    public function confirmedOrders(){
        $id = Auth::user()->id;
        $orders = Order::where('admins_id', $id)->where('status','confirm')->orderBy('id','DESC')->get();
        return view('backend.orders.confirmed_orders',compact('orders'));

    } // end mehtod

    public function pendingToConfirm($order_id){
        $id = Auth::user()->id;
        Order::where('admins_id', $id)->findOrFail($order_id)->update(['status' => 'confirm']);

        $notification = array(
            'message' => 'Order Confirm Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('pending-orders')->with($notification);


    } // end method

    // Processing Orders
    public function processingOrders(){
        $id = Auth::user()->id;
        $orders = Order::where('admins_id', $id)->where('status','processing')->orderBy('id','DESC')->get();
        return view('backend.orders.processing_orders',compact('orders'));

    } // end mehtod


    // Picked Orders
    public function pickedOrders(){
        $id = Auth::user()->id;
        $orders = Order::where('admins_id', $id)->where('status','picked')->orderBy('id','DESC')->get();
        return view('backend.orders.picked_orders',compact('orders'));

    } // end mehtod



    // Shipped Orders
    public function shippedOrders(){
        $id = Auth::user()->id;
        $orders = Order::where('admins_id', $id)->where('status','shipped')->orderBy('id','DESC')->get();
        return view('backend.orders.shipped_orders',compact('orders'));

    } // end mehtod


    // Delivered Orders
    public function deliveredOrders(){
        $id = Auth::user()->id;
        $orders = Order::where('admins_id', $id)->where('status','delivered')->orderBy('id','DESC')->get();
        return view('backend.orders.delivered_orders',compact('orders'));

    } // end mehtod


    // Cancel Orders
    public function cancelOrders(){
        $id = Auth::user()->id;
        $orders = Order::where('status','cancel')->orderBy('id','DESC')->get();
        return view('backend.orders.cancel_orders',compact('orders'));

    } // end mehtod

    public function confirmToProcessing($order_id){
        $id = Auth::user()->id;

        Order::where('admins_id', $id)->findOrFail($order_id)->update(['status' => 'processing']);

        $notification = array(
            'message' => 'Order Processing Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('confirmed-orders')->with($notification);


    } // end method



    public function processingToPicked($order_id){
        $id = Auth::user()->id;
        Order::where('admins_id', $id)->findOrFail($order_id)->update(['status' => 'picked']);

        $notification = array(
            'message' => 'Order Picked Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('processing-orders')->with($notification);


    } // end method


    public function pickedToShipped($order_id){
        $id = Auth::user()->id;
        Order::where('admins_id', $id)->findOrFail($order_id)->update(['status' => 'shipped']);

        $notification = array(
            'message' => 'Order Shipped Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('picked-orders')->with($notification);


    } // end method


    public function shippedToDelivered($order_id){
        $id = Auth::user()->id;
        $product = OrderItem::where('order_id',$order_id)->get();
        foreach ($product as $item) {
            Product::where('admins_id', $id)->where('id',$item->product_id)
                ->update(['product_qty' => DB::raw('product_qty-'.$item->qty)]);
        }
        Order::findOrFail($order_id)->update(['status' => 'delivered']);

        $notification = array(
            'message' => 'Order Delivered Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('shipped-orders')->with($notification);


    } // end method

    public function adminInvoiceDownload($order_id){

        $id = Auth::user()->id;
        $order = Order::where('admins_id', $id)->with('division','district','state','user')->where('id',$order_id)->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();

        $pdf = PDF::loadView('backend.orders.order_invoice',compact('order','orderItem'))->setPaper('a4')->setOptions([
            'tempDir' => public_path(),
            'chroot' => public_path(),
        ]);
        return $pdf->download('invoice.pdf');

    } // end method
}
