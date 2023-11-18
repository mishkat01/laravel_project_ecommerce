<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Auth;


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
                'weight'=>1,
                'options'=>[
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
                'weight'=>1,
                'options'=>[
                    'image'=>$product->product_thambnail,
                ]
                ]);
                return response()->json([
                    'success'=>'successfully add to cart'
                ]);
        }
    }

    public function AddMiniCart(){
        $carts = Cart::content();
        $cartQty= Cart::count();
        $cartTotal = Cart::total();
        return response()->json(array(
            'carts'=>$carts,
            'cartQty'=> $cartQty,
            'cartTotal'=> $cartTotal,

        ));
    }//end method

    public function RemoveMiniCart($rowId){
        Cart::remove($rowId);
        return response()->json(['success'=> 'product removed']);
    }

    public function AddMiniCartHome(Request $request,$id){
        $product = Product::findOrFail($id);
        if($product->discount_price == NULL){
            Cart::add([
                'id'=>$id,
                'name' => $request->product_name,
                'qty' => $request->qty,
                'price' => $product->selling_price,
                'weight'=>1,
                'options'=>[
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
                'weight'=>1,
                'options'=>[
                    'image'=>$product->product_thambnail,
                ]
                ]);
                return response()->json([
                    'success'=>'successfully add to cart'
                ]);
        }
    }


    public function AddMiniCartDetails(Request $request,$id){
        $product = Product::findOrFail($id);
        if($product->discount_price == NULL){
            Cart::add([
                'id'=>$id,
                'name' => $request->product_name,
                'qty' => $request->qty,
                'price' => $product->selling_price,
                'weight'=>1,
                'options'=>[
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
                'weight'=>1,
                'options'=>[
                    'image'=>$product->product_thambnail,
                ]
                ]);
                return response()->json([
                    'success'=>'successfully add to cart'
                ]);
        }
    }

    public function MyCart(){
        return view('frontend.mycart.view_mycart');
    }

    public function GetCartProduct(){
        $carts = Cart::content();
        $cartQty= Cart::count();
        $cartTotal = Cart::total();
        return response()->json(array(
            'carts'=>$carts,
            'cartQty'=> $cartQty,
            'cartTotal'=> $cartTotal,
            

        ));
    }

    public function CartRemove($rowId){
        Cart::remove($rowId);
        return response()->json(['success'=> 'product removed']);
    }
    public function  CartDec($rowId){
        $row = Cart::get($rowId);
        Cart::update($rowId,$row->qty-1);
        return response()->json('dec');
    }
    public function  CartInc($rowId){
        $row = Cart::get($rowId);
        Cart::update($rowId,$row->qty+1);
        return response()->json('Inc');
    }
  
    public function CheckoutCreate() {
        if(Auth::check()){
            if(Cart::total()>0){
                $carts = Cart::content();
                 $cartQty= Cart::count();
               $cartTotal = Cart::total();
               return view('frontend.checkout.checkout_view',compact('carts','cartQty','cartTotal'));
            }else{
                $notification = array (
                    'message' =>'Shop atleast One Product',
                    'alert-type' =>'error'
                );
               
                return redirect()->route('home')->with($notification);
            }

        }else{
            $notification = array (
                'message' =>'Please Login',
                'alert-type' =>'error'
            );
           
            return redirect()->route('login')->with($notification);
        }
    }

    public function CheckoutStore(){
        
    }

}
