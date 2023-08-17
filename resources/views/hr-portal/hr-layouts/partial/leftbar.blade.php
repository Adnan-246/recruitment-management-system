  <!-- ========== Left Sidebar Start ========== -->
  <div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
       
        {{-- <a href="{{ route('hr') }}"><h4 class="mt-3" style="font-weight: 700;
            color: #ffffff; "> <b>HR Portal</b></h4></a> --}}

            <a href="{{ route('hr') }}" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="/assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="/assets/images/logo-dark.png" alt="" height="20">
                </span>
            </a>

            <a href="{{ route('hr') }}" class="logo logo-light">
                <span class="logo-sm">
                    <img src="/assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="/assets/images/logo-light.png" alt="" height="20">
                </span>
            </a>
        
    </div>
    
    


    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn" >
        <i class="fa fa-fw fa-bars" ></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('hr') }}">
                        <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end"></span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-square"></i>
                        {{-- <i class="fas fa-user-friends mr-2" aria-hidden="true"></i> --}}
                        <span>Candidates</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('applicant.index') }}" class="no-arrow">Manage Candidates</a>
                        </li>

                        <li>
                            <a href="{{ route('applicant.create') }}" class="no-arrow">Add New Candidate</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-bag-alt"></i>
                        {{-- <i class="fas fa-briefcase mr-1" aria-hidden="true"></i> --}}
                        <span>Jobs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('hr.job.index') }}" class="no-arrow">Manage Jobs</a>
                        </li>

                        <li>
                            <a href="{{ route("job.create") }}" class="no-arrow">Add New Job</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-users-alt"></i>
                        {{-- <i class="fas fa-users mr-1" aria-hidden="true"></i> --}}
                        <span>Employees</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{ route('hr.employee.index') }}" class="no-arrow">Manage Employees</a>
                        </li>

                        <li>
                            <a href="{{ route('hr.employee.create') }}" class="no-arrow">Add New Employee</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
