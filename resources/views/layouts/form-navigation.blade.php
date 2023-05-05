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
  color: #1266b4;
}

</style>
<ul >
    <li>
        <a href="{{ url('/privacy-notice') }}" class="{{ Request::is('privacy-notice') ? 'active' : '' }}">
            <i class="fas fa-user-shield icon" ></i><br>PRIVACY
          </a>        
        
    </li>

    <li>
        <a href="{{ url('/profile-form') }}" class="{{ Request::is('profile-form') ? 'active' : '' }}">
            <i class="fas fa-user-alt icon "></i><br>PROFILE
        </a>
        
    </li>

    <li>
        <a href="{{ url('/upload-form') }}" class="{{ Request::is('upload-form') ? 'active' : '' }}">
            <i class="fas fa-file-upload icon" ></i><br>UPLOAD
        </a>
       
    </li>

    <li>
        <a href="{{ url('/verify-form') }}" class="{{ Request::is('verify-form') ? 'active' : '' }}">
            <i class="fas fa-user-check icon" ></i><br>VERIFY
        </a>
       
    </li>

    <li>
        <a href="{{ url('/summary-form') }}" class="{{ Request::is('summary-form') ? 'active' : '' }}">
            <i class="fas fa-search icon" ></i><br>SUMMARY
        </a>
        
    </li>

    <li>
        <a href="{{ url('/submit-form') }}" class="{{ Request::is('submit-form') ? 'active' : '' }}">
            <i class="fas fa-check-circle icon" ></i><br>SUBMIT
        </a>
    </li>
</ul>
