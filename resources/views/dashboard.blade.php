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
                    <h1 style="color:#FF0000; font-size: 50px;">20</h1>
  
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
        <section class="invoice" style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
          <!-- Title Form -->
          <div class="row" style="margin-top:20px;">
            <div class="col-2" style=" margin-left: 50px; margin-top:0px; color: #1266B4;">
              <h2 class="">ALL RECEIPTS</h2>
            </div>
            <div class="col-6">
              <!-- SidebarSearch Form -->
              <form action="">
                <div class="row">
                  <div class="col-md-10 offset-md-1">
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label>Sort Order:</label>
                          <select class="select2 form-control" style="width: 100%;">
                            <option selected>ASC</option>
                            <option>DESC</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label>Order By:</label>
                          <select class="select2 form-control" style="width: 100%;">
                            <option selected>Title</option>
                            <option>Date</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-lg">
                        <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here" value="Lorem ipsum">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-lg btn-default">
                            <i class="fa fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              
            </div>
          </div>
          <!-- Table row -->
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped" id="example" style="width:100%; margin-left: 0px; margin-right: 0px; ">
                <thead>
                  <tr style="color: #1266B4;">
                    <th>Reference No.</th>
                    <th>Amount</th>
                    <th>Payment For</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Receipt Image</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>09486095gvi486</td>
                    <td>150.00</td>
                    <td>Notarial Fee</td>
                    <td>06/25/2023</td>
                    <td>Pending</td>
                    <td><a href="{{ url('/receipt-image') }}" style="color: #1266B4;">View</a></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr style="color: #1266B4;">
                    <th>Reference No.</th>
                    <th>Amount</th>
                    <th>Payment For</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Receipt Image</th>
                  </tr>
                </tfoot>
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
        <!-- /.row -->
      </div><!-- /.container-fluid -->
     
      </section>
     
  
      <!-- /.content -->
    </div>
  
      <!-- /.content-wrapper -->
</x-admin-layout>
