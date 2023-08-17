<?php

namespace App\Http\Controllers\HM_Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Job;
use Illuminate\Support\Str;
use Auth;
use File;


class HMJobController extends Controller
{
         //__Index Method__//
      public function index()
      {
       
       $jobs = Job::all();
  
       // dd($jobs);
       return view('hm-portal.hm-job.index',compact('jobs'));

      }

       //__Show Method__//
       public function show($id)
       {
          $job = Job::find($id);
   
        //  dd($job->position_type);
         return view('hm-portal.hm-job.show', compact('job'));
   
       }
   
}
