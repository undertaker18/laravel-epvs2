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
          <li class="nav-item d-flex">
            <a  class="nav-link">{{ Auth::user()->name }}</a>
          </li>
          <li class="nav-item dropdown">

            <a class="nav-link" data-toggle="dropdown" >
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                </div>
              <div class="user-panel d-flex">
                <div class="image">
                  <img src="{{ asset('dist/img/user2-160x160.jpg') }}" alt="Example Image" style="border-radius: 50px;">
                </div>
              </div>
            </a>

            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a  class="dropdown-item  ">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>
              </a>
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
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



