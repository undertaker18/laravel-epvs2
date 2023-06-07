<x-admin-layout>
    <style>
        .table tbody tr:hover {
            background: #1266B4;
            color: #EAF1F8
        }

        .btn-primary:hover {
            background: #1266B4;
        }

        i:hover {
            color: #EAF1F8;
        }

        .modal-message {
            font-size: 1.5rem;
        }

    </style>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: #EAF1F8;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">BDO RECEIPTS</h1>
                    </div><!-- /.col -->
                    <!--  <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div> /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        

        <!-- data tables -->
        <section style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
            <!-- Title Form -->
            <div class="card" style="background-color: ; ">
                <div class="card-body" style="color: #000000; ">
                    <table id="example1" class="table table-bordered  table-hover">
                        <thead>
                            <tr style="color: #000000;">
                                <th>Posting Date:</th>
                                <th>Branch:</th>
                                <th>Description:</th>
                                <th>Debit:</th>
                                <th>Credit:</th>
                                <th>Running Balance:</th>
                                <th>Check Number:</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bdoReceipts as $bdoReceipt)
                            <tr style="color: #000000;">
                                <td>{{ date('m/d/Y', strtotime($bdoReceipt->posting_datetime)) }}</td>
                                <td>{{ $bdoReceipt->branch }}</td>
                                <td>{{ $bdoReceipt->description }}</td>
                                <td>{{ $bdoReceipt->debit }}</td>
                                <td>{{ $bdoReceipt->credit }}</td>
                                <td>{{ $bdoReceipt->running_balance }}</td>
                                <td>{{ $bdoReceipt->check_number }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
        <!-- right col -->

    </div><!-- /.container-fluid -->
    <!-- Example of including jQuery and Bootstrap JS files, adjust the paths according to your setup -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</x-admin-layout>
