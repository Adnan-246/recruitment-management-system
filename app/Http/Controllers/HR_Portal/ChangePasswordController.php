<?php

namespace App\Http\Controllers\HR_Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Crypt;
use Hash;
use Auth;

class ChangePasswordController extends Controller
{
    public function changepass()
    {
        return view('hr-portal.hr-password.changePassword');

    }

    public function updatePassword(Request $request)
    {
       $request->validate([
           'old_password' => 'required',
           'password' => 'required|min:4|max:12|string|confirmed',
           'password_confirmation' =>'required',
       ]);
  
       $user = Auth::user();
  
       if(Hash::check($request->old_password, $user->password)){
  
           $user->password=Hash::make($request->password); //hasing password from input field
           $user->save();
  
           $notification = array('message' => 'Password Changed Successfully!', 'alert-type' => 'success');
           return redirect()->route('hr')->with($notification);
  
       }else{
           return redirect()->back()->with('error', 'Current Password Not Matched');
       }
  
      
    }
}
