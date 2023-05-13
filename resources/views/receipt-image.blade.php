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

<div class="row main-content">
    <div class="row border-line">
      <div class="col-sm-7">
        <div class="card">
          <img src="../ASSETS/verify/receipt.png" alt="Image Description" width="100%" height="550px" title="Image Title"
            style="border-radius: 10px;" class="image-class">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Payment for student 1:</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" readonly>
              </select>
            </div>
  
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Amount of Payment:</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" readonly>
            </div>
  
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Reference Number:</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" readonly>
            </div>
  
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Date & Time of Payment<span class="quotation"> (BASED ON YOUR RECEIPT)</span></label>
              <div class="row">
                <div class="col-sm-6">
                  <div class="input-group date">
                    <input type="text" class="form-control datetimepicker-input" data-toggle="datetimepicker" data-target="#datetimepicker1" placeholder="" required>
                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group date">
                    <input type="text" class="form-control datetimepicker-input" data-toggle="datetimepicker" data-target="#datetimepicker2" placeholder="" required>
                    <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="far fa-clock"></i></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</x-admin-layout>