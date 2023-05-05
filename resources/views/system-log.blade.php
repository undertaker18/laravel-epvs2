<x-admin-layout>
       <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper" style="background-color: #EAF1F8;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">SYSTEM LOG</h1>
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
                    
                </div>
                <!-- /.row -->
        </section>

        <!-- data tables -->
        <section class="invoice" style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
            <!-- Title Form -->
            <div class="row" style="margin-top:20px;">
                <div class="col" style=" margin-left: 50px; margin-top:0px;">
                    <h2 class=""style="color: #1266B4;">List of System Log</h2>
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
                                <th>ID</th>
                                <th>DATE& TIME</th>
                                <th>LOG TYPE</th>
                                <th>DONE BY</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>2022-11-19:49:15 - 5 seconds ago</td>
                                <td><button style="border-radius: 8px; border-color: #EC7100; background-color: #EC7100; color: white;">Logout</button>&nbsp;&nbsp;&nbsp;user logout </td>
                                <td>jordanearlpascua@laverdad.edu.ph</td>
                                
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>2022-11-19:49:15 - 5 seconds ago</td>
                                <td><button style="border-radius: 8px; border-color: #F7BE57; background-color: #F7BE57; color: white;">Edit</button>&nbsp;&nbsp;&nbsp;user logout </td>
                                <td>jordanearlpascua@laverdad.edu.ph</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>2022-11-19:49:15 - 5 seconds ago</td>
                                <td><button style="border-radius: 8px; border-color: #EC7100; background-color: #EC7100; color: white;">Logout</button>&nbsp;&nbsp;&nbsp;user logout </td>
                                <td>jordanearlpascua@laverdad.edu.ph</td>
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