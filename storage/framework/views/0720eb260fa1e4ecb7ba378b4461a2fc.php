<?php if (isset($component)) { $__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6 = $component; } ?>
<?php $component = App\View\Components\FormLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6)): ?>
<?php $component = $__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6; ?>
<?php unset($__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\epvs-app2\resources\views/form/privacy-form.blade.php ENDPATH**/ ?>