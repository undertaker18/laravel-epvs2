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
                        <h1 class="m-0">SYNC XERO ACCOUNTS</h1>

                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-6 col-8">
                        <!-- small box -->
                        <div class="small-box"
                            style="background-color: #FFFFFF;  border: 5px solid #1266B4; border-radius: 12px; color: black;">
                            <div class="inner ml-3 ">
                                <p class="mt-2"><b>LAST SYNC</b></p>
                                <h1 class="mb-3" style="color:#1266B4; font-size: 50px;">
                                    <b>{{ isset($xeroAccount[0]) ? \Carbon\Carbon::parse($xeroAccount[0]->created_at)->format('M d, Y h:i:s A') : ''}}</b>
                                </h1>
                            </div>

                            <div class="icon">
                                <i class="ion ion-card mr-3 mt-3" style="color:#1266B4;"></i>
                            </div>
                            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                        </div>

                        

                    </div>

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



                    <div class="col-lg-6 col-6">
                        <!-- small box -->
                        <div class="small-box"
                            style="background-color: #FFFFFF;  border: 5px solid #1266B4; border-radius: 12px; color: black;">
                            <div class="inner ml-3 ">
                                <p class="mt-2"><b>SYNCED USER COUNT</b></p>
                                <h1 style="color:#1266B4; font-size: 63px;"><b>{{count($xeroAccount)}}</b></h1>
                            </div>

                            <div class="icon">
                                <i class="ion ion-card mr-3 mt-3" style="color:#1266B4;"></i>
                            </div>
                            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                        </div>

                    </div>
                </div>
                <div class='ml-3 text-right' style="">
                    <!-- In your Blade template file -->
                    
                    <button id="sync-btn" class="btn btn-default mr-4 mb-3"
                        style="background-color: #D74747; color: #ffffff; width: 125px;"><i
                            class="fas fa-check"></i>&nbsp;&nbsp;SYNC</button>
                </div>
                <!-- /.row -->
        </section>

        <section style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
            <!-- Title Form -->
            <div class="card" style="background-color: ; ">
                <div class="card-body" style="color: #000000; ">
                    <table id="example1" class="table table-bordered  table-hover">
                        <thead>
                            <tr style="color: #000000;">
                                <th>Name</th>
                                <th>Xero Account ID</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($xeroAccount as $account)
                            <tr>
                                <td>{{$account->xero_account_name}}</td>
                                <td>{{$account->xero_account_id}}</td>
                                <td>{{ \Carbon\Carbon::parse($account->created_at)->format('M d, Y h:i A')}}</td>
                                <td>{{ \Carbon\Carbon::parse($account->updated_at)->format('M d, Y h:i A')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

        <script>
            $(document).ready(function () {
                //     // $('#example').DataTable({
                //     //     pagingType: 'full_numbers',
                //     // });

                $('#sync-btn').click(function () {
                    syncAccountApi();
                });

                function syncAccountApi() {
                    $.ajax({
                        url: '/v1/xero/syncAccounts',
                        method: 'GET',
                        data: {},
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
