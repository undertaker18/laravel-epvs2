<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'EPVSystem') }}</title>
        <link rel="shortcut icon" type="image/png" href="{{ asset('assets/data-privacy/lvcclogo.png') }}">

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
          <!-- database table -->
            <link rel="stylesheet" href="{{ asset('plugins/datatables-fixedheader/css/fixedHeader.bootstrap4.min.css') }}">
            <link rel="stylesheet" href="{{ asset('plugins/datatables-fixedcolumns/css/fixedColumns.bootstrap4.min.css') }}">
            <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
            <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
            <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">          
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
        

        
        <!-- Chart -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
      </head>
      <style>
        h2{
        font-size: 40px;
        color: #1266B4;
        }

        .btn-primary {
        background-color: #1266B4;
        border-color: #1266B4;
        }

        .btn-primary:hover {
            background-color: #0e5499;
            border-color: #0e5499;
        }

        .pagination .page-item .page-link {
        color: #1266B4;
        }

        .pagination .page-item.active .page-link {
            background-color: #1266B4;
            border-color: #1266B4;
            color: #fff;
        }

        .table-hover tbody tr:hover {
        background-color: #1266B4 !important;
        cursor: pointer;
        }

      </style>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.admin-navigation')
            @include('layouts.admin-aside')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        </div>


            <!-- jQuery -->
            <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

            <!-- jQuery UI 1.11.4 -->
            <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button);
            </script>
            <!-- Bootstrap 4 -->
            <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <!-- ChartJS -->
            <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
            <!-- Sparkline -->
            <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
            <!-- JQVMap -->
            <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
            <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
            <!-- jQuery Knob Chart -->
            <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
            <!-- daterangepicker -->
            <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
            <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
            <!-- Summernote -->
            <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
            <!-- overlayScrollbars -->
            <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
            <!-- AdminLTE App -->
            <script src="{{ asset('dist/js/adminlte.js') }}"></script>
            <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

            <script>
               $(function () {
                    $("#example1").DataTable({
                        "responsive": true,
                        "lengthChange": true,
                        "autoWidth": true,
                        "buttons": [
                            {
                                extend: 'copy',
                                className: 'btn btn-primary'
                            },
                            {
                                extend: 'csv',
                                className: 'btn btn-primary'
                            },
                            {
                                extend: 'excel',
                                className: 'btn btn-primary'
                            },
                            {
                                extend: 'pdf',
                                className: 'btn btn-primary'
                            },
                            {
                                extend: 'print',
                                className: 'btn btn-primary'
                            },
                            {
                                extend: 'colvis',
                                className: 'btn btn-primary',
                            }
                        ]
                    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                });
            </script>
    
            
            <!-- DataTables  & Plugins -->
            <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
            <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
            <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
            <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
            <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
            <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
            <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
            <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
            <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
            <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
            
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
