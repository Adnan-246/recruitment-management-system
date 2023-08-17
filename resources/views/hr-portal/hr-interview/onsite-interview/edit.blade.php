@extends('hr-portal.hr-layouts.hr-app')

@section('content')
   <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content" style="background-color: #f1f1f1;">

              <div class="page-content">
                  <div class="container-fluid">

                      <!-- start page title -->
                      <div class="row">
                          <div class="col-12">
                              <div class="page-title-box d-flex align-items-center justify-content-between">
                                  <h3 class="mb-0 mt-3 mx-3"><b>Edit Onsite Interview</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">

                                        <li class="breadcrumb-item"><a href="{{ route('applicant.index') }}"><i class="fas fa-address-book mr-1 " aria-hidden="true"></i>  Manage Candidates</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('applicant.detail',$onsite_interview->applicant->id) }}">{{ $onsite_interview->applicant->name }}</a></li>
                                        <li class="breadcrumb-item active">Edit Onsite Interview</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->


                      <div class="row">

                        <div class="col-md-12">
                            <div class="card mx-3 mt-3">
                                <div class="card-body mx-3">
                                    <form action="{{ route('hr.onsite.interview.update',$onsite_interview->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <div class="col-md-8">
                                         <label class="form-label"><b>Onsite Interview with :</b>   {{ $onsite_interview->applicant->name }}  </label>

                                         <input type="text" name="applicant_id" class="form-control" value="{{ $onsite_interview->applicant_id }}" hidden>
                                         </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="col-md-4">
                                             <label class="form-label"><b>Interview Date</b> </label>

                                             <input type="date" name="interview_date" class="form-control" value="{{ $date = date('Y-m-d'); }}" readonly>
                                             </div>
                                            </div>

                                           <br>
                                            <div class="mb-3">
                                                <p style="font-weight: bolder; font:black;"><h4><b>Appearance</b> </h4></p>
                                             </div>

                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Body Language Eye Contact</b>  <span style="color:#ff0000">*</span></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="body_lan_eye_contact" class="form-check-input" value="Poor" {{ ($onsite_interview->body_lan_eye_contact=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="body_lan_eye_contact" class="form-check-input" value="Fair" {{ ($onsite_interview->body_lan_eye_contact=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="body_lan_eye_contact" class="form-check-input" value="Average" {{ ($onsite_interview->body_lan_eye_contact=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="body_lan_eye_contact" class="form-check-input" value="Good" {{ ($onsite_interview->body_lan_eye_contact=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="body_lan_eye_contact" class="form-check-input" value="Superior" {{ ($onsite_interview->body_lan_eye_contact=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Resume Clarity Presentation</b>  <span style="color:#ff0000">*</span></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="resume_presentation" class="form-check-input" value="Poor" {{ ($onsite_interview->resume_presentation=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="resume_presentation" class="form-check-input" value="Fair" {{ ($onsite_interview->resume_presentation=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="resume_presentation" class="form-check-input" value="Average" {{ ($onsite_interview->resume_presentation=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="resume_presentation" class="form-check-input" value="Good" {{ ($onsite_interview->resume_presentation=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="resume_presentation" class="form-check-input" value="Superior" {{ ($onsite_interview->resume_presentation=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Presentation of Prior Work</b><span style="color:#ff0000">*</span></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="presentation_prior_work" class="form-check-input" value="Poor" {{ ($onsite_interview->presentation_prior_work=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="presentation_prior_work" class="form-check-input" value="Fair" {{ ($onsite_interview->presentation_prior_work=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="presentation_prior_work" class="form-check-input" value="Average" {{ ($onsite_interview->presentation_prior_work=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="presentation_prior_work" class="form-check-input" value="Good" {{ ($onsite_interview->presentation_prior_work=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="presentation_prior_work" class="form-check-input" value="Superior" {{ ($onsite_interview->presentation_prior_work=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                     <div class="mb-3">
                                         <p style="font-weight: bolder; font:black;"><h4><b>Characteristics</b> </h4></p>
                                      </div>

                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Achievement Oriented</b><span style="color:#ff0000">*</span></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="achievement_oriented" class="form-check-input" value="Poor" {{ ($onsite_interview->achievement_oriented=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="achievement_oriented" class="form-check-input" value="Fair" {{ ($onsite_interview->achievement_oriented=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="achievement_oriented" class="form-check-input" value="Average" {{ ($onsite_interview->achievement_oriented=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="achievement_oriented" class="form-check-input" value="Good" {{ ($onsite_interview->achievement_oriented=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="achievement_oriented" class="form-check-input" value="Superior" {{ ($onsite_interview->achievement_oriented=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Enthusiasm</b><span style="color:#ff0000">*</span></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="enthusiasm" class="form-check-input" value="Poor" {{ ($onsite_interview->enthusiasm=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="enthusiasm" class="form-check-input" value="Fair" {{ ($onsite_interview->enthusiasm=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="enthusiasm" class="form-check-input" value="Average" {{ ($onsite_interview->enthusiasm=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="enthusiasm" class="form-check-input" value="Good" {{ ($onsite_interview->enthusiasm=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="enthusiasm" class="form-check-input" value="Superior" {{ ($onsite_interview->enthusiasm=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Verbal Persuasive</b></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="verbal_persuasive" class="form-check-input" value="Poor" {{ ($onsite_interview->verbal_persuasive=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="verbal_persuasive" class="form-check-input" value="Fair" {{ ($onsite_interview->verbal_persuasive=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="verbal_persuasive" class="form-check-input" value="Average" {{ ($onsite_interview->verbal_persuasive=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="verbal_persuasive" class="form-check-input" value="Good" {{ ($onsite_interview->verbal_persuasive=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="verbal_persuasive" class="form-check-input" value="Superior" {{ ($onsite_interview->verbal_persuasive=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Team Skills</b></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="team_skill" class="form-check-input" value="Poor" {{ ($onsite_interview->team_skill=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="team_skill" class="form-check-input" value="Fair" {{ ($onsite_interview->team_skill=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="team_skill" class="form-check-input" value="Average" {{ ($onsite_interview->team_skill=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="team_skill" class="form-check-input" value="Good" {{ ($onsite_interview->team_skill=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="team_skill" class="form-check-input" value="Superior" {{ ($onsite_interview->team_skill=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                     <div class="mb-3">
                                         <p style="font-weight: bolder; font:black;"><h4><b>Others</b> </h4></p>
                                     </div>
                                     <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Education and Training</b></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="education_training" class="form-check-input" value="Poor" {{ ($onsite_interview->education_training=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="education_training" class="form-check-input" value="Fair" {{ ($onsite_interview->education_training=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="education_training" class="form-check-input" value="Average" {{ ($onsite_interview->education_training=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="education_training" class="form-check-input" value="Good" {{ ($onsite_interview->education_training=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="education_training" class="form-check-input" value="Superior" {{ ($onsite_interview->education_training=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                       <label class="form-label d-block mb-3"><b>Skills and Revelant Experience</b></label>

                                       <div class="custom-radio form-check form-check-inline ">
                                           <input type="radio" id="customRadioInline1" name="skill_experience" class="form-check-input" value="Poor" {{ ($onsite_interview->skill_experience=="Poor")? "checked" : "" }}>
                                           <label class="form-check-label" for="customRadioInline">Poor</label>
                                       </div>
                                       <div class="custom-radio form-check form-check-inline">
                                           <input type="radio" id="customRadioInline2" name="skill_experience" class="form-check-input" value="Fair" {{ ($onsite_interview->skill_experience=="Fair")? "checked" : "" }}>
                                           <label class="form-check-label" for="customRadioInline">Fair</label>
                                       </div>
                                       <div class="custom-radio form-check form-check-inline">
                                           <input type="radio" id="customRadioInline2" name="skill_experience" class="form-check-input" value="Average" {{ ($onsite_interview->skill_experience=="Average")? "checked" : "" }}>
                                           <label class="form-check-label" for="customRadioInline">Average</label>
                                       </div>
                                       <div class="custom-radio form-check form-check-inline">
                                           <input type="radio" id="customRadioInline2" name="skill_experience" class="form-check-input" value="Good" {{ ($onsite_interview->skill_experience=="Good")? "checked" : "" }}>
                                           <label class="form-check-label" for="customRadioInline">Good</label>
                                       </div>
                                       <div class="custom-radio form-check form-check-inline">
                                           <input type="radio" id="customRadioInline2" name="skill_experience" class="form-check-input" value="Superior" {{ ($onsite_interview->skill_experience=="Superior")? "checked" : "" }}>
                                           <label class="form-check-label" for="customRadioInline">Superior</label>
                                       </div>

                                   </div>
                                   <br>
                                   <div class="mb-3">
                                      <label class="form-label d-block mb-3"><b>Commitment to Position</b></label>

                                      <div class="custom-radio form-check form-check-inline ">
                                          <input type="radio" id="customRadioInline1" name="commitment_position" class="form-check-input" value="Poor" {{ ($onsite_interview->commitment_position=="Poor")? "checked" : "" }}>
                                          <label class="form-check-label" for="customRadioInline">Poor</label>
                                      </div>
                                      <div class="custom-radio form-check form-check-inline">
                                          <input type="radio" id="customRadioInline2" name="commitment_position" class="form-check-input" value="Fair" {{ ($onsite_interview->commitment_position=="Fair")? "checked" : "" }}>
                                          <label class="form-check-label" for="customRadioInline">Fair</label>
                                      </div>
                                      <div class="custom-radio form-check form-check-inline">
                                          <input type="radio" id="customRadioInline2" name="commitment_position" class="form-check-input" value="Average" {{ ($onsite_interview->commitment_position=="Average")? "checked" : "" }}>
                                          <label class="form-check-label" for="customRadioInline">Average</label>
                                      </div>
                                      <div class="custom-radio form-check form-check-inline">
                                          <input type="radio" id="customRadioInline2" name="commitment_position" class="form-check-input" value="Good" {{ ($onsite_interview->commitment_position=="Good")? "checked" : "" }}>
                                          <label class="form-check-label" for="customRadioInline">Good</label>
                                      </div>
                                      <div class="custom-radio form-check form-check-inline">
                                          <input type="radio" id="customRadioInline2" name="commitment_position" class="form-check-input" value="Superior" {{ ($onsite_interview->commitment_position=="Superior")? "checked" : "" }}>
                                          <label class="form-check-label" for="customRadioInline">Superior</label>
                                      </div>

                                  </div>
                                  <br>
                                  <div class="mb-3">
                                     <label class="form-label d-block mb-3"><b>Level of Interest in Position</b></label>

                                     <div class="custom-radio form-check form-check-inline ">
                                         <input type="radio" id="customRadioInline1" name="level_interest_position" class="form-check-input" value="Poor" {{ ($onsite_interview->level_interest_position=="Poor")? "checked" : "" }}>
                                         <label class="form-check-label" for="customRadioInline">Poor</label>
                                     </div>
                                     <div class="custom-radio form-check form-check-inline">
                                         <input type="radio" id="customRadioInline2" name="level_interest_position" class="form-check-input" value="Fair" {{ ($onsite_interview->level_interest_position=="Fair")? "checked" : "" }}>
                                         <label class="form-check-label" for="customRadioInline">Fair</label>
                                     </div>
                                     <div class="custom-radio form-check form-check-inline">
                                         <input type="radio" id="customRadioInline2" name="level_interest_position" class="form-check-input" value="Average" {{ ($onsite_interview->level_interest_position=="Average")? "checked" : "" }}>
                                         <label class="form-check-label" for="customRadioInline">Average</label>
                                     </div>
                                     <div class="custom-radio form-check form-check-inline">
                                         <input type="radio" id="customRadioInline2" name="level_interest_position" class="form-check-input" value="Good" {{ ($onsite_interview->level_interest_position=="Good")? "checked" : "" }}>
                                         <label class="form-check-label" for="customRadioInline">Good</label>
                                     </div>
                                     <div class="custom-radio form-check form-check-inline">
                                         <input type="radio" id="customRadioInline2" name="level_interest_position" class="form-check-input" value="Superior" {{ ($onsite_interview->level_interest_position=="Superior")? "checked" : "" }}>
                                         <label class="form-check-label" for="customRadioInline">Superior</label>
                                     </div>

                                 </div>
                                 <br>
                                 <div class="mb-3">
                                    <label class="form-label d-block mb-3"><b>Asked Good Question</b></label>

                                    <div class="custom-radio form-check form-check-inline ">
                                        <input type="radio" id="customRadioInline1" name="asked_good_question" class="form-check-input" value="Poor" {{ ($onsite_interview->asked_good_question=="Poor")? "checked" : "" }}>
                                        <label class="form-check-label" for="customRadioInline">Poor</label>
                                    </div>
                                    <div class="custom-radio form-check form-check-inline">
                                        <input type="radio" id="customRadioInline2" name="asked_good_question" class="form-check-input" value="Fair" {{ ($onsite_interview->asked_good_question=="Fair")? "checked" : "" }}>
                                        <label class="form-check-label" for="customRadioInline">Fair</label>
                                    </div>
                                    <div class="custom-radio form-check form-check-inline">
                                        <input type="radio" id="customRadioInline2" name="asked_good_question" class="form-check-input" value="Average" {{ ($onsite_interview->asked_good_question=="Average")? "checked" : "" }}>
                                        <label class="form-check-label" for="customRadioInline">Average</label>
                                    </div>
                                    <div class="custom-radio form-check form-check-inline">
                                        <input type="radio" id="customRadioInline2" name="asked_good_question" class="form-check-input" value="Good" {{ ($onsite_interview->asked_good_question=="Good")? "checked" : "" }}>
                                        <label class="form-check-label" for="customRadioInline">Good</label>
                                    </div>
                                    <div class="custom-radio form-check form-check-inline">
                                        <input type="radio" id="customRadioInline2" name="asked_good_question" class="form-check-input" value="Superior" {{ ($onsite_interview->asked_good_question=="Superior")? "checked" : "" }}>
                                        <label class="form-check-label" for="customRadioInline">Superior</label>
                                    </div>

                                </div>
                                <br>
                                <div class="mb-3">
                                   <label class="form-label d-block mb-3"><b>Potential to Grow</b></label>

                                   <div class="custom-radio form-check form-check-inline ">
                                       <input type="radio" id="customRadioInline1" name="potential_to_grow" class="form-check-input" value="Poor" {{ ($onsite_interview->potential_to_grow=="Poor")? "checked" : "" }}>
                                       <label class="form-check-label" for="customRadioInline">Poor</label>
                                   </div>
                                   <div class="custom-radio form-check form-check-inline">
                                       <input type="radio" id="customRadioInline2" name="potential_to_grow" class="form-check-input" value="Fair" {{ ($onsite_interview->potential_to_grow=="Fair")? "checked" : "" }}>
                                       <label class="form-check-label" for="customRadioInline">Fair</label>
                                   </div>
                                   <div class="custom-radio form-check form-check-inline">
                                       <input type="radio" id="customRadioInline2" name="potential_to_grow" class="form-check-input" value="Average" {{ ($onsite_interview->potential_to_grow=="Average")? "checked" : "" }}>
                                       <label class="form-check-label" for="customRadioInline">Average</label>
                                   </div>
                                   <div class="custom-radio form-check form-check-inline">
                                       <input type="radio" id="customRadioInline2" name="potential_to_grow" class="form-check-input" value="Good" {{ ($onsite_interview->potential_to_grow=="Good")? "checked" : "" }}>
                                       <label class="form-check-label" for="customRadioInline">Good</label>
                                   </div>
                                   <div class="custom-radio form-check form-check-inline">
                                       <input type="radio" id="customRadioInline2" name="potential_to_grow" class="form-check-input" value="Superior" {{ ($onsite_interview->potential_to_grow=="Superior")? "checked" : "" }}>
                                       <label class="form-check-label" for="customRadioInline">Superior</label>
                                   </div>

                              </div>
                              <br>


                          <div class="mb-3">
                           <label class="form-label d-block mb-3"><b>Overall Evaluation</b></label>

                           <div class="custom-radio form-check form-check-inline ">
                              <input type="radio" id="customRadioInline1" name="overall_evaluation" class="form-check-input" value="Poor" {{ ($onsite_interview->overall_evaluation=="Poor")? "checked" : "" }}>
                              <label class="form-check-label" for="customRadioInline">Poor</label>
                           </div>
                           <div class="custom-radio form-check form-check-inline">
                              <input type="radio" id="customRadioInline2" name="overall_evaluation" class="form-check-input" value="Fair" {{ ($onsite_interview->overall_evaluation=="Fair")? "checked" : "" }}>
                              <label class="form-check-label" for="customRadioInline">Fair</label>
                           </div>
                           <div class="custom-radio form-check form-check-inline">
                              <input type="radio" id="customRadioInline2" name="overall_evaluation" class="form-check-input" value="Average" {{ ($onsite_interview->overall_evaluation=="Average")? "checked" : "" }}>
                              <label class="form-check-label" for="customRadioInline">Average</label>
                           </div>
                           <div class="custom-radio form-check form-check-inline">
                              <input type="radio" id="customRadioInline2" name="overall_evaluation" class="form-check-input" value="Good" {{ ($onsite_interview->overall_evaluation=="Good")? "checked" : "" }}>
                              <label class="form-check-label" for="customRadioInline">Good</label>
                           </div>
                           <div class="custom-radio form-check form-check-inline">
                              <input type="radio" id="customRadioInline2" name="overall_evaluation" class="form-check-input" value="Superior" {{ ($onsite_interview->overall_evaluation=="Superior")? "checked" : "" }}>
                              <label class="form-check-label" for="customRadioInline">Superior</label>
                           </div>

                    </div>
                    <br>
                    <div class="form-group">
                               <div class="col-md-8">
                                 <label for="exampleInputEmail1"><b>What areas of concern do you have with this candidate?</b></label>
                                  <textarea class="form-control"  name="candidate_concern_area" rows="4">{{ $onsite_interview->candidate_concern_area }}</textarea>
                               </div>
                     </div>
                     <br>
                     <div class="form-group">
                                <div class="col-md-8">
                                  <label for="exampleInputEmail1"><b>
What are the strengths of this candidate? What unique characteristics, skills or abilities can they bring to the team?</b></label>
                                   <textarea class="form-control"  name="candidate_strength" rows="4">{{ $onsite_interview->candidate_strength }}</textarea>
                                </div>
                      </div>
                      <br>
                    <div class="form-group">
                                <div class="col-md-8">
                                  <label for="exampleInputEmail1"><b>Additional Comments</b></label>
                                   <textarea class="form-control"  name="additional_comment" rows="4">{{ $onsite_interview->additional_comment }}</textarea>
                                </div>
                      </div>
                      <br>
                     <div class="mb-3">
                        <label class="form-label d-block mb-3"><b>Recommended for Hire</b></label>

                        <div class="custom-radio form-check form-check-inline ">
                           <input type="radio" id="customRadioInline1" name="recommend_to_hire" class="form-check-input" value="Yes" {{ ($onsite_interview->recommend_to_hire=="Yes")? "checked" : "" }}>
                           <label class="form-check-label" for="customRadioInline">Yes</label>
                        </div>
                        <div class="custom-radio form-check form-check-inline">
                           <input type="radio" id="customRadioInline2" name="recommend_to_hire" class="form-check-input" value="No" {{ ($onsite_interview->recommend_to_hire=="No")? "checked" : "" }}>
                           <label class="form-check-label" for="customRadioInline">No</label>
                        </div>

                  </div>
                  <br>
                                    <div class="mb-3">
                                    <div class="col-md-8">
                                    <label class="form-label"><b>Submitted By :</b>   {{ $onsite_interview->created_by }}  </label>

                                    </div>
                                    </div>
                                    <br>
                                    <div class="mb-3">
                                    <div class="col-md-8">
                                    <label class="form-label"><b>Updated By :</b>   {{ $onsite_interview->updated_by }}  </label>

                                    <input type="text" class="form-control" name="updated_by" value="{{ Auth::user()->name }}" hidden>

                                    </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="mb-3">
                                    <div class="col-md-4">
                                    <button type="submit" class="btn btn-sm btn-primary" style="background-color:#174478; float: right;" >Update</button>
                                    </div>
                                    </div>

                              </form>
                                 </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->


                  </div> <!-- container-fluid -->
              </div>
              <!-- End Page-content -->


              <footer class="footer">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-sm-6">
                              <script>document.write(new Date().getFullYear())</script> © Data Embed.
                          </div>
                          <div class="col-sm-6">
                              <div class="text-sm-end d-none d-sm-block">
                                  Crafted with <i class="mdi mdi-heart text-danger"></i> <a  target="_blank" class="text-reset">Adnan Habib</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </footer>
          </div>
          <!-- end main content-->
@endsection
