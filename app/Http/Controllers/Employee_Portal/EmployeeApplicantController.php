<?php

namespace App\Http\Controllers\Employee_Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Job;
use App\Models\Applicant;
use App\Models\Interview;
use App\Models\Note;
use App\Models\PhoneInterview;
use App\Models\OnsiteInterview;
use Auth;
use File;
use PDF;
use Load;
use Carbon\Carbon;

class EmployeeApplicantController extends Controller
{
    //__Index Method__//
    public function index()
    {

      $interview = Interview::where('interviewer', Auth::user()->name)->get();
    
     // $applicants = Applicant::all();
   
   
    // dd($interview);

    // return response()->json($applicants);

     return view('employee-portal.employee-applicant.index',compact('interview'));

    }

     //__Show Method__//
     public function show($id)
     {
       $applicant = Applicant::find($id);
       $interview = Interview::where('applicant_id', $id)->get();
      
        //dd($applicant);

       $note = Note::where('applicant_id',$id)->get();

       $phone_interview = PhoneInterview::where('applicant_id',$id)->get();

       $onsite_interview = OnsiteInterview::where('applicant_id',$id)->get();
 
       $date = Carbon::now();

      return view('employee-portal.employee-applicant.show', compact('applicant','interview','note','phone_interview','onsite_interview'));
 
    }

    //__Update Method__//
    public function update(Request $request,$id)
    {
        $interview = Interview::find($id);
         //get the record

         

        $interview->update([

          'reason' => $request->reason,
          'comment' => $request->comment,
         
         

        ]);
        $notification = array('message' => 'Candidate Interview Successfully Updated!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
