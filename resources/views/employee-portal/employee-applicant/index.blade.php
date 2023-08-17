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
                                  <h3 class="mb-0 mt-3 mx-3"><b>My Candidates</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('employee') }}">Home</a></li>
                                          <li class="breadcrumb-item active">My Candidates</li>
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
                                  <tr>
                                    <th>Position</th>                                 
                                    <th>Date Applied</th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($interview as $key => $row)
                                <tr>
                                  
                                   <td>{{ $row->applicant->job->position_name  }}</td>
                                   <td>{{ date('d F, Y', strtotime($row->applicant->apply_date)) }}</td>
                                   <td><a href="{{ route('employee.applicant.detail',$row->applicant->id) }}">{{ $row->applicant->name  }}</a></td>
                                   <td>{{ $row->applicant->state }}, {{ $row->applicant->country }}</td>
                                  
                                   <td>
                                    
                                    
                                     @if($row->applicant->status== 0)
                                    <span class="btn btn-sm btn-primary btn-rounded waves-effect waves-light">Closed</span>

                                    @elseif($row->applicant->status==1)
                                    <span class="btn btn-sm btn-success btn-rounded waves-effect waves-light">New</span>

                                    @elseif($row->applicant->status==2)
                                    <span class="btn btn-sm btn-info btn-rounded waves-effect waves-light">Active</span>

                                    @elseif($row->applicant->status==3)
                                    <span class="btn btn-sm btn-secondary btn-rounded waves-effect waves-light">Dormant</span>

                                    @elseif($row->applicant->status==4)
                                    <span class="btn btn-sm btn-warning btn-rounded waves-effect waves-light">Call on Interview</span>
                                   
                                    @elseif($row->applicant->status==5)
                                    <span class="btn btn-sm btn-success btn-rounded waves-effect waves-light">Qualified</span>

                                    @elseif($row->applicant->status==6)
                                    <span class="btn btn-sm btn-success btn-rounded waves-effect waves-light">Hired</span>

                              
                                    @elseif($row->applicant->status==7)
                                    <span class="btn btn-sm btn-danger btn-rounded waves-effect waves-light">Rejected</span>
                                    @endif 
                                     </td>
                                     <td >
                                     <b style="font-size: 13px;"> {{ $row->applicant->sub_status }}</b>
                                     </td>
                                     
                                </tr>
                             @endforeach
                                  
                              </tbody>
                          </table>
                      </div>

                        
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

 