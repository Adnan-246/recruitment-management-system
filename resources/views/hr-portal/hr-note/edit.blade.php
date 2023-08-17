@extends('hr-portal.hr-layouts.hr-app')

@section('content')
   <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content" style="background-color: #f1f1f1;">

              <div class="page-content">
                  <div class="container-fluid" >

                      <!-- start page title -->
                       <div class="row">
                          <div class="col-12">
                              <div class="page-title-box d-flex align-items-center justify-content-between">
                                  <h3 class="mb-0 ">Edit Candidate Note</h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('applicant.index') }}">Manage Candidates</a></li>
                                          <li class="breadcrumb-item "><a href="{{ route('applicant.detail',$note->applicant->id) }}">Candidate Details</a> </li>
                                          <li class="breadcrumb-item active">Edit Candidate Note</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->
      
                    <div class="row">

                        <div class="col-md-8  mt-3">
                          <div class="card ">
                            
                            <!-- /.card-header -->
                            <div class="card-body">
                              <form class="custom-validation" action="{{ route('note.update',$note->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <div class="col-md-8">
                                     <label class="form-label"><b>Applicant </b> </label>
                                     <br>
                                     <h6>{{ $note->applicant->name }}</h6>
                                    
                                     </div>
                                    </div>

                                <div class="mb-3">
                                 <div class="col-md-8">
                                  <label class="form-label"><b>Notes</b> </label>
                                  
                                  <textarea class="form-control"  name="note" rows="3" >{{ $note->note }}</textarea>
                                  </div>
                                 </div>

                                 <div class="mb-3">
                                    <div class="col-md-8">
                                     <label class="form-label"><b>Note By </b> </label>
                                        
                                     <br>
                                     <h6>{{ $note->note_by }}</h6>
                                     </div>
                                    </div>

                                    <div class="mb-3">
                                      <div class="col-md-8">
                                       <label class="form-label"><b>Note Created Date </b> </label>
                                       <br>
                                       <h6>{{ date('d F, Y', strtotime($note->created_at)) }}</h6>
                                         
                                      
                                       </div>
                                      </div>
                                      <div class="mb-3">
                                        <div class="col-md-8">
                                         <label class="form-label"><b>Note Updated Date </b> </label>
                                         <br>
                                         <h6>{{ date('d F, Y', strtotime($note->updated_at)) }}</h6>
                                        
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

 