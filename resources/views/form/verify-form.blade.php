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
                width: 95%;
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
            .col-4 {
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
        .error {
        border: 1px solid red;
        background-color: #ffe6e6;
        }
    </style>

    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                                            @php
                                            $inputValue = $details['ocr_result']['amount'];
                                            @endphp 

                                            @foreach ($transactions as $transaction)
        
                                            @if ($transaction->fullname3 != null)
                                            
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="mt-2" for="amount">Amount of Payment for Student 01: <span
                                                            class="asterisk">*</span></label>
                                                    <input type="number" class="form-control" id="amount1"
                                                        placeholder="Type Amount..." name="each_amount1"
                                                        value="{{ $transaction->each_amount1 }}">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="mt-2">Payment For Student 01:<span class="asterisk">*</span></label>
                                                        <div>
                                                           <div class="row">
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Notarial Fee"> 1. Notarial Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Miscellaneous Fee"> 2. Miscellaneous Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Digital System Access Fee"> 3. Digital System Access Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Registration Fee"> 4. Registration Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="PTA Fee"> 5. PTA Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Initial Payment Fee"> 6. Initial Payment Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Full Payment"> 7. Full Payment
                                                                    </label>
                                                                </div>
                                                           </div>
                                                        </div>  
                                                </div>
                                            </div>
                                            <div class="col-6 mt-2">
                                                <div class="form-group">
                                                    <label class="mt-2" for="amount">Amount of Payment for Student 02: <span
                                                            class="asterisk">*</span></label>
                                                           
                                                    <input type="number" class="form-control" id="amount2"
                                                        placeholder="Type Amount..." name="each_amount2"
                                                        value="{{ $transaction->each_amount2 }}">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="form-group">
                                                    <label class="mt-2">Payment For Student 02:<span class="asterisk">*</span></label>
                                                        <div>
                                                           <div class="row">
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for1[]" value="Notarial Fee"> 1. Notarial Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for1[]" value="Miscellaneous Fee"> 2. Miscellaneous Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for1[]" value="Digital System Access Fee"> 3. Digital System Access Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for1[]" value="Registration Fee"> 4. Registration Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for1[]" value="PTA Fee"> 5. PTA Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for1[]" value="Initial Payment Fee"> 6. Initial Payment Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for1[]" value="Full Payment"> 7. Full Payment
                                                                    </label>
                                                                </div>
                                                           </div>
                                                        </div>  
                                                   
                                                </div>  
                                            </div>

                                            <div class="col-6 mt-2">
                                                <div class="form-group">
                                                    <label class="mt-2" for="amount">Amount of Payment for Student 03: <span
                                                            class="asterisk">*</span></label>
                                                           
                                                    <input type="number" class="form-control" id="amount2"
                                                        placeholder="Type Amount..." name="each_amount3"
                                                        value="{{ $transaction->each_amount3 }}">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="form-group">
                                                    <label class="mt-2">Payment For Student 03:<span class="asterisk">*</span></label>
                                                        <div>
                                                           <div class="row">
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for2[]" value="Notarial Fee"> 1. Notarial Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for2[]" value="Miscellaneous Fee"> 2. Miscellaneous Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for2[]" value="Digital System Access Fee"> 3. Digital System Access Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for2[]" value="Registration Fee"> 4. Registration Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for2[]" value="PTA Fee"> 5. PTA Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for2[]" value="Initial Payment Fee"> 6. Initial Payment Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for2[]" value="Full Payment"> 7. Full Payment
                                                                    </label>
                                                                </div>
                                                           </div>
                                                        </div>  
                                                   
                                                </div>  
                                            </div>
                                            <br><br><!-- Add a target element in your HTML -->
                                            {{-- <p id="totalAmount"></p> --}}
                                            <p style="font-weight: bold; margin-top: 20px;">Total Amount of 3 Student: <span id="totalAmount"></span></p>
                                            <p style="font-weight: bold">Receipt Amount: {{ $inputValue }}</p>

                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                            <script>
                                              $(document).ready(function() {
                                                // Function to check if any checkbox is selected
                                                function isAnyCheckboxSelected(checkboxes) {
                                                    for (var i = 0; i < checkboxes.length; i++) {
                                                    if (checkboxes[i].checked) {
                                                        return true;
                                                    }
                                                    }
                                                    return false;
                                                }
            
                                                // Function to validate the form
                                                function validateForm() {
                                                    // Get the checkbox groups
                                                    var checkboxes1 = $("input[name='payments_for[]']");
                                                    var checkboxes2 = $("input[name='payments_for1[]']");
                                                    var checkboxes3 = $("input[name='payments_for2[]']");

                                                    var amount1 = $("input[name='each_amount1']").val();
                                                    var amount2 = $("input[name='each_amount2']").val();
                                                    var amount3 = $("input[name='each_amount3']").val();

                                                    // Check if at least one checkbox is selected in each group
                                                    var isCheckboxGroup1Valid = isAnyCheckboxSelected(checkboxes1);
                                                    var isCheckboxGroup2Valid = isAnyCheckboxSelected(checkboxes2);
                                                    var isCheckboxGroup3Valid = isAnyCheckboxSelected(checkboxes3);

                                                    // Convert the input values to numbers
                                                    amount1 = parseFloat(amount1);
                                                    amount2 = parseFloat(amount2);
                                                    amount3 = parseFloat(amount3);

                                                    // Check if amount inputs have values
                                                    var isAmount1Valid = !isNaN(amount1) && amount1 !== "";
                                                    var isAmount2Valid = !isNaN(amount2) && amount2 !== "";
                                                    var isAmount3Valid = !isNaN(amount3) && amount3 !== "";

                                                    // Require all input amounts to have a value
                                                    var areAllAmountsValid = isAmount1Valid && isAmount2Valid && isAmount3Valid && isCheckboxGroup1Valid && isCheckboxGroup2Valid && isCheckboxGroup3Valid;

                                                    // Enable/disable the submit button based on form validation
                                                    $("#nextBtn").prop("disabled", !areAllAmountsValid);
            
                                                    // Return the validation status
                                                    return isValid;
                                                }

                                                var inputValue = parseInt("{{ $inputValue }}");

                                                function calculateTotalAmount() {
                                                // Get the values from the input fields
                                                var amount1 = parseInt($("input[name='each_amount1']").val());
                                                var amount2 = parseInt($("input[name='each_amount2']").val());
                                                var amount3 = parseInt($("input[name='each_amount3']").val());
                                                var totalAmount = amount1 + amount2 + amount3;

                                                // Update the total amount in the #totalAmount span element
                                                $("#totalAmount").text(totalAmount);

                                                // Check if the total amount matches the input value
                                                if (totalAmount !== inputValue) {
                                                $("#nextBtn").prop("disabled", true);
                                                } else {
                                                $("#nextBtn").prop("disabled", false);
                                                }
                                                // Display the total amount in the target element
                                                $("#totalAmount").text(totalAmount);
                                                }

                                                // Call calculateTotalAmount() on input field blur event (when leaving the input fields)
                                                $("input[name='each_amount1'], input[name='each_amount2'], input[name='each_amount3']").on("blur", calculateTotalAmount);
            
                                                // Call the validateForm function on checkbox change
                                                $("input[type='checkbox']").on("change", function() {
                                                    validateForm();
                                                });
            
                                                // Call the validateForm function on amount input change
                                                $("input[type='number']").on("input", function() {
                                                    validateForm();
                                                });
                                                });
            
                                            </script>
                                            
                                            
        
                                            @elseif ($transaction->fullname2 != null)

                                          

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="mt-2" for="amount">Amount of Payment for Student 01: <span
                                                            class="asterisk">*</span></label>
                                                    <input type="number" class="form-control" id="amount1"
                                                        placeholder="Type Amount..." name="each_amount1"
                                                        value="{{ $transaction->each_amount1 }}">

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="mt-2">Payment For Student 01:<span class="asterisk">*</span></label>
                                                        <div>
                                                           <div class="row">
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Notarial Fee"> 1. Notarial Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Miscellaneous Fee"> 2. Miscellaneous Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Digital System Access Fee"> 3. Digital System Access Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Registration Fee"> 4. Registration Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="PTA Fee"> 5. PTA Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Initial Payment Fee"> 6. Initial Payment Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Full Payment"> 7. Full Payment
                                                                    </label>
                                                                </div>
                                                           </div>
                                                        </div>  
                                                </div>
                                            </div>
                                            <div class="col-6 mt-2">
                                                <div class="form-group">
                                                    <label class="mt-2" for="amount">Amount of Payment for Student 02: <span
                                                            class="asterisk">*</span></label>
                                                           
                                                    <input type="number" class="form-control" id="amount2"
                                                        placeholder="Type Amount..." name="each_amount2"
                                                        value="{{ $transaction->each_amount2 }}">
                                                  

                                                </div>
                                            </div>

                                            <div class="col-12 mt-2">
                                                <div class="form-group">
                                                    <label class="mt-2">Payment For Student 02:<span class="asterisk">*</span></label>
                                                        <div>
                                                           <div class="row">
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for1[]" value="Notarial Fee"> 1. Notarial Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for1[]" value="Miscellaneous Fee"> 2. Miscellaneous Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for1[]" value="Digital System Access Fee"> 3. Digital System Access Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for1[]" value="Registration Fee"> 4. Registration Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for1[]" value="PTA Fee"> 5. PTA Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for1[]" value="Initial Payment Fee"> 6. Initial Payment Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for1[]" value="Full Payment"> 7. Full Payment
                                                                    </label>
                                                                </div>
                                                           </div>
                                                        </div>  
                                                   
                                                </div>  
                                            </div>
                                            <br><br><!-- Add a target element in your HTML -->
                                            {{-- <p id="totalAmount"></p> --}}
                                            <p style="font-weight: bold; margin-top: 20px;">Total Amount of 2 Student: <span id="totalAmount"></span></p>
                                            <p style="font-weight: bold">Receipt Amount: {{ $inputValue }}</p>

                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                            <script>
                                              $(document).ready(function() {
                                                // Function to check if any checkbox is selected
                                                function isAnyCheckboxSelected(checkboxes) {
                                                    for (var i = 0; i < checkboxes.length; i++) {
                                                    if (checkboxes[i].checked) {
                                                        return true;
                                                    }
                                                    }
                                                    return false;
                                                }
            
                                                // Function to validate the form
                                                function validateForm() {
                                                    // Get the checkbox groups
                                                    var checkboxes1 = $("input[name='payments_for[]']");
                                                    var checkboxes2 = $("input[name='payments_for1[]']");
                                                 
                                                    var amount1 = $("input[name='each_amount1']").val();
                                                    var amount2 = $("input[name='each_amount2']").val();

                                                    // Check if at least one checkbox is selected in each group
                                                    var isCheckboxGroup1Valid = isAnyCheckboxSelected(checkboxes1);
                                                    var isCheckboxGroup2Valid = isAnyCheckboxSelected(checkboxes2);
                                                    

                                                    // Convert the input values to numbers
                                                    amount1 = parseFloat(amount1);
                                                    amount2 = parseFloat(amount2);
                                                  
                                                    // Check if amount inputs have values
                                                    var isAmount1Valid = !isNaN(amount1) && amount1 !== "";
                                                    var isAmount2Valid = !isNaN(amount2) && amount2 !== "";

                                                    // Require all input amounts to have a value
                                                    var areAllAmountsValid = isAmount1Valid && isAmount2Valid && isCheckboxGroup1Valid && isCheckboxGroup2Valid;

                                                    // Enable/disable the submit button based on form validation
                                                    $("#nextBtn").prop("disabled", !areAllAmountsValid);
            
                                                    // Return the validation status
                                                    return isValid;
                                                }
                                                
                                                var inputValue = parseInt("{{ $inputValue }}");

                                                function calculateTotalAmount() {
                                                // Get the values from the input fields
                                                var amount1 = parseInt($("input[name='each_amount1']").val());
                                                var amount2 = parseInt($("input[name='each_amount2']").val());
                                                var totalAmount = amount1 + amount2 ;

                                                // Update the total amount in the #totalAmount span element
                                                $("#totalAmount").text(totalAmount);

                                                // Check if the total amount matches the input value
                                                if (totalAmount !== inputValue) {
                                                $("#nextBtn").prop("disabled", true);
                                                } else {
                                                $("#nextBtn").prop("disabled", false);
                                                }
                                                // Display the total amount in the target element
                                                $("#totalAmount").text(totalAmount);
                                                }

                                                // Call calculateTotalAmount() on input field blur event (when leaving the input fields)
                                                $("input[name='each_amount1'], input[name='each_amount2']").on("blur", calculateTotalAmount);
            
                                                // Call the validateForm function on checkbox change
                                                $("input[type='checkbox']").on("change", function() {
                                                    validateForm();
                                                });
            
                                                // Call the validateForm function on amount input change
                                                $("input[type='number']").on("input", function() {
                                                    validateForm();
                                                });
                                                });
            
                                            </script>
        
                                            @else
        
                                                <div class="col-12">
                                                    <div class="form-group">

                                                        <label class="mt-2">Payment For:<span class="asterisk">*</span></label>
                                                        <div>
                                                           <div class="row">
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Notarial Fee"> 1. Notarial Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Miscellaneous Fee"> 2. Miscellaneous Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Digital System Access Fee"> 3. Digital System Access Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Registration Fee"> 4. Registration Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="PTA Fee"> 5. PTA Fee
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Initial Payment Fee"> 6. Initial Payment Fee
                                                                    </label>
                                                                </div>
                                                                <div class="col-4"> 
                                                                    <label>
                                                                        <input type="checkbox" name="payments_for[]" value="Full Payment"> 7. Full Payment
                                                                    </label>
                                                                </div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" id="amount1"
                                                            placeholder="Type Amount..." name="each_amount1"
                                                            value="{{ $inputValue }}" >
                                                    </div>
                                                </div>
                                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                                <script>
                                                  $(document).ready(function() {
                                                    // Function to check if any checkbox is selected
                                                    function isAnyCheckboxSelected(checkboxes) {
                                                        for (var i = 0; i < checkboxes.length; i++) {
                                                        if (checkboxes[i].checked) {
                                                            return true;
                                                        }
                                                        }
                                                        return false;
                                                    }
                
                                                    // Function to validate the form
                                                    function validateForm() {
                                                        // Get the checkbox groups
                                                        var checkboxes1 = $("input[name='payments_for[]']");
  
                                                        var amount1 = $("input[name='each_amount1']").val();

                                                        // Check if at least one checkbox is selected in each group
                                                        var isCheckboxGroup1Valid = isAnyCheckboxSelected(checkboxes1);
                                                    
                                                        // Convert the input values to numbers
                                                        amount1 = parseFloat(amount1);

                                                        // Check if amount inputs have values
                                                        var isAmount1Valid = !isNaN(amount1) && amount1 !== "";
                                                   
                                                        // Require all input amounts to have a value
                                                        var areAllAmountsValid = isAmount1Valid && isCheckboxGroup1Valid;
    
                                                        // Calculate the sum of all amounts
                                                        var totalAmount = amount1;
    
                                                        // Enable/disable the submit button based on form validation
                                                        $("#nextBtn").prop("disabled", !areAllAmountsValid);
                
                                                        // Return the validation status
                                                        return isValid;
                                                    }
                
                                                    // Call the validateForm function on checkbox change
                                                    $("input[type='checkbox']").on("change", function() {
                                                        validateForm();
                                                    });
                
                                                    // Call the validateForm function on amount input change
                                                    $("input[type='number']").on("input", function() {
                                                        validateForm();
                                                    });
                                                    });
                
                                                </script>
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
                                                <p class="card-text " style="text-align: justify;">Ensure that all provided information is accurate 
                                                    and exact before proceeding to the next step.</p>
                                                <p class="card-text " style="text-align: justify;">
                                                 If you paid through <strong>Gcash</strong>, the LVCC BDO will detect the <strong>Trace No.</strong>. 
                                                 instead of the reference number. Therefore, kindly check the trace number on the receipts to ensure 
                                                 that it is displayed correctly in the reference number text box before proceeding to the next step.
                                                </p>
                                                    <div class="form-group">
                                                        <label class="mt-3" for="amount">Amount of Payment: <span
                                                                class="asterisk">*</span></label>                           
                                                        <input type="text" class="form-control" id="amountorc" placeholder="Edit here..." name="amount" value="{{ $inputValue }}">
                                                        
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
                                            <button id="nextBtn" class="btn btn-success" type="submit" name="submit" data-toggle="modal" data-target="#loadingModal" disabled>
                                                Next <i class="fas fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>  
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="loadingModalLabel">Loading...</h5>
            </div>
            <div class="modal-body">
              <div class="text-center">
                <i class="fas fa-spinner fa-spin fa-3x"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
  
</x-form-layout>
