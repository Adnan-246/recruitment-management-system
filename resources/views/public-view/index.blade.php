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
        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

        <!-- Custom css -->
        <link rel="stylesheet" href="/css/style.css" type="text/css">
       
    </head>

    
    <body style="background-color: 
    #f1f1f1;" >

      <div class="p-2 mb-2" style="background-color: #aac9ff;" >
        <h2 class="mx-5" style="color: black; text-indent: 6%; font-size: 2.0rem; "><b>Careers</b></h2>
      </div>
    
        <!-- Begin page -->
        <div id="layout-wrapper">
          <div class="wrapper">
      
            
              <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h3 class="mx-5 mt-4" style="text-indent: 13%; color:#000;"> Open Positions</h3>
                  </div>
                  
                </div>
              </div><!-- /.container-fluid -->
            </section>

            {{-- <section class="content-header1">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-md-9">
                    <div class="card mt-3 mx-5" style="left: 8%; right:0%;">
                      <div class="card-body">
                        <span><h5><b> <i class="uil-search"></i> Filter</b></h5> </span> 
                        <br>
                        <form action="">
                          @csrf
                        
                        
                         <div class="row">
                          <div class="col-md-4">
                            <div class="mb-3">
                              <label class="form-label"><b>Position</b> </label>
                              
                              <select class="form-control" name="search" >
                               
                                <option disabled selected="selected">All positions</option>
                                 

                                 @foreach ($jobPosition as $row )
                                 <option >{{ $row->position_name }}</option>
                                 @endforeach
                             </select>
                             </div>
                          </div>

                          <div class="col-md-4">
                            <div class="mb-3">
                              <label class="form-label"><b>Location</b></label>
                             
                              <select class="form-control" name="search" >
                               
                                <option disabled selected="selected">All locations</option>
                                 

                                 @foreach ($job as $row )
                                 <option >{{ $row->location }}</option>
                                 @endforeach
                             </select>
                             </div>
                          </div>
                         </div>
                         <br>
                         <div class="row">
                          <div class="col-md-5">
                            <div style="float:right;">
                              <button type="submit" class="btn btn-warning waves-effect waves-light me-1" style="background-color: #fd7e14;">
                                  Search
                              </button>

                              <button type="reset" class="btn btn-secondary waves-effect" >
                                  Reset
                              </button>
                             
                          </div>
                          </div>
                         </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div><!-- /.container-fluid -->
            </section> --}}

            <div class="container-fluid" >
              <div class="row mb-2">
                <div class="col-md-9">
                  <div class="card mt-4 mx-5" style="left: 8%; right:0%;">
                    <div class="card-body">
                      <span><h5 style="font-family: IBM Plex Sans,sans-serif;
                        font-size: 1.1rem;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #000000;"><b> <i class="uil-search"></i> Filter</b></h5> </span>
                        
                        <div class="row">
                          <form action="{{ url('/search') }}" method="GET" role="search">
                            @csrf

                            <div class="row">
                              <div class="col-md-4">
                                <div class="mb-3">
                                  <label class="form-label"><b>Location</b></label>

                                  <div class="input-select">
                                  <select class="form-control" name="location" >
                                   
                                    <option value="ALL" {{ request('location') == "ALL" ? 'selected' : '' }}>All locations</option>
                                     
    
                                     @foreach ($job as $location )
                                     <option value="{{ $location->id }}" {{ request('location') == $location->id ? 'selected' : '' }}>{{ $location->location }}</option>
                                     @endforeach
                                 </select>
                                </div>
                                 </div>
                              </div>
    
                              <div class="col-md-4">
                                <div class="mb-3">
                                  <label class="form-label"><b> Position </b></label>

                                  <div class="input-group">
                                    <input type="text" class="form-control" name="position" placeholder="search here" value="{{ request('position') }}">
                                </div>
                                 </div>
                              </div>
                             </div>
                             <br>
                             <div class="row">
                              <div class="col-md-5">
                                <div style="float:left;">
                                  <button type="search" class="btn btn-warning waves-effect waves-light me-1" style="background-color: #fd7e14;">
                                      Search
                                  </button>
                                  
    
                                  <button type="reset" class="btn btn-secondary waves-effect" >
                                      Reset
                                  </button>
                                 
                              </div>
                              </div>
                             </div>
                           
                        </form>
                        </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

           

        
              <!-- Main content -->
             <section class="content">
              <div class="container-fluid ">
                <div class="row">
                  <div class="col-md-10 mt-3">
                    <div class="card mt-3 mx-5" style="position: absolute; left: 8%; right: 0%;">
                      
                      <div class="card-body mt-4 " > 
                        
                        
                  <table id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                         <th>Location</th>
                        <th width="25%">Position</th>
                        
                        <th >Location</th>
                        <th width="30%">Position Type</th>
                        <th></th>
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($jobList as $location )
                        @foreach ($location as $job)
                   
                    <tr>
                        <td></td>
                        <td>{{ $job->position_name }}</td>
                       
                          <td><i class="uil-plus-square"></i> {{ $job->location }}</td>
                          <td>{{ $job->position_type }}</td>
                        <td>
                          <a href="{{ route('job.detail', $job->id) }}" class="btn btn-md btn-muted btn-rounded waves-effect waves-light" style="float:right;" ><i class="fas fa-arrow-alt-circle-right mr-1" aria-hidden="true"></i> Details</a>
                        </td>
                        
                    </tr>
                    @endforeach
                    @endforeach
                    </tbody>
                </table>
               


                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
        
                   
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
          
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
              <!-- fontawesome icons init -->
             <script src="/assets/js/pages/fontawesome.init.js"></script>

             <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
     
             

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

            <script type="text/javascript">
                    var groupColumn = 2;
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": groupColumn
                    }],
                    "order": [
                        [groupColumn, 'asc']
                    ],
                    "displayLength": 10,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();

                        console.log(typeof rows);

                        //debugger;

                        /*      rows.forEach(function(node) {
                        console.log("rows =" + node);
                        }); */



                        var first = null;

                        api.column(groupColumn, {
                            page: 'current'
                        }).data().each(function(group, i) {

                            if (first !== group) {
                                $(rows).eq(i).before(
                                        '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                                );

                                first = group;
                            }
                        });
                    }
                });

                // Order by the grouping
                $('#example tbody').on('click', function({target}) {
                    if (target.parentNode.className !== 'group') return;
                    //console.log($(this).find('[role=row]'))
                    $(target.parentNode).nextUntil(':not([role=row])').slideToggle()

                });
            </script>

          

    </body>
</html>
