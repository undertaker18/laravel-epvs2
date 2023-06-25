    <!-- Navbar -->
    <nav x-data="{ open: false }"  class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item d-flex ">
            <a  class="nav-link mt-1 text-dark">{{ Auth::user()->name }} | <span class="text-primary">{{ Auth::user()->roles->pluck('name')->implode(', ') }}</span></a>
          </li>
          <li class="nav-item dropdown">

            <a class="nav-link" data-toggle="dropdown" >
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                </div>
              <div class="user-panel d-flex">
                <div class="image mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16" style="color: #1266B4;">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                  </svg>
       
                </div>
              </div>
            </a>

            <div class="dropdown-menu dropdown-menu dropdown-menu-right">
              <a  class="dropdown-item  ">
                <x-dropdown-link :href="route('profile.edit')" style="font-size: 20px !important; color: #1266B4;">
                  <i class="fa fa-user" style="color: #1266B4; border-radius: 50px; font-size: 20px; margin-top: 3px;" ></i> {{ __('Profile') }}
                </x-dropdown-link>
              </a>
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')" style="font-size: 20px !important; color: red;"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                  <div class="d-flex ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16" style="color: red;  font-size: 20px; margin-top: 3px;" >
                      <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                      <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>                 
                    <span class="mt-1 mx-1">{{ __('Log Out') }}</span>
                  </div>
                </x-dropdown-link>
              </form>
              <br>




            </div>
          </li>

          <li class="nav-item  mt-1 ">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>

          <!-- <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>-->
        </ul>
    </nav>
      <!-- /.navbar -->



