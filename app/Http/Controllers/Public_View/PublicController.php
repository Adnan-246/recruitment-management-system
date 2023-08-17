<?php

namespace App\Http\Controllers\Public_View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Job;
use App\Models\Candidate;
use Illuminate\Support\Str;
use Auth;
use File;
use Carbon\Carbon;



class PublicController extends Controller
{
    public function index()
    {

          try {

           
             $jobList = Job::latest()->get(['location','id','position_name','position_type' ])->groupBy('location');
         
         

             $job = Job::select('location')->groupBy('location')->get();
             $jobPosition = Job::select('position_name')->groupBy('position_name')->get();
            // dd($job);
        //  echo "<pre>";
        //  print_r($jobList);
        //  echo "</pre>";
          
            return view('public-view.index', compact('jobList','job','jobPosition'));

        } catch (\Throwable $th) {
            throw $th;
        }
     
        
       
     // return response()->json($jobs);

    }

    //__Job Details Method__//
    public function detail($id)
    {
        $jobs = Job::find($id);

      // dd($jobs);
      return view('public-view.detail', compact('jobs'));
    }

      //__Create Method__//
      public function apply($id)
      {
          

         
        $job = Job::find($id);

       // dd($job->job_id_no);

          $jobs=Job::all();

         

          //dd($job->position_name);
  
          $date = Carbon::now();
         // dd($jobs);
  
         return view('public-view.apply', compact('jobs','job'));
  
      }
  

          //__Store Store Method__//
          public function store(Request $request)
          {
              $request->validate([
               'apply_date' => 'required',
              'job_id' => 'required',
             'education' => 'required',
             'experience' => 'required',
             'experience_descrip' => 'required',
             'salary_expect' => 'required',
             'resume' => 'required|unique:candidates|max:6150',
             'cover_letter' => 'required',
             'f_name' => 'required',
             'l_name' => 'required',
             //'name' => 'required',
             'email' => 'required|unique:candidates|max:255',
             'phone' => 'required|unique:candidates|max:15',
             'dob' => 'required',
             'gender' => 'required',
              'country' => 'required',
              'state' => 'required',
              'city' => 'required',
              'address' => 'required',
     
               ]);

            

               $resume = $request->resume;
               $resumename = time().'.'.$resume->getClientOriginalExtension();

               $request->resume->move('files', $resumename);


            Candidate::insert([
                'apply_date' => $request->apply_date,
                'job_id' => $request->job_id,
                'f_name' => $request->f_name,
                'l_name' => $request->l_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'education' => $request->education,
                'experience' => $request->experience,
                'experience_descrip' => $request->experience_descrip,
                'salary_expect' => $request->salary_expect,
                'resume' => $resumename, 
                'cover_letter' => $request->cover_letter,
               // 'name' => $request->name,
               
               
                
                
                
              
  
            ]);
     
               $notification = array('message' => 'Successfully Applied!', 'alert-type' => 'success');
              return redirect()->back()->with($notification);
          }

         
}
