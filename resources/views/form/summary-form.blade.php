<x-form-layout>

    <style>
         .main-content {
            align-items: center;
            margin-left: 19%;
            margin-right: 19%;
            color: #000000 !important;
          


        }
        .main-content1 {
            align-items: center;
            margin-left: 19%;
            margin-right: 19%;
            color: #000000 !important;
            margin-bottom: 10%;
        }

        .right-button {
            float: right;
            width: 200px;
            height: 50px;
            padding: 8px;
            margin-left: 8px;
            background-color: #1266b4;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 20px;
        }
        .left-button {
            float: left;
            width: 200px;
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

    </style>
    <div class="card-body">
        <div class="tab-content">
            <form action='submit-form' method="POST">
                @csrf
                <div class="active tab-pane" >
                    <div class=" main-content">
                        <div class="card">
                            <div class="row">   

                                <div class="col-md-6 bg-white">
                                    <div class="box box-primary">
                                        <div class="box-body mt-3 mb-3  ">
                                            <img src="{{ $details['receipt'] }}" alt="Image Description" title="Image Title" style="border-radius: 10px; width: 100%;"  class="image-class align_right">
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="col-md-6 bg-white">
                                    <div class="box box-primary">
                                        <div class="box-body mt-4 mb-3 text-center ">
                                            <h3>Payment Details</h3>
                                        </div>
                                        <div class="box-body m-3 ">
                                                @foreach ($uploadforms as $uploadKey => $uploadform)
                                                @if ($uploadform->id === $latestUploadForm->id)
                                                    <div class="form-group">
                                                        <label class="form-label" for="receipt_type">Receipt Type</label>
                                                        <input type="text" class="form-control" id="receipt_type" name="receipt_type##{{$uploadKey}}"
                                                            value="{{ $uploadform->receipt_type }}" readonly>
                                                    </div>
                                                @endif
                                                @endforeach
                                            

                                                @foreach ($payments as $paymentKey => $payment)
                                                    @if ($payment->id === $latestPayment->id)
                                                        <div class="form-group">
                                                            <label class="form-label" for="payment_for">Payment For</label>
                                                            <input type="text" class="form-control" id="payment_for" name="payment_for##{{$paymentKey}}"
                                                                value="{{ $payment->payment_for }}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="reference">Reference of Payment</label>
                                                            <input type="text" class="form-control" id="reference" name="reference##{{$paymentKey }}"
                                                                value="{{ $payment->reference }}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="amount">Amount of Payment</label>
                                                            <input type="text" class="form-control" id="amount" name="amount##{{$paymentKey }}"
                                                                value="{{ $payment->amount}}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label  class="form-label" for="date">Date of Payment</label>
                                                            <input type="text" class="form-control" id="date" name="date##{{$paymentKey }}" value="{{ $payment->date }}"
                                                                readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label  class="form-label" for="time">Time of Payment</label>
                                                            <input type="text" class="form-control" id="time" name="time##{{$paymentKey }}" value="{{ $payment->time }}"
                                                                readonly>
                                                        </div>
                                                    @endif
                                                @endforeach
                    
                                                <input type="hidden" value="{{ $details['receipt'] }}" name="receipt_source##">  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="active tab-pane" >
                    <div class=" main-content1">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-12 bg-white">
                                    <div class="box box-primary">
                                        <div class="box-body mt-4 mb-3 text-center">
                                            <h3>Personal Details</h3>
                                        </div>
                                        <div class="box-body m-3  mb-5 ">

                                            @foreach ($profiles as $key => $profile)
                                                @if ($profile->id === $latestProfile->id)
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fullname">Full Name</label>
                                                                <input type="text" class="form-control" id="fullname" name="fullname##{{$key}}"
                                                                    value="{{ $profile->fullname }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="scholarshipStatus">Scholarship Status</label>
                                                                <input type="text" class="form-control" id="scholarshipStatus" name="scholarshipStatus##{{$key}}"
                                                                    value="{{ $profile->scholarshipStatus }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email">Email</label>
                                                                <input type="text" class="form-control" id="email" name="email##{{$key}}"
                                                                    value="{{ $profile->email }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="department">Department</label>
                                                                <input type="text" class="form-control" id="department" name="department##{{$key}}"
                                                                    value="{{ $profile->department }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="grade_year">Grade&Section/Course&Level</label>
                                                                <input type="text" class="form-control" id="grade_year" name="grade_year##{{$key}}"
                                                                    value="{{ $profile->grade_year }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="student_type">Student Type</label>
                                                                <input type="text" class="form-control" id="student_type" name="student_type##{{$key}}"
                                                                    value="{{ $profile->student_type }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12" style="padding-top: 30px;">
                            <div class="buttons">
                                <a href="">
                                    <button class="left-button"> <i class="fas fa-arrow-left"></i> BACK</button>
                                </a>
                                <a href="submit-form">
                                    <button class="right-button">SUBMIT<i class="fas fa-arrow-right"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
   

</x-form-layout>
