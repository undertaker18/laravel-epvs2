<style>
a {
  color: #879BAE;
  list-style: none;
  text-decoration: none;
}

a:hover {
  color: #1266b4;
}

.active {
  color: #1266b4  ;
}

</style>
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a href="#" class="<?php echo e(Request::is('privacy-form') || Request::is('profile-form') || Request::is('upload-form') || Request::is('verify-form') || Request::is('summary-form') || Request::is('submit-form') ? 'active' : ''); ?>" >
                                    <i class="fas fa-user-shield icon"></i><br>PRIVACY
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="<?php echo e(Request::is('profile-form') || Request::is('upload-form') || Request::is('verify-form') || Request::is('summary-form') || Request::is('submit-form') ?  'active' : ''); ?>">
                                    <i class="fas fa-user-alt icon"></i><br>PROFILE 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="<?php echo e(Request::is('upload-form') || Request::is('verify-form') || Request::is('summary-form')  || Request::is('submit-form')  ? 'active' : ''); ?>">
                                    <i class="fas fa-file-upload icon"></i><br>UPLOAD
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="<?php echo e(Request::is('verify-form') || Request::is('summary-form') || Request::is('submit-form')  ? 'active' : ''); ?>">
                                    <i class="fas fa-user-check icon"></i><br>VERIFY
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="<?php echo e(Request::is('summary-form') || Request::is('submit-form')  ? 'active' : ''); ?>">
                                    <i class="fas fa-search icon"></i><br>SUMMARY
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="<?php echo e(Request::is('submit-form') ? 'active' : ''); ?>">
                                    <i class="fas fa-check-circle icon"></i><br>SUBMIT
                                </a>
                            </li>
                            
                        </ul>
                    </div><!-- /.card-header -->
                </div>
<?php /**PATH C:\xampp\htdocs\epvs-app2\resources\views/layouts/form-navigation.blade.php ENDPATH**/ ?>