
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

        <div class="row main-content ">

            <form action="/verify-form" method="post">
                @csrf
                <div class="row border-line">
                    <div class="col-sm-7">
                        <div class="card">
                        <img src="{{ $details['receipt'] }}" alt="Image Description"
                                title="Image Title" style=" border-radius: 10px; width:50%" class="image-class mx-auto">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Take note: </h5>
                                <p class="card-text">Ensure that all information provided are
                                    accurate and exact before proceeding to the next step.</p>
                                <div class="mb-3">
                                    <input type="text" value="{{ $LoggedUserUploadForm['uploadform_key'] }}" name="payment_key" hidden>

                                    <div class="container-fluid">
                                        <div class="form-group col-sm-12">
                                          <label for="myMultiselect">Payment For:</label>
                                            <div id="myMultiselect" class="multiselect">
                                                <div id="mySelectLabel" class="selectBox" onclick="toggleCheckboxArea()">
                                                    <select class="form-select" name="payment_for">
                                                        <option>Kindly Check your payment for...</option>
                                                        <option value="dropdownValue"></option>
                                                    </select>
                                                <div class="overSelect"></div>
                                            </div>
                                            <div id="mySelectOptions">
                                                <label for="one"><input type="checkbox" id="one" onchange="checkboxStatusChange()" value="Notarial Fee" /> Notarial Fee</label>
                                                <label for="two"><input type="checkbox" id="two" onchange="checkboxStatusChange()" value="Missellaneous Fee" /> Missellaneous Fee</label>
                                                <label for="three"><input type="checkbox" id="three" onchange="checkboxStatusChange()" value="Digital System Access Fee" /> Digital System Access Fee</label>
                                                <label for="four"><input type="checkbox" id="four" onchange="checkboxStatusChange()" value="Registration" /> Registration</label>
                                                <label for="five"><input type="checkbox" id="five" onchange="checkboxStatusChange()" value="Initial Payment:" /> Initial Payment</label>
                                                <label for="six"><input type="checkbox" id="six" onchange="checkboxStatusChange()" value="Full Payment" /> Full Payment</label>
                                            </div>
                                            <script>
                                                function checkboxStatusChange() {
                                                var multiselect = document.getElementById("mySelectLabel");
                                                var multiselectOption = multiselect.getElementsByTagName('option')[0];
    
                                                var values = [];
                                                var checkboxes = document.getElementById("mySelectOptions");
                                                var checkedCheckboxes = checkboxes.querySelectorAll('input[type=checkbox]:checked');
    
                                                for (const item of checkedCheckboxes) {
                                                    var checkboxValue = item.getAttribute('value');
                                                    values.push(checkboxValue);
                                                }
    
                                                var dropdownValue = "Nothing is selected";
                                                if (values.length > 0) {
                                                    dropdownValue = values.join(', ');
                                                }
    
                                                multiselectOption.innerText = dropdownValue;
                                                }
    
                                                function toggleCheckboxArea(onlyHide = false) {
                                                var checkboxes = document.getElementById("mySelectOptions");
                                                var displayValue = checkboxes.style.display;
    
                                                if (displayValue != "block") {
                                                    if (onlyHide == false) {
                                                    checkboxes.style.display = "block";
                                                    }
                                                } else {
                                                    checkboxes.style.display = "none";
                                                }
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Amount of Payment:
                                        <span class="asteris">*</span></label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2"
                                    placeholder="Edit here..." name="amount" value="{{$details['ocr_result']['amount']}}">
                                </div>
                                <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Reference Number:<span class="asteris">*</span></label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="reference" value="{{$details['ocr_result']['referenceNumber']}}"
                                        placeholder="Edit here...">
                                </div>
                                <div class="row">
                                    <label for="formGroupExampleInput2" class="form-label">Date & Time of Payment
                                        <span class="quotation">(BASED ON YOUR RECEIPT)</span><span class="asteris">*</span></label>
                                    <div class="col-sm-6">
                                    <input type="date" class="form-control" placeholder="Edit here..." value="{{$details['ocr_result']['date']}}"
                                            name="date">
                                    </div>
                                    <div class="col-sm-6">
                                    <input type="time" class="form-control" placeholder="Edit here..." value="{{$details['ocr_result']['time']}}"
                                            name="time">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="column " style="padding-top: 30px;">
    
                    <div class="buttons">
                        <a href="/upload-form">
                            <button class="left-button"> <i class="fas fa-arrow-left"></i> BACK</button>
                        </a>
                        <a href="../pages/review.html">
                            <button class="right-button" type="submit"  value="submit" >NEXT <i class="fas fa-arrow-right"></i></button>
                        </a>
                    </div>
                </div>



            </form>


        </div>
</x-form-layout>
