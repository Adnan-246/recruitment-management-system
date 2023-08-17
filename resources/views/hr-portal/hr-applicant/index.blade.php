@extends('hr-portal.hr-layouts.hr-app')

@section('content')
   <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content" style="background-color: #D8D9CF;">

              <div class="page-content">
                  <div class="container-fluid">

                     
                    <!-- start page title -->
                      <div class="row">
                          <div class="col-12">
                              <div class="page-title-box d-flex align-items-center justify-content-between">
                                  <h3 class="mb-0 mx-3 mt-3"><b>Manage Candidates</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('applicant.create') }}"><i class="fas fa-user mr-1" aria-hidden="true"></i> Add New Candidate</a></li>
                                          <li class="breadcrumb-item active">Manage Candidates</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->
                  

                       <div class="row">
                        <div class="col-12">
                            <div class="card">
                                {{-- style="background-color: #f5f6f8;" --}}
                                <div class="card-body mt-3" >
                                    
                                     <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                              <th><b>SI</b> </th>
                                              <th><b>Position</b> </th>
                                              <th><b>Position Type</b> </th>
                                              <th><b>Date Applied</b> </th>
                                              <th><b>Name</b> </th>
                                              <th><b>Location</b> </th>
                                              <th><b>Status</b> </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                               @foreach ($candidates as $key => $row)
                                                  <tr>
                                                     <td>{{ ++$key }}</td>
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

