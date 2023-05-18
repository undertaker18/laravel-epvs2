<x-form-layout>
    <style>
        .btn {
           width: 200px;
           margin-top: 15px;
           margin-bottom: 15px;
        }
        .btn-primary2 {
            background-color: green !important;
            color: white !important;
            border-radius: 5px !important;
            padding: 9px;
        }
       
        .btn-primary {
            background-color: #1266b4 !important;
        }


        
        .tab-content {
            border: none !important;
        }

        .card {
            border: none !important;
            border-radius: 50px !important;
            box-shadow: none !important;
        }
        .card-2 {
            border-radius: 12px !important;
            box-shadow: none !important;
        }

        .form-group {
            text-align: left !important;
        }

        .form-label {

            padding-top: 5px;
        }

        /* .card-title {

        font-size: 1.5rem; 
        text-align: left !important;
        }

        .card-tools {
            text-align: right !important;
        } */

        .container {
            margin-top: 30px;
            justify-content: center;

        }


        .main-content {
            align-items: center;
            margin-left: 19%;
            margin-right: 19%;
            color: #000000 !important;

        }

        .privacy-content {
            padding: 5px;
            font-weight: normal;
            font-size: 24px;
            text-align: left;
           
            color: #000000;

        }

        .btn {
            width: 200px;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .btn-primary2 {
            background-color: green !important;
            color: white !important;
            border-radius: 5px !important;
            padding: 9px;
        }

        .align-left {
            text-align: left;
            padding-top: 15px;
            margin: 0;
        }

        .align-right {
            text-align: right;
            margin: 0;
        }
        .bg-form {
            background-color: #EAF1F8;
        }

    </style>
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
                                        <form action="{{ route('profile-form') }}" method="get">
                                            @if ($counts != null)
                                            <input hidden name="counts" type="text" value="2">
                                            @else
                                            <input hidden name="counts" type="text" value="1">
                                            @endif

                                            <button type="submit" class="btn btn-success">
                                                <i class="fas fa-plus"></i> Add Student
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($countForm == 1)

                    <form action="{{ route('profile-form') }}" method="get" id="form-01">
                        <div class="card-2 m-3 bg-form ">
                            <h2 class="card-title pt-3">Student 01</h2>
                            <div id="formsContainer" class="card-body  p-3 ">
                                <div class="row ">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                            <input id="inputFullname" type="text" class="form-control"
                                                placeholder="Fullname" aria-label="Fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputEmail" class="form-label">LV Email:</label>
                                            <input id="inputEmail" type="email" class="form-control" placeholder="Email"
                                                aria-label="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipstatus" class="form-label">Scholarship
                                                Status:</label>
                                            <select id="inputScholarshipstatus" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>Partial Scholar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputDepartment" class="form-label">Department:</label>
                                            <select id="inputDepartment" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>College</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputGradeCourse" class="form-label">Grade/Course:</label>
                                            <select id="inputGradeCourse" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>BSIS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputLevelYear" class="form-label">Level/Year:</label>
                                            <select id="inputLevelYear" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>1 Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipType" class="form-label">Student type:</label>
                                            <select id="inputScholarshipType" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>New Student</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label for="inputAmount" class="form-label" hidden>Amount of Payment:</label>
                                            <input type="text" class="form-control" placeholder="Input Amount"
                                                aria-label="inputAmount"  hidden>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    @elseif ($countForm == 2)

                    <form action="{{ route('profile-form') }}" method="get" id="form-01">
                        <div class="card-2 m-3 bg-form ">
                            <h2 class="card-title pt-3">Student 01</h2>
                            <div id="formsContainer" class="card-body  p-3 ">
                                <div class="row ">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                            <input id="inputFullname" type="text" class="form-control"
                                                placeholder="Fullname" aria-label="Fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputEmail" class="form-label">LV Email:</label>
                                            <input id="inputEmail" type="email" class="form-control" placeholder="Email"
                                                aria-label="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipstatus" class="form-label">Scholarship
                                                Status:</label>
                                            <select id="inputScholarshipstatus" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>Partial Scholar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputDepartment" class="form-label">Department:</label>
                                            <select id="inputDepartment" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>College</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputGradeCourse" class="form-label">Grade/Course:</label>
                                            <select id="inputGradeCourse" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>BSIS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputLevelYear" class="form-label">Level/Year:</label>
                                            <select id="inputLevelYear" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>1 Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipType" class="form-label">Student type:</label>
                                            <select id="inputScholarshipType" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>New Student</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label for="inputAmount" class="form-label" >Amount of Payment:</label>
                                            <input type="text" class="form-control" placeholder="Input Amount"
                                                aria-label="inputAmount"  >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    <form action="{{ route('profile-form') }}" method="get" id="form-01">
                        <div class="card-2 m-3 bg-form ">
                            <h2 class="card-title pt-3">Student 02</h2>
                            <div id="formsContainer" class="card-body  p-3 ">
                                <div class="row ">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                            <input id="inputFullname" type="text" class="form-control"
                                                placeholder="Fullname" aria-label="Fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputEmail" class="form-label">LV Email:</label>
                                            <input id="inputEmail" type="email" class="form-control" placeholder="Email"
                                                aria-label="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipstatus" class="form-label">Scholarship
                                                Status:</label>
                                            <select id="inputScholarshipstatus" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>Partial Scholar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputDepartment" class="form-label">Department:</label>
                                            <select id="inputDepartment" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>College</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputGradeCourse" class="form-label">Grade/Course:</label>
                                            <select id="inputGradeCourse" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>BSIS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputLevelYear" class="form-label">Level/Year:</label>
                                            <select id="inputLevelYear" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>1 Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipType" class="form-label">Student type:</label>
                                            <select id="inputScholarshipType" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>New Student</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label for="inputAmount" class="form-label" >Amount of Payment:</label>
                                            <input type="text" class="form-control" placeholder="Input Amount"
                                                aria-label="inputAmount"  >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    @elseif ($countForm == 3)

                    <form action="{{ route('profile-form') }}" method="get" id="form-01">
                        <div class="card-2 m-3 bg-form ">
                            <h2 class="card-title pt-3">Student 01</h2>
                            <div id="formsContainer" class="card-body  p-3 ">
                                <div class="row ">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                            <input id="inputFullname" type="text" class="form-control"
                                                placeholder="Fullname" aria-label="Fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputEmail" class="form-label">LV Email:</label>
                                            <input id="inputEmail" type="email" class="form-control" placeholder="Email"
                                                aria-label="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipstatus" class="form-label">Scholarship
                                                Status:</label>
                                            <select id="inputScholarshipstatus" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>Partial Scholar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputDepartment" class="form-label">Department:</label>
                                            <select id="inputDepartment" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>College</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputGradeCourse" class="form-label">Grade/Course:</label>
                                            <select id="inputGradeCourse" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>BSIS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputLevelYear" class="form-label">Level/Year:</label>
                                            <select id="inputLevelYear" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>1 Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipType" class="form-label">Student type:</label>
                                            <select id="inputScholarshipType" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>New Student</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label for="inputAmount" class="form-label" >Amount of Payment:</label>
                                            <input type="text" class="form-control" placeholder="Input Amount"
                                                aria-label="inputAmount"  >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <br>

                    <form action="{{ route('profile-form') }}" method="get" id="form-01">
                        <div class="card-2 m-3 bg-form ">
                            <h2 class="card-title pt-3">Student 02</h2>
                            <div id="formsContainer" class="card-body  p-3 ">
                                <div class="row ">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                            <input id="inputFullname" type="text" class="form-control"
                                                placeholder="Fullname" aria-label="Fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputEmail" class="form-label">LV Email:</label>
                                            <input id="inputEmail" type="email" class="form-control" placeholder="Email"
                                                aria-label="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipstatus" class="form-label">Scholarship
                                                Status:</label>
                                            <select id="inputScholarshipstatus" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>Partial Scholar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputDepartment" class="form-label">Department:</label>
                                            <select id="inputDepartment" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>College</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputGradeCourse" class="form-label">Grade/Course:</label>
                                            <select id="inputGradeCourse" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>BSIS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputLevelYear" class="form-label">Level/Year:</label>
                                            <select id="inputLevelYear" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>1 Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipType" class="form-label">Student type:</label>
                                            <select id="inputScholarshipType" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>New Student</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label for="inputAmount" class="form-label" >Amount of Payment:</label>
                                            <input type="text" class="form-control" placeholder="Input Amount"
                                                aria-label="inputAmount"  >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <br>

                    <form action="{{ route('profile-form') }}" method="get" id="form-01">
                        <div class="card-2 m-3 bg-form ">
                            <h2 class="card-title pt-3">Student 03</h2>
                            <div id="formsContainer" class="card-body  p-3 ">
                                <div class="row ">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                            <input id="inputFullname" type="text" class="form-control"
                                                placeholder="Fullname" aria-label="Fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputEmail" class="form-label">LV Email:</label>
                                            <input id="inputEmail" type="email" class="form-control" placeholder="Email"
                                                aria-label="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipstatus" class="form-label">Scholarship
                                                Status:</label>
                                            <select id="inputScholarshipstatus" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>Partial Scholar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputDepartment" class="form-label">Department:</label>
                                            <select id="inputDepartment" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>College</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputGradeCourse" class="form-label">Grade/Course:</label>
                                            <select id="inputGradeCourse" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>BSIS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputLevelYear" class="form-label">Level/Year:</label>
                                            <select id="inputLevelYear" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>1 Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipType" class="form-label">Student type:</label>
                                            <select id="inputScholarshipType" class="form-control" required>
                                                <option selected>Choose...</option>
                                                <option>New Student</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label for="inputAmount" class="form-label" >Amount of Payment:</label>
                                            <input type="text" class="form-control" placeholder="Input Amount"
                                                aria-label="inputAmount"  >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    @endif

                    <div class="col-md-12">
                        <div class="row ">
                            <div class="col-md-6  " style="text-align:left;">
                                <button class="btn btn-lg btn-primary pl-5 pr-5" onclick="window.location.href='{{ url('/profile-form') }}'" data-toggle="tab" >
                                    <i class="fas fa-arrow-left"></i> Back
                                </button>
                            </div>
                            <div class="col-md-6"  style="text-align:right;">
                                <button id="next-button" class="btn btn-lg btn-secondary pl-5 pr-5" onclick="window.location.href='{{ url('/upload-form') }}'" data-toggle="tab" disabled >
                                    Next <i class="fas fa-arrow-right"></i>
                                </button>
                                <script>
                                    function toggleButton() {
                                        var checkBox = document.getElementById("my-checkbox");
                                        var button = document.getElementById("next-button");
                                        if (checkBox.checked) {
                                            button.disabled = false;
                                            button.classList.remove("btn-secondary");
                                            button.classList.add("btn-primary2");
                                        } else {
                                            button.disabled = true;
                                            button.classList.remove("btn-primary2");
                                            button.classList.add("btn-secondary");
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</x-form-layout>
