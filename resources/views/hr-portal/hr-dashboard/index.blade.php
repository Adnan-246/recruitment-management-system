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
                                  <h3 class="mb-0  mx-2"><b>Dashboard</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('hr') }}">Home</a></li>
                                          <li class="breadcrumb-item active">Dashboard</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->
                      
                      <div class="row">
                        <div class="col-12">
                            <div class="card mt-3 mx-3">
                                <div class="card-body mt-4 mx-3">
    
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                                <thead>
                                                <tr >
                                                    
                                                      <th>Position</th>
                                                      <th>Position Type</th>
                                                      <th>Date Applied</th>
                                                      <th>Name</th>
                                                      <th>Location</th>
                                                      <th>Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                       @foreach ($candidates as $key => $row)
                                                          <tr>
                                                            
                                                             <td>{{ $row->job->position_name  }}</td>
                                                             <td>{{ $row->job->position_type  }}</td>
                                                             <td>{{ date('d F, Y', strtotime($row->apply_date)) }}</td>
                                                             <td><a href="{{ route('applicant.detail',$row->id) }}">{{ $row->name  }}</a></td>
                                                             <td>{{ $row->state }}, {{ $row->country }}</td>
                                                            
                                                             <td>
                                                                @if($row->status== "Closed")
                                                        <span class="btn btn-sm btn-primary btn-rounded waves-effect waves-light">Closed</span>
                    
                                                        @elseif($row->status== "New")
                                                        <span class="btn btn-sm btn-success btn-rounded waves-effect waves-light">New</span>
                    
                                                        @elseif($row->status== "Active")
                                                        <span class="btn btn-sm btn-info btn-rounded waves-effect waves-light">Active</span>
                    
                                                        @elseif($row->status== "Dormant")
                                                        <span class="btn btn-sm btn-secondary btn-rounded waves-effect waves-light">Dormant</span>
                    
                                                       
                                                        @endif 
                                                               </td>
                                                               
                                                          </tr>
                                                       @endforeach
                                                    </tbody>
                                            </table>
                                    </div>
    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                         
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

 