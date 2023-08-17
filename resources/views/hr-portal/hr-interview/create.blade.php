@extends('hr-portal.hr-layouts.hr-app')

@section('content')
   <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content" style="background-color: #f1f1f1;">

              <div class="page-content">
                  <div class="container-fluid" >

                      <!-- start page title -->
                       <div class="row">
                          <div class="col-12">
                              <div class="page-title-box d-flex align-items-center justify-content-between">
                                  <h3 class="mb-0 ">Add Candidate Interview</h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('applicant.index') }}">Manage Candidates</a></li>
                                          <li class="breadcrumb-item "><a href="{{ route('applicant.detail',$applicant->id) }}">Candidate Details</a> </li>
                                          <li class="breadcrumb-item active">Add Candidate Interview</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->
      
                    <div class="row">

                        <div class="col-md-8  mt-3">
                          <div class="card ">
                            
                            <!-- /.card-header -->
                            <div class="card-body">
                              <form class="custom-validation" action="{{ route('interview.store',$applicant->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <div class="col-md-8">
                                     <label class="form-label">Applicant ID</label>
                                     <span style="color:#ff0000">*</span>   
                                     <input type="text" name="applicant_id" class="form-control" value="{{ $applicant->id }}" readonly>
                                     </div>
                                    </div>

                                <div class="mb-3">
                                 <div class="col-md-8">
                                  <label class="form-label">Interview Date</label>
                                  <span style="color:#ff0000">*</span>   
                                  <input type="date" name="interview_date" class="form-control" required>
                                  </div>
                                 </div>

                                 <div class="mb-3">
                                    <div class="col-md-8">
                                     <label class="form-label">Interview Time</label>
                                     <span style="color:#ff0000">*</span>   
                                      <select class="form-select" aria-label="Default select example" name="interview_time" required>
                                       <option disabled selected>-Select-</option>
                                       <option>01:00AM</option>
                                       <option>02:00AM</option>
                                       <option>03:00AM</option>
                                       <option>04:00AM</option>
                                       <option>05:00AM</option>
                                       <option>06:00AM</option>
                                       <option>07:00AM</option>
                                       <option>08:00AM</option>
                                       <option>09:00AM</option>
                                       <option>10:00AM</option>
                                       <option>11:00AM</option>
                                       <option>12:00PM</option>
                                       <option>01:00PM</option>
                                       <option>02:00PM</option>
                                       <option>03:00PM</option>
                                       <option>04:00PM</option>
                                       <option>05:00PM</option>
                                       <option>06:00PM</option>
                                       <option>07:00PM</option>
                                       <option>08:00PM</option>
                                       <option>09:00PM</option>
                                       <option>10:00PM</option>
                                       <option>11:00PM</option>
                                       <option>12:00AM</option>
                                      </select>
                                     </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="col-md-8">
                                         <label class="form-label">Interviewer</label>
                                         <span style="color:#ff0000">*</span>   
                                          <select class="form-select" aria-label="Default select example" name="interviewer" required>
                                           <option disabled selected>-Select-</option>
                                           <option>Adnan Habib</option>
                                           <option>Habib Adnan</option>
                                           <option>Md Raju</option>
                                           
                                          </select>
                                         </div>
                                        </div>
                                        <br>
                                        <div class="mb-3">
                                            <div class="col-md-8">
                                                <button type="submit" class="btn   btn-primary waves-effect waves-light me-1" style="float: right;"> 
                                                    Submit
                                                </button>
                                             </div>
                                            </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        
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
                                  Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-reset">Adnan Habib</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </footer>
          </div>
          <!-- end main content-->
@endsection

 