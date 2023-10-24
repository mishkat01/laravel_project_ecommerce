<?php
namespace App\Http\Controllers;

//**MY use of auth and http req */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse; 
use App\Models\User;

class UserController extends Controller
{
    public function UserDashboard(){
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view ('index',compact('userData'));
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
