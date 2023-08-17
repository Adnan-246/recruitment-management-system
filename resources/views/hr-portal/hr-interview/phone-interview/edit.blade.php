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
                                  <h3 class="mb-0 mt-3 mx-3"><b>Edit Phone Interview</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">

                                          <li class="breadcrumb-item"><a href="{{ route('applicant.index') }}"><i class="fas fa-address-book mr-1 " aria-hidden="true"></i> Manage Candidates</a></li>
                                          <li class="breadcrumb-item"><a href="{{ route('applicant.detail',$phone_interview->applicant->id) }}">{{ $phone_interview->applicant->name }}</a></li>
                                          <li class="breadcrumb-item active">Edit Phone Interview</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                     

                      <div class="row">

                        <div class="col-md-12">
                            <div class="card mx-3 mt-3">
                                <div class="card-body mx-3">
                                    <form action="{{ route('hm.phone.interview.update',$phone_interview->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <div class="col-md-8">
                                         <label class="form-label"><b>Phone Interview with :</b>   {{ $phone_interview->applicant->name }}  </label>

                                         <input type="text" name="applicant_id" class="form-control" value="{{ $phone_interview->applicant_id }}" hidden>
                                         </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="col-md-4">
                                             <label class="form-label"><b>Interview Date</b> </label>
                                            
                                             <input type="date" name="interview_date" class="form-control" value="{{ $phone_interview->interview_date }}" readonly>
                                             </div>
                                            </div>

                                           <br>
                                            <div class="mb-3">
                                                <p style="font-weight: bolder; font:black;"><h4><b>Characteristics</b> </h4></p>
                                             </div>

                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Assertive Outgoing</b></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="assertive_outgoing" class="form-check-input" value="Poor" {{ ($phone_interview->assertive_outgoing=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="assertive_outgoing" class="form-check-input" value="Fair" {{ ($phone_interview->assertive_outgoing=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="assertive_outgoing" class="form-check-input" value="Average" {{ ($phone_interview->assertive_outgoing=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="assertive_outgoing" class="form-check-input" value="Good" {{ ($phone_interview->assertive_outgoing=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="assertive_outgoing" class="form-check-input" value="Superior" {{ ($phone_interview->assertive_outgoing=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Achievement Oriented</b></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="achievement_oriented" class="form-check-input" value="Poor" {{ ($phone_interview->achievement_oriented=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="achievement_oriented" class="form-check-input" value="Fair" {{ ($phone_interview->achievement_oriented=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="achievement_oriented" class="form-check-input" value="Average" {{ ($phone_interview->achievement_oriented=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="achievement_oriented" class="form-check-input" value="Good" {{ ($phone_interview->achievement_oriented=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="achievement_oriented" class="form-check-input" value="Superior" {{ ($phone_interview->achievement_oriented=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Ethusiasm</b></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="enthusiasm" class="form-check-input" value="Poor" {{ ($phone_interview->enthusiasm=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="enthusiasm" class="form-check-input" value="Fair" {{ ($phone_interview->enthusiasm=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="enthusiasm" class="form-check-input" value="Average" {{ ($phone_interview->enthusiasm=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="enthusiasm" class="form-check-input" value="Good" {{ ($phone_interview->enthusiasm=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="enthusiasm" class="form-check-input" value="Superior" {{ ($phone_interview->enthusiasm=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Verbal Persuasive</b></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="verbal_persuasive" class="form-check-input" value="Poor" {{ ($phone_interview->verbal_persuasive=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="verbal_persuasive" class="form-check-input" value="Fair" {{ ($phone_interview->verbal_persuasive=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="verbal_persuasive" class="form-check-input" value="Average" {{ ($phone_interview->verbal_persuasive=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="verbal_persuasive" class="form-check-input" value="Good" {{ ($phone_interview->verbal_persuasive=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="verbal_persuasive" class="form-check-input" value="Superior" {{ ($phone_interview->verbal_persuasive=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Ability to Lean</b></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="ability_to_learn" class="form-check-input" value="Poor" {{ ($phone_interview->ability_to_learn=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="ability_to_learn" class="form-check-input" value="Fair" {{ ($phone_interview->ability_to_learn=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="ability_to_learn" class="form-check-input" value="Average" {{ ($phone_interview->ability_to_learn=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="ability_to_learn" class="form-check-input" value="Good" {{ ($phone_interview->ability_to_learn=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="ability_to_learn" class="form-check-input" value="Superior" {{ ($phone_interview->ability_to_learn=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Ability to Manage Stress</b></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="ability_manage_stress" class="form-check-input" value="Poor" {{ ($phone_interview->ability_manage_stress=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="ability_manage_stress" class="form-check-input" value="Fair" {{ ($phone_interview->ability_manage_stress=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="ability_manage_stress" class="form-check-input" value="Average" {{ ($phone_interview->ability_manage_stress=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="ability_manage_stress" class="form-check-input" value="Good" {{ ($phone_interview->ability_manage_stress=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="ability_manage_stress" class="form-check-input" value="Superior" {{ ($phone_interview->ability_manage_stress=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Confidence</b></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="confidence" class="form-check-input" value="Poor" {{ ($phone_interview->confidence=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="confidence" class="form-check-input" value="Fair" {{ ($phone_interview->confidence=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="confidence" class="form-check-input" value="Average" {{ ($phone_interview->confidence=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="confidence" class="form-check-input" value="Good" {{ ($phone_interview->confidence=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="confidence" class="form-check-input" value="Superior" {{ ($phone_interview->confidence=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                     <div class="mb-3">
                                         <p style="font-weight: bolder; font:black;"><h4><b>Qualifications</b> </h4></p>
                                     </div>
                                     <div class="mb-3">
                                        <label class="form-label d-block mb-3"><b>Education and Training</b></label>

                                        <div class="custom-radio form-check form-check-inline ">
                                            <input type="radio" id="customRadioInline1" name="education_training" class="form-check-input" value="Poor" {{ ($phone_interview->education_training=="Poor")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Poor</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="education_training" class="form-check-input" value="Fair" {{ ($phone_interview->education_training=="Fair")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Fair</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="education_training" class="form-check-input" value="Average" {{ ($phone_interview->education_training=="Average")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Average</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="education_training" class="form-check-input" value="Good" {{ ($phone_interview->education_training=="Good")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Good</label>
                                        </div>
                                        <div class="custom-radio form-check form-check-inline">
                                            <input type="radio" id="customRadioInline2" name="education_training" class="form-check-input" value="Superior" {{ ($phone_interview->education_training=="Superior")? "checked" : "" }}>
                                            <label class="form-check-label" for="customRadioInline">Superior</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="mb-3">
                                       <label class="form-label d-block mb-3"><b>Skills and Experience</b></label>

                                       <div class="custom-radio form-check form-check-inline ">
                                           <input type="radio" id="customRadioInline1" name="skill_experience" class="form-check-input" value="Poor" {{ ($phone_interview->skill_experience=="Poor")? "checked" : "" }}>
                                           <label class="form-check-label" for="customRadioInline">Poor</label>
                                       </div>
                                       <div class="custom-radio form-check form-check-inline">
                                           <input type="radio" id="customRadioInline2" name="skill_experience" class="form-check-input" value="Fair" {{ ($phone_interview->skill_experience=="Fair")? "checked" : "" }}>
                                           <label class="form-check-label" for="customRadioInline">Fair</label>
                                       </div>
                                       <div class="custom-radio form-check form-check-inline">
                                           <input type="radio" id="customRadioInline2" name="skill_experience" class="form-check-input" value="Average" {{ ($phone_interview->skill_experience=="Average")? "checked" : "" }}>
                                           <label class="form-check-label" for="customRadioInline">Average</label>
                                       </div>
                                       <div class="custom-radio form-check form-check-inline">
                                           <input type="radio" id="customRadioInline2" name="skill_experience" class="form-check-input" value="Good" {{ ($phone_interview->skill_experience=="Good")? "checked" : "" }}>
                                           <label class="form-check-label" for="customRadioInline">Good</label>
                                       </div>
                                       <div class="custom-radio form-check form-check-inline">
                                           <input type="radio" id="customRadioInline2" name="skill_experience" class="form-check-input" value="Superior" {{ ($phone_interview->skill_experience=="Superior")? "checked" : "" }}>
                                           <label class="form-check-label" for="customRadioInline">Superior</label>
                                       </div>

                                   </div>
                                   <br>
                                   <div class="mb-3">
                                      <label class="form-label d-block mb-3"><b>Job Stability</b></label>

                                      <div class="custom-radio form-check form-check-inline ">
                                          <input type="radio" id="customRadioInline1" name="job_stability" class="form-check-input" value="Poor" {{ ($phone_interview->job_stability=="Poor")? "checked" : "" }}>
                                          <label class="form-check-label" for="customRadioInline">Poor</label>
                                      </div>
                                      <div class="custom-radio form-check form-check-inline">
                                          <input type="radio" id="customRadioInline2" name="job_stability" class="form-check-input" value="Fair" {{ ($phone_interview->job_stability=="Fair")? "checked" : "" }}>
                                          <label class="form-check-label" for="customRadioInline">Fair</label>
                                      </div>
                                      <div class="custom-radio form-check form-check-inline">
                                          <input type="radio" id="customRadioInline2" name="job_stability" class="form-check-input" value="Average" {{ ($phone_interview->job_stability=="Average")? "checked" : "" }}>
                                          <label class="form-check-label" for="customRadioInline">Average</label>
                                      </div>
                                      <div class="custom-radio form-check form-check-inline">
                                          <input type="radio" id="customRadioInline2" name="job_stability" class="form-check-input" value="Good" {{ ($phone_interview->job_stability=="Good")? "checked" : "" }}>
                                          <label class="form-check-label" for="customRadioInline">Good</label>
                                      </div>
                                      <div class="custom-radio form-check form-check-inline">
                                          <input type="radio" id="customRadioInline2" name="job_stability" class="form-check-input" value="Superior" {{ ($phone_interview->job_stability=="Superior")? "checked" : "" }}>
                                          <label class="form-check-label" for="customRadioInline">Superior</label>
                                      </div>

                                  </div>
                                  <br>
                                  <div class="mb-3">
                                     <label class="form-label d-block mb-3"><b>Reason for Interest in Field</b></label>

                                     <div class="custom-radio form-check form-check-inline ">
                                         <input type="radio" id="customRadioInline1" name="reason_interest_field" class="form-check-input" value="Poor" {{ ($phone_interview->reason_interest_field=="Poor")? "checked" : "" }}>
                                         <label class="form-check-label" for="customRadioInline">Poor</label>
                                     </div>
                                     <div class="custom-radio form-check form-check-inline">
                                         <input type="radio" id="customRadioInline2" name="reason_interest_field" class="form-check-input" value="Fair" {{ ($phone_interview->reason_interest_field=="Fair")? "checked" : "" }}>
                                         <label class="form-check-label" for="customRadioInline">Fair</label>
                                     </div>
                                     <div class="custom-radio form-check form-check-inline">
                                         <input type="radio" id="customRadioInline2" name="reason_interest_field" class="form-check-input" value="Average" {{ ($phone_interview->reason_interest_field=="Average")? "checked" : "" }}>
                                         <label class="form-check-label" for="customRadioInline">Average</label>
                                     </div>
                                     <div class="custom-radio form-check form-check-inline">
                                         <input type="radio" id="customRadioInline2" name="reason_interest_field" class="form-check-input" value="Good" {{ ($phone_interview->reason_interest_field=="Good")? "checked" : "" }}>
                                         <label class="form-check-label" for="customRadioInline">Good</label>
                                     </div>
                                     <div class="custom-radio form-check form-check-inline">
                                         <input type="radio" id="customRadioInline2" name="reason_interest_field" class="form-check-input" value="Superior" {{ ($phone_interview->reason_interest_field=="Superior")? "checked" : "" }}>
                                         <label class="form-check-label" for="customRadioInline">Superior</label>
                                     </div>

                                 </div>
                                 <br>
                                 <div class="mb-3">
                                    <label class="form-label d-block mb-3"><b>Commitment to Position</b></label>

                                    <div class="custom-radio form-check form-check-inline ">
                                        <input type="radio" id="customRadioInline1" name="commitment_position" class="form-check-input" value="Poor" {{ ($phone_interview->commitment_position=="Poor")? "checked" : "" }}>
                                        <label class="form-check-label" for="customRadioInline">Poor</label>
                                    </div>
                                    <div class="custom-radio form-check form-check-inline">
                                        <input type="radio" id="customRadioInline2" name="commitment_position" class="form-check-input" value="Fair" {{ ($phone_interview->commitment_position=="Fair")? "checked" : "" }}>
                                        <label class="form-check-label" for="customRadioInline">Fair</label>
                                    </div>
                                    <div class="custom-radio form-check form-check-inline">
                                        <input type="radio" id="customRadioInline2" name="commitment_position" class="form-check-input" value="Average" {{ ($phone_interview->commitment_position=="Average")? "checked" : "" }}>
                                        <label class="form-check-label" for="customRadioInline">Average</label>
                                    </div>
                                    <div class="custom-radio form-check form-check-inline">
                                        <input type="radio" id="customRadioInline2" name="commitment_position" class="form-check-input" value="Good" {{ ($phone_interview->commitment_position=="Good")? "checked" : "" }}>
                                        <label class="form-check-label" for="customRadioInline">Good</label>
                                    </div>
                                    <div class="custom-radio form-check form-check-inline">
                                        <input type="radio" id="customRadioInline2" name="commitment_position" class="form-check-input" value="Superior" {{ ($phone_interview->commitment_position=="Superior")? "checked" : "" }}>
                                        <label class="form-check-label" for="customRadioInline">Superior</label>
                                    </div>

                                </div>
                                <br>
                                <div class="mb-3">
                                   <label class="form-label d-block mb-3"><b>Realistic Job Expectations</b></label>

                                   <div class="custom-radio form-check form-check-inline ">
                                       <input type="radio" id="customRadioInline1" name="realistic_job" class="form-check-input" value="Poor" {{ ($phone_interview->realistic_job=="Poor")? "checked" : "" }}>
                                       <label class="form-check-label" for="customRadioInline">Poor</label>
                                   </div>
                                   <div class="custom-radio form-check form-check-inline">
                                       <input type="radio" id="customRadioInline2" name="realistic_job" class="form-check-input" value="Fair" {{ ($phone_interview->realistic_job=="Fair")? "checked" : "" }}>
                                       <label class="form-check-label" for="customRadioInline">Fair</label>
                                   </div>
                                   <div class="custom-radio form-check form-check-inline">
                                       <input type="radio" id="customRadioInline2" name="realistic_job" class="form-check-input" value="Average" {{ ($phone_interview->realistic_job=="Average")? "checked" : "" }}>
                                       <label class="form-check-label" for="customRadioInline">Average</label>
                                   </div>
                                   <div class="custom-radio form-check form-check-inline">
                                       <input type="radio" id="customRadioInline2" name="realistic_job" class="form-check-input" value="Good" {{ ($phone_interview->realistic_job=="Good")? "checked" : "" }}>
                                       <label class="form-check-label" for="customRadioInline">Good</label>
                                   </div>
                                   <div class="custom-radio form-check form-check-inline">
                                       <input type="radio" id="customRadioInline2" name="realistic_job" class="form-check-input" value="Superior" {{ ($phone_interview->realistic_job=="Superior")? "checked" : "" }}>
                                       <label class="form-check-label" for="customRadioInline">Superior</label>
                                   </div>

                              </div>
                              <br>
                             <div class="mb-3">
                                 <label class="form-label d-block mb-3"><b>Level of Interest in Position</b></label>

                                 <div class="custom-radio form-check form-check-inline ">
                                     <input type="radio" id="customRadioInline1" name="level_interest_position" class="form-check-input" value="Poor" {{ ($phone_interview->level_interest_position=="Poor")? "checked" : "" }}>
                                     <label class="form-check-label" for="customRadioInline">Poor</label>
                                 </div>
                                 <div class="custom-radio form-check form-check-inline">
                                     <input type="radio" id="customRadioInline2" name="level_interest_position" class="form-check-input" value="Fair" {{ ($phone_interview->level_interest_position=="Fair")? "checked" : "" }}>
                                     <label class="form-check-label" for="customRadioInline">Fair</label>
                                 </div>
                                 <div class="custom-radio form-check form-check-inline">
                                     <input type="radio" id="customRadioInline2" name="level_interest_position" class="form-check-input" value="Average" {{ ($phone_interview->level_interest_position=="Average")? "checked" : "" }}>
                                     <label class="form-check-label" for="customRadioInline">Average</label>
                                 </div>
                                 <div class="custom-radio form-check form-check-inline">
                                     <input type="radio" id="customRadioInline2" name="level_interest_position" class="form-check-input" value="Good" {{ ($phone_interview->level_interest_position=="Good")? "checked" : "" }}>
                                     <label class="form-check-label" for="customRadioInline">Good</label>
                                 </div>
                                 <div class="custom-radio form-check form-check-inline">
                                     <input type="radio" id="customRadioInline2" name="level_interest_position" class="form-check-input" value="Superior" {{ ($phone_interview->level_interest_position=="Superior")? "checked" : "" }}>
                                     <label class="form-check-label" for="customRadioInline">Superior</label>
                                 </div>

                           </div>
                           <br>
                          <div class="mb-3">
                              <label class="form-label d-block mb-3"><b>Potential to Grow</b></label>

                              <div class="custom-radio form-check form-check-inline ">
                                  <input type="radio" id="customRadioInline1" name="potential_grow" class="form-check-input" value="Poor" {{ ($phone_interview->potential_grow=="Poor")? "checked" : "" }}>
                                  <label class="form-check-label" for="customRadioInline">Poor</label>
                              </div>
                              <div class="custom-radio form-check form-check-inline">
                                  <input type="radio" id="customRadioInline2" name="potential_grow" class="form-check-input" value="Fair" {{ ($phone_interview->potential_grow=="Fair")? "checked" : "" }}>
                                  <label class="form-check-label" for="customRadioInline">Fair</label>
                              </div>
                              <div class="custom-radio form-check form-check-inline">
                                  <input type="radio" id="customRadioInline2" name="potential_grow" class="form-check-input" value="Average" {{ ($phone_interview->potential_grow=="Average")? "checked" : "" }}>
                                  <label class="form-check-label" for="customRadioInline">Average</label>
                              </div>
                              <div class="custom-radio form-check form-check-inline">
                                  <input type="radio" id="customRadioInline2" name="potential_grow" class="form-check-input" value="Good" {{ ($phone_interview->potential_grow=="Good")? "checked" : "" }}>
                                  <label class="form-check-label" for="customRadioInline">Good</label>
                              </div>
                              <div class="custom-radio form-check form-check-inline">
                                  <input type="radio" id="customRadioInline2" name="potential_grow" class="form-check-input" value="Superior" {{ ($phone_interview->potential_grow=="Superior")? "checked" : "" }}>
                                  <label class="form-check-label" for="customRadioInline">Superior</label>
                              </div>

                        </div>
                        <br>
                       <div class="mb-3">
                           <label class="form-label d-block mb-3"><b>Overall Evaluation</b></label>

                           <div class="custom-radio form-check form-check-inline ">
                              <input type="radio" id="customRadioInline1" name="overall_evaluation" class="form-check-input" value="Poor" {{ ($phone_interview->overall_evaluation=="Poor")? "checked" : "" }}>
                              <label class="form-check-label" for="customRadioInline">Poor</label>
                           </div>
                           <div class="custom-radio form-check form-check-inline">
                              <input type="radio" id="customRadioInline2" name="overall_evaluation" class="form-check-input" value="Fair" {{ ($phone_interview->overall_evaluation=="Fair")? "checked" : "" }}>
                              <label class="form-check-label" for="customRadioInline">Fair</label>
                           </div>
                           <div class="custom-radio form-check form-check-inline">
                              <input type="radio" id="customRadioInline2" name="overall_evaluation" class="form-check-input" value="Average" {{ ($phone_interview->overall_evaluation=="Average")? "checked" : "" }}>
                              <label class="form-check-label" for="customRadioInline">Average</label>
                           </div>
                           <div class="custom-radio form-check form-check-inline">
                              <input type="radio" id="customRadioInline2" name="overall_evaluation" class="form-check-input" value="Good" {{ ($phone_interview->overall_evaluation=="Good")? "checked" : "" }}>
                              <label class="form-check-label" for="customRadioInline">Good</label>
                           </div>
                           <div class="custom-radio form-check form-check-inline">
                              <input type="radio" id="customRadioInline2" name="overall_evaluation" class="form-check-input" value="Superior" {{ ($phone_interview->overall_evaluation=="Superior")? "checked" : "" }}>
                              <label class="form-check-label" for="customRadioInline">Superior</label>
                           </div>

                    </div>
                    <br>
                    <div class="form-group">
                               <div class="col-md-8">
                                 <label for="exampleInputEmail1"><b>What areas of concern do you have with this candidate?</b></label>
                                  <textarea class="form-control"  name="candidate_concern_area" rows="4">{{ $phone_interview->candidate_concern_area }}</textarea>
                               </div>
                     </div>
                     <br>
                     <div class="form-group">
                                <div class="col-md-8">
                                  <label for="exampleInputEmail1"><b>
What are the strengths of this candidate? What unique characteristics, skills or abilities can they bring to the team?</b></label>
                                   <textarea class="form-control"  name="candidate_strength" rows="4">{{ $phone_interview->candidate_strength }}</textarea>
                                </div>
                      </div>
                      <br>
                    <div class="form-group">
                                <div class="col-md-8">
                                  <label for="exampleInputEmail1"><b>Additional Comments</b></label>
                                   <textarea class="form-control"  name="additional_comment" rows="4">{{ $phone_interview->additional_comment }}</textarea>
                                </div>
                      </div>
                      <br>
                     <div class="mb-3">
                        <label class="form-label d-block mb-3"><b>Recommended for Onsite</b><span style="color:#ff0000">*</span></label>

                        <div class="custom-radio form-check form-check-inline ">
                           <input type="radio" id="customRadioInline1" name="recommend_onsite" class="form-check-input" value="Yes" {{ ($phone_interview->recommend_onsite=="Yes")? "checked" : "" }}>
                           <label class="form-check-label" for="customRadioInline">Yes</label>
                        </div>
                        <div class="custom-radio form-check form-check-inline">
                           <input type="radio" id="customRadioInline2" name="recommend_onsite" class="form-check-input" value="No" {{ ($phone_interview->recommend_onsite=="No")? "checked" : "" }}>
                           <label class="form-check-label" for="customRadioInline">No</label>
                        </div>

                  </div>
                  <br>
                  <div class="mb-3">
                    <div class="col-md-8">
                     <label class="form-label"><b>Submitted By :</b>   {{ $phone_interview->created_by }}  </label>

                     </div>
                    </div>
                    <br>
                  <div class="mb-3">
                    <div class="col-md-8">
                     <label class="form-label"><b>Updated By :</b>   {{ $phone_interview->updated_by }}  </label>

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
