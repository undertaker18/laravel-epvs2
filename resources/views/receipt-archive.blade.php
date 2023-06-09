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
                                    style="background-color: #FFFFFF;  border: 0px solid #D78C47; border-radius: 12px; color: black;">
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
                                    style="background-color: #FFFFFF;  border: 5px solid black; border-radius: 12px; color: black;">
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
            <form method="POST" action="{{ route('receipt-archive-delete') }}">
                 
                <div style="text-align: right;">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="delete_ids" id="delete_ids">
                    <button type="submit" id="" class="btn btn-default mr-4 mb-3 delete-button" style="background-color: #D74747; color: #ffffff; width: 170px;">
                        <i class="fas fa-trash-alt"></i>&nbsp;&nbsp;&nbsp;Delete
                    </button>
                </div>
            </form>
            
            
            <!-- data tables -->
 
            <section style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
                @if(session('successMessage'))
                <div class="alert alert-success">
                    {{ session('successMessage') }}
                </div>
                @endif
                
                @if(session('errorMessage'))
                    <div class="alert alert-danger">
                        {{ session('errorMessage') }}
                    </div>
                @endif
                <!-- Title Form -->
                <div class="card" style="background-color: ; ">
                    <div class="card-body"  style="color: #000000; ">
                        <table id="example1" class="table table-bordered  table-hover">
                            {{-- <thead>
                                <tr style="color: #000000;">
                                    <th>Select</th>
                                    <th>FullName</th>
                                    <th>Xero Account Id</th>
                                    <th>Payment For</th>
                                    <th>Amount</th>
                                    <th>Reference</th>
                                    <th>Created At</th>
                                    <th>Created By</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($xeroInvoice as $value)
                                <tr>
                                    <td><input type="checkbox" id="my-checkbox" name="my-checkbox"
                                            class="checkbox invoice_checkbox" data-id="{{$value->id}}"></td>
                                    <td>{{$value->xero_account_name}}</td>
                                    <td>{{$value->xero_account_id}}</td>
                                    <td>{{$value->description}}</td>
                                    <td>{{$value->amount}}</td>
                                    <td>{{$value->reference}}</td>
                                    <td>{{ \Carbon\Carbon::parse($value->created_at)->format('M d, Y h:i A')}}</td>
                                    <td>{{ \Carbon\Carbon::parse($value->updated_at)->format('M d, Y h:i A')}}</td>
                                </tr>
    
                                @endforeach
    
                            </tbody> --}}
                            
                            
                            <thead>
                                <tr> 
                                    <th>Select</th>
                                    <th hidden>Invoice ID</th>
                                    <th>Full Name</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Reference</th>
                                   
                                    <th>Receipt Type</th>
                                    <th>Status</th>
                                    <th>Receipt Source</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($archiveInvoices as $invoice)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="invoice_checkbox" class="checkbox invoice_checkbox" data-id="{{$invoice->id}}">

                                        </td>
                                        <td hidden>{{ $invoice->id }}</td>
                                        <td>{{ $invoice->fullname }}</td>
                                        <td>{{ $invoice->description }}</td>
                                        <td>{{ $invoice->amount }}</td>
                                        <td>{{ $invoice->reference }}</td>                                   
                                       
                                        <td>{{ $invoice->receipt_type }}</td>
                                        <td>
                                            @if ($invoice->receiptStatus == 4)
                                                <p class="text-success">Already Sent</p>
                                            @else
                                                {{ $invoice->receiptStatus }}
                                            @endif
                                        </td>
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
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>

            

            <!-- /.row -->
        </div><!-- /.container-fluid -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function () {
                let invoice_obj = {};
        
                $(".invoice_checkbox").change(function (e) {
                    let id = this.getAttribute('data-id');
                    if (this.checked == true) {
                        // add to list
                        invoice_obj[id] = id;
                    } else {
                        // remove from list
                        delete invoice_obj[id];
                    }
                    let csv = Object.keys(invoice_obj).map(function (key, index) {
                        return invoice_obj[key];
                    }).join(',');
        
                    $('#delete_ids').val(csv);
                    console.log(csv);
                });
        
                $("#myButton").click(function (e) {
                    e.preventDefault(); // Prevent default form submission
        
                    let delete_ids = $('#delete_ids').val();
                    if (delete_ids !== '') {
                        $.ajax({
                            url: "{{ route('receipt-archive-delete') }}", // Replace with your delete route URL
                            type: 'DELETE',
                            data: {
                                delete_ids: delete_ids
                            },
                            success: function (response) {
                                // Handle success response
                                console.log(response);
                                // Perform any additional actions as needed
                            },
                            error: function (xhr, status, error) {
                                // Handle error response
                                console.log(xhr.responseText);
                                // Perform any additional error handling as needed
                            }
                        });
                    }
                });
            });
        </script>
        

        
</x-admin-layout>
