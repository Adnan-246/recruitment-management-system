<?php

namespace App\Http\Controllers\Role_type;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Models\Job;
use App\Models\Candidate;
use App\Models\Interview;
use App\Models\Employee;
use App\Models\Note;
use App\Models\User;
use App\Models\Role;
use Auth;
use File;

class HMController extends Controller
{
    public function index()
    {
        
       // $interview = Interview::where('interview_status','Accepted')->get();
        $interview = Interview::where('interviewer', Auth::user()->name)->get();
        $users = User::all();
        $employees = Employee::all();
      // dd($interview->applicant->position_name);

         return view('hm-portal.hm-dashboard.index',compact('interview','users','employees'));
    }
}
