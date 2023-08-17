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
                                  <h3 class="mb-0 mx-4 mt-3"><b>Change Password</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('employee') }}">Home</a></li>
                                          <li class="breadcrumb-item active">Change Password</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->
                     
                          <div class="col-md-8">
                            <div class="card mx-4 mt-3">
                            <div class="card-body mx-4 mt-3">

                              @if(session()->has('success'))
                               <strong class="text-success">{{ session()->get('success') }}</strong>
                               @endif
            
                               @if (session()->has('error'))
            
                               <strong class="text-danger">{{ session()->get('error') }}</strong>
            
                               @endif
            
                               <form action="{{ route('employee.update.password') }}" method="POST">
                                @csrf
                                <div>
                                  <label>Current Password</label>
                                  <input type="password" name="old_password" class="form-control" required>
                                </div>
                                <br>
                                <div>
                                  <label>New Password</label>
                                  <input type="password" name="password" class="form-control @error('password') is-invalid
            
                                  @enderror" required>
                                </div>
                                <br>
                                <div>
                                  <label>Confirm Password</label>
                                  <input type="password" name="password_confirmation" class="form-control" required>
                                </div>
                                <br><br>
                                <button type="submit" class="btn btn-md btn-primary" style=" float:right;" >Change </button>
                               
                              </form>
                           </div>
                           <!-- /.card-body -->
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

 