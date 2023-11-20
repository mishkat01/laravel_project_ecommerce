<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Models\Order;
use App\Models\OderItem;
use Carbon\Carbon;

class PlaceOrderController extends Controller
{
    public function PendingOrder(){
        $orders = Order::where('status','pending')->orderBy('id','DESC')->get();
        return view('backend.orders.pending_orders',compact('orders'));
    }

    public function deliverdOrder()  {
        $orders = Order::where('status','deliverd')->orderBy('id','DESC')->get();
        return view('backend.orders.deliverd_orders',compact('orders'));
    }
    public function completeOrder()  {
        $orders = Order::where('status','recived')->orderBy('id','DESC')->get();
        return view('backend.orders.deliverd_orders',compact('orders'));
    }

    public function AdminOrderDetails($order_id){
        $order = Order::where('id',$order_id)->first();
        $orderItem = OderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
        return view('backend.orders.admin_order_details',compact('order','orderItem'));
}
}
