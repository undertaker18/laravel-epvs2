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
         <!-- data tables -->
        <section style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
          
            <!-- Title Form -->
            <div class="card" style="background-color: ; ">
                <div class="card-body"  style="color: #000000; ">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Key</th>
                                <th>Value</th>
                                <th>Exists</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sessions as $key => $value)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>
                                        @if(is_array($value))
                                            <ul>
                                                @foreach($value as $item)
                                                    <li>
                                                        @if(is_string($item))
                                                            {{ htmlspecialchars($item) }}
                                                        @else
                                                            {{ var_dump($item) }}
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else
                                            @if(is_string($value))
                                                {{ htmlspecialchars($value) }}
                                            @else
                                                {{ var_dump($value) }}
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        @if(session()->has($key))
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </td>
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