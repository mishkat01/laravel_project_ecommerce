<?php
namespace App\Http\Controllers;
//**MY use of auth and http req */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\Order;




class AdminController extends Controller
{
    public function AdminDashboard(){
        $order_count = Order::count();
        $user_count = User::count();
        // $order_pending = Order::where('status', 'pending')->count();
        // $all_total = Order::

        // $order_recived = Order::where('status', 'recived')->count();;
        $all_order = Order::orderBy('id','DESC')->get();

        return view ('admin.index',compact('user_count','all_order','order_count'));
    }
    public function AdminDestroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array (
            'message' =>'User logout Successfully',
            'alert-type' =>'success'
        );

        return redirect('/admin/login')->with($notification);
    }


    public function AdminLogin(){
        return view('admin.admin_login');
    }
    public function AdminProfile(){
       $id = Auth::user()->id;
       $adminData = User::find($id);
       return view('admin.admin_profile_view',compact('adminData'));
    }
}
