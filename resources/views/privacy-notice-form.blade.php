<x-form-layout>
    <style>
        .button {
           width: 300px;
        }
        .btn-green {
            background-color: green;
        }
    </style>

    <div class="row main-content">
        <div class="column">
            <div class="privacy-content">
                <p><b>PRIVACY NOTICE:</b> Dear student(s)/parent(s)/guardian(s), we would 
                    like to inform you that we are collecting your personal information(s)
                    for the purpose of your payment in La Verdad Christian College. This
                    information(s) shall be utilized for payment process only. In
                    compliance to Data Privacy Act of 2012, these personal information(s)
                    shall not be used outside of its declared purpose. We would like to 
                    inform you also that personal information(s) will be stored in our LVCC 
                    Database. The use, storage, retention and disposal of your personal 
                    information(s) shall be governed by our data privacy policies. If you 
                    agree to this privacy notice, kindly check the box below. *I ACCEPT</p>
                <input type="checkbox" id="my-checkbox" name="my-checkbox" class="checkbox" able>
                <label for="my-checkbox" class="font"><b>I ACCEPT </b><span class="asteris">*</span></label>
            </div>
        </div>
        <div class="column" style="padding-top: 230px;">
            <div class="buttons">
                <a href="{{ url('/') }}">
                    <button class="left-button"> <i class="fas fa-arrow-left"></i> BACK</button>
                </a>
                <a href="{{ url('/profile-form') }}">
                    <button id="next-btn" class="right-button" disabled>NEXT <i class="fas fa-arrow-right"></i></button>
                </a>
            </div>
        </div>
    </div>
    
    <script>
        const checkbox = document.getElementById('my-checkbox');
        const nextBtn = document.getElementById('next-btn');

        checkbox.addEventListener('change', function() {
            if (checkbox.checked) {
                nextBtn.classList.add('btn-green');
                nextBtn.removeAttribute('disabled');
            } else {
                nextBtn.classList.remove('btn-green');
                nextBtn.setAttribute('disabled', true);
            }
        });
    </script>
</x-form-layout>
