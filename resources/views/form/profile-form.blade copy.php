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
                                            @if ($counts == null || $counts == 0)
                                            <input hidden name="counts" type="text" value="1">
                                            @elseif ($counts == 1 )
                                            <input hidden name="counts" type="text" value="2">
                                            @else
                                            <input hidden name="counts" type="text" value="0">
                                            @endif

                                            @if ($counts == 2 )
                                                <button type="submit" class="btn btn-success" disabled>
                                                    <i class="fas fa-plus"></i> Add Student
                                                </button>
                                            @else
                                                <button type="submit" class="btn btn-success">
                                                    <i class="fas fa-plus"></i> Add Student
                                                </button>
                                            @endif
                                           
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($countForm == 1)

                    <div class="card-2 m-3 bg-form ">
                        <h2 class="card-title pt-3">Student 01</h2>
                        <form action="{{ route('profile-form') }}" method="get" id="form-01">
                            <div id="formsContainer" class="card-body  p-3 ">
                                <div class="row ">
                                    <input type="text" value="{{ $LoggedUserPrivacy['profile_key'] }}" hidden>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                            <input id="button-required" type="text" class="form-control" name="fullname"
                                                placeholder="Fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputEmail" class="form-label">LV Email:</label>
                                            <input id="button-required" type="email" class="form-control" placeholder="Email"
                                            name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipstatus" class="form-label">Scholarship
                                                Status:</label>
                                            <select id="button-required" class="form-control"  name="scholarshipStatus"required>
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
                                            <select id="button-required" class="form-control" name="deparment" required>
                                                <option selected>Choose...</option>
                                                <option>College</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputGradeCourse" class="form-label">Section/Course:</label>
                                            <select id="button-required" class="form-control" name="section_course" required>
                                                <option selected>Choose...</option>
                                                <option>BSIS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputLevelYear" class="form-label">Grade/Year:</label>
                                            <select id="button-required" class="form-control" name="grade_year" required>
                                                <option selected>Choose...</option>
                                                <option>1 Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipType" class="form-label">Student Type:</label>
                                            <select id="button-required" class="form-control" name="student_type" required>
                                                <option selected>Choose...</option>
                                                <option>New Student</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >   
                                            <label for="inputAmount" class="form-label" >Amount of Payment:</label>
                                            <input id="button-required" type="text" class="form-control" placeholder="Input Amount" name="amount" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    @elseif ($countForm == 2)

                    <div class="card-2 m-3 bg-form ">
                        <h2 class="card-title pt-3">Student 01</h2>
                        <form action="{{ route('profile-form') }}" method="get" id="form-01">
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
                        </form>
                    </div>
                    
                    
                    <div class="card-2 m-3 bg-form ">  
                        <div class="row m-2">
                            <div class="col-md-4"> 
                            </div>
                            <div class="col-md-4"> 
                                <h2 class="card-title pt-3">Student 02</h2>
                            </div>
                            <div class="col-md-4">
                                <div class="card-tools align-right">
                                    <form method="get"> 
                                        <input hidden name="counts" value="0">
                                        <button type="submit" class="btn " style="width: 40px;  border: none !important;">
                                            <i class="fas fa-times-circle text-danger"  style="font-size: 20px;"></i> 
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('profile-form') }}" method="get" id="form-01">
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
                        </form>
                    </div>
                    

                    @elseif ($countForm == 3)

                    <div class="card-2 m-3 bg-form ">
                        <h2 class="card-title pt-3">Student 01</h2>
                        <form action="{{ route('profile-form') }}" method="get" id="form-01">
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
                        </form>
                    </div>
                    
                    
                    <div class="card-2 m-3 bg-form ">  
                        <div class="row m-2">
                            <div class="col-md-4"> 
                            </div>
                            <div class="col-md-4"> 
                                <h2 class="card-title pt-3">Student 02</h2>
                            </div>
                            <div class="col-md-4">
                                <div class="card-tools align-right">
                                    <form method="get"> 
                                        <input hidden name="counts" value="0">
                                        <button type="submit" class="btn" style="width: 40px; border: none !important;" disabled>
                                            <i class="fas fa-times-circle text-danger"  style="font-size: 20px;"></i> 
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('profile-form') }}" method="get" id="form-01">
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
                        </form>
                    </div>

                    <div class="card-2 m-3 bg-form ">  
                        <div class="row m-2">
                            <div class="col-md-4"> 
                            </div>
                            <div class="col-md-4"> 
                                <h2 class="card-title pt-3">Student 02</h2>
                            </div>
                            <div class="col-md-4">
                                <div class="card-tools align-right">
                                    <form method="get"> 
                                        <input hidden name="counts" value="1">
                                        <button type="submit" class="btn " style="width: 40px;  border: none !important;">
                                            <i class="fas fa-times-circle text-danger"  style="font-size: 20px;"></i> 
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('profile-form') }}" method="get" id="form-01">
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
                        </form>
                    </div>

                   

                    @endif

                    <div class="col-md-12">
                        <div class="row ">
                            <div class="col-md-6  " style="text-align:left;">
                                <button class="btn btn-lg btn-primary pl-5 pr-5" onclick="window.location.href='{{ url('/profile-form') }}'" data-toggle="tab" >
                                    <i class="fas fa-arrow-left"></i> Back
                                </button>
                            </div>
                            <div class="col-md-6"  style="text-align:right;">
                                <button id="next-button" class="btn btn-lg btn-secondary pl-5 pr-5" type="submit" name="submit" data-toggle="tab" disabled >
                                    Next <i class="fas fa-arrow-right"></i>
                                </button>
                                <script>
                                    function toggleButton() {
                                        var checkBox = document.getElementById("button-required");
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
