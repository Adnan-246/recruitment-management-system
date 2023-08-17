<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Log In | Recruitment-Management-System</title>
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
         <!-- Custom css -->
         <link rel="stylesheet" href="/css/style.css" type="text/css">

    </head>

    <body style="background-color: #f1f1f1;">
       
        
        {{-- <div class="bg"> --}}

            <div class="p-2 mb-3" style="background-color: #aac9ff;">
                <h1 class="mx-3" style="color: black; text-indent: 30%;"><b>Recruitment Management System</b></h1>
              </div>
        
         <div class="account-pages my-3 pt-sm-5">
            <div class="container" style="padding-top: 0%;">
                 
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card" style="left:50%;">
                         
                            <div class="card-body p-4"> 
                                <div class="text-center mt-2">
                                    <h3 class="text-primary">Welcome To <b>RMS !</b> </h3>
                                    {{-- <p class="text-muted">Sign in to continue to <b>RMS</b></p> --}}
                                    {{-- <img src="/assets/images/login-logo.png" alt="Login"> --}}
                                    <div>
                                        <img src="/assets/images/login-logo.png"  alt="Login" class="avatar-lg rounded-circle img-thumbnail mt-3">
                                    </div>
                                </div>
                                <div class="p-2 mt-4">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        

                                        
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Email</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                
                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="{{ route('password.update') }}" class="text-muted">Forgot password?</a>
                                            </div>
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        
                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In</button>
                                        </div>
            
                                        {{-- <div class="mt-4 text-center">
                                            <p class="mb-0">Don't have an account ? <a href="{{ route('register') }}" class="fw-medium text-primary"> Signup now </a> </p>
                                        </div> --}}
                                    </form>
                                </div>

            
                            </div>
                         </div>
                       

                       

                    </div>


                    <div class="col-md-6 col-xl-4" >
        
                        <div class="card mt-3 mx-5" style="left: 75%; right:0%;">
                         
                            <div class="card-body">
                               <h5><b>HR Portal </b> 
                                <h6>Email : hr@embed.com</h6>
                                <h6>Password : 1234</h6>
                               </h5>
                               <br>
                               <h5><b>Hiring Manager Portal</b> 
                                <h6>Email : hm@embed.com</h6>
                                <h6>Password : 1234</h6>
                               </h5>
                               <br>
                               <h5><b> Employee Portal </b>
                                <h6>Email : employee@embed.com</h6>
                                <h6>Password : 1234</h6>
                               </h5>
                               <br>
                              
                            </div>
                        </div>

                    </div><!-- end col -->

                   
                
               
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        {{-- </div> --}}
   

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