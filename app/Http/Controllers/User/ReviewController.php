<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function reviewStore(Request $request){
// dd($request->all());
        $product = $request->product_id;

        $request->validate([

            'summary' => 'required',
            'comment' => 'required',
        ]);

        Review::create([
            'product_id' => $product,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
            'summary' => $request->summary,

        ]);

        $notification = array(
            'message' => 'Review Will Approve By Admin',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method
    public function pendingReview(){

        $id = Auth::user()->id;
        $review = Review::where('admins_id', $id)->where('status',0)->orderBy('id','DESC')->get();
        return view('backend.review.pending_review',compact('review'));

    } // end method



    public function reviewApprove($id){
//        $id = Auth::user()->id;
        $x =Review::where('id',$id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Review Approved Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method

    public function publishReview(){
        $id = Auth::user()->id;
        $review = Review::where('admins_id', $id)->where('status',1)->orderBy('id','DESC')->get();
        return view('backend.review.publish_review',compact('review'));
    }

    public function deleteReview($id){

        Review::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Review Delete Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method
}
