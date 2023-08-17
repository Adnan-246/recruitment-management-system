<?php

namespace App\Http\Controllers\Role_type;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use DB;
use App\Models\Job;
use App\Models\Candidate;
use App\Models\Interview;
use App\Models\Note;
use Auth;
use File;

class EmployeeController extends Controller
{
    public function index()
    {
        $interview = Interview::where('interviewer', Auth::user()->name)->get();

       // dd($interview);

         return view('employee-portal.employee-dashboard.index', compact('interview'));
    }
}
