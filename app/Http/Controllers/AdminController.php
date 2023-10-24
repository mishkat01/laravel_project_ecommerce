<?php
namespace App\Http\Controllers;
//**MY use of auth and http req */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;




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

        return redirect('/admin/login');
    }


    public function AdminLogin(){
        return view('admin.admin_login');
    }
}
