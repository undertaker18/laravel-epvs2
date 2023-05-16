<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ul class="d-flex justify-content-center list-unstyled">
                    <li class="text-center">
                        <a href="{{ url('/privacy-form') }}" class="{{ Request::is('privacy-form') ? 'active' : '' }}">
                            <i class="fas fa-user-shield icon" style="font-size: 20px;"></i><br>
                            <span class="link-text">PRIVACY</span>
                        </a>
                    </li>
                    <li class="text-center">
                        <a href="{{ url('/profile-form') }}" class="{{ Request::is('profile-form') ? 'active' : '' }}">
                            <i class="fas fa-user-alt icon" style="font-size: 20px;"></i><br>
                            <span class="link-text">PROFILE</span>
                        </a>
                    </li>
                    <li class="text-center">
                        <a href="{{ url('/upload-form') }}" class="{{ Request::is('upload-form') ? 'active' : '' }}">
                            <i class="fas fa-file-upload icon" style="font-size: 20px;"></i><br>
                            <span class="link-text">UPLOAD</span>
                        </a>
                    </li>
                    <li class="text-center">
                        <a href="{{ url('/verify-form') }}" class="{{ Request::is('verify-form') ? 'active' : '' }}">
                            <i class="fas fa-user-check icon" style="font-size: 20px;"></i><br>
                            <span class="link-text">VERIFY</span>
                        </a>
                    </li>
                    <li class="text-center">
                        <a href="{{ url('/summary-form') }}" class="{{ Request::is('summary-form') ? 'active' : '' }}">
                            <i class="fas fa-search icon" style="font-size: 20px;"></i><br>
                            <span class="link-text">SUMMARY</span>
                        </a>
                    </li>
                    <li class="text-center">
                        <a href="{{ url('/submit-form') }}" class="{{ Request::is('submit-form') ? 'active' : '' }}">
                            <i class="fas fa-check-circle icon" style="font-size: 20px;"></i><br>
                            <span class="link-text">SUBMIT</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
