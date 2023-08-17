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
                                  <h3 class="mb-0 mx-3"><b>Add New Candidate</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('applicant.index') }}"><i class="fas fa-user-friends mr-1" aria-hidden="true"></i> Manage Candidates</a></li>
                                          <li class="breadcrumb-item active">Add New Candidate</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->
                   
                     
                    <!-- end row -->

                    <div class="row">

                        <div class="col-8  mt-3">
                          <div class="card mx-3">
                            
                            <!-- /.card-header -->
                            <div class="card-body">
                               
                             <form class="custom-validation" action="{{ url('public/applicant/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
      
                                              <div class="mb-3">
                                                <label class="form-label">Applied Date</label>
                                                <span style="color:#ff0000">*</span>
                                                <input type="date" name="apply_date" class="form-control" value="{{ $date = date('Y-m-d'); }}" readonly>
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Job ID</label>
                                                <span style="color:#ff0000">*</span>
                                                {{-- <input type="text" class="form-control" name="job_id" value="{{ $job->job_id_no }}"> --}}
                                                <select class="form-control" name="job_id" >
                                                 <option selected>----Select----</option>
                                                  @foreach ($jobs as $row)
                                                      <option value="{{ $row->id }}">{{ $row->job_id_no }}</option>
                                                  @endforeach
                                              </select>
                                               </div>
      
                                                <div class="mb-3">
                                                <label class="form-label">Position Name</label>
                                                <span style="color:#ff0000">*</span>
                                                <select class="form-control" name="position_name">
                                                  <option disabled selected="selected">-Select-</option>
                                                   @foreach ($jobs as $row)
                                                       <option value="{{ $row->id }}">{{ $row->position_name }}</option>
                                                   @endforeach
                                               </select>
                                               </div>
      
                                                <div class="mb-3">
                                                <label class="form-label">Position Type</label>
                                                <span style="color:#ff0000">*</span>
                                                <select class="form-control" name="position_type">
                                                  <option disabled selected="selected">-Select-</option>
                                                   @foreach ($jobs as $row)
                                                       <option value="{{ $row->id }}">{{ $row->position_type }}</option>
                                                   @endforeach
                                               </select>
                                               </div>
      
      
      
                                               <div class="mb-3">
                                                <label class="form-label">Educational Qualification</label>
                                                <span style="color:#ff0000">*</span>
                                                <select class="form-select" aria-label="Default select example" name="education">
                                                  <option disabled selected>-select-</option>
                                                  <option>Associate Degree</option>
                                                  <option>Bachelor Degree</option>
                                                  <option>High School</option>
                                                  <option>Masters Degree or Higher</option>
                                                  <option>Not Specified</option>
                                                </select>
                                               
                                               </div>
                                          
                                               
                                               <div class="mb-3">
                                                <label class="form-label">Experience</label>
                                                <span style="color:#ff0000">*</span>
                                                <select class="form-select"                     
                                                 name="experience">
                                                  <option disabled selected>-select-</option>
                                                  <option>1 - 2 Years</option>
                                                  <option>2 - 4 Years</option>
                                                  <option>5 - 10 Years</option>
                                                  <option>None Required</option>
                                                  <option>Other</option>
                                                </select>
                                               
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Experience Description</label>
                                                <span style="color:#ff0000">*</span>
                                                <textarea class="form-control"  name="experience_descrip" rows="4" required></textarea>
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Salary Expectation</label>
                                                <span style="color:#ff0000">*</span>
                                                <input type="text" class="form-control" name="salary_expect" placeholder="Salary expect" required>
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Resume</label>
                                                <span style="color:#ff0000">*</span>
                                                <input type="file" class="form-control" name="resume" required>
                                                @error('resume')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                               </div>
                                              
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-4 mt-lg-0">
      
                                             
      
                                              
      
                                               <div class="mb-3">
                                                <label class="form-label">First Name</label>
                                                <span style="color:#ff0000">*</span>
                                                <input type="text" class="form-control" name="f_name" placeholder="First Name" required>
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Last Name</label>
                                                <span style="color:#ff0000">*</span>
                                                <input type="text" class="form-control" name="l_name" placeholder="Last Name" required>
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Full Name</label>
                                                <span style="color:#ff0000">*</span>
                                                <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <span style="color:#ff0000">*</span>
                                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Phone</label>
                                                <span style="color:#ff0000">*</span>
                                                <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Country</label>
                                                <span style="color:#ff0000">*</span>
                                                <input type="text" class="form-control" name="country" placeholder="Country" required>
                                               </div>
                                             
                                               <div class="mb-3">
                                                <label class="form-label">State</label>
                                                <span style="color:#ff0000">*</span>
                                                <input type="text" class="form-control" name="state" placeholder="State" required>
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">City</label>
                                                <span style="color:#ff0000">*</span>
                                                <input type="text" class="form-control" name="city" placeholder="City" required>
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <span style="color:#ff0000">*</span>
                                                <textarea class="form-control"  name="address" rows="2" required></textarea>
                                               </div>
                                             
                                               
                                          
                                     </div>
                                        <div class="mb-3">
                                          <label class="form-label">Cover Letter</label>
                                          <span style="color:#ff0000">*</span>
                                          <textarea class="form-control"  name="cover_letter" rows="8" required></textarea>
                                         </div>
                                        
                                         <div style="float:right;">
                                          <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                              Apply
                                          </button>
                                          <button type="reset" class="btn btn-secondary waves-effect">
                                              Cancel
                                          </button>
                                      </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                       
                        <!-- /.col -->
              
                        <div class="col-4 mt-2">
                          <div class="card ">
                            <div class="card-header" >
                              <h5><b>Job Details</b> </h5>
                            </div>
                            
                            <!-- /.card-header -->
                            <div class="card-body">
                              <h6><b>Job ID : </b>
              
                                <h6 class="text-muted"></h6>
                             </h6>
                             <br>
                              <h6><b>Position Name : </b>
              
                                <h6 class="text-muted"></h6>
                             </h6>
                             <br>
                             <h6 ><b>Position Type :</b>
                              <h6 class="text-muted"></h6>
                           </h6>
                           <br>
                           <h6 ><b>Job Reference :</b>
                            <h6 class="text-muted"></h6>
                         </h6>
                         
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                          
                     
                        </div>   <!-- , $jobs->id  -->
                       
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

 