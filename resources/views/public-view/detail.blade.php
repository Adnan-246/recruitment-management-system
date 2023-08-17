<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Recruitment Management Application</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!--Font Awesome-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" type="text/css"/>
         <!--Alert Message show -->
         <link rel="stylesheet" type="text/css" href="/assets/libs/toastr/build/toastr.min.css">
         <!-- Sweet Alert-->
        <link href="/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive Table css -->
        <link href="/assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />
        <!--Alert Message show -->
        <link rel="stylesheet" type="text/css" href="/assets/libs/toastr/build/toastr.min.css">
    </head>

    
    <body style="background-color: 
    #f1f1f1;">

        <div class="p-2 mb-3" style="background-color: 
        #aac9ff;">
          <h2 class="mx-5" style="color: black; text-indent: 6%; font-size: 2.0rem;"><b>Careers</b></h2>
        </div>
    
        <!-- Begin page -->
        <div id="layout-wrapper">
          <div class="wrapper">
      
            {{-- <div class="content-wrapper"> --}}
              <!-- Content Header (Page header) -->
            <section class="content-header" style="left: 17%; right: 10%;">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-11">
                    <h2 class="mx-5 mt-4" style="color:black; ">{{ $jobs->position_name }}
                      <a class="btn btn-primary" style="float: right;" href="{{ route('job.apply', $jobs->id) }}" >Apply Now</a>
                    </h2>
                  
                    {{-- <div class="row">
                      <div class="col-12">
                        <div class="card" style="left: 25%; right:0%;">
                          <div class="card-body"> --}}
                          <ol class="breadcrumb float-sm-right mx-5" style="left:15%; right:10%;">
                            <li class="breadcrumb-item" style="left: 25%; right:0%;"><a href="{{ route('public.index') }}"><i class="fas fa-user mr-1" aria-hidden="true"></i> Careers</a></li>
                            <li class="breadcrumb-item active">Job Details</li>
                          </ol>
                  {{-- </div>
                  </div>
                  </div>
                  </div> --}}

                  </div>
                  
                </div>
              </div><!-- /.container-fluid -->
            </section>
        
              <!-- Main content -->
            <section class="content">
              <div class="container-fluid ">
                <div class="row">
                  
                  <div class="col-6 mx-5 mt-2">
                    <div class="card">
                      
                      <!-- /.card-header -->
                      <div class="card-body">
                        <h5 ><b>Description </b>
        
                          <h6 style="font-family: IBM Plex Sans,sans-serif;
                          font-size: 0.9rem;
                          font-weight: 400;
                          line-height: 1.5;
                          color: #000000;">{{ $jobs->description }}</h6>
                       </h5>
                       <br><br>
                       <h5 ><b>Requirements </b>
                        <h6 style="font-family: IBM Plex Sans,sans-serif;
                        font-size: 0.9rem;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #000000;">{{ $jobs->requirement }}</h6>
                     </h5>
                     <br><br>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                 
                  <!-- /.col -->
        
                  <div class="col-4 mt-2">
                    <div class="card ">
                      
                      <!-- /.card-header -->
                      <div class="card-body">
                        {{-- <h5>Job ID </h5>
                        <h6 class="text-muted">{{ $jobs->job_id_no }}</h6>
                       <br> --}}
                       <h5>Position Type </h5>
                          <h6 class="text-muted">{{ $jobs->position_type }}</h6>    
                        <br>
                        <h5>Location </h5>
                          <h6 class="text-muted">{{ $jobs->location }}</h6>    
                        <br>
                        <h5>Salary </h5>
                          <h6 class="text-muted">{{ $jobs->salary }}</h6>    
                        <br>
                        <h5>Experience </h5>
                          <h6 class="text-muted">{{ $jobs->experience }}</h6>    
                        <br>
                        <h5>Education </h5>
                          <h6 class="text-muted">{{ $jobs->education }}</h6>    
                        <br>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    
                  {{-- <a class="btn btn-primary" style="float: right;" href="{{ route('job.apply', $jobs->id) }}" >Apply Now</a> --}}
                  <br>
                  </div>   <!-- , $jobs->id  -->
                 
                  <!-- /.col -->
                  
                </div>
        
                
                <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
          {{-- </div> --}}
          <!-- /.content-wrapper -->
        </div>
        <!-- ./wrapper -->
        </div>
        <!-- END layout-wrapper -->

       

          <!-- JAVASCRIPT -->
      
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
          <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="/assets/libs/metismenu/metisMenu.min.js"></script> 
          <script src="/assets/libs/simplebar/simplebar.min.js"></script>
          <script src="/assets/libs/node-waves/waves.min.js"></script>
          <script src="/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
          <script src="/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
  
          <script src="/assets/js/app.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  
          <!-- Sweet Alerts js -->
          <script src="/assets/libs/sweetalert2/sweetalert2.min.js"></script>
          <!-- toastr plugin -->
          <script src="/assets/libs/toastr/build/toastr.min.js"></script>
  
           
  
  
          <script type="text/javascript">
              @if(Session::has('message'))
              var type ="{{ Session::get('alert-type', 'info') }}"
              switch (type) {
                case 'info' :
                  toastr.info("{{ Session::get('message') }}");
                  break;
                case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;
                case 'warning':
                  toastr.warning("{{ Session::get('message') }}");
                  break;
                case 'error':
                  toastr.error("{{ Session::get('message') }}");
                  break;
              }
              @endif
            </script>
  

    </body>
</html>
