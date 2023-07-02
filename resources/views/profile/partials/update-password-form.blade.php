<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="position-relative">
            <x-input-label for="current_password" :value="__('Current Password')" />
            <div class="input-group">
                <x-text-input id="current_password" name="current_password" type="password" class="block mb-1 w-full pr-5" autocomplete="current-password" />
                <button type="button" id="toggleCurrentPassword" class="btn btn-default position-absolute top-50 end-0 translate-middle-y" style="font-size: 19px; ">
                    <i class="fas fa-eye" ></i>
                </button>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>
        
        <div class="position-relative">
            <x-input-label for="password" :value="__('New Password')" />
            <div class="input-group">
                <x-text-input id="password" name="password" type="password" class="block mb-1 w-full pr-5" autocomplete="new-password" />
                <button type="button" id="togglePassword" class="btn btn-default position-absolute top-50 end-0 translate-middle-y "  style="font-size: 19px;" >
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>
        
        <div class="position-relative">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <div class="input-group">
                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="block mb-1 w-full pr-5" autocomplete="new-password" />
                <button type="button" id="togglePasswordConfirmation" class="btn btn-default position-absolute top-50 end-0 translate-middle-y"  style="font-size: 19px;" >
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>
        
        
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const passwordConfirmationInput = document.getElementById('password_confirmation');
            const currentPasswordInput = document.getElementById('current_password');
            const eyeIcon1 = document.getElementById('eyeIcon1');
            const eyeIcon2 = document.getElementById('eyeIcon2');
            const eyeIcon3 = document.getElementById('eyeIcon3');
            const togglePassword = document.getElementById('togglePassword');
            const togglePasswordConfirmation = document.getElementById('togglePasswordConfirmation');
            const toggleCurrentPassword = document.getElementById('toggleCurrentPassword');
    
            togglePassword.addEventListener('click', function() {
                togglePasswordVisibility(passwordInput, eyeIcon1);
            });
    
            togglePasswordConfirmation.addEventListener('click', function() {
                togglePasswordVisibility(passwordConfirmationInput, eyeIcon2);
            });
    
            toggleCurrentPassword.addEventListener('click', function() {
                togglePasswordVisibility(currentPasswordInput, eyeIcon3);
            });
    
            function togglePasswordVisibility(inputElement, eyeIcon) {
                if (inputElement.type === 'password') {
                    inputElement.type = 'text';
                    eyeIcon.classList.remove('bi-eye');
                    eyeIcon.classList.add('bi-eye-slash');
                } else {
                    inputElement.type = 'password';
                    eyeIcon.classList.remove('bi-eye-slash');
                    eyeIcon.classList.add('bi-eye');
                }
            }
        });
    </script>
    
</section>
