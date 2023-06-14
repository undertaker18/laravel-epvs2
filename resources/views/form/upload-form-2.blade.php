<x-form-layout>
    <style>
        .btn {
            width: 200px;
        }

        .btn2 {
            width: 80px !important;

        }

        .row.main-content {
            display: flex;
            align-items: center;

        }

        .button-set-left {
            margin-left: 220px;

        }

        .button-set-right {

            margin-right: 220px;
        }

        /* Hide the default file input button */
        .file-input {
            display: none;
        }

        /* Style the custom file input button */
        .custom-file-input {
            display: inline-block;
            padding: 8px 12px;
            background-color: #1266b4;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Remove the hover effect */
        .custom-file-input:hover {
            background-color: #1266b4;
            /* Set the same background color as the default state */
            /* Add any other styles as desired */
        }

        /* Optional: Style the label to display the selected file name */
        .file-name {
            margin-top: 8px;
            font-style: italic;
        }


        .drag-area {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 2px solid #080808;
            /* height: 500px;
            width: 700px; */
            border-radius: 10px;
            margin-left: auto;
            margin-right: auto;

            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .drag-area2 {
            /* height: 500px;
            width: 700px; */
            
            width: 96%;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .drag-area1 {
            /* height: 500px;
            width: 700px; */
            margin-left: auto;
            margin-right: auto;

            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .drag-area .icon {
            font-size: 100px;
            color: #1266b4;
            margin-top: 0px !important;
        }

        .drag-area header {
            font-size: 30px;
            font-weight: 500;
            color: #1266b4;
        }

        .drag-area p {
            font-size: 20px;
            font-weight: 500;
            color: #080808;
        }

        .drag-area span {
            font-size: 20px;
            font-weight: 500;
            color: #080808;
            margin: 10px 0 15px 0;
        }

        

        .drag-area img {
            height: 100%;
            width: 100%;
            object-fit: contain;
            border-radius: 5px;
        }


        .col-md-5 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .flexed {
            display: flex;
        }

        .end {
            justify-content: flex-end !important;
            margin-right: 0px;
        }

        .start {
            justify-content: flex-start !important;
            margin-left: 0px;

        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .mt-5 {
            margin-top: 3rem;
        }


        @media screen and (max-width: 761px) {

            /* logo */
            .img-fluid-custom-default {
                width: 100%;
                height: auto;
            }

            /* font */
            .bdo-font {
                font-size: 11px;
                padding-top: 0px;
                padding-bottom: 0px;
                margin: 0 0px 0 0px;
            }

            .payment-font {
                font-size: 12px;
            }

            .container {
                width: 100%;
                padding: 0px;
            }

            .main-content {
                align-items: center;
                margin-left: 12px;
                margin-right: 12px;
                color: #000000 !important;

            }

            .privacy-content1 {
                padding: 2px;
                font-weight: normal;
                font-size: 14px;
                text-align: left;

                color: #000000;

            }

            .btn {
                width: 100%;
                margin-top: 10px;
                margin-bottom: 20px;
            }

            .end {
                justify-content: center;
                margin-right: 0px;
            }

            .start {
                justify-content: center;
                margin-left: 0px;

            }



            .h4 {
                font-size: 15px;
            }

            .drag-area {
                width: 95%;
                height: auto !important;
            }

            .drag-area1 {
                width: 95%;
            }

            .drag-area header {
                font-size: 20px;
                font-weight: 500;
                color: #1266b4;
            }

            .drag-area img {
                height: auto;
                width: 100%;
                object-fit: fill;
                border-radius: 5px;
            }

            .img {
                width: 100%;
            }
            .col-6 {
            flex: 0 0 100%;
            max-width: 100%;
            
            }
            .btn-align {
            flex: 0 0 50% !important;
            max-width: 50% !important;
            }
            .flexed {
            display: flex;
        }

        }

        .card-tools {
            text-align: right !important;
        }

        .align {
            text-align: right !important;
        }

        .align2 {
            text-align: left !important;
            margin-bottom: 5px;
        }
        .height {
            height: 100% !important;
        }
         .asterisk {
            color: red;
         }
         label{
            color: #000000;
         }
        
    </style>
    <div class="card-body">
        <div class="tab-content ">
            <div class="active tab-pane ">
                <div class=" main-content ">
                    <div class=" height">
                        <div class="row  ">
                            <header class="h4"><b>Take Note:</b> Make sure your receipt is readable!</header>
                                <div class="drag-area1 mx-auto col-md-7 col-sm-12">
                                    <div class="card-tools ">
                                       
                                    </div>
                                </div>



                                <form action="{{ route('update-upload-form', ['id' => $transactionId]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                        <div class="drag-area1 mx-auto col-md-7 col-sm-12">
                                            <div class="row ">
                                                @foreach ($transactions as $transaction)
                    
                                                @if ($transaction->fullname3 != null)
                                                
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="mt-2" for="amount">Payment For Student 01:
                                                        <span class="asterisk">*</span></label>
                                                        <div class="dropdown">
                                                            <a class="form-control dropdown-toggle text-wrap" href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                @if ($transaction->payments_for1)
                                                                    {{ $transaction->payments_for1 }} 
                                                                @else
                                                                    Select...
                                                                @endif 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Notarial Fee">
                                                                    Notarial
                                                                    Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]"
                                                                        value="Miscellaneous Fee">
                                                                    Miscellaneous Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]"
                                                                        value="Digital System Access Fee"> Digital System
                                                                    Access Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]"
                                                                        value="Registration Fee">
                                                                    Registration Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="PTA Fee">
                                                                    PTA Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]"
                                                                        value="Initial Payment Fee">
                                                                    Initial Payment Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Full Payment">
                                                                    Full
                                                                    Payment</a>
                                                            </div>
                                                             
                                                        </div>   
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="mt-2" for="amount">Amount of Payment for Student 01: <span
                                                                class="asterisk">*</span></label>
                                                        <input type="number" class="form-control" id="amount"
                                                            placeholder="Type Amount..." name="each_amount1"
                                                            value="{{ $transaction->each_amount1 }}">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="mt-2 mb-1" for="amount">Payment For Student 02:
                                                        <span class="asterisk">*</span></label>
                                                            
                                                        <div class="dropdown">
                                                            <a class="form-control dropdown-toggle text-wrap" href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                @if ($transaction->payments_for2)
                                                                {{ $transaction->payments_for2 }} 
                                                                @else
                                                                    Select...
                                                                @endif 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for1[]" value="Notarial Fee">
                                                                    Notarial
                                                                    Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for1[]"
                                                                        value="Miscellaneous Fee">
                                                                    Miscellaneous Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for1[]"
                                                                        value="Digital System Access Fee"> Digital System
                                                                    Access Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for1[]"
                                                                        value="Registration Fee">
                                                                    Registration Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for1[]" value="PTA Fee">
                                                                    PTA Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for1[]"
                                                                        value="Initial Payment Fee">
                                                                    Initial Payment Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for1[]" value="Full Payment">
                                                                    Full
                                                                    Payment</a>
                                                            </div>
                                                            
                                                        </div>   
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="mt-2" for="amount">Amount of Payment for Student 02: <span
                                                                class="asterisk">*</span></label>
                                                        <input type="number" class="form-control" id="amount"
                                                            placeholder="Type Amount..." name="each_amount2"
                                                            value="{{ $transaction->each_amount2 }}">
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="mt-2 mb-1" for="amount">Payment For Student 03:
                                                        <span class="asterisk">*</span></label>
                                                            
                                                        <div class="dropdown">
                                                            <a class="form-control dropdown-toggle text-wrap" href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                @if ($transaction->payments_for3)
                                                                {{ $transaction->payments_for3 }} 
                                                                @else
                                                                    Select...
                                                                @endif 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for2[]" value="Notarial Fee">
                                                                    Notarial
                                                                    Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for2[]"
                                                                        value="Miscellaneous Fee">
                                                                    Miscellaneous Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for2[]"
                                                                        value="Digital System Access Fee"> Digital System
                                                                    Access Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for2[]"
                                                                        value="Registration Fee">
                                                                    Registration Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for2[]" value="PTA Fee">
                                                                    PTA Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for2[]"
                                                                        value="Initial Payment Fee">
                                                                    Initial Payment Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for2[]" value="Full Payment">
                                                                    Full
                                                                    Payment</a>
                                                            </div>
                                                           
                                                        </div>   
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="mt-2" for="amount">Amount of Payment for Student 03: <span
                                                                class="asterisk">*</span></label>
                                                               
                                                        <input type="number" class="form-control" id="amount"
                                                            placeholder="Type Amount..." name="each_amount3"
                                                            value="{{ $transaction->each_amount3 }}">
                                                    </div>
                                                </div>

                                                @elseif ($transaction->fullname2 != null)

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="mt-2" for="amount">Payment For Student 01:
                                                        <span class="asterisk">*</span></label>
                                                        <div class="dropdown">
                                                            <a class="form-control dropdown-toggle text-wrap" href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                @if ($transaction->payments_for1)
                                                                {{ $transaction->payments_for1 }} 
                                                                @else
                                                                    Select...
                                                                @endif 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Notarial Fee">
                                                                    Notarial
                                                                    Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]"
                                                                        value="Miscellaneous Fee">
                                                                    Miscellaneous Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]"
                                                                        value="Digital System Access Fee"> Digital System
                                                                    Access Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]"
                                                                        value="Registration Fee">
                                                                    Registration Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="PTA Fee">
                                                                    PTA Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]"
                                                                        value="Initial Payment Fee">
                                                                    Initial Payment Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Full Payment">
                                                                    Full
                                                                    Payment</a>
                                                            </div>
                                                           
                                                        </div>   
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="mt-2" for="amount">Amount of Payment for Student 01: <span
                                                                class="asterisk">*</span></label>
                                                        <input type="number" class="form-control" id="amount"
                                                            placeholder="Type Amount..." name="each_amount1"
                                                            value="{{ $transaction->each_amount1 }}">
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="mt-2 mb-1" for="amount">Payment For Student 02:
                                                        <span class="asterisk">*</span></label>
                                                            
                                                        <div class="dropdown">
                                                            <a class="form-control dropdown-toggle text-wrap" href="#" role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                @if ($transaction->payments_for2)
                                                                {{ $transaction->payments_for2 }} 
                                                                @else
                                                                    Select...
                                                                @endif 
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for1[]" value="Notarial Fee">
                                                                    Notarial
                                                                    Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for1[]"
                                                                        value="Miscellaneous Fee">
                                                                    Miscellaneous Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for1[]"
                                                                        value="Digital System Access Fee"> Digital System
                                                                    Access Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for1[]"
                                                                        value="Registration Fee">
                                                                    Registration Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for1[]" value="PTA Fee">
                                                                    PTA Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for1[]"
                                                                        value="Initial Payment Fee">
                                                                    Initial Payment Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for1[]" value="Full Payment">
                                                                    Full
                                                                    Payment</a>
                                                            </div>
                                                            
                                                        </div>   
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="mt-2" for="amount">Amount of Payment for Student 02: <span
                                                                class="asterisk">*</span></label>
                                                               
                                                        <input type="number" class="form-control" id="amount"
                                                            placeholder="Type Amount..." name="each_amount2"
                                                            value="{{ $transaction->each_amount2 }}">
                                                    </div>
                                                </div>

                                                @else

                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label class="mt-2" for="amount">Payment For Student 01:
                                                            <span class="asterisk">*</span></label>
                                                            <div class="dropdown">
                                                                <a class="form-control dropdown-toggle text-wrap" href="#" role="button" id="dropdownMenuLink"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    @if ($transaction->payments_for1)
                                                                    {{ $transaction->payments_for1 }}
                                                                    @else
                                                                        Select...
                                                                    @endif 
                                                                </a>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                    <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Notarial Fee">
                                                                        Notarial
                                                                        Fee</a>
                                                                    <a class="dropdown-item"><input type="checkbox" name="payments_for[]"
                                                                            value="Miscellaneous Fee">
                                                                        Miscellaneous Fee</a>
                                                                    <a class="dropdown-item"><input type="checkbox" name="payments_for[]"
                                                                            value="Digital System Access Fee"> Digital System
                                                                        Access Fee</a>
                                                                    <a class="dropdown-item"><input type="checkbox" name="payments_for[]"
                                                                            value="Registration Fee">
                                                                        Registration Fee</a>
                                                                    <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="PTA Fee">
                                                                        PTA Fee</a>
                                                                    <a class="dropdown-item"><input type="checkbox" name="payments_for[]"
                                                                            value="Initial Payment Fee">
                                                                        Initial Payment Fee</a>
                                                                    <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Full Payment">
                                                                        Full
                                                                        Payment</a>

                                                                        <script>
                                                                            // Collect selected checkboxes into a single name
                                                                            $(document).ready(function() {
                                                                            $('.dropdown-item input[type="checkbox"]').on('change', function() {
                                                                                var selectedValues = $('.dropdown-item input[type="checkbox"]:checked').map(function() {
                                                                                return this.value;
                                                                                }).get();
                                                                                $('input[name="payments_for1"]').val(selectedValues.join(', '));
                                                                            });
                                                                            });
                                                                        </script>
                                                                </div>
                                                               
                                                            </div>   
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label class="mt-2" for="amount">Amount of Payment for Student 01: <span
                                                                    class="asterisk">*</span></label>
                                                            <input type="number" class="form-control" id="amount"
                                                                placeholder="Type Amount..." name="each_amount1"
                                                                value="{{ $transaction->each_amount1 }}">
                                                        </div>
                                                    </div>
                                                @endif

                                                @endforeach

                                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
                                                </script>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
                                                </script>
                                                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
                                                </script>

                                                
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label class="mt-2" for="amount">Upload Receipt:
                                                                <span class="asterisk">*</span></label>
                                                                <input class="form-control" name="receipt" type="file" id="receipt">                                                    
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label class="mt-2" for="amount">Receipt Type:
                                                                <span class="asterisk">*</span></label>
                                                            <select id="" name="receipt_type" class="form-select" style="" required>
    
                                                                <option value="instapay" {{ $transaction->receipt_type == 'instapay' ? 'selected' : '' }}>Instapay</option>
                                                                <option value="gcash" {{ $transaction->receipt_type == 'gcash' ? 'selected' : '' }}>Gcash</option>
                                                                <option value="gcash_instapay" {{ $transaction->receipt_type == 'gcash_instapay' ? 'selected' : '' }}>Gcash Powered by Instapay</option>
                                                                <option value="bdo_mobile_banking" {{ $transaction->receipt_type == 'bdo_mobile_banking' ? 'selected' : '' }}>BDO Mobile Banking</option>
                                                                <option value="bdo_cash_transaction_slip" {{ $transaction->receipt_type == 'bdo_cash_transaction_slip' ? 'selected' : '' }}>BDO Cash Transaction Slip</option>

                                                                <option value="Gcash Email" disabled>Gcash thru Laptop/Pc Email</option>
                                                                <option value="MetroBank" disabled>MetroBank</option>
                                                                <option value="UnionBank" disabled>UnionBank</option>
                                                                <option value="Pesonet Gateway" disabled>Pesonet Gateway</option>
                                                                <option value="PNB Debit" disabled>PNB Debit</option>
                                                                <option value="Others" disabled>Others</option>

                                                            </select>
                                                            <div id="receiptTypeValidationMessage" class="invalid-feedback"></div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="drag-area1 mx-auto col-md-7 col-sm-12">
                                            <div class="">
                                                @if($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>
                                        </div> 
                                        <div class="drag-area mx-auto col-md-7 col-sm-12">
                                           
                                            @if ($transaction->receipt_filename)
                                                <img src="{{ asset('assets/receipts/temp/' . $transaction->receipt_filename) }}" alt="{{ $transaction->receipt_filename }}">
                                                
                                            @else
                                            <div class="row ">
                                                <div class="col-12">
                                                    @if(session('error'))
                                                    <div class="alert alert-danger">
                                                        {{ session('error') }}
                                                    </div>
                                                    @endif
                                                    <div class="icon my-auto"><i class="fas fa-cloud-upload-alt"></i></div>
                                                    <header>Proof of Payment</header>
                                                    <p>Image Type: .jpg .jpeg .png</p>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                        <script>
                                            var receiptTypeSelect = document.querySelector('select[name="receipt_type"]');
                                            var receiptTypeValidationMessage = document.getElementById('receiptTypeValidationMessage');

                                            receiptTypeSelect.addEventListener('change', function () {
                                                if (receiptTypeSelect.value !== '') {
                                                    receiptTypeSelect.classList.remove('is-invalid');
                                                    receiptTypeValidationMessage.textContent = '';
                                                } else {
                                                    receiptTypeSelect.classList.add('is-invalid');
                                                    receiptTypeValidationMessage.textContent = 'Please select a receipt type.';
                                                }
                                                enableDisableButton();
                                            });

                                            receiptTypeSelect.addEventListener('focus', function () {
                                                receiptTypeSelect.classList.remove('is-invalid');
                                                receiptTypeValidationMessage.textContent = '';
                                            });

                                        </script>
                                        <div class="drag-area1 mx-auto col-md-7 col-sm-12">
                                            <div class="row">
                                                <div class="col-6 btn-align">
                                                    <div class="button-container flexed start">
                                                        <a href="{{ route('show-profile-form', ['id' => $transactionId]) }}" class="btn  btn-primary">
                                                            <i class="fas fa-arrow-left"></i> Back
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6 btn-align">
                                                    <div class="button-container flexed end">
                                                        <button id="nextBtn" class="btn  btn-success" type="submit" name="submit" disabled>
                                                            Next <i class="fas fa-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function checkFormValidity() {
            var inputs = document.querySelectorAll('input[required], select[required]');
            var nextBtn = document.getElementById('nextBtn');
            var isValid = true;

            inputs.forEach(function (input) {
                if (!input.value) {
                    isValid = false;
                }
            });

            nextBtn.disabled = !isValid;
        }

        // Call the checkFormValidity function whenever an input value changes
        var formInputs = document.querySelectorAll('input[required], select[required]');
        formInputs.forEach(function (input) {
            input.addEventListener('input', checkFormValidity);
        });

    </script>
    </div>
    <script>
        // Update the selected file name on change
        function handleFileChange(event) {
            const fileName = event.target.files[0].name;
            document.getElementById('file-name').textContent = fileName;
        }

    </script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script>
        //selecting all required elements
        const dropArea = document.querySelector(".drag-area"),
            dragText = dropArea.querySelector("header"),
            button = dropArea.querySelector("button"),
            input = document.querySelector("#receipt");
        let file; //this is a global variable and we'll use it inside multiple functions

        input.addEventListener("change", function () {
            //getting user select file and [0] this means if user select multiple files then we'll select only the first one
            file = this.files[0];
            // dropArea.classList.add("active");
            showFile(); //calling function
        });

        function showFile() {
            console.log('showFile');
            let fileType = file.type; //getting selected file type
            let validExtensions = ["image/jpeg", "image/jpg",
                "image/png"
            ]; //adding some valid image extensions in array
            if (validExtensions.includes(fileType)) { //if user selected file is an image file
                let fileReader = new FileReader(); //creating new FileReader object
                fileReader.onload = () => {
                    let fileURL = fileReader.result; //passing user file source in fileURL variable
                    let imgTag =
                        `<img src="${fileURL}" alt="" style="width: 100%">`; //creating an img tag and passing user selected file source inside src attribute
                    dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
                }
                fileReader.readAsDataURL(file);
            } else {
                alert("This is not an Image File!");
                dropArea.classList.remove("active");
                dragText.textContent = "Drag & Drop to Upload File";
            }
        }

    </script>



</x-form-layout>
