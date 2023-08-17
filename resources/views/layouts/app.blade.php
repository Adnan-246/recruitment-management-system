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
          <!--Alert Message show -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" type="text/css">


    </head>


    <body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            @guest

            @else
            @include('layouts.partial.topbar')
            @include('layouts.partial.leftbar')
            @include('layouts.partial.rightbar')
            @endguest


            @yield('content')


        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
       <div class="rightbar-overlay"></div>


        <!-- JAVASCRIPT -->
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        {{-- <script src="/assets/libs/jquery/jquery.min.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
        <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/libs/metismenu/metisMenu.min.js"></script> 
        <script src="/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/assets/libs/node-waves/waves.min.js"></script>
        <script src="/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <!-- apexcharts -->
         {{-- <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="/assets/js/pages/dashboard.init.js"></script> --}}

        <script src="/assets/js/app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

      

    </body>

</html>