<?php
namespace App\Http\Controllers;

//**MY use of auth and http req */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse; 
use App\Models\User;
use App\Models\Order;
use App\Models\OderItem;
use App\Models\Product;

class UserController extends Controller
{
    public function UserOrderDetails($order_id){
            $order = Order::where('id',$order_id)->where('user_id',Auth::id())->first();
            $orderItem = OderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
            return view('frontend.order.order_details',compact('order','orderItem'));
    }
    public function UserDashboard(){
        $id = Auth::user()->id;
        $userData = User::find($id);
        $order = Order::where('user_id',$id)->orderBy('id','DESC')->get();
        return view ('index',compact('userData','order'));
    }
    public function UserDestroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array (
            'message' =>'User logout Successfully',
            'alert-type' =>'success'
        );

        return redirect('/login')->with($notification);
    }
}
