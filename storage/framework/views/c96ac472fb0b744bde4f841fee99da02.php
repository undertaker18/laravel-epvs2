<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form | EPVSystem</title>
        <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/data-privacy/lvcclogo.png')); ?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fontawesome-free/css/all.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/dist/css/adminlte.min.css')); ?>">
        <link href="<?php echo e(asset('form.css')); ?>" rel="stylesheet">
    </head>
    <body>
        <!-- Your page content here --> 
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-1 p-md-1 mb-4 image">
                            <img src="<?php echo e(asset('assets/data-privacy/lvcclogo.png')); ?>" alt="lvcc-logo" style="width: 150px; height: 150px;">
                            <?php echo $__env->make('layouts.form-navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <main >
                                <?php echo e($slot); ?>

                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!--  cdn for bootstrap  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
            crossorigin="anonymous"></script>
        <!--  end cdn for bootstrap  -->

        <!--  ionicons  -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <!--  end ionicons  -->
        <script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/dist/js/adminlte.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dist/js/demo.js')); ?>"></script>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\epvs-app2\resources\views/layouts/form.blade.php ENDPATH**/ ?>