<x-form-layout>
    <style>
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
    </style>

    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="card-body">
        <div class="tab-content">
            <div class="active tab-pane">
                <div class=" main-content">
                    <div class="card">
                        <div class="card-header">
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
                                    
                                            <form action="{{ route('post-verify-form', $formEpv->id) }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="mt-3" for="amount">Amount of Payment: <span
                                                            class="asterisk">*</span></label>
                                                            @php
                                                            $inputValue = $details['ocr_result']['amount'];
                                                            @endphp
                                                        
                                                    <input type="text" class="form-control" id="amount" placeholder="Edit here..." name="amount" value="{{ $inputValue }}" >

                                                           
                                                            @if ($inputValue < $amountSum)
                                                                <p  style="font-size: 14px; color: red;">The Amount value is less than the Total Amount value.</p>
                                                            @elseif ($inputValue > $amountSum)
                                                                <p  style="font-size: 14px; color: red;">The Amount value is greater than the Total Amount value.</p>
                                                            @else
                                                                <p  style="font-size: 14px; color: green;">The Amount value is equal to the Total Amount value.</p>
                                                            @endif
                                                            
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
                                        <a href="{{ url('/upload-form') }}" class="btn btn-primary">
                                            <i class="fas fa-arrow-left"></i> Back
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="button-container flexed end">
                                        <button id="nextBtn" class="btn btn-success" type="submit" name="submit">
                                            Next <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <script>
                                function checkFormValidity() {
                                    var inputs = document.querySelectorAll('name[payment_for[]], select[required]');
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
                                var formInputs = document.querySelectorAll('name[payment_for[]], select[required]');
                                formInputs.forEach(function (input) {
                                    input.addEventListener('input', checkFormValidity);
                                });

                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- error Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if(Session::has('error'))
                    <p>{{ Session::get('error') }}</p>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @if(Session::has('error'))
    <script>
        $(document).ready(function () {
            $('#errorModal').modal('show');
        });

    </script>
    @endif
</x-form-layout>
