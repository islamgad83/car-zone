<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;


class ReportController extends Controller
{
    public function reportView(){

        return view('backend.report.report_view');
    }
    public function reportByDate(Request $request){
        // return $request->all();
        $date = new DateTime($request->date);
        $formatDate = $date->format('d F Y');
        // return $formatDate;
        $id = Auth::user()->id;
        $orders = Order::where('admins_id', $id)->where('order_date',$formatDate)->latest()->get();
        return view('backend.report.report_show',compact('orders'));
    } // end mehtod

    public function reportByMonth(Request $request){
        $id = Auth::user()->id;
        $orders = Order::where('admins_id', $id)->where('order_month',$request->month)->where('order_year',$request->year_name)->latest()->get();
        return view('backend.report.report_show',compact('orders'));

    } // end mehtod

    public function reportByYear(Request $request){
        $id = Auth::user()->id;
        $orders = Order::where('admins_id', $id)->where('order_year',$request->year)->latest()->get();
        return view('backend.report.report_show',compact('orders'));

    } // end mehtod
}
