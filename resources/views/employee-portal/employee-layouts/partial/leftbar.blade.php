  <!-- ========== Left Sidebar Start ========== -->
  
  <div class="vertical-menu" >

    <!-- LOGO -->
    <div class="navbar-brand-box" >

        <a href="{{ route('employee') }}"><h4 class="mt-3" style="font-weight: 700;
            color:  #ffffff;  "><b>Employee Portal</b></h4></a>
       
    </div>
   

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn " >
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('employee') }}">
                        <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end"></span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    {{--  --}}
                    <a href="{{ route('employee.open.interview.index') }}" class="no-arrow waves-effect ">
                      
                        <i class="fas fa-users mr-2 " aria-hidden="true"></i>
                          <span> My Open Interviews</span>
                    </a>
                  
                </li>

                <li>
                    
                    <a href="{{ route('employee.applicant.index') }}" class="no-arrow waves-effect">
                       
                        <i class="fas fa-address-book mr-2" aria-hidden="true"></i>     
                         <span> My Candidates</span>
                    </a>
                   
                </li>

               

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

