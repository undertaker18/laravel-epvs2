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
/* logo */
.nav-item{
    font-size: 22px;
    margin: 0;

}
.nav-link {
    font-size: 20px; /* or any other desired size */
}
.icon2{
font-size: 70px; /* or any other desired size */
}
@media screen and (max-width: 761px) {

/* logo */
.nav-item{
    font-size: 9px;
    margin: 0;

}
.nav-link {
    font-size: 0px; /* or any other desired size */
}
.icon2{
font-size: 22px; /* or any other desired size */

}
}

</style>
                <div class="">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a href="#" class="{{ Request::is('privacy-form') || Request::is('profile-form')  || Request::is('profile-form/show/*') || Request::is('upload-form/*') || Request::is('verify-form/*') || Request::is('summary-form/*') || Request::is('submit-form/*') ? 'active' : '' }}" >
                                    <i class="fas fa-user-shield icon2"></i><br>PRIVACY
                                </a>
                            </li>   
                            <li class="nav-item">
                                <a href="#" class="{{ Request::is('profile-form') || Request::is('profile-form/show/*') ||Request::is('upload-form/*') || Request::is('verify-form/*') || Request::is('summary-form/*') || Request::is('submit-form/*') ?  'active' : '' }}">
                                    <i class="fas fa-user-alt icon2"></i><br>PROFILE 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="{{ Request::is('upload-form/*') || Request::is('verify-form/*') || Request::is('summary-form/*')  || Request::is('submit-form/*')  ? 'active' : '' }}">
                                    <i class="fas fa-file-upload icon2"></i><br>UPLOAD
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="{{ Request::is('verify-form/*') || Request::is('summary-form/*') || Request::is('submit-form/*')  ? 'active' : '' }}">
                                    <i class="fas fa-user-check icon2"></i><br>VERIFY
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="{{ Request::is('summary-form/*') || Request::is('submit-form/*')  ? 'active' : '' }}">
                                    <i class="fas fa-search icon2"></i><br>SUMMARY
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="{{ Request::is('submit-form/*') ? 'active' : '' }}">
                                    <i class="fas fa-check-circle icon2"></i><br>SUBMIT
                                </a>
                            </li>
                            
                        </ul>
                    </div><!-- /.card-header -->
                </div>
