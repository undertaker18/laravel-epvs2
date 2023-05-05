<x-admin-layout>
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
                        <div class="col-lg-4 col-8">
                            <!-- small box -->
                            <a href="./receipt-valid.html">
                                <div class="small-box"
                                    style="background-color: #FFFFFF;  border: 0px solid #008000; border-radius: 12px; color: black;">
                                    <div class="inner ml-3 ">
                                        <p class="mt-2">LAST UPLOAD</p>
                                        <h1 style="color:#008000; font-size: 60px;"><b>JUNE 12,2023</b></h1>
                                    </div>

                                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-8"  style="text-align: right;  ">
                            <!-- small box -->
                            <button id="myButton" class="btn btn-default mr-4 mb-3" onclick="alert('Button clicked!')"
                            style="background-color: #008000; color: #ffffff; width: 250px;"><i class="fas fa-upload"></i>&nbsp;&nbsp;&nbsp;UPLOAD LIST OF RECEIPT</button>
                        </div>
                    </div>
                    <!-- /.row -->
            </section>

           

            <!-- data tables -->
            <section class="invoice" style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
                <!-- Title Form -->
                <div class="row" style="margin-top:20px;">
                    <div class="col" style=" margin-left: 50px; margin-top:0px;">
                        <h2 class="" style="color: #1266B4;">List of BDO Receipt</h2>
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
                                    <th>Posting Date</th>
                                    <th>Posting Time</th>
                                    <th>Branch</th>
                                    <th>Description</th>
                                    <th>Credit</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>08/05/2022</td>
                                    <td>12:40:33PM</td>
                                    <td>BDO</td>
                                    <td>8005594168308</td>
                                    <td>150.00</td>
                                    
                                </tr>

                                <tr>
                                    <td>08/05/2022</td>
                                    <td>12:40:33PM</td>
                                    <td>BDO</td>
                                    <td>8005594168308</td>
                                    <td>150.00</td>
                                </tr>

                                <tr>
                                    <td>08/05/2022</td>
                                    <td>12:40:33PM</td>
                                    <td>BDO</td>
                                    <td>8005594168308</td>
                                    <td>150.00</td>
                                </tr>

                                <tr>
                                    <td>08/05/2022</td>
                                    <td>12:40:33PM</td>
                                    <td>BDO</td>
                                    <td>8005594168308</td>
                                    <td>150.00</td>
                                </tr>

                                <tr>
                                    <td>08/05/2022</td>
                                    <td>12:40:33PM</td>
                                    <td>BDO</td>
                                    <td>8005594168308</td>
                                    <td>150.00</td>
                                </tr>

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
</x-admin-layout>