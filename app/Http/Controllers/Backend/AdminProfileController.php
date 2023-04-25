<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Order;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\DateTime;

class AdminProfileController extends Controller
{

    public function dashboardData()
    {
        $id = Auth::user()->id;
        $orders = Order::where('admins_id', $id)->where('status','pending')->orderBy('id','DESC')->get();
        $date = date('d-m-y');
        $today = Order::where('admins_id', $id)->where('order_date',$date)->sum('amount');
        $month = date('F');
        $month = Order::where('admins_id', $id)->where('order_month',$month)->sum('amount');
        $year = date('Y');
        $year = Order::where('admins_id', $id)->where('order_year',$year)->sum('amount');
        $pending = Order::where('admins_id', $id)->where('status','pending')->get();


        return view('admin.index', compact(['orders', 'today', 'month', 'year', 'pending']));
    }


    public function adminProfile()
    {
        $id = Auth::user()->id;
        $adminData = Admin::find($id);
        return view('admin.profile.admin_profile', compact('adminData'));
    }


    public function adminProfileEdit()
    {
        $id = Auth::user()->id;
        $editData = Admin::find($id);
        return view('admin.profile.admin_profile_edit', compact('editData'));
    }

    public function adminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = Admin::find($id);
        $data->name = $request->name;
        $data->email = $request->email;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/admin/profile/'.$data->profile_photo_path));
            $fileName =  Carbon::now()->format('Y-m-d-H-i').$file->getClientOriginalName();
            $file->move(public_path('upload/admin/profile'),$fileName);
            $data['profile_photo_path'] = $fileName;
        }
        $data->save();

        $notifications = array(
            'message' => 'Admin profile is updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.profile')->with($notifications);
    }

    public function adminChangePassword()
    {
        return view('admin.profile.adminChangePassword');
    }

    public function adminUpdatePassword(Request $request)
    {
       $validatePassword = $request->validate([
           'current_password' => 'required',
           'password' => 'required|confirmed'
       ]);

        $hashedPassword = Auth::user()->password;
       if (Hash::check($request->current_password,$hashedPassword)) {
           $admin = Admin::find(Auth::id());
           $admin->password = Hash::make($request->password);
//           dd($admin);
           $admin->save();
           Auth::logout();

           $notifications = array(
               'message' => 'New Password is updated',
               'alert-type' => 'success'
           );
           return redirect()->route('admin.logout')->with($notifications);
       }else
       {
           $notifications = array(
               'message' => 'Password is incorrect',
               'alert-type' => 'errors'
           );
           return redirect()->back()->with($notifications);
       }

    }

    public function allUsers(){

        if (Auth::user()->id == '1') {

            $users = User::latest()->get();
            return view('backend.user.all_user',compact('users'));

        }else
        {
            return view('backend.setting.admin_roll');
        }

    }
    public function deleteUser($id){
        User::findOrFail($id)->delete();
       
        $users = User::latest()->get();
        return view('backend.user.all_user',compact('users'));
    }
}
