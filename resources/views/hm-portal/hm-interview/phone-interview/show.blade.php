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
                                  <h3 class="mb-0 mt-3 mx-3"><b>Phone Interview Details</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">

                                          <li class="breadcrumb-item"><a href="{{ route('hm.open.interview.index') }}"><i class="fas fa-users mr-1 " aria-hidden="true"></i> My Open Interviews</a></li>
                                          <li class="breadcrumb-item"><a href="{{ route('hm.applicant.detail',$phone_interview->applicant->id) }}">{{ $phone_interview->applicant->name }}</a></li>
                                          <li class="breadcrumb-item active">Phone Interview Details</li>
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
                                  

                                    <div class="row mb-2">
                                      <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Phone Interview with :</b></label>
                                      <div class="col-sm-9 mt-2">   
                                       {{ $phone_interview->applicant->name }}
                                      </div>
                                  </div>
                                  <div class="row mb-2">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Interview Date :</b></label>
                                    <div class="col-sm-9 mt-2">   
                                     {{ $phone_interview->interview_date }}
                                    </div>
                                </div>

                                 <div class="mb-2">
                                     <p style="font-weight: bolder; font:black;"><h4><b>Characteristics</b> </h4></p>
                                  </div>
                                  <div class="row mb-2">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Assertive Outgoing :</b></label>
                                    <div class="col-sm-9 mt-2">   
                                     {{ $phone_interview->assertive_outgoing }}
                                    </div>
                                </div>
                                <div class="row mb-2">
                                  <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Achievement Oriented :</b></label>
                                  <div class="col-sm-9 mt-2">   
                                   {{ $phone_interview->achievement_oriented }}
                                  </div>
                              </div>
                              <div class="row mb-2">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Ethusiasm :</b></label>
                                <div class="col-sm-9 mt-2">   
                                 {{ $phone_interview->enthusiasm }}
                                </div>
                            </div>
                            <div class="row mb-2">
                              <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Verbal Persuasive :</b></label>
                              <div class="col-sm-9 mt-2">   
                               {{ $phone_interview->verbal_persuasive }}
                              </div>
                          </div>
                          <div class="row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Ability to Lean :</b></label>
                            <div class="col-sm-9 mt-2">   
                             {{ $phone_interview->ability_to_learn }}
                            </div>
                        </div>
                        <div class="row mb-2">
                          <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Ability to Manage Stress :</b></label>
                          <div class="col-sm-9 mt-2">   
                           {{ $phone_interview->ability_manage_stress }}
                          </div>
                      </div>
                      <div class="row mb-2">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Confidence :</b></label>
                        <div class="col-sm-9 mt-2">   
                         {{ $phone_interview->confidence }}
                        </div>
                    </div>

                      <div class="mb-2">
                           <p style="font-weight: bolder; font:black;"><h4><b>Qualifications</b> </h4></p>
                      </div>
                      <div class="row mb-2">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Education and Training :</b></label>
                        <div class="col-sm-9 mt-2">   
                         {{ $phone_interview->education_training }}
                        </div>
                    </div>
                    <div class="row mb-2">
                      <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Skills and Experience :</b></label>
                      <div class="col-sm-9 mt-2">   
                       {{ $phone_interview->skill_experience }}
                      </div>
                  </div>
                  <div class="row mb-2">
                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Job Stability :</b></label>
                    <div class="col-sm-9 mt-2">   
                     {{ $phone_interview->job_stability }}
                    </div>
                </div>
                <div class="row mb-2">
                  <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Reason for Interest in Field :</b></label>
                  <div class="col-sm-9 mt-2">   
                   {{ $phone_interview->reason_interest_field }}
                  </div>
              </div>
              <div class="row mb-2">
                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Commitment to Position :</b></label>
                <div class="col-sm-9 mt-2">   
                 {{ $phone_interview->commitment_position }}
                </div>
            </div>
            <div class="row mb-2">
              <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Realistic Job Expectations :</b></label>
              <div class="col-sm-9 mt-2">   
               {{ $phone_interview->realistic_job }}
              </div>
          </div>
          <div class="row mb-2">
            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Level of Interest in Position :</b></label>
            <div class="col-sm-9 mt-2">   
             {{ $phone_interview->level_interest_position }}
            </div>
        </div>
        <div class="row mb-2">
          <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Potential to Grow :</b></label>
          <div class="col-sm-9 mt-2">   
           {{ $phone_interview->potential_grow }}
          </div>
      </div>
          <div class="row mb-3">
            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Overall Evaluation :</b></label>
            <div class="col-sm-9 mt-2">   
            {{ $phone_interview->overall_evaluation }}
            </div>
        </div>
        <div class="row mb-3">
          <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>What areas of concern do you have with this candidate? </b></label>
          <div class="col-sm-9 mt-2">   
            <textarea class="form-control"  name="candidate_concern_area" rows="4">{{ $phone_interview->candidate_concern_area }}</textarea>
          </div>
      </div>
              <div class="row mb-3">
                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>What are the strengths of this candidate? What unique characteristics, skills or abilities can they bring to the team? </b></label>
                <div class="col-sm-9 mt-2">   
                  <textarea class="form-control"  name="candidate_concern_area" rows="4">{{ $phone_interview->candidate_strength }}</textarea>
                </div>
            </div>
            <div class="row mb-3">
              <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Additional Comments </b></label>
              <div class="col-sm-9 mt-2">   
                <textarea class="form-control"  name="candidate_concern_area" rows="4">{{ $phone_interview->additional_comment }}</textarea>
              </div>
          </div>
          <div class="row mb-2">
            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Recommended for Onsite :</b></label>
            <div class="col-sm-9 mt-2">   
             {{ $phone_interview->recommend_onsite }}
            </div>
          </div>
                <div class="row mb-2">
                  <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Submitted By :</b></label>
                  <div class="col-sm-9 mt-2">   
                  {{ $phone_interview->created_by }}
                  </div>
                </div>
                <div class="row mb-2">
                  <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Updated By :</b></label>
                  <div class="col-sm-9 mt-2">   
                  {{ $phone_interview->updated_by }}
                  </div>
                </div>

                 
                  
                 
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
