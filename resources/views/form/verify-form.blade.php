<x-form-layout>
    <style>
          .image {
        
        height: auto !important; 
        margin bottom: 30px !important;  
        
        }
        .btn {
            width: 200px;
            margin-top: 15px;
            margin-bottom: 0px;
        }

        .btn-primary1 {
            background-color: green !important;
            color: white !important;
            border-radius: 5px !important;
            padding: 9px;
        }



        .btn-primary2 {
            background-color: rgb(109, 109, 109) !important;
            color: white !important;
            border-radius: 5px !important;
            padding: 9px;
        }

        .btn-primary {
            background-color: #1266b4 !important;
        }

        .row.main-content {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .main-content {
            align-items: center;
            margin-left: 19%;
            margin-right: 19%;
            color: #000000 !important;
            margin-bottom: 10%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .border-line {
            margin-left: 200px;
            margin-right: 100px;
            padding-top: 30px;

        }

        .quotation {
            font-size: 12px;
        }

        .form-label {
            text-align: left;
        }

        .card-body {
            text-align: left;
        }

        .card {
            border: none;
        }

        .form-control {
            border: none;
            background-color: #EAF1F8;
        }

        .multiselect {
            width: 100%;
        }

        .selectBox {
            position: relative;
        }

        .selectBox select {
            width: 100%;
        }

        .overSelect {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        #mySelectOptions {
            display: none;
            border: 0.5px #7c7c7c solid;
            background-color: #ffffff;
            max-height: 150px;
            overflow-y: scroll;
        }

        #mySelectOptions label {
            display: block;
            font-weight: normal;
            display: block;
            white-space: nowrap;
            min-height: 1.2em;
            background-color: #ffffff00;
            padding: 0 2.25rem 0 .75rem;
            /* padding: .375rem 2.25rem .375rem .75rem; */
        }

        #mySelectOptions label:hover {
            background-color: #1e90ff;
        }

        .align_right {
            align-content: right;
        }

        .col-md-5 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .flexed {
            display: flex;
        }

        .end {
            justify-content: flex-end;
        }

        .start {
            justify-content: flex-start;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .mt-5 {
            margin-top: 3rem;
        }



        .custom-dropdown-check-list .anchor {
            position: relative;
            cursor: pointer;
            display: inline-block;
            padding-left: 25px;
            border: 1px solid #ccc;
            width: 100%;
            /* Set width to 100% */
        }

        .custom-dropdown-check-list .anchor input[type="checkbox"] {
            position: absolute;
            opacity: 0;
        }

        .custom-dropdown-check-list .anchor input[type="checkbox"]+label {
            position: relative;
            margin-left: 0;

            font-size: 12px;
            text-align: left;
            /* Align label to the left */
        }

        .custom-dropdown-check-list .anchor input[type="checkbox"]+label:before {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 10px;
            height: 10px;
            border: 1px solid #ccc;
        }

        .custom-dropdown-check-list .anchor input[type="checkbox"]:checked+label:before {
            background-color: #007bff;
        }

        .custom-dropdown-check-list ul.items {
            padding: 2px;
            display: none;
            margin: 0;
            border: 1px solid #ccc;
            border-top: none;
        }

        .custom-dropdown-check-list ul.items li {
            list-style: none;
            padding: 2px;
            background-color: #f8f9fa;
            transition: background-color 0.2s ease;
            text-align: left;
            /* Align options to the left */
        }

        .custom-dropdown-check-list ul.items li:hover {
            background-color: #e9ecef;
        }

        .custom-dropdown-check-list.visible .anchor {
            color: #0094ff;
        }

        .custom-dropdown-check-list.visible .items {
            display: block;
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
            .col-6 {
            flex: 0 0 100%;
            max-width: 100%;
            }

            .btn2 {
                width: 50% !important;
                margin-top: 10px;
                margin-bottom: 5px;
            }

            .btn {
                width: 100%;
                margin-top: 10px;
                margin-bottom: 5px;
            }

            .button-container {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .card-body {
                font-size: 14px;
            }


        }

        .dropdown-toggle::after {
            content: none;
            /* Hide the default dropdown icon */
        }

        .dropdown-toggle::before {
            content: "";
            /* Add your custom icon code here */
            font-family: "Font Awesome";
            /* If using a custom icon font */
            display: inline-block;
            margin-left: 5px;
            /* Adjust the margin as needed */
            font-size: 14px;
            /* Adjust the font size as needed */
        }
        .align-right {
            text-align: right;
            margin: 0;
        }
        .asterisk{
            color: red;
        }
    </style>

    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="card-body">
        <form action="{{ route('update-verify-form', ['id' => $transactionId]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="tab-content">
                <div class="active tab-pane">
                    <div class=" main-content">
                        <div class="card">
                            <div class="card-header">
                                <div class="card d-flex ">
                                    <div class="card-body ">
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
                                                            <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Notarial Fee" @if ($transaction->payments_for1 == 'Notarial Fee') checked @endif>Notarial Fee</a>
                                                            <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Miscellaneous Fee" @if ($transaction->payments_for1 == 'Miscellaneous Fee') checked @endif>Miscellaneous Fee</a>
                                                            <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Digital System Access Fee" @if ($transaction->payments_for1 == 'Digital System Access Fee') checked @endif>Digital System Access Fee</a>
                                                            <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Registration Fee" @if ($transaction->payments_for1 == 'Registration Fee') checked @endif>Registration Fee</a>
                                                            <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="PTA Fee" @if ($transaction->payments_for1 == 'PTA Fee') checked @endif>PTA Fee</a>
                                                            <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Initial Payment Fee" @if ($transaction->payments_for1 == 'Initial Payment Fee') checked @endif>Initial Payment Fee</a>
                                                            <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Full Payment" @if ($transaction->payments_for1 == 'Full Payment') checked @endif>Full Payment</a>
                                                        </div>
                                                    </div>                                                        
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="mt-2" for="amount">Amount of Payment for Student 01: <span
                                                            class="asterisk">*</span></label>
                                                    <input type="number" class="form-control" id="amount1"
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
                                                    <input type="number" class="form-control" id="amount2"
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
                                                           
                                                    <input type="number" class="form-control" id="amount3"
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
                                                    <input type="number" class="form-control" id="amount1"
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
                                                           
                                                    <input type="number" class="form-control" id="amount2"
                                                        placeholder="Type Amount..." name="each_amount2"
                                                        value="{{ $transaction->each_amount2 }}">
                                                </div>
                                            </div>
        
                                            @else
        
                                                <div class="col-12">
                                                    {{-- <div class="form-group">
                                                        <label class="mt-2" for="amount">Payment For:<span class="asterisk">*</span></label>
                                                        <div class="dropdown">
                                                            <select class="form-control" multiple name="payments_for[]">
                                                                <option value="Notarial Fee" >Notarial Fee</option>
                                                                <option value="Miscellaneous Fee" >Miscellaneous Fee</option>
                                                                <option value="Digital System Access Fee">Digital System Access Fee</option>
                                                                <option value="Registration Fee">Registration Fee</option>
                                                                <option value="PTA Fee">PTA Fee</option>
                                                                <option value="Initial Payment Fee">Initial Payment Fee</option>
                                                                <option value="Full Payment">Full Payment</option>
                                                            </select>
                                                        </div>
                                                    </div> --}}
                                                    
                                                    <div class="form-group">
                                                        <label class="mt-2" for="amount">Payment For:
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
                                                                <label class="dropdown-item">
                                                                    <input type="checkbox" name="payments_for[]" value="Notarial Fee" @if ($transaction->payments_for1 == 'Notarial Fee') checked @endif>Notarial Fee</label>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Miscellaneous Fee" @if ($transaction->payments_for1 == 'Miscellaneous Fee') checked @endif>Miscellaneous Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Digital System Access Fee" @if ($transaction->payments_for1 == 'Digital System Access Fee') checked @endif>Digital System Access Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Registration Fee" @if ($transaction->payments_for1 == 'Registration Fee') checked @endif>Registration Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="PTA Fee" @if ($transaction->payments_for1 == 'PTA Fee') checked @endif>PTA Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Initial Payment Fee" @if ($transaction->payments_for1 == 'Initial Payment Fee') checked @endif>Initial Payment Fee</a>
                                                                <a class="dropdown-item"><input type="checkbox" name="payments_for[]" value="Full Payment" @if ($transaction->payments_for1 == 'Full Payment') checked @endif>Full Payment</a>
                                                            </div>
                                                        </div>      
        
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
                                                <div class="">
                                                    <div class="form-group">
                                                        {{-- i ha hide --}}
                                                        {{-- <label class="mt-2" for="amount">Amount of Payment for Student 01: <span
                                                                class="asterisk">*</span></label> --}}
                                                                @php
                                                                $inputValue = $details['ocr_result']['amount'];
                                                                @endphp 
                                                        <input type="hidden" class="form-control" id="amount1"
                                                            placeholder="Type Amount..." name="each_amount1"
                                                            value="{{ $inputValue }}" >
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
                                        </div>
                                    </div>
                                </div>
                                <br>
                                

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <img src="{{ $details['receipt'] }}" alt="Image Description" title="Image Title"
                                                style="border-radius: 10px; width: 100%;" class="image-class ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card d-flex ">
                                            <div class="card-body ">

                                                <h5 class="card-title" style="text-align: left;">Take note:</h5>
                                                <p class="card-text " style="text-align: left;">Ensure that all
                                                    information provided are accurate
                                                    and exact before proceeding to the next step.</p>
                                                <p class="card-text " style="text-align: left;">If you paid 
                                                    thru Gcash or Instapay, the LVCC BDO detect the Trace No. 
                                                    instead of reference no.. So kindly check the trace no. 
                                                    if it's scan correctly before proceeding to the next step.</p>
                                    
                                                    <div class="form-group">
                                                        <label class="mt-3" for="amount">Amount of Payment: <span
                                                                class="asterisk">*</span></label>
                                                               
                                                            
                                                        <input type="text" class="form-control" id="amountorc" placeholder="Edit here..." name="amount" value="{{ $inputValue }}" > 
                                                                <!-- JavaScript/jQuery -->

                                                                <script>
                                                                    function validateInput() {
                                                                    var amount1 = parseFloat(document.getElementById('amount1').value);
                                                                    var amount2 = parseFloat(document.getElementById('amount2').value);
                                                                    var amount3 = parseFloat(document.getElementById('amount3').value);
                                                                    var amountorc = parseFloat(document.getElementById('amountorc').value);
                                                                    
                                                                    var sum = amount1 + amount2 + amount3;
                                                                    
                                                                    if (sum !== amountorc) {
                                                                        alert('Error: The sum of amounts is not equal to input4.');
                                                                    } else {
                                                                        alert('Success: The sum of amounts is equal to input4.');
                                                                        // Perform further actions if the sum is correct
                                                                    }
                                                                    }
                                                                </script>

                                                                                {{-- 
                                                                @if ($inputValue < $eachAmount)
                                                                    <p  style="font-size: 14px; color: red;">
                                                                        Please divide the amount correctly. It should match the in your receipt. The Total Amount is <b>{{ $eachAmount }}</b>.</p>
                                                                @elseif ($inputValue > $eachAmount)
                                                                    <p  style="font-size: 14px; color: red;">
                                                                        Please divide the amount correctly. It should match the in your receipt. The Total Amount is <b>{{ $eachAmount }}</b>.</p>
                                                                @else
                                                                    
                                                                @endif --}}
                                                               
                                                                                                                                
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mt-3" for="reference">Reference Number: <span
                                                                class="asterisk">*</span></label>
                                                        <input type="text" class="form-control" id="reference"
                                                            name="reference"
                                                            value="{{$details['ocr_result']['referenceNumber']}}"
                                                            placeholder="Edit here...">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mt-3" style="text-align: left;">Date of Payment:<span
                                                                class="asterisk">*</span></label>
                                                        <div class="col-sm-12">
                                                            <input type="date" class="form-control"
                                                                placeholder="Edit here..."
                                                                value="{{$details['ocr_result']['date']}}" name="date">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mt-3" style="text-align: left;">Time of Payment:<span
                                                                class="asterisk">*</span></label>
                                                        <div class="col-sm-12">
                                                            <input type="time" class="form-control"
                                                                placeholder="Edit here..."
                                                                value="{{$details['ocr_result']['time']}}" name="time">
                                                        </div>
                                                    </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5  ">
                                        <div class="button-container flexed start">
                                            <a href="{{ route('upload-form', ['id' => $transactionId]) }}" class="btn btn-primary">
                                                <i class="fas fa-arrow-left"></i> Back
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="button-container flexed end">
                                            <button id="nextBtn" class="btn btn-success" type="submit" name="submit" disabled>
                                                Next <i class="fas fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function checkFormValidity() {
                                        var paymentsForCheckboxes = document.querySelectorAll('input[name="payments_for[]"]');
                                        var paymentsFor1Checkboxes = document.querySelectorAll('input[name="payments_for1[]"]');
                                        var paymentsFor2Checkboxes = document.querySelectorAll('input[name="payments_for2[]"]');
                                        var nextBtn = document.getElementById('nextBtn');
                                        var isValid = false;
                                
                                        paymentsForCheckboxes.forEach(function (checkbox) {
                                            if (checkbox.checked) {
                                                isValid = true;
                                            }
                                        });

                                        paymentsFor1Checkboxes.forEach(function (checkbox) {
                                            if (checkbox.checked) {
                                                isValid = true;
                                            }
                                        });
                                
                                        paymentsFor2Checkboxes.forEach(function (checkbox) {
                                            if (checkbox.checked) {
                                                isValid = true;
                                            }
                                        });
                                
                                        nextBtn.disabled = !isValid;
                                    }
                                
                                    // Call the checkFormValidity function whenever a checkbox is clicked
                                    var paymentsForCheckboxes = document.querySelectorAll('input[name="payments_for[]"]');
                                    paymentsForCheckboxes.forEach(function (checkbox) {
                                        checkbox.addEventListener('click', checkFormValidity);
                                    }); 

                                    var paymentsFor1Checkboxes = document.querySelectorAll('input[name="payments_for1[]"]');
                                    paymentsFor1Checkboxes.forEach(function (checkbox) {
                                        checkbox.addEventListener('click', checkFormValidity);
                                    });
                                
                                    var paymentsFor2Checkboxes = document.querySelectorAll('input[name="payments_for2[]"]');
                                    paymentsFor2Checkboxes.forEach(function (checkbox) {
                                        checkbox.addEventListener('click', checkFormValidity);
                                    });
                                
                                    // Trigger the checkFormValidity function initially to set the initial state of the button
                                    checkFormValidity();
                                </script>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
  
</x-form-layout>
