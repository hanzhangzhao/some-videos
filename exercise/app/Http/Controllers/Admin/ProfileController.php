<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ChangePasswordPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ProfileController extends Controller
{
    public function passwordForm() {
        return view('admin.profile.passwordForm');
    }

    public function changePassword(ChangePasswordPost $request) {
        $model = Auth::guard('admin')->user();
        $model->password = bcrypt($request['password']);
        $model->save();
        flash('Successfully changed password')->overlay();

        return redirect()->back();
    }
}
