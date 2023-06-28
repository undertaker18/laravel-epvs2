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
          @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif

          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-8">
              <!-- small box -->
              <div class="small-box" style="background-color: #FFFFFF;">
                <div class="inner ml-3 ">
                  <p class="mt-3" >VALID RECEIPTS</p>
                  <h1 style="color:#008000; font-size: 50px;">{{ $totalCountvalid }}</h1>

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
                  <h1 style="color:#EC7100; font-size: 50px;" >{{ $totalCountPending }}</h1>

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
                  <h1 style="color:#FF0000; font-size: 50px;">{{ $totalCountreject }}</h1>

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
                  <p class="mt-3" >ARCHIVE RECEIPTS</p>
                  <h1 style="color:gray; font-size: 50px;">{{ $totalCountarchive }}</h1>

                </div>
                <div class="icon" style="color: gray;">
                  <i class="ion ion-card mr-2 mt-2"></i>
                </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" style="background-color: #FFFFFF;">
                <div class="inner ml-3 ">
                  <p class="mt-3">SENT TO XERO</p>
                  <h1 style="color:#1266B4; font-size: 50px;" >{{  $totalCountsent }}</h1>

                </div>
                <div class="icon" style="color: #1266B4;">
                  <i class="ion ion-card mr-2 mt-2"></i>
                </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>

            <div class="col-lg-3 col-8">
              <!-- small box -->
              <div class="small-box" style="background-color: #FFFFFF;">
                <div class="inner ml-3 ">
                  <p class="mt-3" >SEND TO XERO</p>
                  <h1 style="color:#1266B4; font-size: 50px;">{{ $totalCountsend }}</h1>

                </div>
                <div class="icon" style="color:#1266B4; ">
                  <i class="ion ion-card mr-2 mt-2"></i>
                </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>
            

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" style="background-color: #FFFFFF;">
                <div class="inner ml-3 ">
                  <p class="mt-3">SYNCED CONTACTS TO XERO</p>
                  <h1 style="color:#1266B4; font-size: 50px;">{{ $totalCountsync }}</h1>

                </div>
                <div class="icon" style="color: #1266B4;">
                  <i class="fas fa-sync-alt mr-2 mt-2"></i>
                </div>
                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box" style="background-color: #FFFFFF;">
                <div class="inner ml-3 ">
                  <p class="mt-3" >TOTAL RECEIPTS</p>
                  <h1 style="color:#000000; font-size: 50px;">{{ $totalCount }}</h1>

                </div>
                <div class="icon" style="color: #000000;">
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
                    {{-- <thead>
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
                        
                    </tbody> --}}

                    <thead>
                      <tr>
                          <th>Invoice ID</th>
                         
                          <th>Description</th>
                          <th>Amount</th>
                          <th>Reference</th>
                          <th>Email</th>
                          <th>Receipt Type</th>
                          <th>Receipt Source</th>
                          <th>Receipt Status</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($invoices as $invoice)
                      <tr>
                          <td>{{ $invoice->id }}</td>

                          <td>{{ $invoice->description }}</td>
                          <td>{{ $invoice->amount }}</td>
                          <td>{{ $invoice->reference }}</td>                                   
                          <td>{{ $invoice->email }}</td>
                          <td>{{ $invoice->receipt_type }}</td>
                          <td>
                              @if ($invoice->receipt_src)
                                  <button type="button" class="btn btn-link" data-toggle="modal" data-target="#receiptModal{{ $invoice->id }}">
                                      <i class="fas fa-eye"></i> View Image
                                  </button>
                                  
                                  <!-- Modal -->
                                  <div class="modal fade" id="receiptModal{{ $invoice->id }}" tabindex="-1" role="dialog" aria-labelledby="receiptModalLabel{{ $invoice->id }}" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="receiptModalLabel{{ $invoice->id }}">Receipt Image</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </button>
                                              </div>
                                              <div class="modal-body">
                                                  <img src="{{ $invoice->receipt_src }}" alt="Receipt Image" style="width: 100%;">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              @else
                                  No Image Available
                              @endif
                          </td>
                          

                          <td style="color: 
                          @if ($invoice->receiptStatus === '1')
                              orange
                          @elseif ($invoice->receiptStatus === '2')
                              green
                          @elseif ($invoice->receiptStatus === '3')
                              red
                          @else
                              black
                          @endif
                      ">
                          @if ($invoice->receiptStatus === '1')
                              Pending
                          @elseif ($invoice->receiptStatus === '2')
                              Valid
                          @elseif ($invoice->receiptStatus === '3')
                              Reject
                          @elseif ($invoice->receiptStatus === '4')
                              Archive
                          @else
                              Unknown
                          @endif
                      </td>
                          
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
                <p>You Need to Authenticate with Xero!</p>
            </div>
            <div class="modal-footer">
                <!-- Button to trigger Xero authentication -->
                <button type="button" class="btn btn-primary" onclick="authenticateWithXero()">Go to Xero Auth</button>
                <button type="button" class="btn btn-primary" style="background-color: #D74747; color:" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
  </div>

  <script>
    function authenticateWithXero() {
        window.location.href = "{{ url('/v1/xero/auth') }}";
    }
  </script>


<script>
  $(function () {
    // Get the dynamic data from the controller
    var monthLabels = {!! json_encode($monthLabels) !!};
    var validReceipts = {!! json_encode($validReceipts) !!};
    var pendingReceipts = {!! json_encode($pendingReceipts) !!};
    var rejectReceipts = {!! json_encode($rejectReceipts) !!};

    /* Chart.js Charts */
    // Sales chart
    var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d');

    var salesChartData = {
      labels: monthLabels,
      datasets: [
        {
          label: 'VALID RECEIPTS',
          backgroundColor: "#008000",
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: false,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data: validReceipts
        },
        {
          label: 'PENDING RECEIPTS',
          backgroundColor:"#EC7100",
          borderColor: 'rgba(210, 214, 222, 1)',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: pendingReceipts
        },
       
        {
          label: 'REJECT RECEIPTS',
          backgroundColor: "#FF0000",
          borderColor: 'rgba(210, 214, 222, 1)',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: rejectReceipts
        }
      ]
    };
    
  var salesChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart(salesChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'bar',
    data: salesChartData,
    options: salesChartOptions
  });


  // all dapartment
  const data = {
    labels: ['Elementary', 'Junior High', 'Senior High', 'College'],
    datasets: [{
      label: 'ALL',
      data: @json($data),
      backgroundColor: [
        '#8B96B4',
        '#1266B4',
        '#B7E4FD',
        '#879BAE'
       
      ],
      hoverOffset: 10
    }]
  }

  const config = {
    type: 'pie',
    data: data,
    options: {
      plugins: {
        legend: {
          display: true,
          position: 'bottom',
          color: 'black',
        },
        tooltip: {
          enabled: true
        }
      }
    }
  };

  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );


  
})

</script>

    <!-- /.content-wrapper -->
</x-admin-layout>