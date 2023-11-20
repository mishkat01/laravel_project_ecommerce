<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Models\Order;
use App\Models\OderItem;
use Carbon\Carbon;


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

    public function Order(Request $request){
        $string_decimal =Cart::total();
        $string_decimal_without_commas = str_replace(",", "", $string_decimal);
        $float_number = floatval($string_decimal_without_commas);
        $integer_number = intval($float_number);

        // $string =Cart::total();
        // $integer = (int) $string;
         $total_amount = round($integer_number);
         $order_id = Order::insertGetId([
            'user_id' =>Auth::id(),
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_id' => $request->state_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'adress' => $request->address,
            'post_code' => $request->post_code,
            'notes' => $request->notes,

            'payment_type' => 'Cash On Delivery',
            'payment_method' => 'Cash On Delivery',

            'currency' => 'Taka',
            'amount' => $total_amount,


            'invoice_no' => 'EOS'.mt_rand(10000000,99999999),
            'order_date' => Carbon::now()->format('d F Y'),
            'order_month' => Carbon::now()->format('F'),
            'order_year' => Carbon::now()->format('Y'), 
            'status' => 'pending',
            'created_at' => Carbon::now(),  

        ]);

        $carts = Cart::content();
        foreach($carts as $cart){
            OderItem::insert([
                'order_id' => $order_id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'price' => $cart->price,
                'created_at' =>Carbon::now(),
            ]);
        }//end foreach
        Cart::destroy();
        $notification = array (
            'message' =>'Oder Place successfull',
            'alert-type' =>'success'
        );
       
        return redirect()->route('dashboard')->with($notification);
    }

}
