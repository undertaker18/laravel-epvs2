
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
    </style>

        <div class="row main-content ">

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
                                <label for="formGroupExampleInput" class="form-label">Payment for student
                                    1:<span class="asteris">*</span></label>
                                <select id="inputDepartment" class="form-select" style="border: none; outline: none; box-shadow: none; background-color: white;"required>
                                        <option selected>Choose...</option>
                                        <option>Notarial Fee:</option>
                                        <option>Missellaneous Fees:</option>
                                        <option>Digital System Access Fee:</option>
                                        <option>Registration:</option>
                                        <option>Initial Payment:</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Amount of Payment:
                                    <span class="asteris">*</span></label>
                                <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Edit here..." value="{{$details['ocr_result']['amount']}}">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Reference Number:<span class="asteris">*</span></label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" value="{{$details['ocr_result']['referenceNumber']}}"
                                    placeholder="Edit here...">
                            </div>
                            <div class="row">
                                <label for="formGroupExampleInput2" class="form-label">Date & Time of Payment
                                    <span class="quotation">(BASED ON YOUR RECEIPT)</span><span class="asteris">*</span></label>
                                <div class="col-sm-6">
                                <input type="date" class="form-control" placeholder="Edit here..." value="{{$details['ocr_result']['date']}}"
                                        aria-label="date">
                                </div>
                                <div class="col-sm-6">
                                <input type="time" class="form-control" placeholder="Edit here..." value="{{$details['ocr_result']['time']}}"
                                        aria-label="time">
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
                        <button class="right-button">NEXT <i class="fas fa-arrow-right"></i></button>
                    </a>
                </div>
            </div>
        </div>
</x-form-layout>
