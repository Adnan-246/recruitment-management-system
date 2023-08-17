<?php

namespace App\Http\Controllers\HM_Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Models\Job;
use App\Models\Applicant;
use App\Models\Interview;
use App\Models\Note;
use App\Models\PhoneInterview;
use Auth;
use File;
use Carbon\Carbon;

class PhoneInterviewController extends Controller
{
    //__Create Method__//
      public function create($id)
      {

        $interview = Interview::find($id);

      $phone_interview = PhoneInterview::all();

      $date = Carbon::now();
        //  dd($phone_interview);

         return view('hm-portal.hm-interview.phone-interview.create',compact('interview','phone_interview'));

      }

      //__Store Store Method__//
   public function store(Request $request)
   {


       $request->validate([
       'applicant_id' => 'required',
       'interview_date' => 'required',
       'assertive_outgoing' => 'required|in:Poor,Fair,Average,Good,Superior',
       'achievement_oriented' => 'required|in:Poor,Fair,Average,Good,Superior',
       'enthusiasm' => 'required|in:Poor,Fair,Average,Good,Superior',
       'verbal_persuasive' => 'required|in:Poor,Fair,Average,Good,Superior',
       'ability_to_learn' => 'required|in:Poor,Fair,Average,Good,Superior',
       'ability_manage_stress' => 'required|in:Poor,Fair,Average,Good,Superior',
       'confidence' => 'required|in:Poor,Fair,Average,Good,Superior',
       'education_training' => 'required|in:Poor,Fair,Average,Good,Superior',
       'skill_experience' => 'required|in:Poor,Fair,Average,Good,Superior',
       'job_stability' => 'required|in:Poor,Fair,Average,Good,Superior',
       'reason_interest_field' => 'required|in:Poor,Fair,Average,Good,Superior',
       'commitment_position' => 'required|in:Poor,Fair,Average,Good,Superior',
       'realistic_job' => 'required|in:Poor,Fair,Average,Good,Superior',
       'level_interest_position' => 'required|in:Poor,Fair,Average,Good,Superior',
       'potential_grow' => 'required|in:Poor,Fair,Average,Good,Superior',
       'overall_evaluation' => 'required|in:Poor,Fair,Average,Good,Superior',
       'candidate_concern_area' => 'required',
       'candidate_strength' => 'required',
       'additional_comment' => 'required',
       'recommend_onsite' => 'required|in:Yes,No',
       'created_by' => 'required',

        ]);



        PhoneInterview::insert([

            'applicant_id' => $request->applicant_id,
            'interview_date' => $request->interview_date,
            'assertive_outgoing' => $request->assertive_outgoing,
            'achievement_oriented' => $request->achievement_oriented,
            'enthusiasm' => $request->enthusiasm,
            'verbal_persuasive' => $request->verbal_persuasive,
            'ability_to_learn' => $request->ability_to_learn,
            'ability_manage_stress' => $request->ability_manage_stress,
            'confidence' => $request->confidence,
            'education_training' => $request->education_training,
            'skill_experience' => $request->skill_experience,
            'job_stability' => $request->job_stability,
            'reason_interest_field' => $request->reason_interest_field,
            'commitment_position' => $request->commitment_position,
            'realistic_job' => $request->realistic_job,
            'level_interest_position' => $request->level_interest_position,
            'potential_grow' => $request->potential_grow,
            'overall_evaluation' => $request->overall_evaluation,
            'candidate_concern_area' => $request->candidate_concern_area,
            'candidate_strength' => $request->candidate_strength,
            'additional_comment' => $request->additional_comment,
            'recommend_onsite' => $request->recommend_onsite,
            'created_by' => $request->created_by,

        ]);


        $notification = array('message' => 'Phone Interview Added Successfully!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);

   }

   //__Delete Method__//
     public function destroy($id)
     {

       //$interview = Interview::find($id);

     PhoneInterview::destroy($id);

     //  dd($interview);

      // return view('hr-portal.hr-interview.edit', compact('interview','applicant'));

      $notification = array('message' => 'Phone Interview Details Deleted Successfully!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);

     }

     //__Edit Phone Interview Method__//

     public function edit($id)
       {

        $phone_interview = PhoneInterview::find($id);
        //dd($phone_interview->recommend_onsite);

        $interview = Interview::all();

       // dd($phone_interview);

        return view('hr-portal.hr-interview.phone-interview.edit',compact('phone_interview','interview'));
        
       
     }

     //__Update Phone Interview__//

     public function update(Request $request,$id)

     {

        $phone_interview = PhoneInterview::find($id);
      

        $phone_interview->update([
          
           
           
            'assertive_outgoing' => $request->assertive_outgoing,
            'achievement_oriented' => $request->achievement_oriented,
            'enthusiasm' => $request->enthusiasm,
            'verbal_persuasive' => $request->verbal_persuasive,
            'ability_to_learn' => $request->ability_to_learn,
            'ability_manage_stress' => $request->ability_manage_stress,
            'confidence' => $request->confidence,
            'education_training' => $request->education_training,
            'skill_experience' => $request->skill_experience,
            'job_stability' => $request->job_stability,
            'reason_interest_field' => $request->reason_interest_field,
            'commitment_position' => $request->commitment_position,
            'realistic_job' => $request->realistic_job,
            'level_interest_position' => $request->level_interest_position,
            'potential_grow' => $request->potential_grow,
            'overall_evaluation' => $request->overall_evaluation,
            'candidate_concern_area' => $request->candidate_concern_area,
            'candidate_strength' => $request->candidate_strength,
            'additional_comment' => $request->additional_comment,
            'recommend_onsite' => $request->recommend_onsite,
            'updated_by' => $request->updated_by,
       

    ]);



      $notification = array('message' => 'Phone Interview Updated Successfully!', 'alert-type' => 'success');
      return redirect()->back()->with($notification);

     }

     //__Show Method__//
    public function show($id)
    {
      
      $phone_interview = PhoneInterview::find($id);
    
    // dd($phone_interview); 

      

      // $date = Carbon::now();
     // $date = date('Y-m-d');

     return view('hm-portal.hm-interview.phone-interview.show', compact('phone_interview'));

   }


}
