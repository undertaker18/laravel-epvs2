<style>
  a {
  color: #879BAE;

  }

  a:hover {
    color: #1266b4;
  }

  .active {
    color: #1266b4;
  }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #1266B4; position: fixed">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('dist/img/lvcclogo.png') }}" alt="LVCC Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
      <span class="brand-text font-weight-light">EPVSystem</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #1266B4; ">




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        @hasanyrole('Super Admin|Accounting Staff')
          <li class="nav-item menu-open">
            <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        @endhasanyrole
        
        @hasrole('Super Admin')
          <li class="nav-item">
            <a href="{{ url('/users') }}" class="nav-link {{ Request::is('users') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Staffs
              </p>
            </a>
          </li>
        @endhasrole

       
        
          <li class="nav-item menu-open">
            @hasanyrole('Super Admin|Accounting Staff')
            <a class="nav-link {{ Request::is('receipt-valid', 'receipt-pending', 'receipt-reject', 'receipt-archive') ? 'active' : '' }}">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                Receipts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @endhasanyrole
            <ul class="nav nav-treeview">
              @hasanyrole('Super Admin|Accounting Staff')
              <li class="nav-item">
                <a href="{{ url('/receipt-valid') }}" class="nav-link {{ Request::is('receipt-valid') ? 'active' : '' }}">
                  <i class="far fa-check-circle nav-icon"></i>
                  <p>Valid</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/receipt-pending') }}" class="nav-link {{ Request::is('receipt-pending') ? 'active' : '' }}">
                  <i class="far fa-clock nav-icon"></i>
                  <p>Pending</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/receipt-reject') }}" class="nav-link {{ Request::is('receipt-reject') ? 'active' : '' }}">
                  <i class="far fa-times-circle nav-icon"></i>
                  <p>Reject</p>
                </a>
              </li>
              @endhasanyrole

              @hasanyrole('Super Admin')
              <li class="nav-item">
                <a href="{{ url('/receipt-archive') }}" class="nav-link {{ Request::is('receipt-archive') ? 'active' : '' }}">
                  <i class="far fa-file-archive nav-icon"></i>
                  <p>Archive</p>
                </a>
              </li>
              @endhasanyrole
            </ul>
            
          </li>
      
          <li class="nav-item menu-open">
            <a class="nav-link {{ Request::is('xero-send', 'xero-sent' , 'xero-sync-accounts') ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Xero
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            @hasanyrole('Super Admin|Accounting Staff')
              <li class="nav-item">
                <a href="{{ url('/xero-send') }}" class="nav-link {{ Request::is('xero-send') ? 'active' : '' }}">
                  <i class="far fa-paper-plane nav-icon"></i>
                  <p>Send</p>
                </a>
              </li>
            @endhasanyrole

            @hasanyrole('Super Admin|Accounting Staff|Registrar')
              <li class="nav-item">
                <a href="{{ url('/xero-sent') }}" class="nav-link {{ Request::is('xero-sent') ? 'active' : '' }}">
                  <i class="fas fa-envelope-open-text nav-icon"></i>
                  <p>Sent</p>
                </a>
              </li>
            @endhasanyrole

            @hasanyrole('Super Admin|Accounting Staff')
              <li class="nav-item">
                <a href="{{ url('/xero-sync-accounts') }}" class="nav-link {{ Request::is('xero-sync-accounts') ? 'active' : '' }}">
                  <i class="far fa-save nav-icon"></i>
                  <p>Sync Account</p>
                </a>
              </li>
            @endhasanyrole
            </ul>

          </li>


        

        @hasanyrole('Super Admin|Accounting Staff')
          <li class="nav-item menu-open">
            <a  class="nav-link {{ Request::is('bdo-xero-receipts', 'bdo-receipts') ? 'active' : '' }}">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                BDO Transactions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/bdo-xero-receipts') }}" class="nav-link {{ Request::is('bdo-xero-receipts') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-exchange-alt"></i>
                  <p>
                    Xero Transactions
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/bdo-receipts') }}" class="nav-link {{ Request::is('bdo-receipts') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-upload"></i>
                  <p>
                   Upload Transactions
                  </p>
                </a>
              </li>
            </ul>
          </li>
        @endhasanyrole

        @hasrole('Super Admin')
          <li class="nav-item">
            <a href="{{ url('/system-log') }}" class="nav-link {{ Request::is('system-log') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Activity Log
              </p>
            </a>
          </li>
        @endhasrole
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>