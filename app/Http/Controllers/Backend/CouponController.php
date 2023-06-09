<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    public function couponView(){
        $id = Auth::user()->id;
        $coupons = Coupon::where('admins_id', $id)->orderBy('id','DESC')->get();
        return view('backend.coupon.view_coupon',compact('coupons'));
    }

    public function couponStore(Request $request){
        $request->validate([
            'coupon_name' => 'required',
            'coupon_discount' => 'required',
            'coupon_validity' => 'required',
        ]);

        // To check Admin
        $id = Auth::user()->id;
        $admin_id = \App\Models\Admin::where('id', $id)->max('id');

        Coupon::create([
            'coupon_name' => strtoupper($request->coupon_name),
            'coupon_discount' => $request->coupon_discount,
            'coupon_validity' => $request->coupon_validity,
            'admins_id' => $admin_id,
        ]);

        $notification = array(
            'message' => 'Coupon Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // end method
    public function couponEdit($id){
        $coupons = Coupon::findOrFail($id);
        return view('backend.coupon.edit_coupon',compact('coupons'));
    }


    public function couponUpdate(Request $request, $id){

        Coupon::findOrFail($id)->update([
            'coupon_name' => strtoupper($request->coupon_name),
            'coupon_discount' => $request->coupon_discount,
            'coupon_validity' => $request->coupon_validity,
        ]);

        $notification = array(
            'message' => 'Coupon Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('manage-coupon')->with($notification);


    } // end mehtod


    public function couponDelete($id){

        Coupon::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Coupon Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);

    }
}
