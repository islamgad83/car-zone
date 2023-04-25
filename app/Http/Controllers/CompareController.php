<?php

namespace App\Http\Controllers;

use App\Models\Compare;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Auth;

class CompareController extends Controller
{
    public function addToCompare(Request $request)
    {
        $product_compare = session()->get('product_compare', []);
        $product_compare[$request->product_id] = $request->product_id;
        session()->put('product_compare', $product_compare);
        return response()->json(["Done", count($product_compare)]);
    }


    public function compare()
    {
        $product_compare = session()->get('product_compare', []);
        if (!empty($product_compare))
        {
            $products = Product::query()->whereIn('id', array_keys($product_compare))
                ->with(['brand', 'category'])->get();
            return view('user.product.compare')->with(['products' => $products]);
        }

        return view('user.product.compare');
    }

    public function removeCompareProduct(Request $request)
    {
        $product_compare = session()->get('product_compare', []);
        unset($product_compare[$request->id]);
        session()->put('product_compare', $product_compare);
        return response()->redirectTo('/compare');
    }

}
