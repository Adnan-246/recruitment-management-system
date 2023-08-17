<?php

namespace App\Http\Controllers\HR_Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Stroage;
use DB;
use App\Models\User;
use App\Models\Job;
use App\Models\Applicant;
use App\Models\Candidate;
use App\Models\Interview;
use App\Models\Note;
use App\Models\PhoneInterview;
use App\Models\OnsiteInterview;
use App\Models\Employee;
use Auth;
use File;
use PDF;
use Load;
use Carbon\Carbon;
 

class ApplicantController extends Controller
{
    //__Index Method__//
    public function index()
    {

     

     //_Eloquent_//
     $candidates = Candidate::all();



    // dd($job);

    // return response()->json($applicants);

     return view('hr-portal.hr-applicant.index',compact('candidates'));

    }

    //__Create Method__//
    public function create()
    {

        
        $jobs=Job::all(); 
       

       return view('hr-portal.hr-applicant.create',compact('jobs'));

    }

   //__Store Store Method__//
   public function store(Request $request)
   {
       $request->validate([
       'job_id' => 'required',
       'experience' => 'required',
       'experience_descrip' => 'required',
       'salary_expect' => 'required',
       'resume' =>'required|csv,txt,xlx,xls,pdf|unique:applicants|max:3072',
       'cover_letter' => 'required',
       'apply_date' => 'required',
       'education' => 'required',
       'f_name' => 'required',
       'l_name' => 'required',
       'name' => 'required',
       'email' => 'required|unique:applicants|max:255',
       'phone' => 'required|unique:applicants|max:15',
       'country' => 'required',
       'state' => 'required',
       'city' => 'required',
       'address' => 'required',
      

        ]);

       

        $resume = $request->resume;
               $resumename = time().'.'.$resume->getClientOriginalExtension();

               $request->resume->move('files', $resumename);

        Candidate::insert([
           
            'job_id' => $request->job_id,
            'experience' => $request->experience,
            'experience_descrip' => $request->experience_descrip,
            'salary_expect' => $request->salary_expect,
           // 'resume' =>$request->resume->store('/media/file'),
            'resume' =>$resumename,
            'cover_letter' => $request->cover_letter,
            'apply_date' => $request->apply_date,
            'education' => $request->education,
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'address' => $request->address,
           
       
        ]);

        $notification = array('message' => 'Apply Successfully!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);

   }

   //__Show Method__//
    public function show(Request $request, $id)
    {
      
      $candidate = Candidate::find($id);
  
    $users = User::all();


      $interview = Interview::where('candidate_id', $id)->get();
     
      // dd($interview);
      $note = Note::where('candidate_id',$id)->get();

      $phone_interview = PhoneInterview::where('candidate_id',$id)->get();
      //dd($phone_interview);
      $onsite_interview = OnsiteInterview::where('candidate_id',$id)->get();

      $employees = Employee::all();

      $date = Carbon::now();
     // $date = date('Y-m-d');

     return view('hr-portal.hr-applicant.show', compact('candidate','interview','note','phone_interview','onsite_interview','users','employees'));

   }

    //__Update Method__//
    public function update(Request $request,$id)
    {
        $candidate = Candidate::find($id);
         //get the record

        // if($request->resume){

        //   $resume = $request->resume;
        //        $resumename = time().'.'.$resume->getClientOriginalExtension();

        //        $request->resume->move('files', $resumename);

        // }

         if($request->resume){
          $resume =time().'.'.$request->resume->getClientOriginalextension();
          $request->resume->move(public_path('files').$resume);
          $path ="files".$resume;
         }else{
          $existResume = $candidate->resume;
         }

         $getInterviewerReq = $request->interviewers;
         $interviewers = implode(',', $getInterviewerReq);

        $candidate->update([

        
          'education' => $request->education,
          'experience' => $request->experience,
          'experience_descrip' => $request->experience_descrip,
          'salary_expect' => $request->salary_expect,
          //'resume' =>$resumename,
          'resume' =>$request->resume ?  $path : $existResume,

          'cover_letter' => $request->cover_letter,
          'f_name' => $request->f_name,
          'l_name' => $request->l_name,
          'name' => $request->name,
          'email' => $request->email,
          'phone' => $request->phone,
          'country' => $request->country,
          'state' => $request->state,
          'city' => $request->city,
          'address' => $request->address,
          'status' => $request->status,
          'stage1' => $request->stage1,
          'stage2' => $request->stage2,
          'note' => $request->note,
          'interviewers' => $interviewers,
        
          'created_at' => $request->created_at,
         

        ]);
        $notification = array('message' => 'Candidate Details Successfully Updated!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function download(Request $request, $resume)

    {

          return response()->download(public_path('files/'.$resume));
    }

    public function view($id)

    {

         $candidate = Candidate::find($id);
         
         return view('hr-portal.hr-applicant.hr-resume.view', compact('candidate'));
    }

   


}
