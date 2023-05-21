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
      <img src="<?php echo e(asset('dist/img/lvcclogo.png')); ?>" alt="LVCC Logo" class="brand-image img-circle elevation-3"
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
          <li class="nav-item menu-open">
            <a href="<?php echo e(url('/dashboard')); ?>" class="nav-link <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(url('/users')); ?>" class="nav-link <?php echo e(Request::is('users') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a  class="nav-link <?php echo e(Request::is('receipt-valid', 'receipt-pending', 'receipt-reject') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-receipt"></i>
              <p>
                Receipts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('/receipt-valid')); ?>" class="nav-link <?php echo e(Request::is('receipt-valid') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Valid</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('/receipt-pending')); ?>" class="nav-link <?php echo e(Request::is('receipt-pending') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('/receipt-reject')); ?>" class="nav-link <?php echo e(Request::is('receipt-reject') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reject</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('xero-send', 'xero-sent') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Xero
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(url('/xero-send')); ?>" class="nav-link <?php echo e(Request::is('xero-send') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Send</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('/xero-sent')); ?>" class="nav-link <?php echo e(Request::is('xero-sent') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sent</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('/xero-sync-accounts')); ?>" class="nav-link <?php echo e(Request::is('xero-sync-accounts') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sync Account</p>
                </a>
              </li>
            </ul>

          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('/reports')); ?>" class="nav-link <?php echo e(Request::is('reports') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Reports
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('/bdo-receipts')); ?>" class="nav-link <?php echo e(Request::is('bdo-receipts') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                BDO Receipts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo e(url('/system-log')); ?>" class="nav-link <?php echo e(Request::is('system-log') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                System Log
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php /**PATH C:\xampp\htdocs\epvs-app2\resources\views/layouts/admin-aside.blade.php ENDPATH**/ ?>