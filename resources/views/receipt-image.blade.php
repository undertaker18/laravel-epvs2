<x-admin-layout>
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
                    <img src="../ASSETS/verify/receipt.png" alt="Image Description" width="100% " height="550px"
                        title="Image Title" style=" border-radius: 10px;;" class="image-class">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                       
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
                                placeholder="Edit here...">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Reference Number:<span class="asteris">*</span></label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Edit here...">
                        </div>
                        <div class="row">
                            <label for="formGroupExampleInput2" class="form-label">Date & Time of Payment
                                <span class="quotation">(BASED ON YOUR RECEIPT)</span><span class="asteris">*</span></label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" placeholder="Edit here..."
                                    aria-label="date">
                            </div>
                            <div class="col-sm-6">
                                <input type="time" class="form-control" placeholder="Edit here..."
                                    aria-label="time">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>