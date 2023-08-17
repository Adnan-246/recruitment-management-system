@extends('hr-portal.hr-layouts.hr-app')

@section('content')
   <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

              <div class="page-content">
                  <div class="container-fluid">

                      <!-- start page title -->
                      <div class="row">
                          <div class="col-12">
                              <div class="page-title-box d-flex align-items-center justify-content-between">
                                  <h3 class="mb-0 mx-2"><b>Profile Information</b> </h3>

                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="{{ route('hr') }}">Home</a></li>
                                          <li class="breadcrumb-item active">Profile</li>
                                      </ol>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <!-- end page title -->
                      
                      <div class="row mb-4 mt-3 ">
                        <div class="col-xl-4">
                            <div class="card h-100 mx-2">
                                <div class="card-body">
                                    <div class="text-center">
                                       
                                      <div class="clearfix"></div>
                                          <div>
                                              <img src="{{ Auth::user()->image }}"  alt="user-profile" class="avatar-lg rounded-circle img-thumbnail">
                                          </div>
                                        <h5 class="mt-3 mb-1">{{ Auth::user()->name }}</h5>
                                        <p class="text-muted">{{ Auth::user()->position }}</p>
                                    </div>
                                   

                                    <hr class="my-4 mx-3">
                                    <br>
                                    <div class="text-muted">
                                        <h5 class="font-size-16">About Me :</h5>
                                        <p>{{ Auth::user()->about }}</p>

                                        <br>
                                        <div class="table-responsive mt-4 ">
                                            <div class="mx-2">
                                                <p class="mb-1">Department :</p>
                                                <h5 class="font-size-16">{{ Auth::user()->department }}</h5>
                                            </div>
                                            <div class="mt-4 mx-2">
                                                <p class="mb-1">Mobile :</p>
                                                <h5 class="font-size-16">{{ Auth::user()->phone }}</h5>
                                            </div>
                                            <div class="mt-4 mx-2">
                                                <p class="mb-1">E-mail :</p>
                                                <h5 class="font-size-16">{{ Auth::user()->email }}</h5>
                                            </div>
                                            <div class="mt-4 mx-2">
                                                <p class="mb-1">Location :</p>
                                                <h5 class="font-size-16">{{ Auth::user()->state }}, {{ Auth::user()->country }}</h5>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8">
                            <div class="card mb-0">
                              <div class="card-body">
                                <form class="form-horizontal" action="{{ url('hr/profile/update', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                                  @csrf
            
                                  <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Change Image</label>
                                    <div class="col-sm-10">
                                      <input type="file" name="image" class="form-control" id="imageName" value="{{ Auth::user()->image }}">
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="f_name" value="{{ Auth::user()->f_name }}" class="form-control" id="inputName" placeholder="First name">
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="l_name" value="{{ Auth::user()->l_name }}" class="form-control" id="inputName" placeholder="Last name">
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Full Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="name" value="{{ Auth::user()->f_name }} {{ Auth::user()->l_name }}" class="form-control" id="inputName" placeholder="Full name" readonly>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Department</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="department" value="{{ Auth::user()->department }}" class="form-control" id="inputName" placeholder="Department" readonly>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Position</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="position" value="{{ Auth::user()->position }}" class="form-control" id="inputName" placeholder="position" readonly>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                      <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" id="inputEmail" placeholder="Email" readonly>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="phone" value="{{ Auth::user()->phone }}" class="form-control" id="inputEmail" placeholder="Phone">
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Country</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="country" value="{{ Auth::user()->country }}" class="form-control" id="inputEmail" placeholder="Country">
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">State</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="state" value="{{ Auth::user()->state }}" class="form-control" id="inputEmail" placeholder="State">
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">City</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="city" value="{{ Auth::user()->city }}" class="form-control" id="inputEmail" placeholder="City">
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Zip Code</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="zip_code" value="{{ Auth::user()->zip_code }}" class="form-control" id="inputEmail" placeholder="Zip code">
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="address" value="{{ Auth::user()->address }}" class="form-control" id="inputEmail" placeholder="Address">
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">About</label>
                                    <div class="col-sm-10">
                                     <textarea name="about" id="inputEmail" class="form-control" rows="4">{{ Auth::user()->about }}</textarea>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Education</label>
                                    <div class="col-sm-10">
                                      <textarea name="education" id="inputEmail" class="form-control" rows="3">{{ Auth::user()->education }}</textarea>
                                    </div>
                                  </div>
                                  <br><br>
                                  <button type="submit" class="btn btn-primary" style="float: right;">Update </button>
                                  
                                </form>
                              </div>
                            </div>
                        </div>   
                          
                        
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

