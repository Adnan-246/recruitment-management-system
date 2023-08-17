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
                                  <h3 class="mb-0 mt-3 mx-3"><b>My Open Interviews</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('employee') }}">Home</a></li>
                                          <li class="breadcrumb-item active">My Open Interviews</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->
                      <div class="row">
                        <div class="col-12">
                            <div class="card mt-3 mx-3">
                      <div class="card-body mx-2 mt-3">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                           <thead>
                               <tr>
                                   
                                   <th>Candidate</th>
                                   <th>Position</th>
                                   <th>Interview Date</th>
                                   <th>Interview Type</th>
                                   
                                 </tr>
                           </thead>
                           <tbody>
                               @foreach ($interview as $key => $row)
                                   <tr>
                                  
                                   <td><a href="{{ route('employee.applicant.detail',$row->applicant->id) }}">{{ $row->applicant->name }}</a> </td>
                                   <td>{{ $row->applicant->job->position_name }}</td>
                                  
                                   <td>{{ date('d F, Y', strtotime($row->interview_date)) }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{ route('employee.phone.interview.create',$row->id) }}" style="background-color: #174478;"><i class="fas fa-phone mr-1" aria-hidden="true"></i>  Phone</a>

                                        <a class="btn btn-sm btn-primary" href="{{ route('employee.onsite.interview.create',$row->id) }}" style="background-color: #174478;"><i class="fas fa-handshake mr-1" aria-hidden="true"></i>  Onsite</a>
                                    </td>
                                   <td>   
                                    <button type="button" class="btn btn-sm btn-muted waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalEdithm{{ $row->id }}"><i class="fas fa-arrow-alt-circle-right mr-1" aria-hidden="true"></i> Details</button>
                                    <!--Interview Edit modal portion-->
                                    <div>  
                                        <!-- sample modal content -->
                                        <div id="myModalEdithm{{ $row->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header" >
                                                        <h5 class="modal-title mt-0" id="myModalLabel"><b>Interview Details</b> </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="background-color: 
                                                    #f1f1f1;">
                                                        
                                                        <form class="custom-validation" action="{{ route('employee.interview.update',$row->id) }}" method="POST" enctype="multipart/form-data">
                                                          @csrf

                                                          <div class="row mb-2">
                                                            <label for="horizontal-firstname-input" class="col-sm-4 col-form-label"><b>Applicant </b></label>
                                                            <div class="col-sm-8 mt-2">
                                                             {{ $row->applicant->name }}
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                          <label for="horizontal-firstname-input" class="col-sm-4 col-form-label"><b>Interview Date </b></label>
                                                          <div class="col-sm-8 mt-2">
                                                           {{ $row->interview_date }}
                                                          </div>
                                                      </div>
                                                      <div class="row mb-2">
                                                        <label for="horizontal-firstname-input" class="col-sm-4 col-form-label"><b>Interview Time </b></label>
                                                        <div class="col-sm-8 mt-2">
                                                         {{ $row->interview_time }}
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                      <label for="horizontal-firstname-input" class="col-sm-4 col-form-label"><b>Interviewer </b></label>
                                                      <div class="col-sm-8 mt-2">
                                                       {{ $row->interviewer }}
                                                      </div>
                                                  </div>
                                                  <div class="row mb-2">
                                                    <label for="horizontal-firstname-input" class="col-sm-4 col-form-label"><b>Interview Status </b></label>
                                                    <div class="col-sm-8 mt-2">
                                                     {{ $row->interview_status }}
                                                    </div>
                                                </div>

                          
                                                                    <div class="mb-3">
                                                                      <div class="col-md-8">
                                                                       <label class="form-label">Reason</label>
                                                                       
                                                                       <textarea class="form-control"  name="reason" rows="3" >{{ $row->reason }}</textarea>
                                                                       </div>
                                                                      </div>
                          
                                                                      <div class="mb-3">
                                                                        <div class="col-md-8">
                                                                         <label class="form-label">Comments</label>
                                                                         
                                                                         <textarea class="form-control"  name="comment" rows="3" >{{ $row->reason }}</textarea>
                                                                         </div>
                                                                        </div>
                                                                  <br>
                                                                  <div class="mb-3">
                                                                      <div class="col-md-8">
                                                                          <button type="submit" class="btn   btn-primary waves-effect waves-light me-1" style="float: right;"> 
                                                                              Update
                                                                          </button>
                                                                       </div>
                                                                      </div>
                                                          </form>
                                                            
                                                      </div>
                                                   
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    </div> 


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

 