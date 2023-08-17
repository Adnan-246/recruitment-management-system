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
                                  <h3 class="mb-0 mx-3"><b>Create New Job</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('hr.job.index') }}"><i class="fas fa-briefcase mr-1" aria-hidden="true"></i> Manage Jobs</a></li>
                                          <li class="breadcrumb-item active">Add New Job</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->
                      <div class="col-md-10">
                      <div class="card mt-3 mx-3">
                        <div class="card-body">
                          <form action="{{ route('job.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                               <div class="col-md-10">
                                 <label for="exampleInputEmail1">Published Date</label>
                                 <span style="color:#ff0000">*</span>
                                  <input type="date" name="post_date" class="form-control" value="{{ $date = date('Y-m-d'); }}" readonly>
                               </div>
                            </div>
                            <br>
                            <div class="form-group">
                               <div class="col-md-10">
                                 <label class="required" for="exampleInputEmail1">Job ID</label>
                                 <span style="color:#ff0000">*</span>
                                 <input type="text" class="form-control" name="job_id_no"  placeholder="Job id" required>
                               </div>     
                            </div>
                            <br>
                            <div class="form-group">
                               <div class="col-md-10">
                                 <label for="exampleInputEmail1">Reference Code</label>
                                 <span style="color:#ff0000">*</span>
                                 <input type="text" class="form-control" name="ref_code" placeholder="Reference" required>
                               </div>
                            </div>
                            <br>
                            <div class="form-group">
                               <div class="col-md-10">
                                 <label for="exampleInputEmail1">Position Name</label>
                                 <span style="color:#ff0000">*</span>
                                 <input type="text" class="form-control" name="position_name" placeholder="Position name" required>
                               </div>
                            </div>
                            <br>
                            <div class="form-group">
                               <div class="col-md-10">
                                 <label for="exampleInputEmail1">Position Type</label>
                                 <span style="color:#ff0000">*</span>
                                 <select class="form-control " style="width: 100%;" name="position_type">
                                   <option disabled selected>-Select-</option>
                                   <option>Contractor</option>
                                   <option>Full-Time Regular</option>
                                   <option>Intern</option>
                                   <option>Part-Time Regular</option>
                                   <option>Temporary</option>
                                 </select>
                               </div>
                            </div>
                            <br>
                            <div class="form-group">
                               <div class="col-md-10">
                                 <label for="exampleInputEmail1">Location</label>
                                 <span style="color:#ff0000">*</span>
                                 <input type="text" class="form-control" name="location" placeholder="Location" required>
                               </div>
                            </div>
                            <br>
                            <div class="form-group">
                               <div class="col-md-10">
                                 <label for="exampleInputEmail1">Salary</label>
                                 <span style="color:#ff0000">*</span>
                                 <input type="text" class="form-control" name="salary" placeholder="Salary" required>
                               </div>
                            </div>
                            <br>
                            <div class="form-group">
                               <div class="col-md-10">
                                 <label for="exampleInputEmail1">No of Vacancies</label>
                                 <span style="color:#ff0000">*</span>
                                 <input type="text" class="form-control" name="vacancy" placeholder="No of vacancy" required>
                               </div>
                            </div>
                            <br>
                            <div class="form-group">
                               <div class="col-md-10">
                                 <label for="exampleInputEmail1">Experiences</label>
                                 <span style="color:#ff0000">*</span>
                                 <select class="form-control " style="width: 100%;" name="experience" >
                                   <option disabled selected="selected">-Select-</option>
                                   <option>1 - 2 Years</option>
                                   <option>2 - 4 Years</option>
                                   <option>5 - 10 Years</option>
                                   <option>None Required</option>
                                   <option>Other</option>
                                 </select>
                               </div>
                            </div>
                            <br>
                            <div class="form-group">
                               <div class="col-md-10">
                                 <label for="exampleInputEmail1">Education</label>
                                 <span style="color:#ff0000">*</span>
                                 <select class="form-control " style="width: 100%;" name="education">
                                   <option disabled selected="selected">-Select-</option>
                                   <option>Associate Degree</option>
                                   <option>Bachelor Degree</option>
                                   <option>High School</option>
                                   <option>Masters Degree or Higher</option>
                                   <option>Not Specified</option>
                                 </select>
                               </div>
                            </div>
                            <br>
                            <div class="form-group">
                               <div class="col-md-10">
                                 <label for="exampleInputEmail1">Description</label>
                                 <span style="color:#ff0000">*</span>
                                  <textarea class="form-control"  name="description" rows="10"></textarea>
                               </div>
                            </div>
                            <br>
                            <div class="form-group">
                               <div class="col-md-10">
                                 <label for="exampleInputEmail1">Requirements</label>
                                 <span style="color:#ff0000">*</span>
                                  <textarea class="form-control "  name="requirement" rows="6"></textarea>
                               </div>
                            </div>
                            <br>
                            <div class="form-group">
                               <div class="col-md-10">
                                 <label for="exampleInputEmail1">Expiration Date</label>
                                 <span style="color:#ff0000">*</span>
                                  <input type="date" name="end_date" class="form-control" required>
                               </div>
                            </div>
                            <br>
                             <div class="form-check">
                                   <input type="checkbox" class="form-check-input" name="status" value="1" >
                                   <label class="form-check-label" for="exampleCheck1">Published</label>
                                 
                               </div>
                               <br><br>
                               <div class="form-group">
                                <div class="col-md-10">
                                  <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                                </div>
                             </div>
                             <br>
                               {{-- <div class="card-footer col-sm-1">
                               
                              </div> --}}
                           </form>
                        </div>
                      </div>
                    </div>
                     
                   

                        

                         
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

 