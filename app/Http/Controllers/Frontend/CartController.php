<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function AddToCart(Request $request,$id){
        $product = Product::findOrFail($id);
        if($product->discount_price == NULL){
            Cart::add([
                'id'=>$id,
                'name' => $request->product_name,
                'qty' => $request->qty,
                'price' => $product->selling_price,
                'weight'=>2,
                'option'=>[
                    'image'=>$product->product_thambnail,
                ],
                ]);
                return response()->json([
                    'success'=>'successfully add to cart'
                ]);
        }else{

            Cart::add([
                'id'=>$id,
                'name' => $request->product_name,
                'qty' => $request->qty,
                'price' => $product->discount_price,
                'option'=>[
                    'image'=>$product->product_thambnail,
                ]
                ]);
                return response()->json([
                    'success'=>'successfully add to cart'
                ]);
        }
    }
}
