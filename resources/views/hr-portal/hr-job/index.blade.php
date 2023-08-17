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
                                  <h3 class="mb-0 mx-3"><b>Manage Jobs</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('job.create') }}">Add New Job</a></li>
                                          <li class="breadcrumb-item active">Manage Jobs</li>
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
                                    <th>SI</th>
                                    <th>Position</th>
                                    <th>Position Type</th>
                                    <th>Location</th>
                                    <th>Expiration Date</th>
                                    <th>Published</th>
                                  </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $key => $row)
                                    <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $row->position_name }}</td>
                                    <td>{{ $row->position_type }}</td>
                                    <td>{{ $row->location }}</td>
                                    <td>{{ date('d F, Y', strtotime($row->end_date)) }}</td>
                                    <td>
                                            @if ($row->status==1)
                                            <span class="btn btn-sm btn-success btn-rounded waves-effect waves-light">Yes</span>
                                            @else
                                            <span class="btn btn-sm btn-danger btn-rounded waves-effect waves-light">No</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{-- <a href="{{ url('add/candidate') }}" class="btn btn-sm btn-primary">Apply</a> --}}
                                            <a href="{{ route('hr.job.show', $row->id) }}" class="btn btn-sm btn-muted" style="float:right;" ><i class="fas fa-arrow-alt-circle-right mr-1" aria-hidden="true"></i>  Details</a>
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
                                  Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-reset">Adnan Habib</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </footer>
          </div>
          <!-- end main content-->
@endsection

 