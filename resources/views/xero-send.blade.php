<x-admin-layout>
    <style> 
        .lds-spinner {
    display: inline-block;
    position: relative;
    width: 64px;
    height: 64px;
    }

    .lds-spinner div {
    transform-origin: 32px 32px;
    animation: lds-spinner 1.2s linear infinite;
    }

    .lds-spinner div:after {
    content: " ";
    display: block;
    position: absolute;
    top: 3px;
    left: 29px;
    width: 5px;
    height: 14px;
    border-radius: 20%;
    background: #1266B4;
    }

    .lds-spinner div:nth-child(1) {
    transform: rotate(0deg);
    animation-delay: -1.1s;
    }

    .lds-spinner div:nth-child(2) {
    transform: rotate(30deg);
    animation-delay: -1s;
    }

    /* ... Repeat the following styles for div:nth-child(3) to div:nth-child(12) with different animation delays ... */

    @keyframes lds-spinner {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
    }
    </style>
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

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-6 col-8">
                        <!-- small box -->
                        <a href="{{ url('/xero-send') }}">
                            <div class="small-box"
                                style="background-color: #FFFFFF;  border: 5px solid #D78C47; border-radius: 12px; color: black;">
                                <div class="inner ml-3 ">
                                    <p class="mt-2"><b>SENDING RECEIPTS</b></p>
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
                                style="background-color: #FFFFFF;  border: 0px solid #008000; border-radius: 12px; color: black;">
                                <div class="inner ml-3 ">
                                    <p class="mt-2"><b>SENT RECEIPTS</b></p>
                                    <h1 style="color:#008000; font-size: 60px;"><b>{{ $countsent }}</b></h1>
                                </div>

                                <div class="icon">
                                    <i class="ion ion-card mr-3 mt-3" style="color:#008000;"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </a>
                    </div>

                </div>
                <!-- /.row -->
        </section>

        <div style="text-align: right;  ">
            <button id="send-to-xero-btn" class="btn btn-default mr-4 mb-3"
                style="background-color: #D74747; color: #ffffff; width: 170px;"><i
                    class="fas fa-paper-plane"></i>&nbsp;&nbsp;SEND TO XERO</button>
        </div>

        <!-- data tables -->
        <section style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
            <!-- Title Form -->
            <div class="card" style="background-color: ; ">
                <div class="card-body" style="color: #000000; ">
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
        <!-- right col -->
        <!-- right col -->

        <!-- /.row -->
    </div><!-- /.container-fluid -->
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Launch demo modal
                      </button> --}}
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle"><b>Loading</b></h5>
                    </div>
                    <div class="modal-body text-center">
                        <div class="text-warning" role="status">
                            <div class="lds-spinner">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Loading</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button> --}}
                </div>
                <div class="modal-body text-center">
                    <div class="spinner-border text-warning" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary">Save changes</button>
                         </div> --}}
            </div>
        </div>
    </div>

    </section>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            let invoice_obj = {};

            $(".invoice_checkbox").change(function (e) {
                console.log(this.checked)
                let id = this.getAttribute('data-id');
                if (this.checked == true) {
                    // add to list
                    invoice_obj[id] = id
                } else {
                    // remove from list
                    delete invoice_obj[id]
                }

                console.log(invoice_obj);
            });

            $('#send-to-xero-btn').click(function (e) {
                handleSendToXero();
            });

            function handleSendToXero() {

                let invoiceIdCsv = Object.keys(invoice_obj).map(function (key, index) {
                    return invoice_obj[key]
                }).join(', ')

                console.log(invoiceIdCsv);
                sendToXeroApi(invoiceIdCsv);
            }

            function sendToXeroApi(invoice_ids_csv) {
                $.ajax({
                    url: '/v1/xero/makeInvoiceAndPay',
                    method: 'GET',
                    data: {
                        invoice_ids: invoice_ids_csv
                    },
                    xhrFields: {
                        withCredentials: true
                    },
                    beforeSend: function () {
                        $('#exampleModalCenter').modal('toggle');
                    },
                    error: function (error) {
                        console.log(error);
                        $('#exampleModalCenter').modal('toggle');
                    },
                    success: function (response) {
                        var result = $.parseJSON(response);
                        location.reload()
                    }
                });
            }



        });

    </script>
</x-admin-layout>
