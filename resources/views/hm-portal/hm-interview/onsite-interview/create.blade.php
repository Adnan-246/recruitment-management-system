@extends('hm-portal.hm-layouts.hm-app')

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
                                  <h3 class="mb-0 mt-3 mx-3"><b>New Onsite Interview</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">

                                          <li class="breadcrumb-item"><a href="{{ route('hm.open.interview.index') }}"><i class="fas fa-users mr-1 " aria-hidden="true"></i> My Open Interviews</a></li>
                                          <li class="breadcrumb-item"><a href="{{ route('hm.applicant.detail',$interview->applicant->id) }}">{{ $interview->applicant->name }}</a></li>
                                          <li class="breadcrumb-item active">New Onsite Interview</li>
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
                                    <form action="{{ route('hm.onsite.interview.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <div class="col-md-8">
                                         <label class="form-label"><b>Onsite Interview with :</b>   {{ $interview->applicant->name }}  </label>

                                         <input type="text" name="applicant_id" class="form-control" value="{{ $interview->applicant_id }}" hidden>
                                         </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="col-md-4">
                                             <label class="form-label"><b>Interview Date</b> </label>
                                             <span style="color:#ff0000">*</span>
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
                                            <input type="radio" id="customRadioInline1" name="body_lan_eye_contact" class="form-check-input" value="Poor">
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="body_lan_eye_contact" class="form-check-input" value="Fair">
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="body_lan_eye_contact" class="form-check-input" value="Average">
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="body_lan_eye_contact" class="form-check-input" value="Good">
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="body_lan_eye_contact" class="form-check-input" value="Superior">
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Resume Clarity Presentation</b>  <span style="color:#ff0000">*</span></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="resume_presentation" class="form-check-input" value="Poor">
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="resume_presentation" class="form-check-input" value="Fair">
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="resume_presentation" class="form-check-input" value="Average">
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="resume_presentation" class="form-check-input" value="Good">
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="resume_presentation" class="form-check-input" value="Superior">
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Presentation of Prior Work</b><span style="color:#ff0000">*</span></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="presentation_prior_work" class="form-check-input" value="Poor">
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="presentation_prior_work" class="form-check-input" value="Fair">
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="presentation_prior_work" class="form-check-input" value="Average">
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="presentation_prior_work" class="form-check-input" value="Good">
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="presentation_prior_work" class="form-check-input" value="Superior">
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
                                            <input type="radio" id="customRadioInline1" name="achievement_oriented" class="form-check-input" value="Poor">
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="achievement_oriented" class="form-check-input" value="Fair">
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="achievement_oriented" class="form-check-input" value="Average">
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="achievement_oriented" class="form-check-input" value="Good">
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="achievement_oriented" class="form-check-input" value="Superior">
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Enthusiasm</b><span style="color:#ff0000">*</span></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="enthusiasm" class="form-check-input" value="Poor">
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="enthusiasm" class="form-check-input" value="Fair">
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="enthusiasm" class="form-check-input" value="Average">
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="enthusiasm" class="form-check-input" value="Good">
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="enthusiasm" class="form-check-input" value="Superior">
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Verbal Persuasive</b><span style="color:#ff0000">*</span></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="verbal_persuasive" class="form-check-input" value="Poor">
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="verbal_persuasive" class="form-check-input" value="Fair">
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="verbal_persuasive" class="form-check-input" value="Average">
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="verbal_persuasive" class="form-check-input" value="Good">
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="verbal_persuasive" class="form-check-input" value="Superior">
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Team Skills</b><span style="color:#ff0000">*</span></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="team_skill" class="form-check-input" value="Poor">
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="team_skill" class="form-check-input" value="Fair">
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="team_skill" class="form-check-input" value="Average">
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="team_skill" class="form-check-input" value="Good">
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="team_skill" class="form-check-input" value="Superior">
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                     <div class="mb-3">
                                         <p style="font-weight: bolder; font:black;"><h4><b>Others</b> </h4></p>
                                     </div>
                                     <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Education and Training</b><span style="color:#ff0000">*</span></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="education_training" class="form-check-input" value="Poor">
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="education_training" class="form-check-input" value="Fair">
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="education_training" class="form-check-input" value="Average">
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="education_training" class="form-check-input" value="Good">
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="education_training" class="form-check-input" value="Superior">
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                       <label class="form-label d-block mb-3"><b>Skills and Revelant Experience</b><span style="color:#ff0000">*</span></label>

                                       <div class="custom-radio form-check form-check-inline ">
                                           <input type="radio" id="customRadioInline1" name="skill_experience" class="form-check-input" value="Poor">
                                           <label class="form-check-label" for="customRadioInline">Poor</label>
                                       </div>
                                       <div class="custom-radio form-check form-check-inline">
                                           <input type="radio" id="customRadioInline2" name="skill_experience" class="form-check-input" value="Fair">
                                           <label class="form-check-label" for="customRadioInline">Fair</label>
                                       </div>
                                       <div class="custom-radio form-check form-check-inline">
                                           <input type="radio" id="customRadioInline2" name="skill_experience" class="form-check-input" value="Average">
                                           <label class="form-check-label" for="customRadioInline">Average</label>
                                       </div>
                                       <div class="custom-radio form-check form-check-inline">
                                           <input type="radio" id="customRadioInline2" name="skill_experience" class="form-check-input" value="Good">
                                           <label class="form-check-label" for="customRadioInline">Good</label>
                                       </div>
                                       <div class="custom-radio form-check form-check-inline">
                                           <input type="radio" id="customRadioInline2" name="skill_experience" class="form-check-input" value="Superior">
                                           <label class="form-check-label" for="customRadioInline">Superior</label>
                                       </div>

                                   </div>
                                   <br>
                                   <div class="mb-3">
                                      <label class="form-label d-block mb-3"><b>Commitment to Position</b><span style="color:#ff0000">*</span></label>

                                      <div class="custom-radio form-check form-check-inline ">
                                          <input type="radio" id="customRadioInline1" name="commitment_position" class="form-check-input" value="Poor">
                                          <label class="form-check-label" for="customRadioInline">Poor</label>
                                      </div>
                                      <div class="custom-radio form-check form-check-inline">
                                          <input type="radio" id="customRadioInline2" name="commitment_position" class="form-check-input" value="Fair">
                                          <label class="form-check-label" for="customRadioInline">Fair</label>
                                      </div>
                                      <div class="custom-radio form-check form-check-inline">
                                          <input type="radio" id="customRadioInline2" name="commitment_position" class="form-check-input" value="Average">
                                          <label class="form-check-label" for="customRadioInline">Average</label>
                                      </div>
                                      <div class="custom-radio form-check form-check-inline">
                                          <input type="radio" id="customRadioInline2" name="commitment_position" class="form-check-input" value="Good">
                                          <label class="form-check-label" for="customRadioInline">Good</label>
                                      </div>
                                      <div class="custom-radio form-check form-check-inline">
                                          <input type="radio" id="customRadioInline2" name="commitment_position" class="form-check-input" value="Superior">
                                          <label class="form-check-label" for="customRadioInline">Superior</label>
                                      </div>

                                  </div>
                                  <br>
                                  <div class="mb-3">
                                     <label class="form-label d-block mb-3"><b>Level of Interest in Position</b><span style="color:#ff0000">*</span></label>

                                     <div class="custom-radio form-check form-check-inline ">
                                         <input type="radio" id="customRadioInline1" name="level_interest_position" class="form-check-input" value="Poor">
                                         <label class="form-check-label" for="customRadioInline">Poor</label>
                                     </div>
                                     <div class="custom-radio form-check form-check-inline">
                                         <input type="radio" id="customRadioInline2" name="level_interest_position" class="form-check-input" value="Fair">
                                         <label class="form-check-label" for="customRadioInline">Fair</label>
                                     </div>
                                     <div class="custom-radio form-check form-check-inline">
                                         <input type="radio" id="customRadioInline2" name="level_interest_position" class="form-check-input" value="Average">
                                         <label class="form-check-label" for="customRadioInline">Average</label>
                                     </div>
                                     <div class="custom-radio form-check form-check-inline">
                                         <input type="radio" id="customRadioInline2" name="level_interest_position" class="form-check-input" value="Good">
                                         <label class="form-check-label" for="customRadioInline">Good</label>
                                     </div>
                                     <div class="custom-radio form-check form-check-inline">
                                         <input type="radio" id="customRadioInline2" name="level_interest_position" class="form-check-input" value="Superior">
                                         <label class="form-check-label" for="customRadioInline">Superior</label>
                                     </div>

                                 </div>
                                 <br>
                                 <div class="mb-3">
                                    <label class="form-label d-block mb-3"><b>Asked Good Question</b><span style="color:#ff0000">*</span></label>

                                    <div class="custom-radio form-check form-check-inline ">
                                        <input type="radio" id="customRadioInline1" name="asked_good_question" class="form-check-input" value="Poor">
                                        <label class="form-check-label" for="customRadioInline">Poor</label>
                                    </div>
                                    <div class="custom-radio form-check form-check-inline">
                                        <input type="radio" id="customRadioInline2" name="asked_good_question" class="form-check-input" value="Fair">
                                        <label class="form-check-label" for="customRadioInline">Fair</label>
                                    </div>
                                    <div class="custom-radio form-check form-check-inline">
                                        <input type="radio" id="customRadioInline2" name="asked_good_question" class="form-check-input" value="Average">
                                        <label class="form-check-label" for="customRadioInline">Average</label>
                                    </div>
                                    <div class="custom-radio form-check form-check-inline">
                                        <input type="radio" id="customRadioInline2" name="asked_good_question" class="form-check-input" value="Good">
                                        <label class="form-check-label" for="customRadioInline">Good</label>
                                    </div>
                                    <div class="custom-radio form-check form-check-inline">
                                        <input type="radio" id="customRadioInline2" name="asked_good_question" class="form-check-input" value="Superior">
                                        <label class="form-check-label" for="customRadioInline">Superior</label>
                                    </div>

                                </div>
                                <br>
                                <div class="mb-3">
                                   <label class="form-label d-block mb-3"><b>Potential to Grow</b><span style="color:#ff0000">*</span></label>

                                   <div class="custom-radio form-check form-check-inline ">
                                       <input type="radio" id="customRadioInline1" name="potential_to_grow" class="form-check-input" value="Poor">
                                       <label class="form-check-label" for="customRadioInline">Poor</label>
                                   </div>
                                   <div class="custom-radio form-check form-check-inline">
                                       <input type="radio" id="customRadioInline2" name="potential_to_grow" class="form-check-input" value="Fair">
                                       <label class="form-check-label" for="customRadioInline">Fair</label>
                                   </div>
                                   <div class="custom-radio form-check form-check-inline">
                                       <input type="radio" id="customRadioInline2" name="potential_to_grow" class="form-check-input" value="Average">
                                       <label class="form-check-label" for="customRadioInline">Average</label>
                                   </div>
                                   <div class="custom-radio form-check form-check-inline">
                                       <input type="radio" id="customRadioInline2" name="potential_to_grow" class="form-check-input" value="Good">
                                       <label class="form-check-label" for="customRadioInline">Good</label>
                                   </div>
                                   <div class="custom-radio form-check form-check-inline">
                                       <input type="radio" id="customRadioInline2" name="potential_to_grow" class="form-check-input" value="Superior">
                                       <label class="form-check-label" for="customRadioInline">Superior</label>
                                   </div>

                              </div>
                              <br>


                          <div class="mb-3">
                           <label class="form-label d-block mb-3"><b>Overall Evaluation</b><span style="color:#ff0000">*</span></label>

                           <div class="custom-radio form-check form-check-inline ">
                              <input type="radio" id="customRadioInline1" name="overall_evaluation" class="form-check-input" value="Poor">
                              <label class="form-check-label" for="customRadioInline">Poor</label>
                           </div>
                           <div class="custom-radio form-check form-check-inline">
                              <input type="radio" id="customRadioInline2" name="overall_evaluation" class="form-check-input" value="Fair">
                              <label class="form-check-label" for="customRadioInline">Fair</label>
                           </div>
                           <div class="custom-radio form-check form-check-inline">
                              <input type="radio" id="customRadioInline2" name="overall_evaluation" class="form-check-input" value="Average">
                              <label class="form-check-label" for="customRadioInline">Average</label>
                           </div>
                           <div class="custom-radio form-check form-check-inline">
                              <input type="radio" id="customRadioInline2" name="overall_evaluation" class="form-check-input" value="Good">
                              <label class="form-check-label" for="customRadioInline">Good</label>
                           </div>
                           <div class="custom-radio form-check form-check-inline">
                              <input type="radio" id="customRadioInline2" name="overall_evaluation" class="form-check-input" value="Superior">
                              <label class="form-check-label" for="customRadioInline">Superior</label>
                           </div>

                    </div>
                    <br>
                    <div class="form-group">
                               <div class="col-md-8">
                                 <label for="exampleInputEmail1"><b>What areas of concern do you have with this candidate?</b></label><span style="color:#ff0000">*</span>
                                  <textarea class="form-control"  name="candidate_concern_area" rows="4"></textarea>
                               </div>
                     </div>
                     <br>
                     <div class="form-group">
                                <div class="col-md-8">
                                  <label for="exampleInputEmail1"><b>
What are the strengths of this candidate? What unique characteristics, skills or abilities can they bring to the team?</b></label>
                                   <textarea class="form-control"  name="candidate_strength" rows="4"></textarea>
                                </div>
                      </div>
                      <br>
                    <div class="form-group">
                                <div class="col-md-8">
                                  <label for="exampleInputEmail1"><b>Additional Comments</b></label>
                                   <textarea class="form-control"  name="additional_comment" rows="4"></textarea>
                                </div>
                      </div>
                      <br>
                     <div class="mb-3">
                        <label class="form-label d-block mb-3"><b>Recommended for Hire</b><span style="color:#ff0000">*</span></label>

                        <div class="custom-radio form-check form-check-inline ">
                           <input type="radio" id="customRadioInline1" name="recommend_to_hire" class="form-check-input" value="Yes">
                           <label class="form-check-label" for="customRadioInline">Yes</label>
                        </div>
                        <div class="custom-radio form-check form-check-inline">
                           <input type="radio" id="customRadioInline2" name="recommend_to_hire" class="form-check-input" value="No">
                           <label class="form-check-label" for="customRadioInline">No</label>
                        </div>

                  </div>
                  <br>
                  <div class="mb-3">


                    <input type="text" name="created_by" class="form-control" value="{{ Auth::user()->name }}" hidden>

                 </div>
                  <br>
                  <div class="mb-3">
                    <div class="col-md-4">
                     <button type="submit" class="btn btn-sm btn-primary" style="background-color:#174478; float: right;" >Submit</button>
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
