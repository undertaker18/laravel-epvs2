<x-form-layout>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <form>
                    <div class="privacy-content">
                      <p><b>PRIVACY NOTICE:</b> Dear student(s)/parent(s)/guardian(s), we would like to inform you that we are collecting your personal information(s) for the purpose of your payment in La Verdad Christian College. This information(s) shall be utilized for payment process only. In compliance to Data Privacy Act of 2012, these personal information(s) shall not be used outside of its declared purpose. We would like to inform you also that personal information(s) will be stored in our LVCC Database. The use, storage, retention and disposal of your personal information(s) shall be governed by our data privacy policies. If you agree to this privacy notice, kindly check the box below. <b>*I ACCEPT</b></p>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="agree">
                        <label class="form-check-label" for="agree">I Accept to the terms and conditions</label>
                      </div>
                    </div>

                    <div class="text-center mt-3">
                      <button type="submit" class="btn btn-primary">Back</button>
                      <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
      
     

   
  
    
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
