<x-admin-layout>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: #EAF1F8;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">XERO INTEGRATION</h1>
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

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                @can('update')
                    <div class="col-lg-6 col-8">
                        <!-- small box -->
                        <a href="{{ url('/xero-send') }}">
                            <div class="small-box"
                                style="background-color: #FFFFFF;  border: 0px solid #D78C47; border-radius: 12px; color: black;">
                                <div class="inner ml-3 ">
                                    <p class="mt-2">SENDING RECEIPTS</p>
                                    <h1 style="color:#D78C47; font-size: 60px;"><b>{{ $countsend }}</b></h1>
                                </div>

                                <div class="icon">
                                    <i class="ion ion-card mr-3 mt-3" style="color:#D78C47;"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-6">
                        <!-- small box -->
                        <a href="{{ url('/xero-sent') }}">
                            <div class="small-box"
                                style="background-color: #FFFFFF;  border: 5px solid #008000; border-radius: 12px; color: black;">
                                <div class="inner ml-3 ">
                                    <p class="mt-2">SENT RECEIPTS</p>
                                    <h1 style="color:#008000; font-size: 60px;"><b>{{ $countsent }}</b></h1>
                                </div>

                                <div class="icon">
                                    <i class="ion ion-card mr-3 mt-3" style="color:#008000;"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </a>
                    </div>
                @elseif('read')
                    <div class="col-lg-12 col-6">
                        <!-- small box -->
                        <a href="{{ url('/xero-sent') }}">
                            <div class="small-box"
                                style="background-color: #FFFFFF;  border: 5px solid #008000; border-radius: 12px; color: black;">
                                <div class="inner ml-3 ">
                                    <p class="mt-2">SENT RECEIPTS</p>
                                    <h1 style="color:#008000; font-size: 60px;"><b>{{ $countsent }}</b></h1>
                                </div>

                                <div class="icon">
                                    <i class="ion ion-card mr-3 mt-3" style="color:#008000;"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </a>
                    </div>
                @endcan

                </div>
                <!-- /.row -->
        </section>
        <!-- data tables -->
        <section style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
            <!-- Title Form -->
            <div class="card" style="background-color: ; ">
                <div class="card-body" style="color: #000000; ">
                    <table id="example1" class="table table-bordered  table-hover">
                        <thead>
                            <tr style="color: #000000;">
                                <th>FullName</th>
                                <th>Xero Account Id</th>
                                <th>Payment For</th>
                                <th>Amount</th>
                                <th>Reference</th>
                                <th>Created At</th>
                                <th>Created By</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($xeroInvoice as $value)
                                <tr style="color: #000000;">
                                    <td>{{$value->xero_account_name}}</td>
                                    <td>{{$value->xero_account_id}}</td>
                                    <td>{{$value->description}}</td>
                                    <td>{{$value->each_amount}}</td>
                                    <td>{{$value->reference}}</td>
                                    <td>{{ \Carbon\Carbon::parse($value->created_at)->format('M d, Y h:i A')}}</td>
                                    <td>{{ \Carbon\Carbon::parse($value->updated_at)->format('M d, Y h:i A')}}</td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
        <!-- right col -->
        <!-- /.row -->
    </div><!-- /.container-fluid -->

</x-admin-layout>