<?php

namespace App\Http\Controllers\Employee_Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Models\Job;
use App\Models\Applicant;
use App\Models\Interview;
use App\Models\Note;
use Auth;
use File;

class EmployeeInterviewController extends Controller
{
    public function index()
    {
      

        $interview = Interview::where('interviewer', Auth::user()->name)->get();
       
     

     //  dd($interviews);

         return view('employee-portal.employee-interview.index',compact('interview'));
    }
}
