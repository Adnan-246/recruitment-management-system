
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>RMS | Recruitment Management Application</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body style="background-color: #f1f1f1;">

        <div class="p-2 mb-3" style="background-color: #007faa;">
            <h2 class="mx-5" style="color: #ffffff; text-indent: 27%;"><b>Recruitment Management System</b></h2>
          </div>

        
        <div class="account-pages my-5  pt-sm-5">
            <div class="container" >
                <div class="row justify-content-center">

                    <div class="col-md-7">
                        <div>
                            
                            
                            <div class="card" style=" left: 0%; right: 15%;">
                               
                                <div class="card-body p-4"> 
    
                                    <div class="text-center mt-2">
                                        <h4 class="text-primary">Reset Password</h4>
                                       
                                    </div>
                                    <div class="p-3 mt-4">
                                        
                                       
                                        <form method="POST" action="{{ route('password.update') }}">
                                            @csrf
                    
                                            <input type="hidden" name="token" value="{{ $token }}">

            
                                            <div class="mb-3">
                                                <label class="form-label" for="useremail">Email Address</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="useremail">Password</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label class="form-label" for="useremail">Confirm Password</label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                            

                                            <div class="mt-3 text-end">
                                                <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Reset Password</button>
                                            </div>
                
    
                                            <div class="mt-4 text-center">
                                                <p class="mb-0">Remember It ? <a href="{{ route('login') }}" class="fw-medium text-primary"> Signin </a></p>
                                            </div>
                                        </form>
                                    </div>
                
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="/assets/libs/jquery/jquery.min.js"></script>
        <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/assets/libs/node-waves/waves.min.js"></script>
        <script src="/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <script src="/assets/js/app.js"></script>

    </body>
</html>


