<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function viewWishlist(){
        $wishlist = Wishlist::with('product')->where('user_id',Auth::id())->latest()->get();
        return view('user.wishlist.view_wishlist')->with('wishlist', $wishlist);
    }

    // add to wishlist method
    public function addToWishlist(Request $request, $product_id)
    {
        if (Auth::check())
        {
            $exists = Wishlist::where('user_id',Auth::id())->where('product_id',$product_id)->first();

            if (!$exists) {
                Wishlist::Create([
                    'user_id' => Auth::id(),
                    'product_id' => $product_id,
                ]);
                return response()->json(['success' => 'Successfully Added On Your Wishlist']);
            } else{
                return response()->json(['error' => 'This Product has Already on Your Wishlist']);
            }

        }else{
            $notification = array(
                'message' => 'At First Login Your Account',
                'alert-type' => 'errors'
            );
            return redirect()->route('login')->with($notification);

        }
    }

    public function getWishlistProduct(){

        $wishlist = Wishlist::with('product')->where('user_id',Auth::id())->latest()->get();
        return response()->json($wishlist);
    } // end method

    public function removeWishlistProduct($id){

        Wishlist::where('user_id',Auth::id())->where('id',$id)->delete();
        return response()->json(['success' => 'Successfully Product Remove']);
    }

    public function wishlistCount(){
        $wishlistCount = Wishlist::where('user_id',Auth::id())->count();
        return response()->json( ['wishlistTotal' => $wishlistCount]);
    } // end method


}
