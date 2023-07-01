<x-admin-layout>
       <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper" style="background-color: #EAF1F8;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">ACTIVITY LOG</h1>
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
         <!-- data tables -->
        <section style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
          
            <!-- Title Form -->
            <div class="card" style="background-color: ; ">
                <div class="card-body"  style="color: #000000; ">
                    <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Log Name</th>
                                    <th>Log Description</th>
                                   
                                    <th>Log Date & Time</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($logs as $log)
                                <tr>
                                    <td>{{ $log->id }}</td>
                                    <td>{{ $log->log_name }}</td>
                                    <td>{{ $log->description }}</td>
                                  
                                    <td>{{ $log->created_at }}</td>
                                   
                                </tr>
                                @endforeach
                            </tbody>               
                    </table>
                    {{-- <table id="example1" class="table table-bordered  table-hover">
                        <thead>
                            <tr style="color: #000000;">
                                <tr>
                                    <th>Log Entry</th>
                                </tr>
                                {{-- <th>ID</th>
                                <th>DATE& TIME</th>
                                <th>LOG TYPE</th>
                                <th>DONE BY</th> --}}
                            {{-- </tr>
                        </thead>
                        <tbody>
                            @foreach($logs as $log)
                                <tr>
                                    <td>{{ $log }}</td>
                                </tr>
                            @endforeach --}}
                            {{-- <tr style="color: #000000;">
                                <td>3</td>
                                <td>2022-11-19:49:15 - 5 seconds ago</td>
                                <td><button style="border-radius: 8px; border-color: #EC7100; background-color: #EC7100; color: white;">Logout</button>&nbsp;&nbsp;&nbsp;user logout </td>
                                <td>jordanearlpascua@laverdad.edu.ph</td>
                            </tr>   --}}  
                        {{-- </tbody>
                    </table> --}} 
                </div>
            </div>
        
        </section>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
</x-admin-layout>