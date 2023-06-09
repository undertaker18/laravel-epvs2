<x-form-layout>

    <style>

        .image {
        
        height: auto !important; 
        margin bottom: 30px !important;  
        
        }
        .main-content1 {
            align-items: center;
            margin-left: 19%;
            margin-right: 19%;
            color: #000000 !important;

        }

        .main-content {
            align-items: center;
            margin-left: 19%;
            margin-right: 19%;
            color: #000000 !important;
            margin-bottom: 10%;
        }

        .btn-primary2 {
            background-color: green !important;
            color: white !important;
            border-radius: 5px !important;

        }

        .btn-primary1 {
            background-color: rgb(118, 172, 118) !important;
            color: white !important;
            border-radius: 5px !important;

        }

        .btn-primary {
            background-color: #1266b4 !important;
        }


        .tab-content {
            border: none !important;
        }

        .card {
            border: none !important;
            border-radius: none !important;
            box-shadow: none !important;
        }

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
            padding-top: .5rem;
            padding-bottom: 0rem;
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

        .align_right {
            align-content: right;
        }

        .col-md-5 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-6 {
            width: 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .flexed {
            display: flex !important;
        }

        .end {
            justify-content: flex-end !important;
        }

        .start {
            justify-content: flex-start !important;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .mt-5 {
            margin-top: 3rem;
        }

        .btn {
            width: 200px !important;
            margin-top: 10px;
            margin-bottom: 5px;
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
                width: 90%;
                padding: 0px;
            }

            .main-content {
                align-items: center;
                margin-left: 12px;
                margin-right: 12px;
                color: #000000 !important;

            }

            .main-content1 {
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

            .btn {
                width: 100% !important;
                margin-top: 10px;
                margin-bottom: 5px;
            }
            .btn2 {
                width: 50% !important;
               
            }


            .button-container {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .card-body {
                font-size: 14px;
            }

            .form-set {
                display: flex;
                align-items: center;
            }

            .col-5 {
                width: 100%;
                flex: 0 0 100%;
                max-width: 100%;

            }

            .col-6 {
                width: 100%;
                flex: 0 0 100%;
                max-width: 100%;

            }



        }

    </style>
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <div class="card-body">
        <div class="tab-content">
            <form action='{{ route('post-submit-form', ['id' => $transactionId]) }}' method="POST">
                @csrf
                <div class="active tab-pane">
                    <div class=" main-content1">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-12 bg-white">
                                    <div class="box box-primary">
                                        <div class="box-body mt-4 mb-3 text-center">
                                            <h3>Personal Details</h3>
                                        </div>
                                        <div class="box-body m-3 ">
                                            <?php
                                            $studentNumber = 1;
                                            ?>
                                            @foreach ($transactions as $key => $transaction)
                                            @if ($transaction->fullname3 != null)

                                            <div class="box-body mt-4 mb-3 text-left">
                                                <h3>Student {{ $studentNumber++ }}</h3>
                                            </div>
                                            <div class="row form-set">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fullname">Full Name</label>
                                                        <input type="text" class="form-control" id="fullname"
                                                            name="fullname1##{{$key}}"
                                                            value="{{ $transaction->fullname1 }}" readonly>
                                                        <input type="hidden" class="form-control" id="fullname"
                                                            name="xero_account_id1##{{$key}}"
                                                            value="{{ $transaction->xero_account_id1 }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="scholarshipStatus">Scholarship
                                                            Status</label>
                                                        <input type="text" class="form-control" id="scholarshipStatus"
                                                            name="scholarshipStatus1##{{$key}}"
                                                            value="{{ $transaction->scholarshipStatus1 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Email</label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email1##{{$key}}" value="{{ $transaction->email1 }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="department">Department</label>
                                                        <input type="text" class="form-control" id="department"
                                                            name="department1##{{$key}}"
                                                            value="{{ $transaction->department1 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label"
                                                            for="grade_year">Grade&Section/Course&Level</label>
                                                        <input type="text" class="form-control" id="grade_year"
                                                            name="grade_year1##{{$key}}"
                                                            value="{{ $transaction->grade_year1 }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="student_type">Student
                                                            Type</label>
                                                        <input type="text" class="form-control" id="student_type"
                                                            name="student_type1##{{$key}}"
                                                            value="{{ $transaction->student_type1 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>

                                            <div class="box-body mt-4 mb-3 text-left">
                                                <h3>Student {{ $studentNumber++ }}</h3>
                                            </div>
                                            <div class="row form-set">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fullname">Full Name</label>
                                                        <input type="text" class="form-control" id="fullname"
                                                            name="fullname2##{{$key}}"
                                                            value="{{ $transaction->fullname2 }}" readonly>
                                                        <input type="hidden" class="form-control" id="xero_account_id2"
                                                            name="xero_account_id2##{{$key}}"
                                                            value="{{ $transaction->xero_account_id2 }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="scholarshipStatus">Scholarship
                                                            Status</label>
                                                        <input type="text" class="form-control" id="scholarshipStatus"
                                                            name="scholarshipStatus2##{{$key}}"
                                                            value="{{ $transaction->scholarshipStatus2 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Email</label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email2##{{$key}}" value="{{ $transaction->email2 }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="department">Department</label>
                                                        <input type="text" class="form-control" id="department"
                                                            name="department2##{{$key}}"
                                                            value="{{ $transaction->department2 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label"
                                                            for="grade_year">Grade&Section/Course&Level</label>
                                                        <input type="text" class="form-control" id="grade_year"
                                                            name="grade_year2##{{$key}}"
                                                            value="{{ $transaction->grade_year2 }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="student_type">Student
                                                            Type</label>
                                                        <input type="text" class="form-control" id="student_type"
                                                            name="student_type2##{{$key}}"
                                                            value="{{ $transaction->student_type2 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>

                                            <div class="box-body mt-4 mb-3 text-left">
                                                <h3>Student {{ $studentNumber++ }}</h3>
                                            </div>
                                            <div class="row form-set">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fullname">Full Name</label>
                                                        <input type="text" class="form-control" id="fullname"
                                                            name="fullname3##{{$key}}"
                                                            value="{{ $transaction->fullname3 }}" readonly>
                                                        <input type="hidden" class="form-control" id="xero_account_id3"
                                                            name="xero_account_id3##{{$key}}"
                                                            value="{{ $transaction->xero_account_id3 }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="scholarshipStatus">Scholarship
                                                            Status</label>
                                                        <input type="text" class="form-control" id="scholarshipStatus"
                                                            name="scholarshipStatus3##{{$key}}"
                                                            value="{{ $transaction->scholarshipStatus3 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Email</label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email3##{{$key}}" value="{{ $transaction->email3 }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="department">Department</label>
                                                        <input type="text" class="form-control" id="department"
                                                            name="department3##{{$key}}"
                                                            value="{{ $transaction->department3 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label"
                                                            for="grade_year">Grade&Section/Course&Level</label>
                                                        <input type="text" class="form-control" id="grade_year"
                                                            name="grade_year3##{{$key}}"
                                                            value="{{ $transaction->grade_year3 }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="student_type">Student
                                                            Type</label>
                                                        <input type="text" class="form-control" id="student_type"
                                                            name="student_type3##{{$key}}"
                                                            value="{{ $transaction->student_type3 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>

                                            @elseif ($transaction->fullname2 != null)

                                            <div class="box-body mt-4 mb-3 text-left">
                                                <h3>Student {{ $studentNumber++ }}</h3>
                                            </div>
                                            <div class="row form-set">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fullname">Full Name</label>
                                                        <input type="text" class="form-control" id="fullname"
                                                            name="fullname1##{{$key}}"
                                                            value="{{ $transaction->fullname1 }}" readonly>
                                                        <input type="hidden" class="form-control" id="fullname"
                                                            name="xero_account_id1##{{$key}}"
                                                            value="{{ $transaction->xero_account_id1 }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="scholarshipStatus">Scholarship
                                                            Status</label>
                                                        <input type="text" class="form-control" id="scholarshipStatus"
                                                            name="scholarshipStatus1##{{$key}}"
                                                            value="{{ $transaction->scholarshipStatus1 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Email</label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email1##{{$key}}" value="{{ $transaction->email1 }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="department">Department</label>
                                                        <input type="text" class="form-control" id="department"
                                                            name="department1##{{$key}}"
                                                            value="{{ $transaction->department1 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label"
                                                            for="grade_year">Grade&Section/Course&Level</label>
                                                        <input type="text" class="form-control" id="grade_year"
                                                            name="grade_year1##{{$key}}"
                                                            value="{{ $transaction->grade_year1 }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="student_type">Student
                                                            Type</label>
                                                        <input type="text" class="form-control" id="student_type"
                                                            name="student_type1##{{$key}}"
                                                            value="{{ $transaction->student_type1 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>

                                            <div class="box-body mt-4 mb-3 text-left">
                                                <h3>Student {{ $studentNumber++ }}</h3>
                                            </div>
                                            <div class="row form-set">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fullname">Full Name</label>
                                                        <input type="text" class="form-control" id="fullname"
                                                            name="fullname2##{{$key}}"
                                                            value="{{ $transaction->fullname2 }}" readonly>
                                                        <input type="hidden" class="form-control" id="xero_account_id2"
                                                            name="xero_account_id2##{{$key}}"
                                                            value="{{ $transaction->xero_account_id2 }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="scholarshipStatus">Scholarship
                                                            Status</label>
                                                        <input type="text" class="form-control" id="scholarshipStatus"
                                                            name="scholarshipStatus2##{{$key}}"
                                                            value="{{ $transaction->scholarshipStatus2 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Email</label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email2##{{$key}}" value="{{ $transaction->email2 }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="department">Department</label>
                                                        <input type="text" class="form-control" id="department"
                                                            name="department2##{{$key}}"
                                                            value="{{ $transaction->department2 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label"
                                                            for="grade_year">Grade&Section/Course&Level</label>
                                                        <input type="text" class="form-control" id="grade_year"
                                                            name="grade_year2##{{$key}}"
                                                            value="{{ $transaction->grade_year2 }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="student_type">Student
                                                            Type</label>
                                                        <input type="text" class="form-control" id="student_type"
                                                            name="student_type2##{{$key}}"
                                                            value="{{ $transaction->student_type2 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>

                                            @else

                                            <div class="box-body mt-4 mb-3 text-left">
                                                <h3>Student {{ $studentNumber++ }}</h3>
                                            </div>
                                            <div class="row form-set">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fullname">Full Name</label>
                                                        <input type="text" class="form-control" id="fullname"
                                                            name="fullname1##{{$key}}"
                                                            value="{{ $transaction->fullname1 }}" readonly>
                                                        <input type="hidden" class="form-control" id="fullname"
                                                            name="xero_account_id1##{{$key}}"
                                                            value="{{ $transaction->xero_account_id1 }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="scholarshipStatus">Scholarship
                                                            Status</label>
                                                        <input type="text" class="form-control" id="scholarshipStatus"
                                                            name="scholarshipStatus1##{{$key}}"
                                                            value="{{ $transaction->scholarshipStatus1 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Email</label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email1##{{$key}}" value="{{ $transaction->email1 }}"
                                                            readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="department">Department</label>
                                                        <input type="text" class="form-control" id="department"
                                                            name="department1##{{$key}}"
                                                            value="{{ $transaction->department1 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label"
                                                            for="grade_year">Grade&Section/Course&Level</label>
                                                        <input type="text" class="form-control" id="grade_year"
                                                            name="grade_year1##{{$key}}"
                                                            value="{{ $transaction->grade_year1 }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="student_type">Student
                                                            Type</label>
                                                        <input type="text" class="form-control" id="student_type"
                                                            name="student_type1##{{$key}}"
                                                            value="{{ $transaction->student_type1 }}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>

                                            @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="active tab-pane" >
                    <div class=" main-content">
                        <div class="card ">
                            <div class="row ">   

                                <div class="col-md-6 bg-white">
                                    <div class="box box-primary">
                                        <div class="box-body mt-3 mb-3  ">
                                            <img src="{{ $imagedetails['receipt'] }}"
                                                alt="{{ $imagedetails['receipt'] }}" title="Image Title" style="border-radius: 10px; width: 100%;"
                                                class="image-class align_right">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 bg-white">
                                    <div class="box box-primary">
                                        <div class="box-body mt-4 mb-3 text-center ">
                                            <h3>Payment Details</h3>
                                        </div>
                                        <div class="box-body m-3 ">
                                            <?php
                                            $studentNumber5 = 1;
                                            ?>

                                            @foreach ($transactions as $paymentKey => $transaction)
                                            
                                            <div class="form-group">
                                                <label class="form-label" for="reference">Reference of Payment</label>
                                                <input type="text" class="form-control" id="reference" name="reference##{{ $paymentKey }}"
                                                    value="{{ $transaction->reference }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="amount">Amount of Payment</label>
                                                <input type="text" class="form-control" id="amount" name="amount##{{ $paymentKey }}"
                                                    value="{{ $transaction->amount }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="date">Date of Payment</label>
                                                <input type="text" class="form-control" id="date" name="date##{{ $paymentKey }}"
                                                    value="{{ $transaction->date }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="time">Time of Payment</label>
                                                <input type="text" class="form-control" id="time" name="time##{{ $paymentKey }}"
                                                    value="{{ $transaction->time }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="receipt_type">Receipt Type</label>
                                                <input type="text" class="form-control" id="receipt_type" name="receipt_type##{{ $paymentKey }}"
                                                    value="{{ $transaction->receipt_type }}" readonly>
                                            </div>
                                            
                                            @if ($transaction->fullname3 != null)

                                            <h5 class="mt-2">Student {{ $studentNumber5++ }}</h5>
                                            <div class="form-group">
                                                <label class="form-label" for="each_amount">Amount Per Student</label>
                                                <input type="text" class="form-control" id="each_amount" name="each_amount1##{{ $paymentKey }}"
                                                    value="{{ $transaction->each_amount1 }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="payments_for">Payment For</label>
                                                <input type="text" class="form-control text-wrap" id="payments_for" name="payments_for1##{{ $paymentKey }}"
                                                    readonly value="{{ $transaction->payments_for1 }}">
                                            </div>

                                            <h5 class="mt-2">Student {{ $studentNumber5++ }}</h5>
                                            <div class="form-group">
                                                <label class="form-label" for="each_amount">Amount Per Student</label>
                                                <input type="text" class="form-control" id="each_amount" name="each_amount2##{{ $paymentKey }}"
                                                    value="{{ $transaction->each_amount2 }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="payments_for">Payment For</label>
                                                <input type="text" class="form-control text-wrap" id="payments_for" name="payments_for2##{{ $paymentKey }}"
                                                    readonly value="{{ $transaction->payments_for2 }}">
                                            </div>

                                            <h5 class="mt-2">Student {{ $studentNumber5++ }}</h5>
                                            <div class="form-group">
                                                <label class="form-label" for="each_amount">Amount Per Student</label>
                                                <input type="text" class="form-control" id="each_amount" name="each_amount3##{{ $paymentKey }}"
                                                    value="{{ $transaction->each_amount3 }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="payments_for">Payment For</label>
                                                <input type="text" class="form-control text-wrap" id="payments_for" name="payments_for3##{{ $paymentKey }}"
                                                    readonly value="{{ $transaction->payments_for3 }}">
                                            </div>

                                            @elseif ($transaction->fullname2 != null)

                                            <h5 class="mt-2">Student {{ $studentNumber5++ }}</h5>
                                            <div class="form-group">
                                                <label class="form-label" for="each_amount">Amount Per Student</label>
                                                <input type="text" class="form-control" id="each_amount" name="each_amount1##{{ $paymentKey }}"
                                                    value="{{ $transaction->each_amount1 }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="payments_for">Payment For</label>
                                                <input type="text" class="form-control text-wrap" id="payments_for" name="payments_for1##{{ $paymentKey }}"
                                                    readonly value="{{ $transaction->payments_for1 }}">
                                            </div>

                                            <h5 class="mt-2">Student {{ $studentNumber5++ }}</h5>
                                            <div class="form-group">
                                                <label class="form-label" for="each_amount">Amount Per Student</label>
                                                <input type="text" class="form-control" id="each_amount" name="each_amount2##{{ $paymentKey }}"
                                                    value="{{ $transaction->each_amount2 }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="payments_for">Payment For</label>
                                                <input type="text" class="form-control text-wrap" id="payments_for" name="payments_for2##{{ $paymentKey }}"
                                                    readonly value="{{ $transaction->payments_for2 }}">
                                            </div>

                                            @else

                                            <h5 class="mt-2">Student {{ $studentNumber5++ }}</h5>
                                            <div class="form-group">
                                                <label class="form-label" for="each_amount">Amount Per Student</label>
                                                <input type="text" class="form-control" id="each_amount" name="each_amount1##{{ $paymentKey }}"
                                                    value="{{ $transaction->each_amount1 }}" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="payments_for">Payment For</label>
                                                <input type="text" class="form-control text-wrap" id="payments_for" name="payments_for1##{{ $paymentKey }}"
                                                    readonly value="{{ $transaction->payments_for1 }}">
                                            </div>

                                            @endif
                                            @endforeach

                                            <input type="hidden" value="{{ $imagedetails['receipt'] }}" name="receipt_source##">
                                            
                                            {{-- <input type="hidden" value="{{ $xero_account_users_ids }}" name="users_id">
                                            <input type="hidden" value="{{ $xero_account_ids }}" name="xero_account_id"> --}}

                                        </div>
                                    </div>
                                </div>

                            </div>
                             <!-- Add this element at the top of your summary -->
                            <div id="errorText" style="display: none; color: red; font-weight: bold; " class="text-center"></div>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="button-container flexed start">
                                        <a href="{{ route('upload-form', ['id' => $transactionId]) }}" class="btn btn-primary">
                                            <i class="fas fa-arrow-left"></i> Back
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="">
                                        {{-- <a href="post-submit-form" class="m-0 p-0 button-container flexed end" >
                                            <button type="submit" name="submit" id="submitButton" class="btn btn-success" disabled>Submit <i class="fas fa-arrow-right"></i></button>
                                          </a> --}}
                                          
                                        <a  class="m-0 p-0 button-container flexed end">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#confirmModal">Submit <i class="fas fa-arrow-right"></i></button>
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- Modal -->
                <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmModalLabel">Confirmation</h5>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                Are you sure you want to submit?
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a  class=" p-0 button-container ">
                                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" style="width: 100px !important">No</button>
                            </a>
                            <a href="post-submit-form" class="m-0 p-0 button-container flexed end">
                                <button type="submit" name="submit" id="submitButton" class="btn btn-success" data-toggle="modal" data-target="#loadingModal" disabled style="width: 100px !important">Yes</button>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>



     <!-- Modal -->
<div class="modal fade" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loadingModalLabel">Loading...</h5>
        </div>
        <div class="modal-body">
          <div class="text-center" style="font-size: 30px !important">
            <div><br></div>       
            <i class="fas fa-spinner fa-spin fa-3x"></i>
            <div><br></div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Add the error modal HTML -->
<div id="errorModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="errorModalLabel">Error</h5>
               
            </div>
            <br>
            <div class="modal-body"></div>
            <br>
            <div class="modal-footer">  
                <a href="{{ route('upload-form', ['id' => $transactionId]) }}" class="btn btn2 btn-primary">
                    <i class="fas fa-arrow-left"></i> Back to Edit
                </a>
            </div>
        </div>
    </div>
</div>


<script>
    function showErrorModal(message) {
        var modal = $('#errorModal');
        var modalBody = modal.find('.modal-body');
        modalBody.text(message);
        modal.modal('show');
    }

    function hideErrorModal() {
        var modal = $('#errorModal');
        modal.modal('hide');
    }

   
    function checkFormValidity() {
        var paymentsForInputs = $('input[name^="payments_for"]');
        var eachAmountInputs = $('input[name^="each_amount"]');
        var nextBtn = $('#submitButton');
        var isValid = true;

        paymentsForInputs.each(function() {
            if ($(this).is(':visible') && $(this).val() === '') {
                isValid = false;
                return false; // Exit the loop if any input is empty
            }
        });

        eachAmountInputs.each(function() {
            if ($(this).is(':visible') && $(this).val() === '') {
                isValid = false;
                return false; // Exit the loop if any input is empty
            }
        });

        nextBtn.prop('disabled', !isValid);

        if (!isValid) {
            var errorMessage = '"Please go back and fill in all payment details."';
            showErrorModal(errorMessage);
        } else {
            hideErrorModal();
        }
    }

    // Call the checkFormValidity function whenever a checkbox value changes
    $('input[name^="payments_for"]').on('change', checkFormValidity);
    $('input[name^="each_amount"]').on('change', checkFormValidity);

    // Trigger the checkFormValidity function initially to set the initial state of the button
    checkFormValidity();
</script>
</x-form-layout>
