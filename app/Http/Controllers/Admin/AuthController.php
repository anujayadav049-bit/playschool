<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if($admin && Hash::check($request->password, $admin->password)){
            session(['admin_logged_in' => true, 'admin_name' => $admin->name, 'admin_id' => $admin->id, 'admin_email' => $admin->email]);
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error','Invalid Email or Password');
    }

    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_name', 'admin_id', 'admin_email']);
        return redirect()->route('admin.login');
    }

    // === Forget Password - Only Password Change ===
    public function showForgot()
    {
        return view('admin.forgot');
    }

    public function handleForgot(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if(!$admin){
            return back()->withErrors(['email' => 'Admin ID not found!'])->withInput();
        }

        // Sirf password change hoga, email nahi
        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect()->route('admin.login')->with('success','Password Changed Successfully! Please Login with new password.');
    }
}