<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin.auth')->except(['loginForm','loginHandle']);
    }

    /**
     * login page view
     */
    public function loginForm() {
        return view('admin.login.login');
    }

    /**
     * handle login
     */
    public function loginHandle(Request $request) {
        $status = Auth::guard('admin')->attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);
//        dd($status);
        if ($status) {
            return redirect('/admin/index');
        }
        return redirect('/admin/login')->with('error','Invalid username or password.');
    }

    /**
     * admin index view
     */
    public function index() {
//        dd(Auth::guard('admin')->user()->username);
        return view('admin.login.index');
    }

    /**
     * handle logout
     */
    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

}
