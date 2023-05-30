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
            <section style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
                <!-- Title Form -->
                <div class="card" style="background-color: ; ">
                    <div class="card-body"  style="color: #000000; ">
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
                </div>

            </section>

            

            <!-- /.row -->
        </div><!-- /.container-fluid -->
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
