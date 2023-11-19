<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class AdminStatus extends Controller
{
    public function ConfrimToDeliver($order_id){
        Order::findOrfail($order_id)->update(['status'=>'deliverd']);
        $notification = array (
            'message' =>'Brand Inserted Successfully',
            'alert-type' =>'success'
        );
       
        return redirect()->route('all.brand')->with($notification);
    }
    public function AdminInvoiceDownload($order_id){
        $order = Order::where('id',$order_id)->first();
        $orderItem = OderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();

        $pdf = Pdf::loadView('frontend.order.order_invoice',compact('order','orderItem'))->setPaper('a4')->setOption([
            'tempDir'=>public_path(),
            'chroot'=>public_path(),
        ]); 
        return $pdf->download('invoice.pdf');
    }
}
