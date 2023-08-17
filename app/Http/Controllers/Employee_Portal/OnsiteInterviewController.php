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
use App\Models\PhoneInterview;
use App\Models\OnsiteInterview;
use Auth;
use File;
use Carbon\Carbon;

class OnsiteInterviewController extends Controller
{
  //__Create Method__//
  public function create($id)
  {

    $interview = Interview::find($id);

    $date = Carbon::now();
  //  dd($interview);

    $onsite_interview = OnsiteInterview::all();

     // dd($onsite_interview);

     return view('employee-portal.employee-interview.onsite-interview.create',compact('interview','onsite_interview'));

  }

  //__Store Store Method__//
public function store(Request $request)
{


    $request->validate([
    'applicant_id' => 'required',
     'interview_date' => 'required',
    'body_lan_eye_contact' => 'required|in:Poor,Fair,Average,Good,Superior',
    'resume_presentation' => 'required|in:Poor,Fair,Average,Good,Superior',
   'presentation_prior_work' => 'required|in:Poor,Fair,Average,Good,Superior',
    'achievement_oriented' => 'required|in:Poor,Fair,Average,Good,Superior',
    'enthusiasm' => 'required|in:Poor,Fair,Average,Good,Superior',
    'verbal_persuasive' => 'required|in:Poor,Fair,Average,Good,Superior',
    'team_skill' => 'required|in:Poor,Fair,Average,Good,Superior',
    'education_training' => 'required|in:Poor,Fair,Average,Good,Superior',
    'skill_experience' => 'required|in:Poor,Fair,Average,Good,Superior',
    'commitment_position' => 'required|in:Poor,Fair,Average,Good,Superior',
    'level_interest_position' => 'required|in:Poor,Fair,Average,Good,Superior',
    'asked_good_question' => 'required|in:Poor,Fair,Average,Good,Superior',
    'potential_to_grow' => 'required|in:Poor,Fair,Average,Good,Superior',
    'overall_evaluation' => 'required|in:Poor,Fair,Average,Good,Superior',
    'candidate_concern_area' => 'required',
    'candidate_strength' => 'required',
    'additional_comment' => 'required',
    'recommend_to_hire' => 'required|in:Yes,No',
     'created_by' => 'required',

     ]);



     OnsiteInterview::insert([

         'applicant_id' => $request->applicant_id,
         'interview_date' => $request->interview_date,
         'body_lan_eye_contact' => $request->body_lan_eye_contact,
         'resume_presentation' => $request->resume_presentation,
         'presentation_prior_work' => $request->presentation_prior_work,
         'achievement_oriented' => $request->achievement_oriented,
         'enthusiasm' => $request->enthusiasm,
         'verbal_persuasive' => $request->verbal_persuasive,
         'team_skill' => $request->team_skill,
          'education_training' => $request->education_training,
          'skill_experience' => $request->skill_experience,
          'commitment_position' => $request->commitment_position,
          'level_interest_position' => $request->level_interest_position,
          'asked_good_question' => $request->asked_good_question,
        'potential_to_grow' => $request->potential_to_grow,
        'overall_evaluation' => $request->overall_evaluation,
         'candidate_concern_area' => $request->candidate_concern_area,
         'candidate_strength' => $request->candidate_strength,
         'additional_comment' => $request->additional_comment,
         'recommend_to_hire' => $request->recommend_to_hire,
         'created_by' => $request->created_by,

     ]);


     $notification = array('message' => 'Onsite Interview Added Successfully!', 'alert-type' => 'success');
     return redirect()->back()->with($notification);

}



//__Show Method__//
public function show($id)
{

  $onsite_interview = OnsiteInterview::find($id);

// dd($onsite_interview);



  // $date = Carbon::now();
 // $date = date('Y-m-d');

 return view('employee-portal.employee-interview.onsite-interview.show', compact('onsite_interview'));

  }


}
