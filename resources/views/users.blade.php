<x-admin-layout>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #EAF1F8;">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">USERS
                    </h1>
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
              <!-- data tables -->
             
                
              <section class="invoice" style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
                  <!-- Title Form -->
                  <div class="row" style="margin-top:20px;">
                      <div class="col" style=" margin-left: 50px; margin-top:0px;">
                          <h2 class="">List of Staffs</h2>
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
                              style="width:100%; margin-left: 0px; margin-right: 0px; padding-left: 50px;">
                              <thead>
                                  <tr style="color: #1266B4;">
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Role</th>
                                      <th>Activity</th>
                                      <th>Action</th>
                                      <th></th>
                                   
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>jordan earl pascua</td>
                                      <td>jordanearlpascua@student.laverdad.edu.ph</td>
                                      <td>Admin</td>
                                      <td style="margin: 0px ;border-radius: 30px; width: 170px ; border-color: #EC7100; background-color: #EC7100; color: white;">update bdo receipts</td>
                                      <td > <a  href="#"  style=" color: #1266B4"><i class="fas fa-edit"></i>Edit </a> <a href="#"  style=" color: #D74747"><i class="fas fa-user-slash"></i>Disable</a> </td>
                                  </tr>
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
</x-admin-layout>