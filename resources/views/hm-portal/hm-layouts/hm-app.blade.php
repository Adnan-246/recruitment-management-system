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


    </head>


    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            @guest

            @else
            @include('hm-portal.hm-layouts.partial.topbar')
            @include('hm-portal.hm-layouts.partial.leftbar')
            {{-- @include('hm-portal.hm-layouts.partial.rightbar') --}}
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

         <!-- Bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- toastr plugin -->
        <script src="/assets/libs/toastr/build/toastr.min.js"></script>

       
       
           <!-- form mask -->
           <script src="/assets/libs/inputmask/min/jquery.inputmask.bundle.min.js"></script>

           <!-- form mask init -->
           <script src="/assets/js/pages/form-mask.init.js"></script>
   
           <!-- parsleyjs -->
           <script src="/assets/libs/parsleyjs/parsley.min.js"></script>

           <script src="/assets/js/pages/form-validation.init.js"></script>

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