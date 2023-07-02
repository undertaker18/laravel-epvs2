<x-guest-layout>

  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <!-- Section: Design Block -->
  <section class=" ">
      <style>
              .background-radial-gradient {
       background-color: hsl(0, 0%, 100%);
       
     }
 
     .bg-glass {
       background-color:#1266b4 !important;
      
      
     }
     .button-color 
     {
       background-color: #1A2E63 ;  
     }
     .btn-dark {
       background-color: #1A2E63
     }


     .label {
       color: white;
     }
     .head-color{
       color: white;
       margin-bottom: 30px;
     }
     .display-1  {
      font-size: 7rem; /* Change this value to resize the text */
     }   
    .qoute {
        font-size: 25px;
    }
     @media (max-width: 575.98px) { 
      .display-1  {
      font-size: 1rem; /* Change this value to resize the text */
     }  
     }

    
      @media (max-width: 767.98px) { 
        .display-1  {
      font-size: 1rem; /* Change this value to resize the text */
     }  
       }

      @media (max-width: 991.98px) { 
        .display-1  {
      font-size: 4rem; /* Change this value to resize the text */
     }  
       }
      </style>

      <div class="container-fluid text-center text-lg-start my-5">
          <div class="row gx-lg-5 align-items-center mb-5">
              <div class="col-lg-4 mb-5 mb-lg-0 cards" style="z-index: 10">
                  <div class="card bg-glass">
                      <div class="card-body px-4 py-5 px-md-5 b-0">
                          <div class="d-flex justify-content-center">
                              <img class="" src="{{ asset('assets/data-privacy/lvcclogo.png') }}" alt="lvcc-logo" style="width: 250px; height: 250px;">
                          </div>
                          <div class="d-flex justify-content-center">
                              <p class="display-5 head-color">LOGIN</p>
                          </div>

                          <form method="POST" action="{{ route('login') }}">
                              @csrf
                              <!-- Email input -->
                              <div class="form-outline mb-4">
                                  <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                  <label class="form-label label" for="form3Example3">La Verdad Email address</label>
                              </div>

                              <!-- Password input -->
                              <div class="form-outline mb-4">
                                <div class="position-relative">
                                    <x-text-input id="password" class="block mt-1 w-full pr-5"
                                        type="password"
                                        name="password"
                                        required
                                        autocomplete="current-password" />
                            
                                    <button type="button" id="togglePassword" class="btn btn-default position-absolute top-50 end-0 translate-middle-y">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <label class="form-label label" for="form3Example4">Password</label>
                              </div>

                              <!-- Checkbox -->
                              <div class="form-check d-flex justify-content-center mb-4">
                                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                                  <label class="form-check-label label" for="form2Example33">
                                      {{ __('Remember me') }}
                                  </label>
                              </div>

                              <!-- Submit button -->
                              <x-primary-button class="btn btn-dark mb-4 w-full button-color justify-content-center">
                                  {{ __('Log in') }}
                              </x-primary-button>
                          </form>
                      </div>
                  </div>
              </div>

              <div class="col-lg-7 mb-5 mb-lg-0 position-relative">
                  <h1 class="my-5 display-1 fw-bold ls-tight" style="color: #1A2E63)">
                      Payment <br />
                      <span style="color: #1266b4">Validation System</span>
                  </h1>
                  <p class="mb-4 opacity-70 qoute" style="color: #1A2E63">
                      Thank you for considering our Payment Validation System.
                      We are confident that our system will meet your business needs
                      and help you streamline your payment processing while minimizing the risk of errors and time.
                  </p>
              </div>
          </div>
      </div>
  </section>


  <script>
      document.addEventListener('DOMContentLoaded', function() {
          const passwordInput = document.getElementById('password');
          const eyeIcon = document.getElementById('eyeIcon');
          const togglePassword = document.getElementById('togglePassword');

          togglePassword.addEventListener('click', function() {
              if (passwordInput.type === 'password') {
                  passwordInput.type = 'text';
                  eyeIcon.classList.remove('fa-eye');
                  eyeIcon.classList.add('fa-eye-slash');
              } else {
                  passwordInput.type = 'password';
                  eyeIcon.classList.remove('fa-eye-slash');
                  eyeIcon.classList.add('fa-eye');
              }
          });
      });
  </script>
</x-guest-layout>
