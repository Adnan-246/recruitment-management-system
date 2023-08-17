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
                                  <h3 class="mb-0 mx-3"><b>Add New Employee</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('hr.employee.index') }}"><i class="fas fa-user-friends mr-1" aria-hidden="true"></i> Manage Employees</a></li>
                                          <li class="breadcrumb-item active">Add New Employee</li>
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
                               
                             <form class="custom-validation" action="{{ route('hr.employee.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                   
                                     
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
                                                <label class="form-label">Department</label>
                                                <span style="color:#ff0000">*</span>
                                                <input type="text" class="form-control" name="department" placeholder="Department" required>
                                               </div>
                                             
                                               <div class="mb-3">
                                                <label class="form-label">Position</label>
                                                <span style="color:#ff0000">*</span>
                                                <input type="text" class="form-control" name="position_name" placeholder="Position" required>
                                               </div>

                                               <div class="mb-3">
                                                   
                                                <label class="form-label">Account Type</label>
                                                
                                                 <select class="form-select" aria-label="Default select example" name="role_id" required>
                                                   
                                                  <option disabled selected>--Select--</option>
                                                <option value="1">HR Manager</option>
                                                <option value="2">Hiring Manager</option>
                                                <option value="3">Employee</option>

                                                  
                                                 </select>
                                               
                                               </div>
                                               <br><br>

                                             
                                               
                                        
                                         <div style="float:right;">
                                          <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                              Submit
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

 