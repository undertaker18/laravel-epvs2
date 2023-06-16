<style>
a {
  color: #879BAE;
  list-style: none;
  text-decoration: none;
}

a:hover {
  color: #879BAE !important;
}   

.active {
  color: #1266b4 ;
}
/* logo */
/* .nav-item{
    font-size: 15px;
    margin: 0;

} */
.nav-link {
    font-size: 20px !important; /* or any other desired size */
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
.text-nav {
    font-size: 9px !important;
}
.nav-link {
    font-size: 0px; /* or any other desired size */
}
.icon2{
font-size: 22px; /* or any other desired size */

}
}
.text-nav {
    font-size: 20px;
}

</style>
                <div class="">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a href="#" class="{{ Request::is('privacy-form') || Request::is('profile-form')  || Request::is('profile-form/show/*') || Request::is('upload-form/*') || Request::is('verify-form/*') || Request::is('summary-form/*') || Request::is('submit-form/*') ? 'active' : '' }}" >
                                    <i class="fas fa-user-shield icon2"></i><br><p class="text-nav">PRIVACY</p>
                                </a>
                            </li>   
                            <li class="nav-item">
                                <a href="#" class="{{ Request::is('profile-form') || Request::is('profile-form/show/*') ||Request::is('upload-form/*') || Request::is('verify-form/*') || Request::is('summary-form/*') || Request::is('submit-form/*') ?  'active' : '' }}">
                                    <i class="fas fa-user-alt icon2"></i><br><p class="text-nav">PROFILE</p> 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="{{ Request::is('upload-form/*') || Request::is('verify-form/*') || Request::is('summary-form/*')  || Request::is('submit-form/*')  ? 'active' : '' }}">
                                    <i class="fas fa-file-upload icon2"></i><br><p class="text-nav">UPLOAD</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="{{ Request::is('verify-form/*') || Request::is('summary-form/*') || Request::is('submit-form/*')  ? 'active' : '' }}">
                                    <i class="fas fa-user-check icon2"></i><br><p class="text-nav">VERIFY</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="{{ Request::is('summary-form/*') || Request::is('submit-form/*')  ? 'active' : '' }}">
                                    <i class="fas fa-search icon2"></i><br><p class="text-nav">SUMMARY</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="{{ Request::is('submit-form/*') ? 'active' : '' }}">
                                    <i class="fas fa-check-circle icon2"></i><br><p class="text-nav">SUBMIT</p>
                                </a>
                            </li>
                            
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-header p-2">
                        <h6 class="text-danger" >FOR DEMO PURPOSES ONLY!</h6>
                    </div>
                </div>
