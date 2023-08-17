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
                                  <h3 class="mb-0 mx-2 mt-3">Candidate History</h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('applicant.index') }}"><i class="fas fa-address-book mr-1 " aria-hidden="true"></i>   Manage Candidates</a></li>
                                          <li class="breadcrumb-item "><a href="{{ route('applicant.create') }}">Candidate Details</a> </li>
                                          <li class="breadcrumb-item active">History</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->
                      
      
                    <div class="row">

                        <div class="col-9  mt-2">
                          <div class="card mx-2">
                            
                            <!-- /.card-header -->
                            <div class="card-body mx-2">
                              
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

 