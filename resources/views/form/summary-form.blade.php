<x-form-layout>

    <style>
        .row.main-content {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .form-content {
            background-color: #EAF1F8;
            margin-left: 65px;
            margin-right: 65px;
            margin-top: 90px;
            border-radius: 15px;
        }

        .col {
            text-align: left;
            margin-left: 25px;
            margin-right: 25px;
            margin-bottom: 5px;


        }

        .cols {
            text-align: left;
            margin-left: 25px;
            margin-right: 25px;
            margin-bottom: 30px;


        }

        h2 {
            padding-top: 20px;

        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: 100%;
            padding: 10px;
            height: 300px;
            /* Should be removed. Only for demonstration */
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
            padding-top: 250px;

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
            background-color: white;
        }

        .align_right {
            align-content: right;
        }

    </style>
    <div class="row main-content ">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <form>
                            @foreach ($profile as $profiles)
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="fullname" name="fullname"
                                    value="{{ $profiles->fullname }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    value="{{ $profiles->email }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="scholarshipStatus">Scholarship Status</label>
                                <input type="text" class="form-control" id="scholarshipStatus" name="scholarshipStatus"
                                    value="{{ $profiles->scholarshipStatus }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="department">Department</label>
                                <input type="text" class="form-control" id="department" name="department"
                                    value="{{ $profiles->department }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="section_course">Section Course</label>
                                <input type="text" class="form-control" id="section_course" name="section_course"
                                    value="{{ $profiles->section_course }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="grade_year">Grade Year</label>
                                <input type="text" class="form-control" id="grade_year" name="grade_year"
                                    value="{{ $profiles->grade_year }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="student_type">Student Type</label>
                                <input type="text" class="form-control" id="student_type" name="student_type"
                                    value="{{ $profiles->student_type }}" readonly>
                            </div>
                            @endforeach

                            @foreach ($uploadform as $uploadforms)
                            <div class="form-group">
                                <label for="receipt_type">Receipt Type</label>
                                <input type="text" class="form-control" id="receipt_type" name="receipt_type"
                                    value="{{ $uploadforms->receipt_type }}" readonly>
                            </div>
                            @endforeach

                            @foreach ($payment as $payments)

                            <div class="form-group">
                                <label for="payment_for">Payment For</label>
                                <input type="text" class="form-control" id="payment_for" name="payment_for"
                                    value="{{ $payments->payment_for }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="reference">Reference</label>
                                <input type="text" class="form-control" id="reference" name="reference"
                                    value="{{ $payments->reference }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="text" class="form-control" id="amount" name="amount"
                                    value="{{ $payments->amount }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" class="form-control" id="date" name="date" value="{{ $payments->date }}"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="text" class="form-control" id="time" name="time" value="{{ $payments->time }}"
                                    readonly>
                            </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <img src="{{ $details['receipt'] }}" alt="Image Description" title="Image Title" style="border-radius: 10px; width: 50%;"  class="image-class align_right">
                    </div>
                </div>
            </div>

        </div>

        <div class="column " style="padding-top: 30px;">

            <div class="buttons">
                <a href="../pages/verify.html ">
                    <button class="left-button"> <i class="fas fa-arrow-left"></i> BACK</button>
                </a>
                <a href="../pages/submit.html">
                    <button class="right-button">NEXT <i class="fas fa-arrow-right"></i></button>
                </a>
            </div>
        </div>
    </div>

</x-form-layout>
