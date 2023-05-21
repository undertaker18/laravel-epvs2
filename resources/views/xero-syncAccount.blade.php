<x-admin-layout>
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
                                style="background-color: #FFFFFF;  border: 0px solid #D78C47; border-radius: 12px; color: black;">
                                <div class="inner ml-3 ">
                                    <p class="mt-2 mb-4">LAST SYNC: {{ isset($xeroAccount[0]) ? \Carbon\Carbon::parse($xeroAccount[0]->created_at)->format('M d, Y h:i:s A') : ''}} </p>
                                    {{-- <h1 style="color:#D78C47; font-size: 60px;"><b>1000</b></h1> --}}
                                </div>
                                <div class='ml-3' style="">
                                    <button id="sync-btn" class="btn btn-default mr-4 mb-3" style="background-color: #D74747; color: #ffffff; width: 125px;"><i class="fas fa-check"></i>&nbsp;&nbsp;SYNC</button>
                                </div>

                                <div class="icon">
                                    <i class="ion ion-card mr-3 mt-3" style="color:#D78C47;"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>

                    </div>
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Launch demo modal
                      </button> --}}

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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

                    <div class="col-lg-6 col-6">
                        <!-- small box -->

                            <div class="small-box"
                                style="background-color: #FFFFFF;  border: 5px solid #008000; border-radius: 12px; color: black;">
                                <div class="inner ml-3 ">
                                    <p class="mt-2">Synced User Count</p>
                                    <h1 style="color:#008000; font-size: 60px;"><b>{{count($xeroAccount)}}</b></h1>
                                </div>

                                <div class="icon">
                                    <i class="ion ion-card mr-3 mt-3" style="color:#008000;"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>

                    </div>

                </div>
                <!-- /.row -->
        </section>

        <!-- data tables -->
        <section class="invoice" style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
            <!-- Title Form -->
            <div class="row" style="margin-top:20px;">
                <div class="col" style=" margin-left: 50px; margin-top:0px;">
                    <h2 class=""style="color: #1266B4;">List of Enrollment Payment Receipt</h2>
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
                    <table class="table table-striped" id="example"
                        style="width:100%; margin-left: 0px; margin-right: 0px;">
                        <thead>
                            <tr style="color: #1266B4;">
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
                <!-- /.col -->
            </div>
        </section>
        <!-- right col -->

        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
              <!-- jQuery -->
              <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<script>

$(document).ready(function () {
            //     // $('#example').DataTable({
            //     //     pagingType: 'full_numbers',
            //     // });

    $('#sync-btn').click(function(){
        syncAccountApi();
    });
    function syncAccountApi() {
        $.ajax({
            url: '/v1/xero/syncAccounts',
            method: 'GET',
            data: {
            },
            xhrFields: { withCredentials: true },
            beforeSend: function() {
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

