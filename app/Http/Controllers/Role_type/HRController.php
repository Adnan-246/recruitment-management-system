<?php

namespace App\Http\Controllers\Role_type;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Models\Job;
use App\Models\Candidate;
use App\Models\User;
use App\Models\Role;
use Auth;
use File;

class HRController extends Controller
{
    public function index()
    {
      
            
         $candidates = Candidate::all();

     //  dd($applicants);

      return view('hr-portal.hr-dashboard.index',compact('candidates'));

   //  return response()->json($applicants);
       
    }
}
