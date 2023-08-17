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
                                  <h3 class="mb-0 ">Edit Interview Details</h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('applicant.index') }}">Manage Candidates</a></li>
                                          <li class="breadcrumb-item "><a href="{{ route('applicant.detail',$interview->applicant->id) }}">Candidate Details</a> </li>
                                          <li class="breadcrumb-item active">Edit Interview Details</li>
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
                              <form class="custom-validation" action="{{ route('interview.update',$interview->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                 <div class="col-md-8">
                                  <label class="form-label">Interview Date</label>
                                  
                                  <input type="date" name="interview_date" class="form-control"  value="{{ $interview->interview_date }}">
                                  </div>
                                 </div>

                                 <div class="mb-3">
                                    <div class="col-md-8">
                                     <label class="form-label">Interview Time</label>
                                       
                                      <select class="form-select" aria-label="Default select example" name="interview_time" >
                                       <option selected>{{ $interview->interview_time }}</option>
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
                                         
                                          <select class="form-select" aria-label="Default select example" name="interviewer" >
                                           <option selected>{{ $interview->interviewer }}</option>
                                           <option>Adnan Habib</option>
                                           <option>Habib Adnan</option>
                                           <option>Md Raju</option>
                                           
                                          </select>
                                         </div>
                                        </div>

                                        <div class="mb-3">
                                          <div class="col-md-8">
                                           <label class="form-label">Interview Status</label>
                                           
                                            <select class="form-select" aria-label="Default select example" name="interview_status" >
                                             <option selected>{{ $interview->interview_status }}</option>
                                             <option>Accepted</option>
                                             <option>Declined</option>
                                             <option>Scheduled</option>
                                            
                                             
                                            </select>
                                           </div>
                                          </div>

                                          <div class="mb-3">
                                            <div class="col-md-8">
                                             <label class="form-label">Reason</label>
                                             
                                             <textarea class="form-control"  name="reason" rows="3" >{{ $interview->reason }}</textarea>
                                             </div>
                                            </div>

                                            <div class="mb-3">
                                              <div class="col-md-8">
                                               <label class="form-label">Comments</label>
                                               
                                               <textarea class="form-control"  name="comment" rows="3" >{{ $interview->comment }}</textarea>
                                               </div>
                                              </div>
                                        <br>
                                        <div class="mb-3">
                                            <div class="col-md-8">
                                                <button type="submit" class="btn   btn-primary waves-effect waves-light me-1" style="float: right;"> 
                                                    Update
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

 