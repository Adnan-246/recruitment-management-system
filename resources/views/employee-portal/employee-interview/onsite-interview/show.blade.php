@extends('employee-portal.employee-layouts.employee-app')

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
                                  <h3 class="mb-0 mt-3 mx-3"><b>Onsite Interview Details</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">

                                          <li class="breadcrumb-item"><a href="{{ route('hm.open.interview.index') }}"><i class="fas fa-users mr-1 " aria-hidden="true"></i> My Open Interviews</a></li>
                                          <li class="breadcrumb-item"><a href="{{ route('employee.applicant.detail',$onsite_interview->applicant->id) }}">{{ $onsite_interview->applicant->name }}</a></li>
                                          <li class="breadcrumb-item active">Onsite Interview Details</li>
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
                                      <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Onsite Interview with :</b></label>
                                      <div class="col-sm-9 mt-2">
                                       {{ $onsite_interview->applicant->name }}
                                      </div>
                                  </div>
                                  <div class="row mb-2">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Interview Date :</b></label>
                                    <div class="col-sm-9 mt-2">
                                     {{ $onsite_interview->interview_date }}
                                    </div>
                                </div>

                                 <div class="mb-2">
                                     <p style="font-weight: bolder; font:black;"><h4><b>Appearance</b> </h4></p>
                                  </div>
                                  <div class="row mb-2">
                                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Body Language Eye Contact :</b></label>
                                    <div class="col-sm-9 mt-2">
                                     {{ $onsite_interview->body_lan_eye_contact }}
                                    </div>
                                </div>
                                <div class="row mb-2">
                                  <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Resume Clarity Presentation :</b></label>
                                  <div class="col-sm-9 mt-2">
                                   {{ $onsite_interview->resume_presentation }}
                                  </div>
                              </div>
                              <div class="row mb-2">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Presentation of Prior Work :</b></label>
                                <div class="col-sm-9 mt-2">
                                 {{ $onsite_interview->presentation_prior_work }}
                                </div>
                            </div>
                            <div class="mb-2">
                                <p style="font-weight: bolder; font:black;"><h4><b>Characteristics</b> </h4></p>
                             </div>
                            <div class="row mb-2">
                              <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Achievement Oriented :</b></label>
                              <div class="col-sm-9 mt-2">
                               {{ $onsite_interview->achievement_oriented }}
                              </div>
                          </div>
                          <div class="row mb-2">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Enthusiasm :</b></label>
                            <div class="col-sm-9 mt-2">
                             {{ $onsite_interview->enthusiasm }}
                            </div>
                        </div>
                        <div class="row mb-2">
                          <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Verbal Persuasive :</b></label>
                          <div class="col-sm-9 mt-2">
                           {{ $onsite_interview->verbal_persuasive }}
                          </div>
                      </div>
                      <div class="row mb-2">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Team Skills :</b></label>
                        <div class="col-sm-9 mt-2">
                         {{ $onsite_interview->team_skill }}
                        </div>
                    </div>

                      <div class="mb-2">
                           <p style="font-weight: bolder; font:black;"><h4><b>Others</b> </h4></p>
                      </div>
                      <div class="row mb-2">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Education and Training :</b></label>
                        <div class="col-sm-9 mt-2">
                         {{ $onsite_interview->education_training }}
                        </div>
                    </div>
                    <div class="row mb-2">
                      <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Skills and Revelant Experience :</b></label>
                      <div class="col-sm-9 mt-2">
                       {{ $onsite_interview->skill_experience }}
                      </div>
                  </div>
                  <div class="row mb-2">
                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Commitment to Position :</b></label>
                    <div class="col-sm-9 mt-2">
                     {{ $onsite_interview->commitment_position }}
                    </div>
                </div>
                <div class="row mb-2">
                  <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Level of Interest in Position :</b></label>
                  <div class="col-sm-9 mt-2">
                   {{ $onsite_interview->level_interest_position }}
                  </div>
              </div>
              <div class="row mb-2">
                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Asked Good Question :</b></label>
                <div class="col-sm-9 mt-2">
                 {{ $onsite_interview->asked_good_question }}
                </div>
            </div>
            <div class="row mb-2">
              <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Potential to Grow :</b></label>
              <div class="col-sm-9 mt-2">
               {{ $onsite_interview->potential_to_grow }}
              </div>
          </div>


          <div class="row mb-3">
            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Overall Evaluation :</b></label>
            <div class="col-sm-9 mt-2">
            {{ $onsite_interview->overall_evaluation }}
            </div>
        </div>
        <div class="row mb-3">
          <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>What areas of concern do you have with this candidate? </b></label>
          <div class="col-sm-9 mt-2">
            <textarea class="form-control"  name="candidate_concern_area" rows="4">{{ $onsite_interview->candidate_concern_area }}</textarea>
          </div>
      </div>
              <div class="row mb-3">
                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>What are the strengths of this candidate? What unique characteristics, skills or abilities can they bring to the team? </b></label>
                <div class="col-sm-9 mt-2">
                  <textarea class="form-control"  name="candidate_concern_area" rows="4">{{ $onsite_interview->candidate_strength }}</textarea>
                </div>
            </div>
            <div class="row mb-3">
              <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Additional Comments </b></label>
              <div class="col-sm-9 mt-2">
                <textarea class="form-control"  name="candidate_concern_area" rows="4">{{ $onsite_interview->additional_comment }}</textarea>
              </div>
          </div>
          <div class="row mb-2">
            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Recommended for Hired :</b></label>
            <div class="col-sm-9 mt-2">
             {{ $onsite_interview->recommend_to_hire }}
            </div>
          </div>
                <div class="row mb-2">
                  <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Submitted By :</b></label>
                  <div class="col-sm-9 mt-2">
                  {{ $onsite_interview->created_by }}
                  </div>
                </div>
                <div class="row mb-2">
                  <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>Updated By :</b></label>
                  <div class="col-sm-9 mt-2">
                  {{ $onsite_interview->updated_by }}
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
