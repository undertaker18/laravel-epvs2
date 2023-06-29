<x-admin-layout>
   

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="background-color: #EAF1F8;">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">ENROLLMENT RECEIPT</h1>
                      
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                @if (session('status'))
                                    <div class="text-success mr-5">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </li>
                            
                                <form action="{{ route('receipts.updateStatus') }}" method="POST">
                                    @csrf
                                    
                                    <button type="submit" class="btn btn-default mr-4 mb-3" style="background-color: #1266B4; color: #ffffff; width: 220px;">
                                        Update Receipt Validation
                                    </button>
                                </form> 
                           
                                                       
                        {{-- <button type="button" class="btn btn-default mr-4 mb-3"
                                style="background-color: #1266B4; color: #ffffff;  width: 175px; " data-toggle="modal"
                                data-target="#myModal">AUTHENTICATE</button> --}}
                      
                       
                      </ol>
                      </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-4">
                        <!-- small box -->
                        <a href="{{ url('/receipt-valid') }}">
                            <div class="small-box"
                                style="background-color: #FFFFFF;  border: 0px solid #008000; border-radius: 12px; color: black;">
                                <div class="inner ml-3 ">
                                    <p class="mt-2">VALID RECEIPTS</p>
                                    <h1 style="color:#008000; font-size: 60px;"><b>{{ $totalCountvalid }}</b></h1>
                                </div>

                                <div class="icon">
                                    <i class="ion ion-card mr-3 mt-3" style="color:#008000;"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-4">
                        <!-- small box -->
                        <a href="{{ url('/receipt-pending') }}">
                            <div class="small-box"
                                style="background-color: #FFFFFF;  border: 5px solid #D78C47; border-radius: 12px; color: black;">
                                <div class="inner ml-3 ">
                                    <p class="mt-2">PENDING RECEIPTS</p>
                                    <h1 style="color:#D78C47; font-size: 60px;"><b>{{ $totalCountPending }}</b></h1>
                                </div>

                                <div class="icon">
                                    <i class="ion ion-card mr-3 mt-3" style="color:#D78C47;"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-4">
                        <!-- small box -->
                        <a href="{{ url('/receipt-reject') }}">
                            <div class="small-box"
                                style="background-color: #FFFFFF;  border: 0px solid #D74747; border-radius: 12px; color: black;">
                                <div class="inner ml-3 ">
                                    <p class="mt-2">REJECT RECEIPTS</p>
                                    <h1 style="color:#D74747; font-size: 60px;"><b>{{ $totalCountreject }}</b></h1>
                                </div>

                                <div class="icon">
                                    <i class="ion ion-card mr-3 mt-3" style="color:#D74747;"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-4">
                        <!-- small box -->
                        <a href="{{ url('/receipt-archive') }}">
                            <div class="small-box"
                                style="background-color: #FFFFFF;  border: 0px solid black; border-radius: 12px; color: black;">
                                <div class="inner ml-3 ">
                                    <p class="mt-2">ARCHIVE RECEIPTS</p>
                                    <h1 style="color: black; font-size: 60px;"><b>{{ $totalCountarchive }}</b></h1>
                                </div>

                                <div class="icon">
                                    <i class="ion ion-card mr-3 mt-3" style="color:black;"></i>
                                </div>
                                <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                            </div>
                        </a>
                    </div>


                </div>
                <!-- /.row -->
        </section>
        <!-- right col -->
     

         <!-- data tables -->
                <section style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
                    <!-- Title Form -->
                    <div class="card" style="background-color: ; ">
                        <div class="card-body"  style="color: #000000; ">
                            <table id="example1" class="table table-bordered  table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Reference</th>
                                        <th>Date</th>
                                        {{-- <th>Receipt Type</th> --}}
                                        <th>Receipt Source</th>

                                        {{-- <th>Receipt Status</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoices as $invoice)
                                    <tr>
                                        <td>{{ $invoice->fullname }}</td>
                                        <td>{{ $invoice->email }}</td>
                                        <td>{{ $invoice->description }}</td>
                                        <td>{{ $invoice->amount }}</td>
                                        <td>{{ $invoice->reference }}</td>                                   
                                        <td>{{ $invoice->date }}</td> 
                                        {{-- <td>{{ $invoice->receipt_type }}</td> --}}
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
                                                                <h5 class="modal-title" id="receiptModalLabel{{ $invoice->id }}">{{ $invoice->receipt_type }}</h5>
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
                                        

                                        {{-- <td style="color: orange;">
                                            @if ($invoice->receiptStatus === '1')
                                                Pending
                                            @elseif ($invoice->receiptStatus === '2')
                                                Valid
                                            @elseif ($invoice->receiptStatus === '3')
                                                Reject
                                            @else
                                                Unknown
                                            @endif
                                        </td> --}}
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                
                </section>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
</x-admin-layout>