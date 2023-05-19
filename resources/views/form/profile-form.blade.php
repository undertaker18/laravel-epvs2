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

                                           
                                           

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-2 m-3 bg-form ">
                        <h2 class="card-title pt-3">Student 01</h2>
                        <form action="/profile-form" method="post" id="form-01">
                            @csrf
                            <div id="formsContainer" class="card-body p-3">
                                <div class="row">
                                    <input type="text" value="{{ $LoggedUserPrivacy['privacy_key'] }}" name="profile_key" hidden>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                            <input type="text" class="form-control" name="fullname" placeholder="Fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputEmail" class="form-label">LV Email:</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipstatus" class="form-label">Scholarship Status:</label>
                                            <select class="form-control" name="scholarshipStatus" required>
                                                <option selected disabled>Choose...</option>
                                                <option value="Partial Scholar">Partial Scholar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputDepartment" class="form-label">Department:</label>
                                            <select class="form-control" name="department" required>
                                                <option selected disabled>Choose...</option>
                                                <option value="College">College</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputGradeCourse" class="form-label">Section/Course:</label>
                                            <select class="form-control" name="section_course" required>
                                                <option selected disabled>Choose...</option>
                                                <option value="BSIS">BSIS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputLevelYear" class="form-label">Grade/Year:</label>
                                            <select class="form-control" name="grade_year" required>
                                                <option selected disabled>Choose...</option>
                                                <option value="1st Year">1st Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipType" class="form-label">Student Type:</label>
                                            <select class="form-control" name="student_type" required>
                                                <option selected disabled>Choose...</option>
                                                <option value="New Student">New Student</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputAmount" class="form-label">Amount of Payment:</label>
                                            <input type="text" class="form-control" placeholder="Input Amount" name="amount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6" style="text-align:left;">
                                        <a href="{{ url('/profile-form') }}" class="btn btn-lg btn-primary pl-5 pr-5">
                                            <i class="fas fa-arrow-left"></i> Back
                                        </a>
                                    </div>
                                    <div class="col-md-6" style="text-align:right;">
                                        <button class="btn btn-lg btn-secondary pl-5 pr-5" type="submit" name="submit">
                                            Next <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        
    </script>

</x-form-layout>
