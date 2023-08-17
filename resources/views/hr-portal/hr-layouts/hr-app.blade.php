<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>RMS | Recruitment-Management-System</title>
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
         <!-- Responsive Table css -->
         <link href="/assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />
         <!--Alert Message show -->
         <link rel="stylesheet" type="text/css" href="/assets/libs/toastr/build/toastr.min.css">
          <!-- DataTables -->
        <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
        <!-- multi select css -->
        <link href="/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        

    </head>


    <body data-sidebar="dark" >

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            @guest

            @else
            @include('hr-portal.hr-layouts.partial.topbar')
            @include('hr-portal.hr-layouts.partial.leftbar')
            {{-- @include('hr-portal.hr-layouts.partial.rightbar') --}}
            @endguest


            @yield('content')


        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
       <div class="rightbar-overlay"></div>


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

         <!-- Bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- toastr plugin -->
        <script src="/assets/libs/toastr/build/toastr.min.js"></script>
        <!-- toastr init -->
        <script src="/assets/js/pages/toastr.init.js"></script>

       
           <!-- form mask -->
           <script src="/assets/libs/inputmask/min/jquery.inputmask.bundle.min.js"></script>

           <!-- form mask init -->
           <script src="/assets/js/pages/form-mask.init.js"></script>
   
           <!-- parsleyjs -->
           <script src="/assets/libs/parsleyjs/parsley.min.js"></script>

           <script src="/assets/js/pages/form-validation.init.js"></script>

            <!--multi select js -->
           <script src="/assets/libs/select2/js/select2.min.js"></script>
           <script src="/assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
           <script src="/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
           <script src="/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
           <script src="/assets/libs/@chenfengyuan/datepicker/datepicker.min.js"></script>

            <!-- init js -->
          <script src="/assets/js/pages/form-advanced.init.js"></script>

           <!-- Required datatable js -->
        <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

        <script src="/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>

         <!-- Datatable init js -->
         <script src="/assets/js/pages/datatables.init.js"></script>



          
        <!-- Responsive examples -->
        <script src="/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script> 

         <!-- init js -->
        <script src="/assets/js/pages/ecommerce-datatables.init.js"></script>
     


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

          <script>
            var can_statusObject = {

              
              
              "Active": {
                "Hiring": ["Background Check", "In-Person", "Offer Made", "Phone", "Reference Check", "Samples", "Screening"],
                "Interview": ["Background Check", "In-Person", "Offer Made", "Phone", "Reference Check", "Samples", "Screening"],
                "Qualifying": ["Background Check", "In-Person", "Offer Made", "Phone", "Reference Check", "Samples", "Screening"],
                
              },
              "Closed": {
                "Disqualified": ["No options available"],
                "Duplicate": ["No options available"],
                "Job Closed": ["No options available"],
                "Other": ["No options available"],
                "Rejected Offer": ["No options available"],
              },
              "Dormant": {
                "Contractor": ["No options available"],
                "Future Position": ["No options available"],
                "No Current Match": ["No options available"],
                "Unavailable": ["No options available"],
              },
             
              "New": {
                "Self-Applied": ["No options available"],
                "Invited": ["No options available"],
                  
              }
            }
            window.onload = function() {
              var can_statusSel = document.getElementById("can_status");
              var stage1Sel = document.getElementById("stage1");
              var stage2Sel = document.getElementById("stage2");
              for (var x in can_statusObject) {
                can_statusSel.options[can_statusSel.options.length] = new Option(x, x);
              }
              can_statusSel.onchange = function() {
                //empty Chapters- and Topics- dropdowns
                stage1Sel.length = 1;
                stage2Sel.length = 1;
                //display correct values
                for (var y in can_statusObject[this.value]) {
                  stage1Sel.options[stage1Sel.options.length] = new Option(y, y);
                }
              }
              stage1Sel.onchange = function() {
                //empty Chapters dropdown
                stage2Sel.length = 1;
                //display correct values
                var z = can_statusObject[can_statusSel.value][this.value];
                for (var i = 0; i < z.length; i++) {
                  stage2Sel.options[stage2Sel.options.length] = new Option(z[i], z[i]);
                }
              }
            }
            </script>



          

    </body>

</html>