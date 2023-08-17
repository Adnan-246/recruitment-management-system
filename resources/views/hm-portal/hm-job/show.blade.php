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
                                  <h3 class="mb-0 mt-3 mx-3"><b>Job Details</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('hm') }}">Home</a></li>
                                          <li class="breadcrumb-item"><a href="{{ route('hm.job.index') }}"><i class="fas fa-briefcase mr-1" aria-hidden="true"></i> Jobs</a></li>
                                          <li class="breadcrumb-item active">Dashboard</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->

                      <div class="row">
                        <div class="col-md-10">
                          <div class="card mt-3 mx-3">
                            <div class="card-body" style="color: #333333;
                            font-size: 16px;
                            font-family: Roboto, sans-serif;
                            font-weight: 400;">
                                 <h4><b>{{ $job->position_name }}</b></h4>
                                    <br>
                                    <h5><b>Description </b>
                                      <h6 >{{ $job->description }}</h6>
                                  </h5>
                                  <br>
                                  <h5><b>Requirements </b>
                                    <h6 >{{ $job->requirement }}</h6>
                                </h5>
                                <br>
                                <h5><b>Position Type </b>
                                  <h6>{{ $job->position_type }}</h6>
                              </h5>
                              <br>
                              <h5><b>Location </b>
                                <h6>{{ $job->location }}</h6>
                            </h5>
                            <br>
                            <h5><b>No of Vacancies</b>
                              <h6>{{ $job->vacancy }}</h6>
                          </h5>
                          <br>
                            <h5><b>Salary </b>
                              <h6>{{ $job->salary }}</h6>
                          </h5>
                          <br>
                          <h5><b>Experiences </b>
                            <h6>{{ $job->experience }}</h6>
                        </h5>
                        <br>
                        <h5><b>Education </b>
                          <h6>{{ $job->education }}</h6>
                      </h5>
                      <br>
                      <h5><b>Reference Code </b>
                        <h6>{{ $job->ref_code }}</h6>
                    </h5>
                    <br>
                    <h5><b>Deadline </b>
                      <h6>{{ date('d F, Y', strtotime($job->end_date)) }}</h6>
                  </h5>
           
               </div>
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
                                  Crafted with <i class="mdi mdi-heart text-danger"></i> <a  target="_blank" class="text-reset">Adnan Habib</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </footer>
          </div>
          <!-- end main content-->
@endsection

 