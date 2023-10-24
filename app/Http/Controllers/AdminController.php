<?php
namespace App\Http\Controllers;
//**MY use of auth and http req */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;




class AdminController extends Controller
{
    public function AdminDashboard(){
     
        return view ('admin.index');
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
