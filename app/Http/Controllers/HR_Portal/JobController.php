<?php

namespace App\Http\Controllers\HR_Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Job;
use Illuminate\Support\Str;
use Auth;
use File;
use Carbon\Carbon;

class JobController extends Controller
{
      //__Index Method__//
      public function index()
      {
       
       $jobs = Job::all();
  
      //  dd($jobs);
       return view('hr-portal.hr-job.index',compact('jobs'));
      }
  
     //__Create Method__//
      public function create()
      {

        $date = Carbon::now();
        
         return view('hr-portal.hr-job.create');
  
      }
  
      //__Store Store Method__//
      public function store(Request $request)
      {
          $request->validate([
          'post_date' => 'required',
          'job_id_no' => 'required|unique:jobs|max:15',
          'ref_code' => 'required|unique:jobs|max:25',
          'position_name' => 'required',
          'position_type' => 'required',
          'location' => 'required',
          'salary' => 'required',
          'vacancy' => 'required',
          'experience' => 'required',
          'education' => 'required',
          'description' => 'required',
          'requirement' => 'required',
          'end_date' => 'required',
          'status' => 'required',
  
  
           ]);
  
           Job::insert([
               'post_date' => $request->post_date,
               'job_id_no' => $request->job_id_no,
               'ref_code' => $request->ref_code,
               'position_name' => $request->position_name,
               'position_type' => $request->position_type,
               'location' => $request->location,
               'salary' => $request->salary,
               'vacancy' => $request->vacancy,
               'experience' => $request->experience,
               'education' => $request->education,
               'description' => $request->description,
               'requirement' => $request->requirement,
               'end_date' => $request->end_date,
               'status' => $request->status,
               'properties' => $request->properties,
  
           ]);
  
           $notification = array('message' => 'Job Created Successfully!', 'alert-type' => 'success');
           return redirect()->back()->with($notification);
  
      }
  
      //__Show Method__//
      public function show($id)
      {
         $job = Job::find($id);
  
       //  dd($job->position_type);
        return view('hr-portal.hr-job.show', compact('job'));
  
      }
  
      //__Edit Method__//
    public function edit($id)
    {
  
      $job = Job::find($id);
    //  dd($job);
      return view('hr-portal.hr-job.edit', compact('job'));
     
    }
  
    //__Update Method__//
        public function update(Request $request,$id)
        {
            $job=Job::find($id); //get the record
            $job->update([
                'post_date' => $request->post_date,
                'position_name' => $request->position_name,
                'position_type' => $request->position_type,
                'location' => $request->location,
                'salary' => $request->salary,
                'vacancy' => $request->vacancy,
                'experience' => $request->experience,
                'education' => $request->education,
                'description' => $request->description,
                'requirement' => $request->requirement,
                'end_date' => $request->end_date,
                'status' => $request->status,
  
            ]);
            $notification = array('message' => 'Successfully Updated!', 'alert-type' => 'success');
            return redirect()->route('hr.job.index')->with($notification);
        }
}
