<x-admin-layout>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color: #EAF1F8;">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">LIST OF STAFFS</h1>
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
              <div style="text-align: right;  ">
                  <button id="myButton" class="btn btn-default mr-4 mb-3" onclick="alert('Button clicked!')" style="background-color: #D74747; color: #ffffff; width: 125px;"><i class="fas fa-user-slash"></i>&nbsp;&nbsp;DISABLE</button>
              </div>
                
              <section class="invoice" style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
                  <!-- Title Form -->
                  <div class="row" style="margin-top:20px;">
                      <div class="col" style=" margin-left: 50px; margin-top:0px;">
                          <h2 class=""></h2>
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
                                      <th>Select</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Password</th>
                                      <th>Role</th>
                                      <th>Action</th>
                                      <th></th>
                                   
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><input type="checkbox" id="my-checkbox" name="my-checkbox" class="checkbox"></td>
                                      <td>jordan earl pascua</td>
                                      <td>jordanearlpascua@student.laverdad.edu.ph</td>
                                      <td>**************&nbsp;&nbsp;&nbsp;<i class="fas fa-eye" style=" color: #1266B4"></i></td>
                                      <td>Admin</td>
                                      <td style=" color: #1266B4"> <i class="fas fa-edit"></i>Edit</td>
                                      <td style=" color: #D74747"> <i class="fas fa-user-slash"></i>Disable</td>
                                     
                                  </tr>
      
                                  <tr>
                                      <td><input type="checkbox" id="my-checkbox" name="my-checkbox" class="checkbox"></td>
                                      <td>jordan earl pascua</td>
                                      <td>jordanearlpascua@student.laverdad.edu.ph</td>
                                      <td>**************&nbsp;&nbsp;&nbsp;<i class="fas fa-eye" style=" color: #1266B4"></i></td>
                                      <td>Admin</td>
                                      <td style=" color: #1266B4"> <i class="fas fa-edit"></i>Edit</td>
                                      <td style=" color: #D74747"> <i class="fas fa-user-slash"></i>Disable</td>
                                     
                                  </tr>
      
                                  <tr>
                                      <td><input type="checkbox" id="my-checkbox" name="my-checkbox" class="checkbox"></td>
                                      <td>jordan earl pascua</td>
                                      <td>jordanearlpascua@student.laverdad.edu.ph</td>
                                      <td>**************&nbsp;&nbsp;&nbsp;<i class="fas fa-eye" style=" color: #1266B4"></i></td>
                                      <td>Admin</td>
                                      <td style=" color: #1266B4"> <i class="fas fa-edit"></i>Edit</td>
                                      <td style=" color: #D74747"> <i class="fas fa-user-slash"></i>Disable</td>
                                     
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