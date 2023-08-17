<?php

namespace App\Http\Controllers\HR_Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Job;
use App\Models\Candidate;
use App\Models\Interview;
use Auth;
use File;
use PDF;
use Load;

class InterviewController extends Controller
{
    //__Create Method__//
    public function create($id)
    {
        
      // $interview = Interview::find($id);

       $candidate = Candidate::find($id);

      // dd($interview);

       return view('hr-portal.hr-interview.create',compact('candidate'));

    }

      //__Store Store Method__//
   public function store(Request $request)
   {
    

       $request->validate([
       'candidate_id' => 'required',
       'interview_date' => 'required',
       'interview_time' => 'required',
      // 'interview_status' => 'required',
       'interviewer' => 'required',
      

        ]);
      
        // $getInterviewerReq = $request->interviewer;
        // $interviewer = implode(',', $getInterviewerReq);

        Interview::insert([
           
            'candidate_id' => $request->candidate_id,
            'interview_date' => $request->interview_date,
            'interview_time' => $request->interview_time,
            'interviewer' => $request->interviewer,
           // 'interviewer' => $interviewer,
         
       
        ]);
      

        $notification = array('message' => 'Candidate Interview Added Successfully!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);

   }

     //__Edit Method__//
     public function edit($id)
     {

        $interview = Interview::find($id);
     

        $candidate = Candidate::all();
       
       // dd($interview->applicant->id);
     //  dd($interview->applicant->id);


       return view('hr-portal.hr-interview.edit', compact('interview','candidate'));
      
     }

     //__Update Method__//
     public function update(Request $request, $id)
     {
        

         $interview = Interview::find($id); //get the record

         $candidate = Candidate::find($id);

         $interview->update([
          
               'interview_date' => $request->interview_date,
               'interview_time' => $request->interview_time,
               'interviewer' => $request->interviewer,
               'interview_status' => $request->interview_status,
               'reason' => $request->reason,
               'comment' => $request->comment,
            

         ]);

         $notification = array('message' => 'Interview Details Successfully Updated!', 'alert-type' => 'success');
         return redirect()->back()->with($notification);
     }

     //__Delete Method__//
     public function destroy($id)
     {
   
       //$interview = Interview::find($id);

     //Interview::destroy($id);
     
     Interview::find($id)->delete();
     //  dd($interview);

      // return view('hr-portal.hr-interview.edit', compact('interview','applicant'));

      $notification = array('message' => 'Interview Details Deleted Successfully!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
      
     }
}
