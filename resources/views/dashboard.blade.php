<x-admin-layout>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #EAF1F8;">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">DASHBOARD</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              <button type="button" class="btn btn-default mr-4 mb-3"
                      style="background-color: #1266B4; color: #ffffff;  width: 175px; " data-toggle="modal"
                      data-target="#myModal">AUTHENTICATE</button>
            
              {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li> --}}
            </ol>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <!-- 01 -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-8">
              <!-- small box -->
              <div class="small-box" style="background-color: #FFFFFF;">
                <div class="inner ml-3 ">
                  <p class="mt-3" >VALID RECEIPTS</p>
                  <h1 style="color:#008000; font-size: 50px;">1000</h1>

                </div>
                <div class="icon" style="color:#008000; ">
                  <i class="ion ion-card mr-2 mt-2"></i>
                </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" style="background-color: #FFFFFF;">
                <div class="inner ml-3 ">
                  <p class="mt-3">PENDING RECEIPTS</p>
                  <h1 style="color:#EC7100; font-size: 50px;" >542</h1>

                </div>
                <div class="icon" style="color: #EC7100;">
                  <i class="ion ion-card mr-2 mt-2"></i>
                </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" style="background-color: #FFFFFF;">
                <div class="inner ml-3 ">
                  <p class="mt-3">REJECT RECEIPTS</p>
                  <h1 style="color:#FF0000; font-size: 50px;">{{ $countreject }}</h1>

                </div>
                <div class="icon" style="color: #FF0000;">
                  <i class="ion ion-card mr-2 mt-2"></i>
                </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" style="background-color: #FFFFFF;">
                <div class="inner ml-3 ">
                  <p class="mt-3" >TOTAL RECEIPTS</p>
                  <h1 style="font-size: 50px;">1562</h1>

                </div>
                <div class="icon" style="color: black;">
                  <i class="ion ion-card mr-2 mt-2"></i>
                </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-8 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    ALL RECEIPTS
                  </h3>
                  <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                      <!--  <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li> -->
                    </ul>
                  </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                    </div>
                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                      <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                    </div>
                  </div>
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->


            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-4 connectedSortable">

              <!-- Map card -->
              <div class="card bg-gradient-primary">
                <div class="card-header border-0" style="background-color: white;">
                  <h3 class="card-title text-dark">
                    <i class=" mr-1"></i>
                    ALL DEPARTMENT
                  </h3>
                  <!-- card tools -->
                  <div class="card-tools">

                  </div>
                  <!-- /.card-tools -->
                </div>
                <div class="" style="background-color: white;">
                  <div class="" style="position: relative; height: 340px; display: flex; justify-content: center;">
                    <canvas id="myChart" style="background-color: white;"></canvas>
                  </div>
                </div>
              </div>
          </div>
          <!-- /.card -->
      </section>
      <!-- right col -->
      <!-- data tables -->
      <section style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
        <!-- Title Form -->
        <div class="card" style="background-color: ; ">
            <div class="card-body"  style="color: #000000; ">
                <table id="example1" class="table table-bordered  table-hover">
                    <thead>
                        <tr style="color: #000000;">
                            <th>Fullname</th>
                            <th>Grade/Course</th>
                            <th>Date of Payment</th>
                            <th>Time of Payment</th>
                            <th>Payment For</th>
                            <th>Amount</th>
                            <th>Reference No.</th>
                            <th>Receipt Type</th>
                            <th>Status</th>
                            <th>Receipt Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="color: #000000;">
                            <td>jordan earl pascua</td>
                            <td>BSIS-4</td>
                            <td>06/25/2023</td>
                            <td>09:00:00</td>
                            <td>Notarial</td>
                            <td>150.00</td>
                            <td>347360483798</td>
                            <td>Gcash</td>
                            <td style="color: #008000;">Valid</td>
                            <td style="color: #1266B4; text-decoration: underline;"><i class="fas fa-eye"></i>Full
                              View</td>
                        </tr>  
                        
                    </tbody>

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
    </div><!-- /.container-fluid -->
   
    </section>
   

    <!-- /.content -->
  </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><b>Authentication</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>You Need Authenticate to Xero!</p>
            </div>
            <div class="modal-footer">
                <!-- Button to open URL in new tab -->
                <button type="button" class="btn btn-primary"
                    onclick="openXeroAuthInNewTab()">Go to Xero Auth</button>
                <button type="button" class="btn btn-primary"
                    style="background-color: #D74747; color:"
                    data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function openXeroAuthInNewTab() {
        var url = "{{ url('/v1/xero/auth') }}";
        window.open(url, '_blank');
    }

</script>

    <!-- /.content-wrapper -->
</x-admin-layout>