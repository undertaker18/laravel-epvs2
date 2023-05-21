<?php if (isset($component)) { $__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6 = $component; } ?>
<?php $component = App\View\Components\FormLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                <a href="<?php echo e(url('/')); ?>">
                    <button class="left-button"> <i class="fas fa-arrow-left"></i> BACK</button>
                </a>
                <a href="<?php echo e(url('/profile-form')); ?>">
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6)): ?>
<?php $component = $__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6; ?>
<?php unset($__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\epvs-app2\resources\views/privacy-notice-form.blade.php ENDPATH**/ ?>