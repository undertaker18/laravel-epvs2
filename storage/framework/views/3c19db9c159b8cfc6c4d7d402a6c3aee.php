<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard | EPVSystem</title>
        <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/data-privacy/lvcclogo.png')); ?>">

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
        <!-- JQVMap -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/jqvmap/jqvmap.min.css')); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/daterangepicker/daterangepicker.css')); ?>">
        <!-- summernote -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/summernote/summernote-bs4.min.css')); ?>">
        <!-- DataTables -->
        <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <!-- Chart -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
      </head>
      <style>
        h2{
        font-size: 40px;
        color: #1266B4;
        }
      </style>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <?php echo $__env->make('layouts.admin-navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('layouts.admin-aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Page Content -->
            <main>
                <?php echo e($slot); ?>

            </main>

        </div>


                    <!-- jQuery -->
            <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>

            <!-- jQuery UI 1.11.4 -->
            <script src="<?php echo e(asset('plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button);
            </script>
            <!-- Bootstrap 4 -->
            <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
            <!-- ChartJS -->
            <script src="<?php echo e(asset('plugins/chart.js/Chart.min.js')); ?>"></script>
            <!-- Sparkline -->
            <script src="<?php echo e(asset('plugins/sparklines/sparkline.js')); ?>"></script>
            <!-- JQVMap -->
            <script src="<?php echo e(asset('plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
            <!-- jQuery Knob Chart -->
            <script src="<?php echo e(asset('plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
            <!-- daterangepicker -->
            <script src="<?php echo e(asset('plugins/moment/moment.min.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/daterangepicker/daterangepicker.js')); ?>"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="<?php echo e(asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
            <!-- Summernote -->
            <script src="<?php echo e(asset('plugins/summernote/summernote-bs4.min.js')); ?>"></script>
            <!-- overlayScrollbars -->
            <script src="<?php echo e(asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
            <!-- AdminLTE App -->
            <script src="<?php echo e(asset('dist/js/adminlte.js')); ?>"></script>
            <script src="<?php echo e(asset('dist/js/pages/dashboard.js')); ?>"></script>
            <!-- DataTables & Plugins -->
            <script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/jszip/jszip.min.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/pdfmake/pdfmake.min.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/pdfmake/vfs_fonts.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
            <script src="<?php echo e(asset('plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>


            <!-- ./wrapper -->
        <script>
//             $(document).ready(function () {
//             //     // $('#example').DataTable({
//             //     //     pagingType: 'full_numbers',
//             //     // });



// // alert('asdasd');
// syncAccountApi();
//         function syncAccountApi() {
//             $.ajax({
//                 url: '/api/v1/xero/syncAccounts',
//                 method: 'GET',
//                 data: {
//                 },
//                 beforeSend: function() {
//                     // var tableContent = "<td class='loadingTd' colspan='40'><i class='fa fa-spinner fa-spin'></i> Loading</td>";
//                     // $("#tblResult tbody").html(tableContent);
//                     console.log('asdsad');
//                 },
//                 error: function (error) {
//                     // $("#ajaxError").modal("show");
//                     console.log(error);
//                     console.log('error');
//                 },
//                 success: function (response) {
//                     var result = $.parseJSON(response);
//                     // var tableContent = "";
//                     // var legend;
//                     // var legendClass;

//                     console.log(result);
//                 }
//         });
//         }

//             });
        </script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\epvs-app2\resources\views/layouts/admin.blade.php ENDPATH**/ ?>