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
                                  <h3 class="mb-0 mx-2 mt-3">Candidate Details</h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('applicant.index') }}"><i class="fas fa-address-book mr-1 " aria-hidden="true"></i>   Manage Candidates</a></li>
                                          <li class="breadcrumb-item "><a href="{{ route('applicant.create') }}">Add New Candidate</a> </li>
                                          <li class="breadcrumb-item active">Candidate Details</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->
                      <div class="row">
                        <div class="col-md-12 ">
                          
                            <a href="#" style="font-weight: 950; float:right;"><i class="fas fa-history"></i>  History</a>
                         
                           
                        </div>
                      </div>
      
                    <div class="row">

                        <div class="col-9  mt-2">
                          <div class="card mx-2">
                            
                            <!-- /.card-header -->
                            <div class="card-body mx-2">
                              <form class="custom-validation" action="{{ route('applicant.detail.update',$candidate->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
      
                                              <div class="mb-3">
                                                <label class="form-label">Applied Date</label>
                                                
                                                <input type="date" name="apply_date" class="form-control" value="{{ $candidate->apply_date }}" readonly>
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Educational Qualification</label>
                                               
                                                <select class="form-select" aria-label="Default select example" name="education" >
                                                  <option  selected>{{ $candidate->education }}</option>
                                                  <optgroup label="--Select--">
                                                  <option>Associate Degree</option>
                                                  <option>Bachelor Degree</option>
                                                  <option>High School</option>
                                                  <option>Masters Degree or Higher</option>
                                                  <option>Not Specified</option>
                                                  </optgroup>
                                                </select>
                                               
                                               </div>
                                          
                                               
                                               <div class="mb-3">
                                                <label class="form-label">Experience</label>
                                                {{-- <span style="color:#ff0000">*</span>  --}}
                                                <select class="form-select"                     
                                                 name="experience" >
                                                  <option  selected>{{ $candidate->experience }}</option>
                                                  <optgroup label="----Select----">
                                                  <option>1 - 2 Years</option>
                                                  <option>2 - 4 Years</option>
                                                  <option>5 - 10 Years</option>
                                                  <option>None Required</option>
                                                  <option>Other</option>
                                                  </optgroup>
                                                </select>
                                               
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Experience Description</label>
                                               
                                                <textarea class="form-control"  name="experience_descrip" rows="4">{{ $candidate->experience_descrip }}</textarea>
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Salary Expectation</label>
                                                
                                                <input type="text" class="form-control" name="salary_expect" value="{{ $candidate->salary_expect }}" >
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Resume</label>

                                                <span>
                                                  
                                                  <a style="float: right;" href="{{ route('applicant.resume.view', $candidate->id) }}">Download</a>

                                                  {{-- <a style="float: right;" href="{{ route('applicant.resume.download', $applicant->resume) }}">Download</a>   --}}

                                                 
                                                </span>
                                                <input type="file" class="form-control" name="resume" value="{{ $candidate->resume }}">
                                               </div>
                                              

                                               <br><br>
                                               {{-- <div class="card"> --}}
                                                <div class="card-header"><h4><b> HR Manager Section</b></h4></div>
                                                <div class="card-body">

                                                  <div class="mb-3">
                                                    <label class="form-label">Status</label>
                                                    
                                                    <select class="form-select"                     
                                                     name="status" id="can_status">
                                                    
                                                     <option selected>{{ $candidate->status }}</option>
                                                     <option disabled >-----Select-----</option>
                                                    
                                                    </select>
                                                   
                                                   </div>

                                                   <div class="mb-3">
                                                   
                                                    <select class="form-select"                     
                                                     name="stage1" id="stage1">
                                                    
                                                     <option selected>{{ $candidate->stage1 }}</option>
                                                     
                                                    </select>
                                                   
                                                   </div>
                                                   <div class="mb-3">
                                                   
                                                    <select class="form-select"                     
                                                     name="stage2" id="stage2" >
                                                    
                                                    <option selected>{{ $candidate->stage2 }}
                                                      </option>
                                                      
                                                      
                                                    </select>
                                                   
                                                   </div>


                                                   <div class="mb-3">
                                                    <label class="form-label">Notes</label>
                                                   
                                                    <textarea class="form-control"  name="note" rows="4">{{ $candidate->note }}</textarea>
                                                   </div>
                                                   <br>

                                                   <div class="mb-3">
                                                    <label class="form-label">Interviewer (Hiring Manager & Employees)</label>

                                                  <select class="select2 form-control select2-multiple" name="interviewers[]" multiple="multiple"    > 

                                                  @foreach (explode(',', $candidate->interviewers) as $row )
                                                  <option selected>{{ $row }}</option>
                                                    
                                                  @endforeach
                                                 
                                                  <optgroup label="Hiring Managers">
                                                    @foreach ($users as $row)
                                                    {{-- @php( $interviewers = explode(",",$row->name) ) --}}
                                                    
                                                      @if($row->role_id == 2)
                                                        <option value="{{ $row->id = $row->name }}" >{{ $row->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </optgroup>
                                                <optgroup label="Employees">
                                                 
                                                  @foreach ($employees as $row)
                                                    @if ($row->role_id == 3)
                                                      <option value="{{ $row->id = $row->name }}" >{{ $row->name }}</option>
                                                    @endif
                                                    @endforeach
                                              </optgroup>  
                                                     
                                                     
                                                     </select>
                                                    
                                                   </div>

                                                   {{-- <div class="mb-3">
                                                   
                                                     <label class="form-label">Interviewer</label>
                                                     
                                                      <select class="form-select" aria-label="Default select example" name="hiring_manager" >
                                                        
                                                       <option selected> {{ $applicant->hiring_manager }}</option>
                                                    

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
                                                    
                                                    </div> --}}

                                                </div>
                                               </div>

                                            {{-- </div> --}}
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-4 mt-lg-0">

                                               <div class="mb-3">
                                                <label class="form-label">First Name</label>
                                                
                                                <input type="text" class="form-control" name="f_name" value="{{ $candidate->f_name }}">
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Last Name</label>
                                                
                                                <input type="text" class="form-control" name="l_name" value="{{ $candidate->l_name }}">
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Full Name</label>
                                                
                                                <input type="text" class="form-control" name="name" value="{{ $candidate->f_name }} {{ $candidate->l_name }}">
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Email</label>
                                               
                                                <input type="email" class="form-control" name="email" value="{{ $candidate->email }}">
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Phone</label>
                                               
                                                <input type="text" class="form-control" name="phone" value="{{ $candidate->phone }}">
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Country</label>
                                                
                                                <input type="text" class="form-control" name="country" value="{{ $candidate->country }}">
                                               </div>
                                             
                                               <div class="mb-3">
                                                <label class="form-label">State</label>
                                                
                                                <input type="text" class="form-control" name="state" value="{{ $candidate->state }}">
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">City</label>
                                                
                                                <input type="text" class="form-control" name="city" value="{{ $candidate->city }}">
                                               </div>
      
                                               <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                {{-- <span style="color:#ff0000">*</span> --}}
                                                <textarea class="form-control"  name="address" rows="2" >{{ $candidate->address }}</textarea>
                                               </div>
                                             
                                               
                                          
                                              </div>
                                        <div class="mb-3">
                                          <label class="form-label">Cover Letter</label>
                                         
                                          <textarea class="form-control"  name="cover_letter" rows="8" >{{ $candidate->cover_letter }}</textarea>
                                         </div>
                                        <br><br><br><br>
                                         <div style="float:right;">
                                          <button type="submit" class="btn btn-primary waves-effect waves-light me-1" value="toast-top-center">
                                              Update 
                                          </button>
                                         
                                      </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                       
                        <!-- /.col -->
              
                        <div class="col-3 mt-2">
                          <div class="card ">
                            {{-- <div class="card-header" >
                              <h5 style="float: unset;"><b>Job Details</b></h5>
                            </div> --}}
                            
                            <!-- /.card-header -->
                            <div class="card-body">
                             
                              <h6><b>Position : {{ $candidate->job->position_name }} </b>
                             </h6>
                             <br>
                             <h6 ><b>Reference Code :</b>
                              <h6 class="text-muted">{{ $candidate->job->ref_code }}</h6>
                           </h6>
                           <br>
                           <h6 ><b>Location :</b>
                            <h6 class="text-muted">{{ $candidate->job->location }}</h6>
                         </h6>
                         <br>
                             <h6 ><b>Position Type :</b>
                              <h6 class="text-muted">{{ $candidate->job->position_type }}</h6>
                           </h6>
                           <br>
                          
                         
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                          
                     
                        </div>   <!-- , $jobs->id  -->
                       
                        <!-- /.col -->
                        
                    </div>
                    <!-- end row -->

                     <!-- Interview Section -->
                    <div class="row">

                      <div class="col-md-12  mt-2">
                        <div class="card mx-2">
                          <div><h4 class="mx-4 mt-3"><b>Interviews </b><button type="button" class="btn btn-sm btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal" style="float: right;"><i class="fas fa-plus" style="color:aliceblue;" aria-hidden="true"></i></button></h4>
                        </div>
                          <!-- /.card-header -->
                          <div class="card-body">

                            
                              <table class="table mb-0">
                                  <thead>
                                      <tr>
                                          <th>Interview Date</th>
                                          <th>Interview Time</th>
                                          <th>Interviewer</th>
                                          <th>Interview Status</th>
                                          
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <tr>
                                        
                                        @foreach ( $interview as $row )
                                          
                                        
                                          <td>{{ $row->interview_date }}</td>
                                          <td>{{ $row->interview_time }}</td>
                                          <td>{{ $row->interviewer }}</td>
                                          <td>{{ $row->interview_status }}</td>
                                          <td>
                                          
                                            <button type="button" class="btn btn-sm btn-muted waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalEditci{{ $row->id }}"><i class="fas fa-pen mr-1" aria-hidden="true"></i> Edit</button>
                                           
                                              <!-- Button trigger modal -->
                                              <button type="button" class="btn btn-sm btn-muted waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdropint{{ $row->id }}">
                                                  <i class="fas fa-trash mr-1" aria-hidden="true"></i> Delete
                                              </button>
                                        

                                             <!--Interview Edit modal portion-->
                                             <div>  
                                              <!-- sample modal content -->
                                              <div id="myModalEditci{{ $row->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <h5 class="modal-title mt-0" id="myModalLabel"><b>Edit Candidate Interview</b> </h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                              </button>
                                                          </div>
                                                          <div class="modal-body" style="background-color: 
                                                          #f1f1f1;">
                                                              
                                                            <form class="custom-validation" action="{{ route('interview.update',$row->id) }}" method="POST" enctype="multipart/form-data">
                                                              @csrf

                                                              <div class="mb-3">
                                                                <div class="col-md-8">
                                                                 <label class="form-label"><h6><b>Applicant :</b>    {{ $candidate->name }}</h6></label>
                                                                
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
                                                                     <optgroup label="--Select--">
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
                                                                    </optgroup>
                                                                    </select>
                                                                   </div>
                                                                  </div>
                              
                                                                  <div class="mb-3">
                                                                    <div class="col-md-8">
                                                                     <label class="form-label">Interviewer</label>
                                                                     
                                                                      <select class="form-select" aria-label="Default select example" name="interviewer" >
                                                                        
                                                                       <option selected> {{ $row->interviewer }}</option>
                                                                       <optgroup label="Hiring Managers">
                                                                        @foreach ($users as $row)
                                                                       
                                                                          @if($row->role_id == 2)
                                                                            <option value="{{ $row->id = $row->name }}" >{{ $row->name }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </optgroup>
                                                                    <optgroup label="Employees">
                                                                      @foreach ($employees as $row)
                                                                      @if ($row->role_id == 3)
                                                                        <option value="{{ $row->id = $row->name }}" >{{ $row->name }}</option>
                                                                      @endif
                                                                      @endforeach
                                                                    </optgroup>
                                                                       
                                                                      </select>
                                                                     </div>
                                                                    </div>
                              
                                                                      <div class="mb-3">
                                                                        <div class="col-md-8">
                                                                         <label class="form-label">Interview Status</label>
                                                                         
                                                                          <select class="form-select" aria-label="Default select example" name="interview_status" >
                                                                           <option selected>{{ $row->interview_status }}</option>
                                                                           <optgroup label="--Select--">
                                                                           <option>Accepted</option>
                                                                           <option>Declined</option>
                                                                           <option>Scheduled</option>
                                                                          </optgroup>
                                                                           
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

                                                 
                                                  <!-- staticBackdrop Modal -->
                                                 <div class="modal fade" id="staticBackdropint{{ $row->id }}"   data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                                          <div class="modal-content">
                                                            
                                                              <div class="modal-body">
                                                                <img src="/media/warning-pic.jpg" alt=""  width="100" height="100" style="display: block;
                                                                margin-left: auto;
                                                                margin-right: auto;
                                                                "
                                                                >
                                                                
                                                             
                                                             <br><br>
                                                             <p style="position: relative;
                                                             max-width: 100%;
                                                             margin: 0 0 0.4em;
                                                             padding: 0;
                                                             color: #595959;
                                                             font-size: 1.875em;
                                                             font-weight: 600;
                                                             text-align: center;
                                                             text-transform: none;
                                                             word-wrap: break-word;">Are you sure?</p>
                                                             
                                                             <h6 style="color: #545454;
                                                             font-size: 1.125em;
                                                             font-weight: 400;
                                                             line-height: normal;
                                                             text-align: center;
                                                             word-wrap: break-word;">You won't be able to revert this!</h6>
                                                             <br><br>
                                                             
                                                                <form action="{{ route('interview.delete',$row->id) }}" method="post">
                                                                @csrf


                                                               <p style="text-align: center;"> <button type="submit" class="btn btn-success" >Yes, delete it!</button>
                                                               
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="text-align: center;">No, cancel!</button>
                                                              </p>
                                                                

                                                                </form>  
                                                                                                       
                                                              </div>
                                                             
                                                          </div>
                                                      </div>
                                                  </div>
                                            
                                          </td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          
                                             <div>  
                                                <!-- sample modal content -->
                                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content" >
                                                            <div class="modal-header" >
                                                                <h5 class="modal-title mt-0" id="myModalLabel" ><b>Add Candidate Interview</b> </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body" style="background-color: #f1f1f1;">
                                                                
                                                              <form class="custom-validation" action="{{ route('interview.store',$candidate->id) }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                
                                                                <div class="mb-3">
                                                                    <div class="col-md-8">
                                                                     <label class="form-label"><h6><b>Applicant :</b>    {{ $candidate->name }}</h6></label>
                                                                    
                                                                     <input type="text" name="candidate_id" class="form-control" value="{{ $candidate->id }}" hidden>
                                                                     </div>
                                                                    </div>
                                
                                                                <div class="mb-3">
                                                                 <div class="col-md-8">
                                                                  <label class="form-label">Interview Date</label>
                                                                  <span style="color:#ff0000">*</span>   
                                                                  <input type="date" name="interview_date" class="form-control" value="{{ $date = date('Y-m-d'); }}" readonly>
                                                                  </div>
                                                                 </div>
                                
                                                                 <div class="mb-3">
                                                                    <div class="col-md-8">
                                                                     <label class="form-label">Interview Time</label>
                                                                     <span style="color:#ff0000">*</span>   
                                                                      <select class="form-select" aria-label="Default select example" name="interview_time" required>
                                                                       <option disabled selected>-Select-</option>
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
                                                                       <span style="color:#ff0000">*</span>   
                                                                        <select class="form-select" aria-label="Default select example" name="interviewer" required>

                                                                         <option disabled selected>-Select-</option>
                                                                         <optgroup label="Hiring Managers">
                                                                          @foreach ($users as $row)
                                                                       
                                                                          @if($row->role_id == 2)
                                                                            <option value="{{ $row->id = $row->name }}" >{{ $row->name }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                      </optgroup>
                                                                      <optgroup label="Employees">
                                                                        @foreach ($employees as $row)
                                                                        @if ($row->role_id == 3)
                                                                          <option value="{{ $row->id = $row->name }}" >{{ $row->name }}</option>
                                                                        @endif
                                                                        @endforeach
                                                                      </optgroup>
                                                                         
                                                                        </select>
                                                                       </div>
                                                                      </div>

                                                                      {{-- <div class="mb-3">
                                                                        <div class="col-md-8">
                                                                        <label class="form-label">Interviewer </label>
                                                                        <span style="color:#ff0000">*</span>
                                                                      <select class="select2 form-control select2-multiple" name="interviewer[]" multiple="multiple" > 
                    
                                                                      @foreach (explode(',', $applicant->interviewers) as $row )
                                                                      <option selected>{{ $row }}</option>
                                                                        
                                                                      @endforeach
                                                                     
                                                                      <optgroup label="Hiring Managers">
                                                                        @foreach ($users as $row)
                                                                        
                                                                          @if($row->role_id == 2)
                                                                            <option value="{{ $row->id = $row->name }}" >{{ $row->name }}</option>
                                                                            @endif
                                                                        @endforeach
                                                                    </optgroup>
                                                                    <optgroup label="Employees">
                                                                     
                                                                      @foreach ($users as $row)
                                                                        @if ($row->role_id == 3)
                                                                          <option value="{{ $row->id = $row->name }}" >{{ $row->name }}</option>
                                                                        @endif
                                                                        @endforeach
                                                                  </optgroup>  
                                                                         
                                                                         
                                                                         </select>
                                                                        
                                                                       </div>
                                                                      </div> --}}
                                
                                                                   
                                                                        <br><br>
                                                                        <div class="mb-3">
                                                                            <div class="col-md-8">
                                                                                <button type="submit" class="btn   btn-primary waves-effect waves-light me-1" style="float: right;"> 
                                                                                    Submit
                                                                                </button>
                                                                             </div>
                                                                            </div>
                                                                      
                                                                </form>
                                                                    
                                                              </div>
                                                           
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div>

                            
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                     
                      <!-- /.col -->
            
                     
                      
                  </div>
                  <!-- end row -->

                   <!-- Interview Menu Tab Section -->
                   <div class="row">

                    <div class="col-md-12  mt-2">
                      <div class="card mx-2">
                        
                       
                        <!-- /.card-header -->
                        <div class="card-body">

                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#navtabs-home" role="tab">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Notes</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#navtabs-profile" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Phone Interview</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#navtabs-messages" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                    <span class="d-none d-sm-block">Onsite Interview</span>
                                </a>
                            </li>
                        </ul>

                              <!-- Tab panes -->
                              <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="navtabs-home" role="tabpanel">
                                  <br>
                                  <div> 
                                    <button type="button" class="btn btn-sm btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal2" style="float: right;"><i class="fas fa-plus" style="color:aliceblue;" aria-hidden="true"></i></button>

                                   
                                  
                                    <table class="table mb-0">
                                      <thead>
                                          <tr>
                                              <th>Notes</th>
                                              <th>Note By</th>
                                              <th>Date Created</th>
                                              <th>Last Update</th>
                                              
                                          </tr>
                                      </thead>
                                      <tbody>
    
                                          <tr>
                                            @foreach ($note as $row )
                                              
                                           
                                              <td> {{ $row->note }} </td>
                                              <td>{{ $row->note_by }}</td>
                                              <td>{{ date('d F, Y', strtotime($row->created_at)) }}</td>
                                              <td>{{ date('d F, Y', strtotime($row->updated_at)) }}</td>
                                              <td>
                                                
                                                <button type="button" class="btn btn-sm btn-muted waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModalEditcn{{ $row->id }}"><i class="fas fa-pen mr-1" aria-hidden="true"></i>Edit</button>

                                                 <!-- Button trigger modal -->
                                                 <button type="button" class="btn btn-sm btn-muted waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop1{{ $row->id }}">
                                                  <i class="fas fa-trash mr-1" aria-hidden="true"></i> Delete 
                                              </button>
                                           
                                              <!--Note Edit modal portion-->
                                             <div>  
                                              <!-- sample modal content -->
                                              <div id="myModalEditcn{{ $row->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content">
                                                          <div class="modal-header" >
                                                              <h5 class="modal-title mt-0" id="myModalLabel"><b>Edit Candidate Note</b> </h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                              </button>
                                                          </div>
                                                          <div class="modal-body " style="background-color: 
                                                          #f1f1f1;">
                                                              
                                                            <form class="custom-validation" action="{{ route('note.update',$row->id) }}" method="POST" enctype="multipart/form-data">
                                                              @csrf

                                                              <div class="mb-3">
                                                                <div class="col-md-8">
                                                                 <label class="form-label"><h6><b>Applicant :</b>    {{ $candidate->name }}</h6></label>
                                                                
                                                                 </div>
                                                                </div>
                            
                                                            <div class="mb-3">
                                                             <div class="col-md-8">
                                                              <label class="form-label"><b>Notes </b> </label>
                                                              
                                                              <textarea class="form-control"  name="note" rows="3" >{{ $row->note }}</textarea>
                                                              </div>
                                                             </div>
                            
                                                             <div class="mb-3">
                                                              <div class="col-md-8">
                                                               <label class="form-label"><h6><b>Note By :</b>    {{ $row->note_by }}</h6></label>
                                                              
                                                               </div>
                                                              </div>
                                                             
                            
                                                              <div class="mb-3">
                                                              <div class="col-md-8">
                                                               <label class="form-label"><h6><b>Note Created Date :</b>     {{ date('d F, Y', strtotime($row->created_at)) }}</h6></label>
                                                              
                                                               </div>
                                                              </div>
                                                              <div class="mb-3">
                                                                <div class="col-md-8">
                                                                 <label class="form-label"><h6><b>Note updated Date :</b>     {{ date('d F, Y', strtotime($row->updated_at)) }}</h6></label>
                                                                
                                                                 </div>
                                                                </div>
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

                                           
                                               <!-- staticBackdrop Modal -->
                                               <div class="modal fade" id="staticBackdrop1{{ $row->id }}"   data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                      
                                                        <div class="modal-body">
                                                          <img src="/media/warning-pic.jpg" alt=""  width="100" height="100" style="display: block;
                                                          margin-left: auto;
                                                          margin-right: auto;
                                                          "
                                                          >
                                                          
                                                       
                                                       <br><br>
                                                       <p style="position: relative;
                                                       max-width: 100%;
                                                       margin: 0 0 0.4em;
                                                       padding: 0;
                                                       color: #595959;
                                                       font-size: 1.875em;
                                                       font-weight: 600;
                                                       text-align: center;
                                                       text-transform: none;
                                                       word-wrap: break-word;">Are you sure?</p>
                                                       
                                                       <h6 style="color: #545454;
                                                       font-size: 1.125em;
                                                       font-weight: 400;
                                                       line-height: normal;
                                                       text-align: center;
                                                       word-wrap: break-word;">You won't be able to revert this!</h6>
                                                       <br><br>
                                                       
                                                          <form action="{{ route('note.delete',$row->id) }}" method="post">
                                                          @csrf


                                                         <p style="text-align: center;"> <button type="submit" class="btn btn-success" >Yes, delete it!</button>
                                                         
                                                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="text-align: center;">No, cancel!</button>
                                                        </p>
                                                          

                                                          </form>  
                                                                                                 
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>

                                              </td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  </table>

                                  <div>  
                                    <!-- sample modal content -->
                                    <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" >
                                                    <h5 class="modal-title mt-0" id="myModalLabel" ><b>Add Candidate Note</b> </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="background-color: #f1f1f1;">
                                                    
                                                  <form class="custom-validation" action="{{ route('note.store',$candidate->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                    
                                                    <div class="mb-3">
                                                      <div class="col-md-8">
                                                       <label class="form-label"><h6><b>Applicant :</b>    {{ $candidate->name }}</h6></label>
                                                      
                                                       <input type="text" name="candidate_id" class="form-control" value="{{ $candidate->id }}" hidden>
                                                       </div>
                                                      </div>
                    
                                                    <div class="mb-3">
                                                     <div class="col-md-8">
                                                      <label class="form-label">Notes</label>
                                                      <span style="color:#ff0000">*</span>   
                                                      <textarea class="form-control"  name="note" rows="3" required></textarea>
                                                      </div>
                                                     </div>
                    
                                                     <div class="mb-3">
                                                        <div class="col-md-8">
                                                       
                                                           
                                                         <input type="text" name="note_by" class="form-control" value="{{ Auth::user()->name }}" hidden>
                                                         </div>
                                                        </div>
                    
                                                        <div class="mb-3">
                                                          <div class="col-md-8">
                                                         
                                                           
                                                           <input type="date" name="created_at" class="form-control" value="{{ $date = date('Y-m-d'); }}" hidden>
                                                           </div>
                                                          </div>
                    
                                                            <br>
                                                            <div class="mb-3">
                                                                <div class="col-md-8">
                                                                    <button type="submit" class="btn   btn-primary waves-effect waves-light me-1" style="float: right;"> 
                                                                        Submit
                                                                    </button>
                                                                 </div>
                                                                </div>
                                                    </form>
                                                        
                                                  </div>
                                               
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div>
                                    
                                  </div>
                                </div>

                                <div class="tab-pane" id="navtabs-profile" role="tabpanel">
                                  <br>
                                  <div> 
                                   
                                  
                                    <table class="table mb-0">
                                      <thead>
                                          <tr>
                                              <th>Interview Date</th>
                                              <th>Recommended for Onsite</th>
                                              <th>Additional Comments</th>
                                              <th>Created By</th>
                                              
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($phone_interview as $row)
                                          
                                       
                                          <tr>
                                              <td>{{ $row->interview_date }}</td>
                                              <td>{{ $row->recommend_onsite }}</td>
                                              <td>{{ $row->additional_comment }}</td>
                                              <td>{{ $row->created_by }}</td>
                                              <td>
                                                <a class="btn btn-sm btn-muted" href="{{ route('phone.interview.edit',$row->id) }}"><i class="fas fa-pen mr-1" aria-hidden="true"></i> Edit</a>
    
                                                 <!-- Button trigger modal -->
                                                 <button type="button" class="btn btn-sm btn-muted waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{ $row->id }}">
                                                  <i class="fas fa-trash mr-1" aria-hidden="true"></i> Delete 
                                              </button>
                                           
                                            <!-- staticBackdrop Modal -->
                                                        <div class="modal fade" id="staticBackdrop2{{ $row->id }}"   data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                                             <div class="modal-content">
                                                               
                                                                 <div class="modal-body">
                                                                   <img src="/media/warning-pic.jpg" alt=""  width="100" height="100" style="display: block;
                                                                   margin-left: auto;
                                                                   margin-right: auto;
                                                                   "
                                                                   >
                                                                   
                                                                
                                                                <br><br>
                                                                <p style="position: relative;
                                                                max-width: 100%;
                                                                margin: 0 0 0.4em;
                                                                padding: 0;
                                                                color: #595959;
                                                                font-size: 1.875em;
                                                                font-weight: 600;
                                                                text-align: center;
                                                                text-transform: none;
                                                                word-wrap: break-word;">Are you sure?</p>
                                                                
                                                                <h6 style="color: #545454;
                                                                font-size: 1.125em;
                                                                font-weight: 400;
                                                                line-height: normal;
                                                                text-align: center;
                                                                word-wrap: break-word;">You won't be able to revert this!</h6>
                                                                <br><br>
                                                                
                                                                   <form action="{{ route('phone.interview.delete',$row->id) }}" method="post">
                                                                   @csrf
         
         
                                                                  <p style="text-align: center;"> <button type="submit" class="btn btn-success" >Yes, delete it!</button>
                                                                  
                                                                   <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="text-align: center;">No, cancel!</button>
                                                                 </p>
                                                                   
         
                                                                   </form>  
                                                                                                          
                                                                 </div>
                                                                
                                                             </div>
                                                         </div>
                                                     </div>
                                               
                                              </td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                                    
                                </div>
                                </div>
                               
                                <div class="tab-pane" id="navtabs-messages" role="tabpanel">
                                  <br>
                                  <div> 
                                  
                                  
                                    <table class="table mb-0">
                                      <thead>
                                          <tr>
                                              <th>Interview Date</th>
                                              <th>Recommended for Hire</th>
                                              <th>Additional Comments</th>
                                              <th>Created By</th>
                                              
                                          </tr>
                                      </thead>
                                      <tbody>
                                            @foreach($onsite_interview as $row )
                                              
                                            
                                          <tr>
                                              <td>{{ $row->interview_date }}</td>
                                              <td>{{ $row->recommend_to_hire }}</td>
                                              <td>{{ $row->additional_comment }}</td>
                                              <td>{{ $row->created_by }}</td>
                                              <td>
                                                <a class="btn btn-sm btn-muted" href="{{ route('hr.onsite.interview.edit',$row->id) }}"><i class="fas fa-pen mr-1" aria-hidden="true"></i>  Edit</a>
    
                                                 <!-- Button trigger modal -->
                                                 <button type="button" class="btn btn-sm btn-muted waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop3{{ $row->id }}">
                                                  <i class="fas fa-trash mr-1" aria-hidden="true"></i> Delete 
                                              </button>
                                              <!-- staticBackdrop Modal -->
                                              <div class="modal fade" id="staticBackdrop3{{ $row->id }}"   data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                      
                                                        <div class="modal-body">
                                                          <img src="/media/warning-pic.jpg" alt=""  width="100" height="100" style="display: block;
                                                          margin-left: auto;
                                                          margin-right: auto;
                                                          "
                                                          >
                                                          
                                                       
                                                       <br><br>
                                                       <p style="position: relative;
                                                       max-width: 100%;
                                                       margin: 0 0 0.4em;
                                                       padding: 0;
                                                       color: #595959;
                                                       font-size: 1.875em;
                                                       font-weight: 600;
                                                       text-align: center;
                                                       text-transform: none;
                                                       word-wrap: break-word;">Are you sure?</p>
                                                       
                                                       <h6 style="color: #545454;
                                                       font-size: 1.125em;
                                                       font-weight: 400;
                                                       line-height: normal;
                                                       text-align: center;
                                                       word-wrap: break-word;">You won't be able to revert this!</h6>
                                                       <br><br>
                                                       
                                                          <form action="{{ route('onsite.interview.delete',$row->id) }}" method="post">
                                                          @csrf


                                                         <p style="text-align: center;"> <button type="submit" class="btn btn-success" >Yes, delete it!</button>
                                                         
                                                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="text-align: center;">No, cancel!</button>
                                                        </p>
                                                          

                                                          </form>  
                                                                                                 
                                                        </div>
                                                       
                                                    </div>
                                                </div>
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

 