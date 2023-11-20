<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class UserStatus extends Controller
{
    
        public function DeliveToRecived($order_id){
            Order::findOrfail($order_id)->update(['status'=>'recived']);
            $notification = array (
                'message' =>'Order Recived Successfully',
                'alert-type' =>'success'
            );
           
            return redirect()->route('dashboard')->with($notification);
        }
   
}
