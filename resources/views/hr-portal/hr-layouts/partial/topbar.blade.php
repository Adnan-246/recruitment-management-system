<header id="page-topbar" style="background-color:  ">
  <div class="navbar-header">
      <div class="d-flex">
          <!-- LOGO -->
        
          <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
              <i class="fa fa-fw fa-bars"></i>
          </button>

          
      </div>
      {{-- <div class="p-3 mb-3 text-white" style="background-color: #34d8eb"><h1 class="mx-5">Careers </h1></div> --}}
      <div class="d-flex">
      

          <div class="dropdown d-inline-block d-lg-none ms-2">
              <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="uil-search"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                  aria-labelledby="page-header-search-dropdown">

                  <form class="p-3">
                      <div class="form-group m-0">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                              <div class="input-group-append">
                                  <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>

  
          <div class="dropdown d-none d-lg-inline-block ms-1">
              <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                  <i class="uil-minus-path"></i>
              </button>
          </div>


          <div class="dropdown d-inline-block">
              <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="rounded-circle header-profile-user" src="{{ Auth::user()->image }}"
                      alt="Header Avatar">
                  <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">{{ Auth::user()->name }}</span>
                  <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                  <!-- item-->
                  <a class="dropdown-item" href="{{ route('hr.profile') }}"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">View Profile</span></a>
                  <a class="dropdown-item" href="{{ route('hr.change.password') }}"><i class="fas fa-key mr-2" aria-hidden="true"></i> <span class="align-middle">Change Password</span></a>

                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

              </div>
          </div>

          {{-- <div class="dropdown d-inline-block">
              <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                  <i class="uil-cog"></i>
              </button>
          </div> --}}

      </div>
  </div>
</header>
