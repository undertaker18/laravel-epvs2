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
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <!--upload -->
                    <div class="col-lg-6 col-8">
                        <!-- small box -->
                            <div class="small-box"
                                style="background-color: #FFFFFF;  border: 0px solid #1266B4; border-radius: 12px; color: black; ">
                                @if(isset($latestUploadTimestamp))
                                <div class="inner ml-3">
                                    <p class="mt-2"><b>LAST UPLOAD</b></p>
                                    <h1 class="mb-3" style="color:#1266B4; font-size: 60px;">
                                        <b>{{ $latestUploadTimestamp->setTimezone('Asia/Manila')->toFormattedDateString() }}<span
                                                class="time"
                                                style="font-size: 2.2rem;">{{ $latestUploadTimestamp->setTimezone('Asia/Manila')->format('h:i A') }}</span></b>
                                    </h1>
                                </div>
                                @endif
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                    </div>
                    <div class="col-lg-6 col-8" style="text-align: center;">
                        <div class="small-box" style="background-color: #FFFFFF;  border: 0px solid black; border-radius: 12px; color: black; "> 
                                <div class="inner ml-3">
                                    <form action="/bdo-xero-receipts" method="GET">
                                        <div  class="mb-2 mt-2 col-12" >
                                            <input  type="date" id="start" name="dateStart" value="{{$params['dateFrom']}}" required style="width:49%; border-radius:10px;">
                                            <input type="date" id="start" name="dateEnd" value="{{$params['dateTo']}}" required style="width:49%; border-radius:10px;">
                                        </div>
                                       <div  class="mb-3 mt-3">
                                            <button type="submit" class="btn btn-primary " style="background-color:#1266B4; width:96%; border-radius:10px;"><b>SEARCH</b></button>
                                       </div>
                                    </form>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                        </div>
                    </div>
                </div>
        </section>

        <!-- data tables -->
        <section style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">

            <!-- Title Form -->
            <div class="card" style="background-color: ; ">
                <div class="card-body" style="color: #000000; ">
                    <table id="example1" class="table table-bordered  table-hover">
                        <thead>
                            <tr style="color: #000000;">
                                <th>ID</th>
                                <th>Posting Date:</th>
                                <th>Reference:</th>
                                <th>Credit</th>
                                <th>Source</th>
                                <th>Description</th>
                                <th>Bank Name</th>
                            </tr>
                        </thead>
                        <tbody>

                          @php
                            $id = 0;
                            $sourceLib = [
                                'SPEND' => 'Spend Money'
                            ];
                          @endphp

                            @foreach($bdoReceipts as $bdoReceipt)
                            @php
                            $id++;
                          @endphp

                            <tr style="color: #000000;">
                                <td>{{ $id }}</td>
                                <td>{{ \Carbon\Carbon::parse($bdoReceipt['DateString'])->format('M d, Y') }}</td>
                                <td>{{ $bdoReceipt['Reference'] ?? '' }}</td>
                                <td>{{ $bdoReceipt['Total'] }}</td>
                                <td>{{ isset($bdoReceipt['Type']) ? $sourceLib[$bdoReceipt['Type']] : ''}}</td>
                                <td>{{ $bdoReceipt['Contact']['Name'] }}</td>
                                <td>{{ $bdoReceipt['BankAccount']['Name'] }}</td>
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
    <script>
    </script>
</x-admin-layout>
