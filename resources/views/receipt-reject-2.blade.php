<x-admin-layout>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #EAF1F8;">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">ENROLLMENT RECEIPT</h1>
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
                        <div class="col-lg-4 col-8">
                            <!-- small box -->
                            <a href="{{ url('/receipt-valid') }}">
                                <div class="small-box"
                                    style="background-color: #FFFFFF;  border: 0px solid #008000; border-radius: 12px; color: black;">
                                    <div class="inner ml-3 ">
                                        <p class="mt-2">VALID RECEIPTS</p>
                                        <h1 style="color:#008000; font-size: 60px;"><b>1000</b></h1>
                                    </div>

                                    <div class="icon">
                                        <i class="ion ion-card mr-3 mt-3" style="color:#008000;"></i>
                                    </div>
                                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <a href="{{ url('/receipt-pending') }}">
                                <div class="small-box"
                                    style="background-color: #FFFFFF;  border: 0px solid #D78C47; border-radius: 12px; color: black;">
                                    <div class="inner ml-3 ">
                                        <p class="mt-2">PENDING RECEIPTS</p>
                                        <h1 style="color:#D78C47; font-size: 60px;"><b>1000</b></h1>
                                    </div>

                                    <div class="icon">
                                        <i class="ion ion-card mr-3 mt-3" style="color:#D78C47;"></i>
                                    </div>
                                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <a href="{{ url('/receipt-reject') }}">
                                <div class="small-box"
                                    style="background-color: #FFFFFF;  border: 5px solid #D74747; border-radius: 12px; color: black;">
                                    <div class="inner ml-3 ">
                                        <p class="mt-2">REJECT RECEIPTS</p>
                                        <h1 style="color:#D74747; font-size: 60px;"><b>1000</b></h1>
                                    </div>

                                    <div class="icon">
                                        <i class="ion ion-card mr-3 mt-3" style="color:#D74747;"></i>
                                    </div>
                                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- /.row -->
            </section>
            <!-- right col -->
            <form method="POST" action="/receipt-reject">
            <div style="text-align: right;  ">
                @csrf
                <input type="hidden" name="csv_ids" id="csv_ids">
                <button type="submit" id="myButton" class="btn btn-default mr-4 mb-3" style="background-color: #D74747; color: #ffffff; width: 170px;">
                <i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;SEND TO EMAIL</button>
            </div>
            </form>

            <!-- data tables -->
            <section class="invoice" style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
                <!-- Title Form -->
                <div class="row" style="margin-top:20px;">
                    <div class="col" style=" margin-left: 50px; margin-top:0px;">
                        <h2 class="">Reject Receipts</h2>
                    </div>
                    <div class="col">
                        <!-- SidebarSearch Form -->
                        <form action="#">
                            <div class="input-group"
                                style="width: 100%; float: right; margin-bottom:20px; margin-top:5px; margin-right: 100px;">
                                <input type="search" class="form-control form-control-lg"
                                    placeholder="Type your keywords here">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search" style="color: #1266B4;"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Table row -->
                <div class="row">
                    <div class="col-12 table-responsive">
                    <table id="example1" class="table table-bordered  table-hover">
                        <thead>
                            <tr style="color: #000000;">
                                <th>Select</th>
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
                            <tr>
                                <td><input type="checkbox" id="my-checkbox" name="my-checkbox"
                                        class="checkbox invoice_checkbox" data-id="{{$value->id}}"></td>
                                <td>{{$value->xero_account_name}}</td>
                                <td>{{$value->xero_account_id}}</td>
                                <td>{{$value->description}}</td>
                                <td>{{$value->amount}}</td>
                                <td>{{$value->reference}}</td>
                                <td>{{ \Carbon\Carbon::parse($value->created_at)->format('M d, Y h:i A')}}</td>
                                <td>{{ \Carbon\Carbon::parse($value->updated_at)->format('M d, Y h:i A')}}</td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                    </div>
                    <!-- /.col -->
                </div>
                 <!--pagination -->
                <nav aria-label="Page navigation example">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="dataTables_info ml-5 mt-2" id="example1_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div>
                        </div>
                        <div class="col-md-8">
                            <ul class="pagination justify-content-center mb-3">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"  style=" font-weight:bold;">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#"  style="color: #1266B4; font-weight:bold;">1</a></li>
                                <li class="page-item"><a class="page-link" href="#"  style="color: #1266B4; font-weight:bold;">2</a></li>
                                <li class="page-item"><a class="page-link" href="#"  style="color: #1266B4; font-weight:bold;">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" style="color: #1266B4; font-weight:bold;">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
            <!-- right col -->

            <!-- /.row -->
        </div><!-- /.container-fluid -->
        </section>
        <script>
        $(document).ready(function () {
            let invoice_obj = {};

            $(".invoice_checkbox").change(function (e) {
                let id = this.getAttribute('data-id');
                if (this.checked == true) {
                    // add to list
                    invoice_obj[id] = id
                } else {
                    // remove from list
                    delete invoice_obj[id]
                }
                let csv = Object.keys(invoice_obj).map(function (key, index) {
                    return invoice_obj[key]
                }).join(',')

                $('#csv_ids').val(csv);
                console.log(csv);
            });

        });
            </script>
</x-admin-layout>
