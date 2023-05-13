<x-admin-layout>
    <style>
        .table tbody tr:hover{
            background: #1266B4;
            color: #EAF1F8
        }
        .btn-primary:hover  {
            background: #1266B4;
        }
        i:hover{
            color: #EAF1F8 ;
        }
        .modal-message {
        font-size: 1.5rem;
        }

    </style>
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
                        <!--upload -->
                        <div class="col-lg-7 col-8" style="text-align: right;">
                            <form action="{{ route('bdo-receipt.upload') }}" method="POST" enctype="multipart/form-data" class="form-inline">
                                @csrf
                                <div class="form-group m-3">
                                    <label for="csv_file" class="mr-3">CSV File:</label>
                                    <input type="file" name="csv_file" id="csv_file" class="form-control-file mr-3" accept=".csv">
                                    <button type="submit" class="btn btn-primary mt-3 ml-0" style="background-color:#008000; margin-left: 10px;">UPLOAD LIST OF RECEIPT</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5 col-8">
                            <!-- small box -->
                            <a href="#">
                                <div class="small-box"
                                    style="background-color: #FFFFFF;  border: 0px solid #008000; border-radius: 12px; color: black; ">
                                    @if(isset($latestUploadTimestamp))
                                        <div class="inner ml-3">
                                            <p class="mt-2">LAST UPLOAD</p>
                                            <h1 class="mb-3" style="color:#008000; font-size: 60px;"><b>{{ $latestUploadTimestamp->setTimezone('Asia/Manila')->toFormattedDateString() }}<span class="time" style="font-size: 2.2rem;">{{ $latestUploadTimestamp->setTimezone('Asia/Manila')->format('h:i A') }}</span></b></h1>
                                        </div>
                                    @endif
                                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    @if(session('success'))
                    <!-- Success modal code here -->
                    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-success">
                                
                              <h5 class="modal-title" id="successModalLabel">Success!</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body text-center">
                            <i class="fas fa-check-circle fa-5x text-success mb-3"></i>
                            <p class="modal-message ">File uploaded successfully!</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endif
                
                      <!-- Success modal 
                      <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-success">
                                
                              <h5 class="modal-title" id="successModalLabel">Success!</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body text-center">
                            <i class="fas fa-check-circle fa-5x text-success mb-3"></i>
                            <p class="modal-message ">File uploaded successfully!</p>
                            </div>
                          </div>
                        </div>
                      </div> -->
                      
                      <!-- Error modal 
                      <div class="modal fade " id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-danger">

                              <h5 class="modal-title" id="errorModalLabel">Error</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body text-center">
                                <i class="fas fa-exclamation-circle fa-5x text-danger mb-3"></i>
                                <p class="modal-message ">Invalid file type. Please upload a CSV or Excel file.</p>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <script>
                        document.getElementById('uploadButton').addEventListener('click', function() {
                          document.getElementById('fileInput').click();
                        });
                      
                        document.getElementById('fileInput').addEventListener('change', function(event) {
                          var file = event.target.files[0];
                          if (file.type === 'text/csv' || file.type === 'application/vnd.ms-excel') {
                            // Handle the file upload here
                            console.log('File uploaded:', file.name);
                            $('#successModal').modal('show');
                          } else {
                            $('#errorModal').modal('show');
                          }
                        });
                      </script> -->
                      
                      
                      
                    <!-- /.row -->
            </section>


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <!-- Title Form -->
                        <div class="row" style="">
                            <div class="col" style=" ">
                                <h2 class="" style="color: #1266B4; font-size: 2.2rem;">List of BDO Receipt</h2>
                            </div>
                            <div class="col">
                                <!-- SidebarSearch Form -->
                                <form action="#">
                                    <div class="input-group"
                                        style="width: 100%; float: right; ">
                                        <input type="search" class="form-control form-control mt-2 border-primary rounded-left"
                                            placeholder="Type your keywords here">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn  btn-primary mt-2">
                                                <i class="fa fa-search" style="color: #1266B4;"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                        
            
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
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
                                    @foreach($bdoReceipts as $bdoReceipt)
                                        <tr>
                                            <td>{{ date('m/d/Y', strtotime($bdoReceipt->posting_datetime)) }}</td>
                                            <td>{{ date('h:i:sA', strtotime($bdoReceipt->posting_datetime)) }}</td>
                                            <td>{{ $bdoReceipt->branch }}</td>
                                            <td>{{ $bdoReceipt->description }}</td>
                                            <td>{{ $bdoReceipt->credit }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--pagination -->
                        <nav aria-label="Page navigation text-center">
                            <div class="row mb-3 text-center">
                                <div class="col-md-6 text-left">
                                    <div class="dataTables_info ml-5 mt-2" id="example1_info" role="status" aria-live="polite">
                                        Showing {{ $bdoReceipts->firstItem() }} to {{ $bdoReceipts->lastItem() }} of {{ $bdoReceipts->total() }} entries
                                    </div>                                    
                                </div>
                                <div class="col-md-6 d-flex justify-content-end pr-4">
                                    {{ $bdoReceipts->links('pagination::bootstrap-4') }}
                                </div> 
                            </div>
                        </nav>
                        
                        

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
        
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
            <!-- right col -->

            <!-- /.row -->
        </div><!-- /.container-fluid -->
        </section>
</x-admin-layout>