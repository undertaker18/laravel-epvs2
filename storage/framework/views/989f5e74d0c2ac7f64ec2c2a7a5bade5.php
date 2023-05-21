
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
     .right-button {
        float: right;
        width: 250px;
        height: 50px;
        padding: 8px;
        margin-left: 8px;
        background-color: #1266b4;
        color: #ffffff;
        border: none;
        border-radius: 8px;
        font-size: 20px;
     }
</style>
    <div class="row main-content ">
        <div class="column " >
            <!--submit -->
            <div class="form-content">
                <br>
                <div class="icon"><i class="fas fa-check icon" style="color: green;"></i></div>
                <h2>THANK YOU!</h2>
                <p>
                    The form was submitted successfully.
                    <br>
                    Please wait for the confirmation to your email.
                </p>
            </div>
        </div>

        <div class="column " style="padding-top: 20px;">

            <div class="buttons">
                <a href="../index.html">
                    <button class="right-button">Back to HomePage</button>
                </a>
            </div>
        </div>
    </div>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6)): ?>
<?php $component = $__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6; ?>
<?php unset($__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\epvs-app2\resources\views/submit-form.blade.php ENDPATH**/ ?>