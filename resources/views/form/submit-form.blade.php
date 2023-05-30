<x-form-layout>
    <style>
        .main-content {
            align-items: center;
            margin-left: 19%;
            margin-right: 19%;
            color: #000000 !important;
            margin-bottom: 10%;

        }

        .right-button {
            float: right;
            width: 250px;
            height: 50px;
            padding: 8px;
            margin-left: 8px;
            background-color: #1266b4;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 20px;
        }

        .tab-content {
            border: none !important;
        }

        .card {
            border: none !important;
            border-radius: none !important;
            box-shadow: none !important;
        }

    </style>
    <div class="card-body">
        <div class="tab-content">

            <div class="active tab-pane" id="profile">
                <div class=" main-content">
                    <div class="card">
                        <div class="form-content">
                            <br>
                            <div class="icon"><i class="fas fa-check icon" style="color: green;"></i></div>
                            <h2>THANK YOU!</h2>
                            <p>
                                The form was submitted successfully.
                                <br>
                                Please wait for the confirmation to your email.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-start">
                                <div class="">

                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end mb-3 mt-5 ">
                                <div style="padding-right: 20px;">
                                    <a href="{{ '/' }}">
                                        <button class="right-button">Back to HomePage</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card-body">
        <div class="tab-content">

            <div class="active tab-pane" id="profile">
                <div class=" main-content">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="card-title align-left">Student Information</h3>
                                </div>

                                <div class="col-md-6">
                                    <div class="card-tools align-right">

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card align_right">
                                        <img src="{{ $details['receipt'] }}" alt="Image Description" title="Image Title"
                                            style="border-radius: 10px; width: 50%;" class="image-class align_right">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <form action="/verify-form" method="post">
                                        @csrf
                                        <div class="card align-left">
                                            <div class="card-body">

                                                <h5 class="card-title">Take note:</h5>
                                                <p class="card-text">Ensure that all information provided are accurate
                                                    and exact before proceeding to the next step.</p>
                                                <div class="form-group">

                                                    <label for="paymentFor">Payment For:</label>
                                                    <select id="paymentFor" class="form-control" name="payment_for"
                                                        required>
                                                        <option>Kindly check your payment for...</option>
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
                                                    <label for="amount">Amount of Payment: <span
                                                            class="asterisk">*</span></label>
                                                    <input type="text" class="form-control" id="amount"
                                                        placeholder="Edit here..." name="amount"
                                                        value="{{$details['ocr_result']['amount']}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="reference">Reference Number: <span
                                                            class="asterisk">*</span></label>
                                                    <input type="text" class="form-control" id="reference"
                                                        name="reference"
                                                        value="{{$details['ocr_result']['referenceNumber']}}"
                                                        placeholder="Edit here...">
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-12">Date & Time of Payment <span
                                                            class="quotation">(BASED ON YOUR RECEIPT)</span> <span
                                                            class="asterisk">*</span></label>
                                                    <div class="col-sm-6">
                                                        <input type="date" class="form-control"
                                                            placeholder="Edit here..."
                                                            value="{{$details['ocr_result']['date']}}" name="date">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="time" class="form-control"
                                                            placeholder="Edit here..."
                                                            value="{{$details['ocr_result']['time']}}" name="time">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{ url('/upload-form') }}" class="btn btn-primary"><i
                                                class="fas fa-arrow-left"></i> BACK</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <button class="btn btn-primary" type="submit" value="submit">NEXT <i
                                                class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                                </form>

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



                            </div>

                        </div>
                    </div>

</x-form-layout>
