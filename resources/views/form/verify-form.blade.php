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
        @media screen and (max-width: 761px) {

/* logo */
.img-fluid-custom-default{
width: 100%;
height: auto;
}

/* font */
.bdo-font{
font-size: 11px;
padding-top: 0px;
padding-bottom: 0px;
margin: 0 0px 0 0px;
}
.payment-font{
font-size: 12px;
}
.container {
width: 100%;    
padding: 0px;
}

.main-content {
align-items: center;
margin-left: 12px;
margin-right: 12px ;
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

.card-body{
font-size: 14px;
}


}

    </style>

    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="card-body">
        <form action="/verify-form" method="post">
            @csrf
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
                                                    <div class="form-group">

                                                        <label class="mt-3" for="paymentFor">Payment For:</label>
                                                        <select id="paymentFor" class="form-control" name="payment_for"
                                                            required>
                                                            <option value="" selected disabled>Choose...</option>
                                                            <option value="Notarial Fee">Notarial Fee</option>
                                                            <option value="Miscellaneous Fee">Miscellaneous Fee</option>
                                                            <option value="Digital System Access Fee">Digital System Access
                                                                Fee</option>
                                                            <option value="Registration">Registration</option>
                                                            <option value="Initial Payment">Initial Payment</option>
                                                            <option value="Full Payment">Full Payment</option>
                                                        </select>
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                       
                                                        <label class="mt-3" for="amount">Amount of Payment: <span
                                                                class="asterisk">*</span></label>
                                                        <input type="text" class="form-control" id="amount"
                                                            placeholder="Edit here..." name="amount" value="{{$details['ocr_result']['amount']}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mt-3" for="reference">Reference Number: <span
                                                                class="asterisk">*</span></label>
                                                        <input type="text" class="form-control" id="reference"
                                                            name="reference" value="{{$details['ocr_result']['referenceNumber']}}" placeholder="Edit here...">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mt-3" style="text-align: left;">Date of Payment:<span
                                                                class="asterisk">*</span></label>
                                                        <div class="col-sm-12">
                                                            <input type="date" class="form-control"
                                                                placeholder="Edit here..." value="{{$details['ocr_result']['date']}}" name="date">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mt-3" style="text-align: left;">Time of Payment:<span
                                                                class="asterisk">*</span></label>
                                                        <div class="col-sm-12">
                                                            <input type="time" class="form-control"
                                                                placeholder="Edit here..." value="{{$details['ocr_result']['time']}}" name="time">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
                                            <button id="nextBtn" class="btn btn-success" type="submit" name="submit" disabled>
                                                Next <i class="fas fa-arrow-right"></i>
                                            </button>
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
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- error Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog"
        aria-labelledby="errorModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if(Session::has('error'))
                    <p>{{ Session::get('error') }}</p>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
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
