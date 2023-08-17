<?php

namespace App\Http\Controllers\Employee_Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Crypt;
use Hash;
use Auth;
use App\Models\User;
use Image;
use File;

class EmployeeProfileController extends Controller
{
    public function index()  
    {
      return view('employee-portal.employee-profile.index');
    }

      //__Update Profile__//
      public function update(Request $request,$id)
      {


       $user=User::find($id); //get the record
    

      if($request->image){
       $image_name =time().'.'.$request->image->getClientOriginalextension();
       $request->image->move(public_path('media'),$image_name);
       $path ="/media/".$image_name;
      }else{
       $existImage = $user->image;
      }
       $user->update([  
        
        'image' =>$request->image ?  $path : $existImage,
        'f_name' => $request->f_name,
        'l_name' => $request->l_name,
        'department' => $request->department,
        'position' => $request->position,
        'email' => $request->email,
        'phone' => $request->phone,
        'country' => $request->country,
        'state' => $request->state,
        'city' => $request->city,
        'zip_code' => $request->zip_code,
        'address' => $request->address,
        'about' => $request->about,
        'education' => $request->education,

       ]);
       
       $notification = array('message' => 'Profile Updated Successfully!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
      }
}
