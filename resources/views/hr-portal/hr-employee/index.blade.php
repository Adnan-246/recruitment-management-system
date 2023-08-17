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
                                  <h3 class="mb-0 mx-3 mt-3"><b>Manage Employees</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('hr.employee.create') }}"><i class="fas fa-user mr-1" aria-hidden="true"></i> Add New Employee</a></li>
                                          <li class="breadcrumb-item active">Manage Employees</li>
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
                                              <th><b>Department</b> </th>
                                              <th><b>Full Name</b> </th>
                                              <th><b>Email</b> </th>
                                              <th><b>Position</b> </th>
                                              <th><b>Account Role</b> </th>
                                              
                                            </tr>
                                            </thead>
                                            <tbody>
                                               @foreach ($employee as $key => $row)
                                                  <tr>
                                                     <td>{{ ++$key }}</td>
                                                     <td>{{ $row->department  }}</td>
                                                     <td>{{ $row->name  }}</td>
                                                     <td>{{ $row->email }}</td>
                                                     <td>{{ $row->position_name }}</td>
                                                     <td>{{ $row->role->role_name }}</td>
                                                     <td><a href="{{ route('hr.employee.edit', $row->id) }}"><i class="fas fa-edit mr-1" aria-hidden="true"></i>  Edit</a></td>
                                                     
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

