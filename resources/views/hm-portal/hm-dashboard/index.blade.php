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
                                  <h3 class="mb-0 mt-3 mx-3"><b>Dashboard</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('hm') }}">Home</a></li>
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

                      <div class="card-body ">
                        <table id="example" class="display nowrap" style="width:100%">
                           <thead>
                               <tr>
                                   
                                   <th>Candidate</th>
                                   <th>Position Name</th>
                                   <th>Position Type</th>
                                   <th>Interview Date</th>
                                   
                                   
                                 </tr>
                           </thead>
                           <tbody>
                               @foreach ($interview as $key => $row)
                                   <tr>
                                  
                                   <td><a href="{{ route('hm.applicant.detail',$row->applicant->id) }}">{{ $row->applicant->name }}</a> </td>
                                   <td>{{ $row->applicant->job->position_name }}</td>
                                   <td>{{ $row->applicant->job->position_type }}</td>
                                   
                                   <td>{{ date('d F, Y', strtotime($row->interview_date)) }}</td>
                                   
                                   <td>   
                                    <button type="button" class="btn btn-sm btn-muted waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalEdithm{{ $row->id }}"><i class="fas fa-arrow-alt-circle-right mr-1" aria-hidden="true"></i> Details</button>
                                    <!--Interview Edit modal portion-->
                                    <div>  
                                        <!-- sample modal content -->
                                        <div id="myModalEdithm{{ $row->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header" >
                                                        <h5 class="modal-title mt-0" id="myModalLabel">Interview Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="background-color: 
                                                    #f1f1f1;">
                                                        
                                                      <form class="custom-validation" action="{{ route('interview.update',$row->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="mb-3">
                                                          <div class="col-md-8">
                                                           <label class="form-label"><h6><b>Applicant :</b>    {{ $row->applicant->name }}</h6></label>
                                                          
                                                           </div>
                                                          </div>
                        
                                                        <div class="mb-3">
                                                         <div class="col-md-8">
                                                          <label class="form-label">Interview Date</label>
                                                          
                                                          <input type="date" name="interview_date" class="form-control" value="{{ $row->interview_date }}">
                                                       
                                                          </div>
                                                         </div>
                        
                                                         <div class="mb-3">
                                                            <div class="col-md-8">
                                                             <label class="form-label">Interview Time</label>
                                                               
                                                              <select class="form-select" aria-label="Default select example" name="interview_time" >
                                                               <option selected>{{ $row->interview_time }}</option>
                                                               <option>01:00AM</option>
                                                               <option>02:00AM</option>
                                                               <option>03:00AM</option>
                                                               <option>04:00AM</option>
                                                               <option>05:00AM</option>
                                                               <option>06:00AM</option>
                                                               <option>07:00AM</option>
                                                               <option>08:00AM</option>
                                                               <option>09:00AM</option>
                                                               <option>10:00AM</option>
                                                               <option>11:00AM</option>
                                                               <option>12:00PM</option>
                                                               <option>01:00PM</option>
                                                               <option>02:00PM</option>
                                                               <option>03:00PM</option>
                                                               <option>04:00PM</option>
                                                               <option>05:00PM</option>
                                                               <option>06:00PM</option>
                                                               <option>07:00PM</option>
                                                               <option>08:00PM</option>
                                                               <option>09:00PM</option>
                                                               <option>10:00PM</option>
                                                               <option>11:00PM</option>
                                                               <option>12:00AM</option>
                                                              </select>
                                                             </div>
                                                            </div>
                        
                                                            <div class="mb-3">
                                                                <div class="col-md-8">
                                                                 <label class="form-label">Interviewer</label>
                                                                 
                                                                  <select class="form-select" aria-label="Default select example" name="interviewer" >
                                                                    
                                                                   <option selected>{{ $row->interviewer }}</option>
                                                                   <optgroup label="Hiring Managers">
                                                                    <option value="Adnan Habib">Adnan Habib</option>
                                                                    <option value="Habib Adnan">Habib Adnan</option>
                                                                </optgroup>
                                                                <optgroup label="Employees">
                                                                    <option value="Md Raju">Md Raju</option>
                                                                    <option ></option>
                                                                    <option ></option>
                                                                    <option ></option>
                                                                </optgroup>
                                                                   
                                                                  </select>
                                                                 </div>
                                                                </div>
                        
                                                                <div class="mb-3">
                                                                  <div class="col-md-8">
                                                                   <label class="form-label">Interview Status</label>
                                                                   
                                                                    <select class="form-select" aria-label="Default select example" name="interview_status" >
                                                                     <option selected>{{ $row->interview_status }}</option>
                                                                     <option>Accepted</option>
                                                                     <option>Declined</option>
                                                                     <option>Scheduled</option>
                                                                    
                                                                     
                                                                    </select>
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

 