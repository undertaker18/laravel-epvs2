<x-admin-layout>
<style>
       .flexed {
            display: flex !important;
        }

        .end {
            justify-content: flex-end !important;
        }
</style>
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
                                    style="background-color: #FFFFFF;  border: 5px solid #D74747; border-radius: 12px; color: black;">
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

            <a  class="m-0 p-0 button-container flexed end">
                <button type="button" class="btn btn-default mr-4 mb-3" style="background-color: #D74747; color: #ffffff; width: 170px;" data-toggle="modal" data-target="#confirmModal"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;SEND TO EMAIL</button>
            </a>
                 <!-- Modal -->
                 <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmModalLabel">Confirmation</h5>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                Are you sure you want to send in email?
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a  class=" p-0 button-container ">
                                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" style="width: 100px !important">No</button>
                            </a>
                            <form method="POST" action="{{ route('receipt-post-reject') }}">
                                <div style="text-align: right;  ">
                                    @csrf
                                    <input type="hidden" name="csv_ids" id="csv_ids">
                                    <button type="submit" id="myButton" class="btn btn-success" style="background-color: green; color: #ffffff; width: 100px !important;">Yes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>


            
            <!-- data tables -->
            <section style="width:98%; margin-left:15px; margin-right: 80px; border-radius: 8px;">
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
                                    <th >ID</th>
                                    
                                    <th>Name</th>
                                    {{-- <th >Email</th> --}}
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Reference</th>
                                    <th>Date</th>
                                    {{-- <th>Receipt Type</th> --}}
                                    {{-- <th>Receipt name</th> --}}
                                    <th>Receipt Source</th>
                                    <th>Action</th> 

                                    {{-- <th>Receipt Status</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $invoice)
                                <tr>
                                    <td>
                                    <input type="checkbox" id="my-checkbox" name="my-checkbox" class="checkbox invoice_checkbox" data-id="{{$invoice->id}}">
                                    </td>
                                    <td >{{ $invoice->id }}</td>
                                    <td>{{ $invoice->fullname }}</td>
                                    {{-- <td >{{ $invoice->email }}</td> --}}
                                    <td>{{ $invoice->description }}</td>
                                    <td>{{ $invoice->amount }}</td>
                                    <td>{{ $invoice->reference }}</td>                                   
                                    <td>{{ $invoice->date }}</td> 
                                    {{-- <td>{{ $invoice->receipt_type }}</td> --}}
                                    {{-- <td>{{ $invoice->receipt_src }}</td> --}}
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
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#revertreceiptModal{{ $invoice->id }}">
                                             Move To Pending
                                        </button>

                                         <!-- Modal -->
                                         <div class="modal fade" id="revertreceiptModal{{ $invoice->id }}" tabindex="-1" role="dialog" aria-labelledby="revertreceiptModalLabel{{ $invoice->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="revertreceiptModalLabel{{ $invoice->id }}">This is the receipt of  <strong>{{ $invoice->fullname }}</strong></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to move this on pending?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="POST" action="/receipt-reject">
                                                            @csrf
                                                            <input type="hidden" name="invoiceId" value="{{ $invoice->id }}">
                                                            <input type="hidden" name="receiptStatus" value="1">
                                                            <button type="submit" id="myButton" class="btn btn-default" style="background-color: #D74747; color: #ffffff; width: 150px;">
                                                                <i class="fas fa-arrow-left"></i>
                                                                &nbsp;&nbsp;MOVE</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
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
        <script>
        $(document).ready(function () {
            let invoice_obj = {};

            $(".invoice_checkbox").change(function (e) {
                let id = this.getAttribute('data-id');
                if (this.checked == true) {
                    // add to list
                    invoice_obj[id] = id
                } else {
                    // remove from list
                    delete invoice_obj[id]
                }
                let csv = Object.keys(invoice_obj).map(function (key, index) {
                    return invoice_obj[key]
                }).join(',')

                $('#csv_ids').val(csv);
                console.log(csv);
            });

        });
            </script>
</x-admin-layout>
