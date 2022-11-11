<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $notification = [
          'alert-type'=>'success',
          'message'=>"Successfully Logged out!"
        ];
        return redirect('/login')->with($notification);
    }
    public function adminProfile()
    {
        $adminData = User::find(Auth::user()->id);
        return view('admin.profile.admin_profile_view',compact('adminData'));
    }
    public function adminEditProfile($id)
    {
        $editData = User::find(Auth::user()->id);
        return view('admin.profile.admin_profile_edit',compact('editData'));
    }
    public function adminUpdateProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;

        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');

            $filename = date('Y_m_d_Hi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_image'] = $filename;
        }
        $data->save();
        $notification = [
          'alert-type'=>'info',
          'message'=>'Admin Profile Updated!!'
        ];
        return redirect()->route('admin_profile')->with($notification);

    }
}
