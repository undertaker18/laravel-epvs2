
<x-form-layout>
    <style>
        .row.main-content {
    display: flex;
    justify-content: center;
    align-items: center;

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
    
    </style>

    <div class="row">
        <form action="/verify-form" method="post">
        @csrf
            <div class="col-sm-7">
                <div class="card">
                    <img src="{{ $details['receipt'] }}" alt="Image Description" title="Image Title" style="border-radius: 10px; width: 50%;" class="image-class mx-auto">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Take note:</h5>
                        <p class="card-text">Ensure that all information provided are accurate and exact before proceeding to the next step.</p>
                        <div class="form-group">
                            <input type="text" value="{{ $firstPrivacyKey['privacy_key'] }}" name="payment_key" hidden>
                            <label for="paymentFor">Payment For:</label>
                            <select id="paymentFor" class="form-control" name="payment_for">
                                <option>Kindly check your payment for...</option>
                                <option value="dropdownValue"></option>
                            </select>
                            <div class="checkbox-group">
                                <label><input type="checkbox" onchange="checkboxStatusChange()" value="Notarial Fee"> Notarial Fee</label>
                                <label><input type="checkbox" onchange="checkboxStatusChange()" value="Miscellaneous Fee"> Miscellaneous Fee</label>
                                <label><input type="checkbox" onchange="checkboxStatusChange()" value="Digital System Access Fee"> Digital System Access Fee</label>
                                <label><input type="checkbox" onchange="checkboxStatusChange()" value="Registration"> Registration</label>
                                <label><input type="checkbox" onchange="checkboxStatusChange()" value="Initial Payment"> Initial Payment</label>
                                <label><input type="checkbox" onchange="checkboxStatusChange()" value="Full Payment"> Full Payment</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount of Payment: <span class="asterisk">*</span></label>
                            <input type="text" class="form-control" id="amount" placeholder="Edit here..." name="amount" value="{{$details['ocr_result']['amount']}}">
                        </div>
                        <div class="form-group">
                            <label for="reference">Reference Number: <span class="asterisk">*</span></label>
                            <input type="text" class="form-control" id="reference" name="reference" value="{{$details['ocr_result']['referenceNumber']}}" placeholder="Edit here...">
                        </div>
                        <div class="row">
                            <label class="col-sm-12">Date & Time of Payment <span class="quotation">(BASED ON YOUR RECEIPT)</span> <span class="asterisk">*</span></label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" placeholder="Edit here..." value="{{$details['ocr_result']['date']}}" name="date">
                            </div>
                            <div class="col-sm-6">
                                <input type="time" class="form-control" placeholder="Edit here..." value="{{$details['ocr_result']['time']}}" name="time">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ url('/upload-form') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> BACK</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-primary" type="submit" value="submit">NEXT <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>


</x-form-layout>
