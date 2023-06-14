<x-form-layout>
    <style>
        .btn {
            width: 200px;
            margin-top: 15px;
            margin-bottom: 0px;
        }

        .btn-primary1 {
            background-color: green !important;
            color: white !important;
            border-radius: 5px !important;
            padding: 9px;
        }



        .btn-primary2 {
            background-color: rgb(109, 109, 109) !important;
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
            border-radius: none !important;
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

        }

        .btn-primary1 {
            background-color: rgb(118, 172, 118) !important;
            color: white !important;
            border-radius: 5px !important;

        }

        .btn-primary {
            background-color: #1266b4 !important;
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

        .col-md-5 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .flexed {
            display: flex;
        }

        .end {
            justify-content: flex-end;
        }

        .start {
            justify-content: flex-start;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .mt-5 {
            margin-top: 3rem;
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
                width: 95%;
                padding: 0px;
            }

            .main-content {
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

            .btn2 {
                width: 50% !important;
                margin-top: 10px;
                margin-bottom: 5px;
            }

            .btn {
                width: 100%;
                margin-top: 10px;
                margin-bottom: 5px;
            }

            .button-container {
                display: flex;
                justify-content: center;
                align-items: center;
            }


        }

    </style>
    <div class="card-body">
        <div class="tab-content">
            <div class="active tab-pane" id="profile">
                <div class=" main-content">
                    <div class="card">
                        @if(session('error'))
                        <div class="alert alert-danger ">
                            {{ session('error') }}
                        </div>
                        @endif
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="card-title align-left">Student Update Information</h4>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('update-profile-form', ['id' => $transactionId]) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <input type="hidden" id="privacy_notice" name="privacy_notice" value="1" class="checkbox">

                            @foreach ($transactions as $transaction)

                            @if ($transaction->fullname3 != null)

                            <div class="card-2 m-3 bg-form">
                                <h2 class="card-title pt-3 ">Student 01</h2>
                                <div id="formsContainer" class="card-body p-3">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Fullname" class="form-label"><b>1</b>. Full Name:</label>
                                                <input type="text" name="fullname1" id="searchInput"
                                                    class="form-control" value="{{ $transaction->fullname1 }}"
                                                    placeholder="Fullname" required>
                                            </div>
                                        </div>
                                                <div id="fullnameValidationMessage" class="invalid-feedback"></div>

                                                <script>
                                                    var fullnameInput = document.getElementById('searchInput');
                                                    var fullnameValidationMessage = document.getElementById(
                                                        'fullnameValidationMessage');

                                                    fullnameInput.addEventListener('input', function () {
                                                        var selectedOption = false;
                                                        var inputText = fullnameInput.value;

                                                        // Check if the input matches any of the available options
                                                        var options = document.getElementById('searchOptions')
                                                            .options;
                                                        for (var i = 0; i < options.length; i++) {
                                                            if (options[i].value === inputText) {
                                                                selectedOption = true;
                                                                break;
                                                            }
                                                        }

                                                        if (selectedOption) {
                                                            fullnameInput.classList.remove('is-invalid');
                                                            fullnameValidationMessage.textContent = '';
                                                        } else {
                                                            fullnameInput.classList.add('is-invalid');
                                                            fullnameValidationMessage.textContent =
                                                                'Select a valid option from the list.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                </script>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputScholarshipType" class="form-label"><b>2</b>. Student
                                                    Type:</label>
                                                <select id="selectInput1" class="form-control" name="student_type1"
                                                    required onchange="updateEmailValidation1(this)">
                                                    <option value="New Student"
                                                        {{ $transaction['student_type1'] == 'New Student' ? 'selected' : '' }}>
                                                        New Student</option>
                                                    <option value="Old Student"
                                                        {{ $transaction['student_type1'] == 'Old Student' ? 'selected' : '' }}>
                                                        Old Student</option>
                                                </select>
                                                <div id="studentTypeValidationMessage1" class="invalid-feedback"></div>
                                                <script>
                                                    var studentTypeSelect1 = document.getElementById('selectInput1')
                                                    var studentTypeValidationMessage1 = document.getElementById(
                                                        'studentTypeValidationMessage1');
                                                    var studentTypeClicked1 = false;

                                                    studentTypeSelect1.addEventListener('change', function () {
                                                        if (studentTypeSelect1.value !== '') {
                                                            studentTypeSelect1.classList.remove('is-invalid');
                                                            studentTypeValidationMessage1.textContent = '';
                                                        } else {
                                                            studentTypeSelect1.classList.add('is-invalid');
                                                            studentTypeValidationMessage1.textContent =
                                                                'Please select a student type.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    studentTypeSelect1.addEventListener('click', function () {
                                                        studentTypeClicked1 = true;
                                                    });

                                                    studentTypeSelect1.addEventListener('blur', function () {
                                                        if (studentTypeClicked1 && studentTypeSelect1.value ===
                                                            '') {
                                                            studentTypeSelect1.classList.add('is-invalid');
                                                            studentTypeValidationMessage1.textContent =
                                                                'Please select a student type.';
                                                        }

                                                        studentTypeClicked1 = false;
                                                    });

                                                </script>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailLabel1" class="form-label"
                                                    id="emailLabel1"><b>3</b>. Email:</label>
                                                <input type="email" class="form-control" id="email1" placeholder="Email"
                                                    name="email1" value="{{ $transaction->email1 }}" required>
                                                <div id="emailValidationMessage1" class="invalid-feedback"></div>
                                                <script>
                                                    var emailInput1 = document.getElementById('email1');
                                                    var emailLabel1 = document.getElementById('emailLabel1');
                                                    var emailValidationMessage1 = document.getElementById(
                                                        'emailValidationMessage1');

                                                    function updateEmailValidation1(selectElement) {
                                                        var studentType1 = selectElement.value;

                                                        if (studentType1 === 'New Student') {
                                                                emailInput1.setAttribute('pattern', '[a-zA-Z0-9._%+-]+@gmail.com');
                                                                emailInput1.setAttribute('placeholder', 'Email (@gmail.com)');
                                                                emailLabel1.innerHTML = '3. Email:';
                                                            } else if (studentType1 === 'Old Student') {
                                                                emailInput1.setAttribute('pattern', '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                                                emailInput1.setAttribute('placeholder', 'Email (@student.laverdad.edu.ph)');
                                                                emailLabel1.innerHTML = '3. LV Email:';
                                                            }

                                                            var labelContent = emailLabel1.innerHTML;
                                                            var boldNumberThree = '<strong>3.</strong>';
                                                            emailLabel1.innerHTML = labelContent.replace('3.', boldNumberThree);

                                                        emailInput1.value = '';
                                                        emailInput1.setCustomValidity('');
                                                        emailInput1.classList.remove('is-invalid');
                                                        emailValidationMessage1.textContent = '';
                                                        enableDisableButton();
                                                    }

                                                    emailInput1.addEventListener('input', function () {
                                                        if (emailInput1.checkValidity()) {
                                                            emailInput1.classList.remove('is-invalid');
                                                            emailValidationMessage1.textContent = '';
                                                        } else {
                                                            emailInput1.classList.add('is-invalid');
                                                            emailValidationMessage1.textContent =
                                                                'Please enter a valid email address.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                </script>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputDepartment" class="form-label"><b>4</b>. Department:</label>
                                                <select id="selectInput2" class="form-control" name="department1"
                                                    required>
                                                    <option value="Elementary"
                                                        {{ $transaction['department1'] == 'Elementary' ? 'selected' : '' }}>
                                                        Elementary</option>
                                                    <option value="Junior High School"
                                                        {{ $transaction['department1'] == 'Junior High School' ? 'selected' : '' }}>
                                                        Junior High School</option>
                                                    <option value="Senior High School"
                                                        {{ $transaction['department1'] == 'Senior High School' ? 'selected' : '' }}>
                                                        Senior High School</option>
                                                    <option value="College"
                                                        {{ $transaction['department1'] == 'College' ? 'selected' : '' }}>
                                                        College</option>
                                                </select>
                                                <div id="departmentValidationMessage" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <script>
                                            var departmentSelect = document.querySelector(
                                                'select[name="department1"]');
                                            var departmentValidationMessage = document.getElementById(
                                                'departmentValidationMessage');
                                            var departmentClicked = false;

                                            departmentSelect.addEventListener('change', function () {
                                                if (departmentSelect.value !== '') {
                                                    departmentSelect.classList.remove('is-invalid');
                                                    departmentValidationMessage.textContent = '';
                                                } else {
                                                    departmentSelect.classList.add('is-invalid');
                                                    departmentValidationMessage.textContent =
                                                        'Please select a department.';
                                                }
                                                enableDisableButton();
                                            });

                                            departmentSelect.addEventListener('click', function () {
                                                departmentClicked = true;
                                            });

                                            departmentSelect.addEventListener('blur', function () {
                                                if (departmentClicked && departmentSelect.value === '') {
                                                    departmentSelect.classList.add('is-invalid');
                                                    departmentValidationMessage.textContent =
                                                        'Please select a department.';
                                                }

                                                departmentClicked = false;
                                            });

                                        </script>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputGradeCourse"
                                                    class="form-label"><b>5</b>. Grade&Section/Course&Level:</label>
                                                    <select name="grade_year1" class="form-control" required>
                                            
                                                        @foreach ($yearlevelelem as $yearlevel)
                                                        <option data-target="Elementary"
                                                            value="{{ $yearlevel->elementary_list }}"
                                                            {{ $transaction['grade_year1'] == $yearlevel->elementary_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->elementary_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearleveljunior as $yearlevel)
                                                        <option data-target="Junior High School" 
                                                            value="{{ $yearlevel->junior_high_list }}"
                                                            {{ $transaction['grade_year1'] == $yearlevel->junior_high_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->junior_high_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearlevelsenior as $yearlevel)
                                                        <option data-target="Senior High School"
                                                            value="{{ $yearlevel->senior_high_list }}"
                                                            {{ $transaction['grade_year1'] == $yearlevel->senior_high_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->senior_high_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearlevelcollege as $yearlevel)
                                                        <option data-target="College"
                                                            value="{{ $yearlevel->college_list }}"
                                                            {{ $transaction['grade_year1'] == $yearlevel->college_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->college_list }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    
                                                <div id="yearlevelValidationMessage" class="invalid-feedback"></div>
                                                <script>
                                                    var grade_yearSelect = document.querySelector(
                                                        'select[name="grade_year1"]');
                                                    var grade_yearValidationMessage = document.getElementById(
                                                        'yearlevelValidationMessage');
                                                    var grade_yearClicked = false;

                                                    grade_yearSelect.addEventListener('change', function () {
                                                        if (grade_yearSelect.value !== '') {
                                                            grade_yearSelect.classList.remove('is-invalid');
                                                            grade_yearValidationMessage.textContent = '';
                                                        } else {
                                                            grade_yearSelect.classList.add('is-invalid');
                                                            grade_yearValidationMessage.textContent =
                                                                'Please select a year level.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    grade_yearSelect.addEventListener('click', function () {
                                                        grade_yearClicked = true;
                                                    });

                                                    grade_yearSelect.addEventListener('blur', function () {
                                                        if (grade_yearClicked && grade_yearSelect.value ===
                                                            '') {
                                                            grade_yearSelect.classList.add('is-invalid');
                                                            grade_yearValidationMessage.textContent =
                                                                'Please select a year level.';
                                                        }

                                                        grade_yearClicked = false;
                                                    });

                                                </script>
                                            </div>
                                        </div>
                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                        <script>
                                            $(document).ready(function () {
                                                // Get the second select field element
                                                var yearLevelSelect = $("select[name='grade_year1']");

                                                // Hide all options initially
                                                yearLevelSelect.find("option").hide();

                                                // Show options based on the selected department
                                                $("#selectInput2").change(function () {
                                                    var selectedDepartment = $(this).val();

                                                    // Hide all options
                                                    yearLevelSelect.find("option").hide();

                                                    // Show options based on the selected department
                                                    yearLevelSelect.find("option[data-target='" +
                                                        selectedDepartment + "']").show();

                                                    // Select the first visible option
                                                    yearLevelSelect.find("option[data-target='" +
                                                        selectedDepartment + "']").first().prop(
                                                        "selected",
                                                        true);
                                                });
                                            });

                                        </script>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputScholarshipstatus" class="form-label"><b>6</b>. Scholarship
                                                    Status:</label>
                                                <select id="selectInput5" class="form-control" name="scholarshipStatus1"
                                                    required>
                                                    <option value="Partial Scholar"
                                                        {{ $transaction['department1'] == 'Partial Scholar' ? 'selected' : '' }}>
                                                        Partial Scholar</option>

                                                    <option value="Full Scholar"
                                                        {{ $transaction['department1'] == 'Full Scholar' ? 'selected' : '' }} disabled>
                                                        Full Scholar</option>
                                                </select>
                                                <div id="scholarshipStatusValidationMessage" class="invalid-feedback">
                                                </div>
                                                <script>
                                                    var scholarshipStatusSelect = document.querySelector(
                                                        'select[name="scholarshipStatus1"]');
                                                    var scholarshipStatusValidationMessage = document.getElementById(
                                                        'scholarshipStatusValidationMessage');
                                                    var scholarshipStatusClicked = false;

                                                    scholarshipStatusSelect.addEventListener('change', function () {
                                                        if (scholarshipStatusSelect.value !== '') {
                                                            scholarshipStatusSelect.classList.remove(
                                                                'is-invalid');
                                                            scholarshipStatusValidationMessage.textContent = '';
                                                        } else {
                                                            scholarshipStatusSelect.classList.add('is-invalid');
                                                            scholarshipStatusValidationMessage.textContent =
                                                                'Please select a scholarship status.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    scholarshipStatusSelect.addEventListener('click', function () {
                                                        scholarshipStatusClicked = true;
                                                    });

                                                    scholarshipStatusSelect.addEventListener('blur', function () {
                                                        if (scholarshipStatusClicked && scholarshipStatusSelect
                                                            .value === '') {
                                                            scholarshipStatusSelect.classList.add('is-invalid');
                                                            scholarshipStatusValidationMessage.textContent =
                                                                'Please select a scholarship status.';
                                                        }

                                                        scholarshipStatusClicked = false;
                                                    });

                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-2 m-3 bg-form">
                                <div class="row " style="margin-right: 10px;">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                        <h2 class="card-title pt-3">Student 02</h2>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-tools align-right">
                                        </div>
                                    </div>
                                </div>

                                <div id="formsContainer" class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Fullname02" class="form-label"><b>1</b>. Full Name:</label>
                                                <input type="text" name="fullname2" id="searchInput02"
                                                    class="form-control" value="{{ $transaction->fullname2 }}" placeholder="Fullname"
                                                    required>
                                                
                                                <div id="fullnameValidationMessage02" class="invalid-feedback"></div>
                                                <script>
                                                    var fullnameInput02 = document.getElementById('searchInput02');
                                                    var fullnameValidationMessage02 = document.getElementById(
                                                        'fullnameValidationMessage02');

                                                    fullnameInput02.addEventListener('input', function () {
                                                        var selectedOption = false;
                                                        var inputText = fullnameInput02.value;

                                                        // Check if the input matches any of the available options
                                                        var options = document.getElementById('searchOptions02')
                                                            .options;
                                                        for (var i = 0; i < options.length; i++) {
                                                            if (options[i].value === inputText) {
                                                                selectedOption = true;
                                                                break;
                                                            }
                                                        }

                                                        if (selectedOption) {
                                                            fullnameInput02.classList.remove('is-invalid');
                                                            fullnameValidationMessage02.textContent = '';
                                                        } else {
                                                            fullnameInput02.classList.add('is-invalid');
                                                            fullnameValidationMessage02.textContent =
                                                                'Select a valid option from the list.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                </script>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputScholarshipType" class="form-label"><b>2</b>. Student
                                                    Type:</label>
                                                <select id="selectInput3" class="form-control" name="student_type2"
                                                    required onchange="updateEmailValidation3(this)">
                                                    <option value="New Student"
                                                    {{ $transaction['student_type2'] == 'New Student' ? 'selected' : '' }}>
                                                    New Student</option>
                                                <option value="Old Student"
                                                    {{ $transaction['student_type2'] == 'Old Student' ? 'selected' : '' }}>
                                                    Old Student</option>
                                                </select>
                                                <div id="studentTypeValidationMessage3" class="invalid-feedback">
                                                </div>

                                                <script>
                                                    var studentTypeSelect3 = document.getElementById('selectInput3')
                                                    var studentTypeValidationMessage3 = document.getElementById(
                                                        'studentTypeValidationMessage3');
                                                    var studentTypeClicked3 = false;

                                                    studentTypeSelect3.addEventListener('change', function () {
                                                        if (studentTypeSelect3.value !== '') {
                                                            studentTypeSelect3.classList.remove(
                                                                'is-invalid');
                                                            studentTypeValidationMessage3.textContent = '';
                                                        } else {
                                                            studentTypeSelect3.classList.add('is-invalid');
                                                            studentTypeValidationMessage3.textContent =
                                                                'Please select a student type.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    studentTypeSelect3.addEventListener('click', function () {
                                                        studentTypeClicked3 = true;
                                                    });

                                                    studentTypeSelect3.addEventListener('blur', function () {
                                                        if (studentTypeClicked3 && studentTypeSelect3
                                                            .value ===
                                                            '') {
                                                            studentTypeSelect3.classList.add('is-invalid');
                                                            studentTypeValidationMessage3.textContent =
                                                                'Please select a student type.';
                                                        }

                                                        studentTypeClicked3 = false;
                                                    });

                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailLabel3" class="form-label"
                                                    id="emailLabel3"><b>3</b>. Email:</label>
                                                <input type="email" class="form-control" id="email3" placeholder="Email"
                                                    name="email2"  value="{{ $transaction->email1 }}" required>
                                                <div id="emailValidationMessage3" class="invalid-feedback"></div>

                                                <script>
                                                    var emailInput3 = document.getElementById('email3');
                                                    var emailLabel3 = document.getElementById('emailLabel3');
                                                    var emailValidationMessage3 = document.getElementById(
                                                        'emailValidationMessage3');

                                                    function updateEmailValidation3(selectElement) {
                                                        var studentType3 = selectElement.value;

                                                        if (studentType3 === 'New Student') {
                                                                emailInput3.setAttribute('pattern', '[a-zA-Z0-9._%+-]+@gmail.com');
                                                                emailInput3.setAttribute('placeholder', 'Email (@gmail.com)');
                                                                emailLabel3.innerHTML = '3. Email:';
                                                            } else if (studentType3 === 'Old Student') {
                                                                emailInput3.setAttribute('pattern', '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                                                emailInput3.setAttribute('placeholder', 'Email (@student.laverdad.edu.ph)');
                                                                emailLabel3.innerHTML = '3. LV Email:';
                                                            }

                                                            var labelContent = emailLabel3.innerHTML;
                                                            var boldNumberThree = '<strong>3.</strong>';
                                                            emailLabel3.innerHTML = labelContent.replace('3.', boldNumberThree);

                                                        emailInput3.value = '';
                                                        emailInput3.setCustomValidity('');
                                                        emailInput3.classList.remove('is-invalid');
                                                        emailValidationMessage3.textContent = '';
                                                        enableDisableButton();
                                                    }

                                                    emailInput3.addEventListener('input', function () {
                                                        if (emailInput3.checkValidity()) {
                                                            emailInput3.classList.remove('is-invalid');
                                                            emailValidationMessage3.textContent = '';
                                                        } else {
                                                            emailInput3.classList.add('is-invalid');
                                                            emailValidationMessage3.textContent =
                                                                'Please enter a valid email address.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                </script>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputDepartment03" class="form-label"><b>4</b>. Department:</label>
                                                <select id="selectInput203" class="form-control" name="department2"
                                                    required>
                                                    <option value="Elementary"
                                                    {{ $transaction['department2'] == 'Elementary' ? 'selected' : '' }}>
                                                    Elementary</option>
                                                <option value="Junior High School"
                                                    {{ $transaction['department2'] == 'Junior High School' ? 'selected' : '' }}>
                                                    Junior High School</option>
                                                <option value="Senior High School"
                                                    {{ $transaction['department2'] == 'Senior High School' ? 'selected' : '' }}>
                                                    Senior High School</option>
                                                <option value="College"
                                                    {{ $transaction['department2'] == 'College' ? 'selected' : '' }}>
                                                    College</option>
                                                </select>
                                                <div id="departmentValidationMessage03" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <script>
                                            var departmentSelect03 = document.getElementById('selectInput203');
                                            var departmentValidationMessage03 = document.getElementById(
                                                'departmentValidationMessage03');
                                            var departmentClicked03 = false;

                                            departmentSelect03.addEventListener('change', function () {
                                                if (departmentSelect03.value !== '') {
                                                    departmentSelect03.classList.remove('is-invalid');
                                                    departmentValidationMessage03.textContent = '';
                                                } else {
                                                    departmentSelect03.classList.add('is-invalid');
                                                    departmentValidationMessage03.textContent =
                                                        'Please select a department.';
                                                }
                                                enableDisableButton();
                                            });

                                            departmentSelect03.addEventListener('click', function () {
                                                departmentClicked03 = true;
                                            });

                                            departmentSelect03.addEventListener('blur', function () {
                                                if (departmentClicked03 && departmentSelect03.value === '') {
                                                    departmentSelect03.classList.add('is-invalid');
                                                    departmentValidationMessage03.textContent =
                                                        'Please select a department.';
                                                }

                                                departmentClicked03 = false;
                                            });

                                        </script>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputGradeCourse03"
                                                    class="form-label"><b>5</b>. Grade&Section/Course&Level:</label>
                                                <select name="grade_year2" id="grade-year03" class="form-control"
                                                    required>
                                                        @foreach ($yearlevelelem as $yearlevel)
                                                        <option data-target="Elementary"
                                                            value="{{ $yearlevel->elementary_list }}"
                                                            {{ $transaction['grade_year2'] == $yearlevel->elementary_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->elementary_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearleveljunior as $yearlevel)
                                                        <option data-target="Junior High School" 
                                                            value="{{ $yearlevel->junior_high_list }}"
                                                            {{ $transaction['grade_year2'] == $yearlevel->junior_high_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->junior_high_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearlevelsenior as $yearlevel)
                                                        <option data-target="Senior High School"
                                                            value="{{ $yearlevel->senior_high_list }}"
                                                            {{ $transaction['grade_year2'] == $yearlevel->senior_high_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->senior_high_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearlevelcollege as $yearlevel)
                                                        <option data-target="College"
                                                            value="{{ $yearlevel->college_list }}"
                                                            {{ $transaction['grade_year2'] == $yearlevel->college_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->college_list }}
                                                        </option>
                                                        @endforeach
                                                </select>
                                                <div id="yearlevelValidationMessage031" class="invalid-feedback"></div>
                                                <script>
                                                    var grade_yearSelect03 = document.getElementById('grade-year03');
                                                    var grade_yearValidationMessage03 = document.getElementById(
                                                        'yearlevelValidationMessage031');
                                                    var grade_yearClicked03 = false;

                                                    grade_yearSelect03.addEventListener('change', function () {
                                                        if (grade_yearSelect03.value !== '') {
                                                            grade_yearSelect03.classList.remove('is-invalid');
                                                            grade_yearValidationMessage031.textContent = '';
                                                        } else {
                                                            grade_yearSelect03.classList.add('is-invalid');
                                                            grade_yearValidationMessage031.textContent =
                                                                'Please select a year level.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    grade_yearSelect03.addEventListener('click', function () {
                                                        grade_yearClicked03 = true;
                                                    });

                                                    grade_yearSelect03.addEventListener('blur', function () {
                                                        if (grade_yearClicked03 && grade_yearSelect031.value ===
                                                            '') {
                                                            grade_yearSelect03.classList.add('is-invalid');
                                                            grade_yearValidationMessage031.textContent =
                                                                'Please select a year level.';
                                                        }

                                                        grade_yearClicked03 = false;
                                                    });

                                                </script>
                                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                <script>
                                                    $(document).ready(function () {
                                                        // Get the third select field element
                                                        var yearLevelSelect03 = $("#grade-year03");

                                                        // Hide all options initially
                                                        yearLevelSelect03.find("option").hide();

                                                        // Show options based on the selected department
                                                        $("#selectInput203").change(function () {
                                                            var selectedDepartment03 = $(this).val();

                                                            // Hide all options
                                                            yearLevelSelect03.find("option").hide();

                                                            // Show options based on the selected department
                                                            yearLevelSelect03.find(
                                                                "option[data-target='" +
                                                                selectedDepartment03 + "']").show();

                                                            // Select the first visible option
                                                            yearLevelSelect03.find(
                                                                    "option[data-target='" +
                                                                    selectedDepartment03 + "']").first()
                                                                .prop("selected", true);
                                                        });
                                                    });

                                                </script>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputScholarshipstatus03" class="form-label"><b>6</b>. Scholarship
                                                    Status:</label>
                                                <select id="selectInput503" class="form-control"
                                                    name="scholarshipStatus2" required>
                                                    <option value="Partial Scholar"
                                                    {{ $transaction['department1'] == 'Partial Scholar' ? 'selected' : '' }}>
                                                    Partial Scholar</option>

                                                <option value="Full Scholar"
                                                    {{ $transaction['department1'] == 'Full Scholar' ? 'selected' : '' }} disabled>
                                                    Full Scholar</option>
                                                </select>
                                                <div id="scholarshipStatusValidationMessage03" class="invalid-feedback">
                                                </div>
                                                <script>
                                                    var scholarshipStatusSelect03 = document.getElementById(
                                                        'selectInput503');
                                                    var scholarshipStatusValidationMessage03 = document.getElementById(
                                                        'scholarshipStatusValidationMessage03');
                                                    var scholarshipStatusClicked03 = false;

                                                    scholarshipStatusSelect03.addEventListener('change', function () {
                                                        if (scholarshipStatusSelect03.value !== '') {
                                                            scholarshipStatusSelect03.classList.remove(
                                                                'is-invalid');
                                                            scholarshipStatusValidationMessage03.textContent =
                                                                '';
                                                        } else {
                                                            scholarshipStatusSelect03.classList.add(
                                                                'is-invalid');
                                                            scholarshipStatusValidationMessage03.textContent =
                                                                'Please select a scholarship status.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    scholarshipStatusSelect03.addEventListener('click', function () {
                                                        scholarshipStatusClicked03 = true;
                                                    });

                                                    scholarshipStatusSelect03.addEventListener('blur', function () {
                                                        if (scholarshipStatusClicked03 &&
                                                            scholarshipStatusSelect03.value === '') {
                                                            scholarshipStatusSelect03.classList.add(
                                                                'is-invalid');
                                                            scholarshipStatusValidationMessage03.textContent =
                                                                'Please select a scholarship status.';
                                                        }

                                                        scholarshipStatusClicked03 = false;
                                                    });

                                                </script>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="card-2 m-3 bg-form">
                                <div class="row " style="margin-right: 10px;">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                        <h2 class="card-title pt-3">Student 03</h2>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-tools align-right">

                                        </div>
                                    </div>
                                </div>

                                <div id="formsContainer" class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Fullname04" class="form-label"><b>1</b>. Full Name:</label>
                                                <input type="text" name="fullname3" id="searchInput04"
                                                    class="form-control" value="{{ $transaction->fullname3 }}" placeholder="Fullname"
                                                     required>
                                               

                                                <div id="fullnameValidationMessage04" class="invalid-feedback"></div>
                                                <script>
                                                    var fullnameInput04 = document.getElementById('searchInput04');
                                                    var fullnameValidationMessage04 = document.getElementById(
                                                        'fullnameValidationMessage04');

                                                    fullnameInput04.addEventListener('input', function () {
                                                        var selectedOption = false;
                                                        var inputText = fullnameInput04.value;

                                                        // Check if the input matches any of the available options
                                                        var options = document.getElementById('searchOptions04')
                                                            .options;
                                                        for (var i = 0; i < options.length; i++) {
                                                            if (options[i].value === inputText) {
                                                                selectedOption = true;
                                                                break;
                                                            }
                                                        }

                                                        if (selectedOption) {
                                                            fullnameInput04.classList.remove('is-invalid');
                                                            fullnameValidationMessage04.textContent = '';
                                                        } else {
                                                            fullnameInput04.classList.add('is-invalid');
                                                            fullnameValidationMessage04.textContent =
                                                                'Select a valid option from the list.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                </script>


                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputScholarshipType" class="form-label"><b>2</b>. Student
                                                    Type:</label>
                                                <select id="selectInput304" class="form-control" name="student_type3"
                                                    required onchange="updateEmailValidation304(this)">
                                                    <option value="New Student"
                                                    {{ $transaction['student_type3'] == 'New Student' ? 'selected' : '' }}>
                                                    New Student</option>
                                                <option value="Old Student"
                                                    {{ $transaction['student_type3'] == 'Old Student' ? 'selected' : '' }}>
                                                    Old Student</option>
                                                </select>
                                                <div id="studentTypeValidationMessage304" class="invalid-feedback">
                                                </div>

                                                <script>
                                                    var studentTypeSelect304 = document.getElementById(
                                                        'selectInput304');
                                                    var studentTypeValidationMessage304 = document.getElementById(
                                                        'studentTypeValidationMessage304');
                                                    var studentTypeClicked304 = false;

                                                    studentTypeSelect304.addEventListener('change', function () {
                                                        if (studentTypeSelect304.value !== '') {
                                                            studentTypeSelect304.classList.remove('is-invalid');
                                                            studentTypeValidationMessage304.textContent = '';
                                                        } else {
                                                            studentTypeSelect304.classList.add('is-invalid');
                                                            studentTypeValidationMessage304.textContent =
                                                                'Please select a student type.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    studentTypeSelect304.addEventListener('click', function () {
                                                        studentTypeClicked304 = true;
                                                    });

                                                    studentTypeSelect304.addEventListener('blur', function () {
                                                        if (studentTypeClicked304 && studentTypeSelect304
                                                            .value === '') {
                                                            studentTypeSelect304.classList.add('is-invalid');
                                                            studentTypeValidationMessage304.textContent =
                                                                'Please select a student type.';
                                                        }

                                                        studentTypeClicked304 = false;
                                                    });

                                                </script>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailLabel304" class="form-label"
                                                    id="emailLabel304"><b>3</b>. Email:</label>
                                                <input type="email" class="form-control" id="email304"
                                                    placeholder="Email" name="email3" value="{{ $transaction->email3 }}" required>
                                                <div id="emailValidationMessage304" class="invalid-feedback"></div>

                                                <script>
                                                    var emailInput304 = document.getElementById('email304');
                                                    var emailLabel304 = document.getElementById('emailLabel304');
                                                    var emailValidationMessage304 = document.getElementById(
                                                        'emailValidationMessage304');

                                                    function updateEmailValidation304(selectElement) {
                                                        var studentType304 = selectElement.value;

                                                        if (studentType304 === 'New Student') {
                                                                emailInput304.setAttribute('pattern', '[a-zA-Z0-9._%+-]+@gmail.com');
                                                                emailInput304.setAttribute('placeholder', 'Email (@gmail.com)');
                                                                emailLabel304.innerHTML = '3. Email:';
                                                            } else if (studentType304 === 'Old Student') {
                                                                emailInput304.setAttribute('pattern', '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                                                emailInput304.setAttribute('placeholder', 'Email (@student.laverdad.edu.ph)');
                                                                emailLabel304.innerHTML = '3. LV Email:';
                                                            }

                                                            var labelContent = emailLabel304.innerHTML;
                                                            var boldNumberThree = '<strong>3.</strong>';
                                                            emailLabel304.innerHTML = labelContent.replace('3.', boldNumberThree);

                                                        emailInput304.value = '';
                                                        emailInput304.setCustomValidity('');
                                                        emailInput304.classList.remove('is-invalid');
                                                        emailValidationMessage304.textContent = '';
                                                        enableDisableButton();
                                                    }

                                                    emailInput304.addEventListener('input', function () {
                                                        if (emailInput304.checkValidity()) {
                                                            emailInput304.classList.remove('is-invalid');
                                                            emailValidationMessage304.textContent = '';
                                                        } else {
                                                            emailInput304.classList.add('is-invalid');
                                                            emailValidationMessage304.textContent =
                                                                'Please enter a valid email address.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                </script>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputDepartment04" class="form-label"><b>4</b>. Department:</label>
                                                <select id="selectInput204" class="form-control" name="department3"
                                                    required>
                                                    <option value="Elementary"
                                                    {{ $transaction['department3'] == 'Elementary' ? 'selected' : '' }}>
                                                        Elementary</option>
                                                    <option value="Junior High School"
                                                        {{ $transaction['department3'] == 'Junior High School' ? 'selected' : '' }}>
                                                        Junior High School</option>
                                                    <option value="Senior High School"
                                                        {{ $transaction['department3'] == 'Senior High School' ? 'selected' : '' }}>
                                                        Senior High School</option>
                                                    <option value="College"
                                                        {{ $transaction['department3'] == 'College' ? 'selected' : '' }}>
                                                        College</option>
                                                </select>
                                                <div id="departmentValidationMessage04" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <script>
                                            var departmentSelect04 = document.getElementById('selectInput204');
                                            var departmentValidationMessage04 = document.getElementById(
                                                'departmentValidationMessage04');
                                            var departmentClicked04 = false;

                                            departmentSelect04.addEventListener('change', function () {
                                                if (departmentSelect04.value !== '') {
                                                    departmentSelect04.classList.remove('is-invalid');
                                                    departmentValidationMessage04.textContent = '';
                                                } else {
                                                    departmentSelect04.classList.add('is-invalid');
                                                    departmentValidationMessage04.textContent =
                                                        'Please select a department.';
                                                }
                                                enableDisableButton();
                                            });

                                            departmentSelect04.addEventListener('click', function () {
                                                departmentClicked04 = true;
                                            });

                                            departmentSelect04.addEventListener('blur', function () {
                                                if (departmentClicked04 && departmentSelect04.value === '') {
                                                    departmentSelect04.classList.add('is-invalid');
                                                    departmentValidationMessage04.textContent =
                                                        'Please select a department.';
                                                }

                                                departmentClicked04 = false;
                                            });

                                        </script>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputGradeCourse04"
                                                    class="form-label"><b>5</b>. Grade&Section/Course&Level:</label>
                                                <select name="grade_year3" id="grade-year04" class="form-control"
                                                    required>
                                                    @foreach ($yearlevelelem as $yearlevel)
                                                        <option data-target="Elementary"
                                                            value="{{ $yearlevel->elementary_list }}"
                                                            {{ $transaction['grade_year3'] == $yearlevel->elementary_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->elementary_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearleveljunior as $yearlevel)
                                                        <option data-target="Junior High School" 
                                                            value="{{ $yearlevel->junior_high_list }}"
                                                            {{ $transaction['grade_year3'] == $yearlevel->junior_high_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->junior_high_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearlevelsenior as $yearlevel)
                                                        <option data-target="Senior High School"
                                                            value="{{ $yearlevel->senior_high_list }}"
                                                            {{ $transaction['grade_year3'] == $yearlevel->senior_high_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->senior_high_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearlevelcollege as $yearlevel)
                                                        <option data-target="College"
                                                            value="{{ $yearlevel->college_list }}"
                                                            {{ $transaction['grade_year3'] == $yearlevel->college_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->college_list }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div id="yearlevelValidationMessage04" class="invalid-feedback"></div>
                                                <script>
                                                    var grade_yearSelect04 = document.getElementById('grade-year04');
                                                    var grade_yearValidationMessage04 = document.getElementById(
                                                        'yearlevelValidationMessage04');
                                                    var grade_yearClicked04 = false;

                                                    grade_yearSelect04.addEventListener('change', function () {
                                                        if (grade_yearSelect04.value !== '') {
                                                            grade_yearSelect04.classList.remove('is-invalid');
                                                            yearlevelValidationMessage04.textContent = '';
                                                        } else {
                                                            grade_yearSelect04.classList.add('is-invalid');
                                                            yearlevelValidationMessage04.textContent =
                                                                'Please select a year level.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    grade_yearSelect04.addEventListener('click', function () {
                                                        grade_yearClicked04 = true;
                                                    });

                                                    grade_yearSelect04.addEventListener('blur', function () {
                                                        if (grade_yearClicked04 && grade_yearSelect04.value ===
                                                            '') {
                                                            grade_yearSelect04.classList.add('is-invalid');
                                                            yearlevelValidationMessage04.textContent =
                                                                'Please select a year level.';
                                                        }

                                                        grade_yearClicked04 = false;
                                                    });

                                                </script>
                                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                <script>
                                                    $(document).ready(function () {
                                                        // Get the fourth select field element
                                                        var yearLevelSelect04 = $("#grade-year04");

                                                        // Hide all options initially
                                                        yearLevelSelect04.find("option").hide();

                                                        // Show options based on the selected department
                                                        $("#selectInput204").change(function () {
                                                            var selectedDepartment04 = $(this).val();

                                                            // Hide all options
                                                            yearLevelSelect04.find("option").hide();

                                                            // Show options based on the selected department
                                                            yearLevelSelect04.find(
                                                                "option[data-target='" +
                                                                selectedDepartment04 + "']").show();

                                                            // Select the first visible option
                                                            yearLevelSelect04.find(
                                                                    "option[data-target='" +
                                                                    selectedDepartment04 + "']").first()
                                                                .prop("selected", true);
                                                        });
                                                    });

                                                </script>


                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputScholarshipstatus04" class="form-label"><b>6</b>. Scholarship
                                                    Status:</label>
                                                <select id="selectInput504" class="form-control"
                                                    name="scholarshipStatus3" required>
                                                    <option value="Partial Scholar"
                                                        {{ $transaction['department3'] == 'Partial Scholar' ? 'selected' : '' }}>
                                                        Partial Scholar</option>

                                                    <option value="Full Scholar"
                                                        {{ $transaction['department3'] == 'Full Scholar' ? 'selected' : '' }} disabled>
                                                        Full Scholar</option>
                                                </select>
                                                <div id="scholarshipStatusValidationMessage04" class="invalid-feedback">
                                                </div>
                                                <script>
                                                    var scholarshipStatusSelect04 = document.getElementById(
                                                        'selectInput504');
                                                    var scholarshipStatusValidationMessage04 = document.getElementById(
                                                        'scholarshipStatusValidationMessage04');
                                                    var scholarshipStatusClicked04 = false;

                                                    scholarshipStatusSelect04.addEventListener('change', function () {
                                                        if (scholarshipStatusSelect04.value !== '') {
                                                            scholarshipStatusSelect04.classList.remove(
                                                                'is-invalid');
                                                            scholarshipStatusValidationMessage04.textContent =
                                                                '';
                                                        } else {
                                                            scholarshipStatusSelect04.classList.add(
                                                                'is-invalid');
                                                            scholarshipStatusValidationMessage04.textContent =
                                                                'Please select a scholarship status.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    scholarshipStatusSelect04.addEventListener('click', function () {
                                                        scholarshipStatusClicked04 = true;
                                                    });

                                                    scholarshipStatusSelect04.addEventListener('blur', function () {
                                                        if (scholarshipStatusClicked04 &&
                                                            scholarshipStatusSelect04.value === '') {
                                                            scholarshipStatusSelect04.classList.add(
                                                                'is-invalid');
                                                            scholarshipStatusValidationMessage04.textContent =
                                                                'Please select a scholarship status.';
                                                        }

                                                        scholarshipStatusClicked04 = false;
                                                    });

                                                </script>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @elseif ($transaction->fullname2 != null)

                            <div class="card-2 m-3 bg-form">
                                <h2 class="card-title pt-3 ">Student 01</h2>
                                <div id="formsContainer" class="card-body p-3">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Fullname" class="form-label"><b>1</b>. Full Name:</label>
                                                <input type="text" name="fullname1" id="searchInput"
                                                    class="form-control" value="{{ $transaction->fullname1 }}"
                                                    placeholder="Fullname" required>
                                            </div>
                                        </div>
                                                <div id="fullnameValidationMessage" class="invalid-feedback"></div>

                                                <script>
                                                    var fullnameInput = document.getElementById('searchInput');
                                                    var fullnameValidationMessage = document.getElementById(
                                                        'fullnameValidationMessage');

                                                    fullnameInput.addEventListener('input', function () {
                                                        var selectedOption = false;
                                                        var inputText = fullnameInput.value;

                                                        // Check if the input matches any of the available options
                                                        var options = document.getElementById('searchOptions')
                                                            .options;
                                                        for (var i = 0; i < options.length; i++) {
                                                            if (options[i].value === inputText) {
                                                                selectedOption = true;
                                                                break;
                                                            }
                                                        }

                                                        if (selectedOption) {
                                                            fullnameInput.classList.remove('is-invalid');
                                                            fullnameValidationMessage.textContent = '';
                                                        } else {
                                                            fullnameInput.classList.add('is-invalid');
                                                            fullnameValidationMessage.textContent =
                                                                'Select a valid option from the list.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                </script>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputScholarshipType" class="form-label"><b>2</b>. Student
                                                    Type:</label>
                                                <select id="selectInput1" class="form-control" name="student_type1"
                                                    required onchange="updateEmailValidation1(this)">
                                                    <option value="New Student"
                                                        {{ $transaction['student_type1'] == 'New Student' ? 'selected' : '' }}>
                                                        New Student</option>
                                                    <option value="Old Student"
                                                        {{ $transaction['student_type1'] == 'Old Student' ? 'selected' : '' }}>
                                                        Old Student</option>
                                                </select>
                                                <div id="studentTypeValidationMessage1" class="invalid-feedback"></div>
                                                <script>
                                                    var studentTypeSelect1 = document.getElementById('selectInput1')
                                                    var studentTypeValidationMessage1 = document.getElementById(
                                                        'studentTypeValidationMessage1');
                                                    var studentTypeClicked1 = false;

                                                    studentTypeSelect1.addEventListener('change', function () {
                                                        if (studentTypeSelect1.value !== '') {
                                                            studentTypeSelect1.classList.remove('is-invalid');
                                                            studentTypeValidationMessage1.textContent = '';
                                                        } else {
                                                            studentTypeSelect1.classList.add('is-invalid');
                                                            studentTypeValidationMessage1.textContent =
                                                                'Please select a student type.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    studentTypeSelect1.addEventListener('click', function () {
                                                        studentTypeClicked1 = true;
                                                    });

                                                    studentTypeSelect1.addEventListener('blur', function () {
                                                        if (studentTypeClicked1 && studentTypeSelect1.value ===
                                                            '') {
                                                            studentTypeSelect1.classList.add('is-invalid');
                                                            studentTypeValidationMessage1.textContent =
                                                                'Please select a student type.';
                                                        }

                                                        studentTypeClicked1 = false;
                                                    });

                                                </script>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailLabel1" class="form-label"
                                                    id="emailLabel1"><b>3</b>. Email:</label>
                                                <input type="email" class="form-control" id="email1" placeholder="Email"
                                                    name="email1" value="{{ $transaction->email1 }}" required>
                                                <div id="emailValidationMessage1" class="invalid-feedback"></div>
                                                <script>
                                                    var emailInput1 = document.getElementById('email1');
                                                    var emailLabel1 = document.getElementById('emailLabel1');
                                                    var emailValidationMessage1 = document.getElementById(
                                                        'emailValidationMessage1');

                                                    function updateEmailValidation1(selectElement) {
                                                        var studentType1 = selectElement.value;

                                                        if (studentType1 === 'New Student') {
                                                                emailInput1.setAttribute('pattern', '[a-zA-Z0-9._%+-]+@gmail.com');
                                                                emailInput1.setAttribute('placeholder', 'Email (@gmail.com)');
                                                                emailLabel1.innerHTML = '3. Email:';
                                                            } else if (studentType1 === 'Old Student') {
                                                                emailInput1.setAttribute('pattern', '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                                                emailInput1.setAttribute('placeholder', 'Email (@student.laverdad.edu.ph)');
                                                                emailLabel1.innerHTML = '3. LV Email:';
                                                            }

                                                            var labelContent = emailLabel1.innerHTML;
                                                            var boldNumberThree = '<strong>3.</strong>';
                                                            emailLabel1.innerHTML = labelContent.replace('3.', boldNumberThree);

                                                        emailInput1.value = '';
                                                        emailInput1.setCustomValidity('');
                                                        emailInput1.classList.remove('is-invalid');
                                                        emailValidationMessage1.textContent = '';
                                                        enableDisableButton();
                                                    }

                                                    emailInput1.addEventListener('input', function () {
                                                        if (emailInput1.checkValidity()) {
                                                            emailInput1.classList.remove('is-invalid');
                                                            emailValidationMessage1.textContent = '';
                                                        } else {
                                                            emailInput1.classList.add('is-invalid');
                                                            emailValidationMessage1.textContent =
                                                                'Please enter a valid email address.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                </script>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputDepartment" class="form-label"><b>4</b>. Department:</label>
                                                <select id="selectInput2" class="form-control" name="department1"
                                                    required>
                                                    <option value="Elementary"
                                                        {{ $transaction['department1'] == 'Elementary' ? 'selected' : '' }}>
                                                        Elementary</option>
                                                    <option value="Junior High School"
                                                        {{ $transaction['department1'] == 'Junior High School' ? 'selected' : '' }}>
                                                        Junior High School</option>
                                                    <option value="Senior High School"
                                                        {{ $transaction['department1'] == 'Senior High School' ? 'selected' : '' }}>
                                                        Senior High School</option>
                                                    <option value="College"
                                                        {{ $transaction['department1'] == 'College' ? 'selected' : '' }}>
                                                        College</option>
                                                </select>
                                                <div id="departmentValidationMessage" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <script>
                                            var departmentSelect = document.querySelector(
                                                'select[name="department1"]');
                                            var departmentValidationMessage = document.getElementById(
                                                'departmentValidationMessage');
                                            var departmentClicked = false;

                                            departmentSelect.addEventListener('change', function () {
                                                if (departmentSelect.value !== '') {
                                                    departmentSelect.classList.remove('is-invalid');
                                                    departmentValidationMessage.textContent = '';
                                                } else {
                                                    departmentSelect.classList.add('is-invalid');
                                                    departmentValidationMessage.textContent =
                                                        'Please select a department.';
                                                }
                                                enableDisableButton();
                                            });

                                            departmentSelect.addEventListener('click', function () {
                                                departmentClicked = true;
                                            });

                                            departmentSelect.addEventListener('blur', function () {
                                                if (departmentClicked && departmentSelect.value === '') {
                                                    departmentSelect.classList.add('is-invalid');
                                                    departmentValidationMessage.textContent =
                                                        'Please select a department.';
                                                }

                                                departmentClicked = false;
                                            });

                                        </script>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputGradeCourse"
                                                    class="form-label"><b>5</b>. Grade&Section/Course&Level:</label>
                                                    <select name="grade_year1" class="form-control" required>
                                            
                                                        @foreach ($yearlevelelem as $yearlevel)
                                                        <option data-target="Elementary"
                                                            value="{{ $yearlevel->elementary_list }}"
                                                            {{ $transaction['grade_year1'] == $yearlevel->elementary_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->elementary_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearleveljunior as $yearlevel)
                                                        <option data-target="Junior High School" 
                                                            value="{{ $yearlevel->junior_high_list }}"
                                                            {{ $transaction['grade_year1'] == $yearlevel->junior_high_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->junior_high_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearlevelsenior as $yearlevel)
                                                        <option data-target="Senior High School"
                                                            value="{{ $yearlevel->senior_high_list }}"
                                                            {{ $transaction['grade_year1'] == $yearlevel->senior_high_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->senior_high_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearlevelcollege as $yearlevel)
                                                        <option data-target="College"
                                                            value="{{ $yearlevel->college_list }}"
                                                            {{ $transaction['grade_year1'] == $yearlevel->college_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->college_list }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    
                                                <div id="yearlevelValidationMessage" class="invalid-feedback"></div>
                                                <script>
                                                    var grade_yearSelect = document.querySelector(
                                                        'select[name="grade_year1"]');
                                                    var grade_yearValidationMessage = document.getElementById(
                                                        'yearlevelValidationMessage');
                                                    var grade_yearClicked = false;

                                                    grade_yearSelect.addEventListener('change', function () {
                                                        if (grade_yearSelect.value !== '') {
                                                            grade_yearSelect.classList.remove('is-invalid');
                                                            grade_yearValidationMessage.textContent = '';
                                                        } else {
                                                            grade_yearSelect.classList.add('is-invalid');
                                                            grade_yearValidationMessage.textContent =
                                                                'Please select a year level.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    grade_yearSelect.addEventListener('click', function () {
                                                        grade_yearClicked = true;
                                                    });

                                                    grade_yearSelect.addEventListener('blur', function () {
                                                        if (grade_yearClicked && grade_yearSelect.value ===
                                                            '') {
                                                            grade_yearSelect.classList.add('is-invalid');
                                                            grade_yearValidationMessage.textContent =
                                                                'Please select a year level.';
                                                        }

                                                        grade_yearClicked = false;
                                                    });

                                                </script>
                                            </div>
                                        </div>
                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                        <script>
                                            $(document).ready(function () {
                                                // Get the second select field element
                                                var yearLevelSelect = $("select[name='grade_year1']");

                                                // Hide all options initially
                                                yearLevelSelect.find("option").hide();

                                                // Show options based on the selected department
                                                $("#selectInput2").change(function () {
                                                    var selectedDepartment = $(this).val();

                                                    // Hide all options
                                                    yearLevelSelect.find("option").hide();

                                                    // Show options based on the selected department
                                                    yearLevelSelect.find("option[data-target='" +
                                                        selectedDepartment + "']").show();

                                                    // Select the first visible option
                                                    yearLevelSelect.find("option[data-target='" +
                                                        selectedDepartment + "']").first().prop(
                                                        "selected",
                                                        true);
                                                });
                                            });

                                        </script>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputScholarshipstatus" class="form-label"><b>6</b>. Scholarship
                                                    Status:</label>
                                                <select id="selectInput5" class="form-control" name="scholarshipStatus1"
                                                    required>
                                                    <option value="Partial Scholar"
                                                        {{ $transaction['department1'] == 'Partial Scholar' ? 'selected' : '' }}>
                                                        Partial Scholar</option>

                                                    <option value="Full Scholar"
                                                        {{ $transaction['department1'] == 'Full Scholar' ? 'selected' : '' }} disabled>
                                                        Full Scholar</option>
                                                </select>
                                                <div id="scholarshipStatusValidationMessage" class="invalid-feedback">
                                                </div>
                                                <script>
                                                    var scholarshipStatusSelect = document.querySelector(
                                                        'select[name="scholarshipStatus1"]');
                                                    var scholarshipStatusValidationMessage = document.getElementById(
                                                        'scholarshipStatusValidationMessage');
                                                    var scholarshipStatusClicked = false;

                                                    scholarshipStatusSelect.addEventListener('change', function () {
                                                        if (scholarshipStatusSelect.value !== '') {
                                                            scholarshipStatusSelect.classList.remove(
                                                                'is-invalid');
                                                            scholarshipStatusValidationMessage.textContent = '';
                                                        } else {
                                                            scholarshipStatusSelect.classList.add('is-invalid');
                                                            scholarshipStatusValidationMessage.textContent =
                                                                'Please select a scholarship status.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    scholarshipStatusSelect.addEventListener('click', function () {
                                                        scholarshipStatusClicked = true;
                                                    });

                                                    scholarshipStatusSelect.addEventListener('blur', function () {
                                                        if (scholarshipStatusClicked && scholarshipStatusSelect
                                                            .value === '') {
                                                            scholarshipStatusSelect.classList.add('is-invalid');
                                                            scholarshipStatusValidationMessage.textContent =
                                                                'Please select a scholarship status.';
                                                        }

                                                        scholarshipStatusClicked = false;
                                                    });

                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-2 m-3 bg-form">
                                <div class="row " style="margin-right: 10px;">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                        <h2 class="card-title pt-3">Student 02</h2>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-tools align-right">
                                        </div>
                                    </div>
                                </div>

                                <div id="formsContainer" class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Fullname02" class="form-label"><b>1</b>. Full Name:</label>
                                                <input type="text" name="fullname2" id="searchInput02"
                                                    class="form-control" value="{{ $transaction->fullname2 }}" placeholder="Fullname"
                                                    required>
                                                
                                                <div id="fullnameValidationMessage02" class="invalid-feedback"></div>
                                                <script>
                                                    var fullnameInput02 = document.getElementById('searchInput02');
                                                    var fullnameValidationMessage02 = document.getElementById(
                                                        'fullnameValidationMessage02');

                                                    fullnameInput02.addEventListener('input', function () {
                                                        var selectedOption = false;
                                                        var inputText = fullnameInput02.value;

                                                        // Check if the input matches any of the available options
                                                        var options = document.getElementById('searchOptions02')
                                                            .options;
                                                        for (var i = 0; i < options.length; i++) {
                                                            if (options[i].value === inputText) {
                                                                selectedOption = true;
                                                                break;
                                                            }
                                                        }

                                                        if (selectedOption) {
                                                            fullnameInput02.classList.remove('is-invalid');
                                                            fullnameValidationMessage02.textContent = '';
                                                        } else {
                                                            fullnameInput02.classList.add('is-invalid');
                                                            fullnameValidationMessage02.textContent =
                                                                'Select a valid option from the list.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                </script>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputScholarshipType" class="form-label"><b>2</b>. Student
                                                    Type:</label>
                                                <select id="selectInput3" class="form-control" name="student_type2"
                                                    required onchange="updateEmailValidation3(this)">
                                                    <option value="New Student"
                                                    {{ $transaction['student_type2'] == 'New Student' ? 'selected' : '' }}>
                                                    New Student</option>
                                                <option value="Old Student"
                                                    {{ $transaction['student_type2'] == 'Old Student' ? 'selected' : '' }}>
                                                    Old Student</option>
                                                </select>
                                                <div id="studentTypeValidationMessage3" class="invalid-feedback">
                                                </div>

                                                <script>
                                                    var studentTypeSelect3 = document.getElementById('selectInput3')
                                                    var studentTypeValidationMessage3 = document.getElementById(
                                                        'studentTypeValidationMessage3');
                                                    var studentTypeClicked3 = false;

                                                    studentTypeSelect3.addEventListener('change', function () {
                                                        if (studentTypeSelect3.value !== '') {
                                                            studentTypeSelect3.classList.remove(
                                                                'is-invalid');
                                                            studentTypeValidationMessage3.textContent = '';
                                                        } else {
                                                            studentTypeSelect3.classList.add('is-invalid');
                                                            studentTypeValidationMessage3.textContent =
                                                                'Please select a student type.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    studentTypeSelect3.addEventListener('click', function () {
                                                        studentTypeClicked3 = true;
                                                    });

                                                    studentTypeSelect3.addEventListener('blur', function () {
                                                        if (studentTypeClicked3 && studentTypeSelect3
                                                            .value ===
                                                            '') {
                                                            studentTypeSelect3.classList.add('is-invalid');
                                                            studentTypeValidationMessage3.textContent =
                                                                'Please select a student type.';
                                                        }

                                                        studentTypeClicked3 = false;
                                                    });

                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailLabel3" class="form-label"
                                                    id="emailLabel3"><b>3</b>. Email:</label>
                                                <input type="email" class="form-control" id="email3" placeholder="Email"
                                                    name="email2"  value="{{ $transaction->email1 }}" required>
                                                <div id="emailValidationMessage3" class="invalid-feedback"></div>

                                                <script>
                                                    var emailInput3 = document.getElementById('email3');
                                                    var emailLabel3 = document.getElementById('emailLabel3');
                                                    var emailValidationMessage3 = document.getElementById(
                                                        'emailValidationMessage3');

                                                    function updateEmailValidation3(selectElement) {
                                                        var studentType3 = selectElement.value;

                                                        if (studentType3 === 'New Student') {
                                                                emailInput3.setAttribute('pattern', '[a-zA-Z0-9._%+-]+@gmail.com');
                                                                emailInput3.setAttribute('placeholder', 'Email (@gmail.com)');
                                                                emailLabel3.innerHTML = '3. Email:';
                                                            } else if (studentType3 === 'Old Student') {
                                                                emailInput3.setAttribute('pattern', '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                                                emailInput3.setAttribute('placeholder', 'Email (@student.laverdad.edu.ph)');
                                                                emailLabel3.innerHTML = '3. LV Email:';
                                                            }

                                                            var labelContent = emailLabel3.innerHTML;
                                                            var boldNumberThree = '<strong>3.</strong>';
                                                            emailLabel3.innerHTML = labelContent.replace('3.', boldNumberThree);

                                                        emailInput3.value = '';
                                                        emailInput3.setCustomValidity('');
                                                        emailInput3.classList.remove('is-invalid');
                                                        emailValidationMessage3.textContent = '';
                                                        enableDisableButton();
                                                    }

                                                    emailInput3.addEventListener('input', function () {
                                                        if (emailInput3.checkValidity()) {
                                                            emailInput3.classList.remove('is-invalid');
                                                            emailValidationMessage3.textContent = '';
                                                        } else {
                                                            emailInput3.classList.add('is-invalid');
                                                            emailValidationMessage3.textContent =
                                                                'Please enter a valid email address.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                </script>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputDepartment03" class="form-label"><b>4</b>. Department:</label>
                                                <select id="selectInput203" class="form-control" name="department2"
                                                    required>
                                                    <option value="Elementary"
                                                    {{ $transaction['department2'] == 'Elementary' ? 'selected' : '' }}>
                                                    Elementary</option>
                                                <option value="Junior High School"
                                                    {{ $transaction['department2'] == 'Junior High School' ? 'selected' : '' }}>
                                                    Junior High School</option>
                                                <option value="Senior High School"
                                                    {{ $transaction['department2'] == 'Senior High School' ? 'selected' : '' }}>
                                                    Senior High School</option>
                                                <option value="College"
                                                    {{ $transaction['department2'] == 'College' ? 'selected' : '' }}>
                                                    College</option>
                                                </select>
                                                <div id="departmentValidationMessage03" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <script>
                                            var departmentSelect03 = document.getElementById('selectInput203');
                                            var departmentValidationMessage03 = document.getElementById(
                                                'departmentValidationMessage03');
                                            var departmentClicked03 = false;

                                            departmentSelect03.addEventListener('change', function () {
                                                if (departmentSelect03.value !== '') {
                                                    departmentSelect03.classList.remove('is-invalid');
                                                    departmentValidationMessage03.textContent = '';
                                                } else {
                                                    departmentSelect03.classList.add('is-invalid');
                                                    departmentValidationMessage03.textContent =
                                                        'Please select a department.';
                                                }
                                                enableDisableButton();
                                            });

                                            departmentSelect03.addEventListener('click', function () {
                                                departmentClicked03 = true;
                                            });

                                            departmentSelect03.addEventListener('blur', function () {
                                                if (departmentClicked03 && departmentSelect03.value === '') {
                                                    departmentSelect03.classList.add('is-invalid');
                                                    departmentValidationMessage03.textContent =
                                                        'Please select a department.';
                                                }

                                                departmentClicked03 = false;
                                            });

                                        </script>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputGradeCourse03"
                                                    class="form-label"><b>5</b>. Grade&Section/Course&Level:</label>
                                                <select name="grade_year2" id="grade-year03" class="form-control"
                                                    required>
                                                        @foreach ($yearlevelelem as $yearlevel)
                                                        <option data-target="Elementary"
                                                            value="{{ $yearlevel->elementary_list }}"
                                                            {{ $transaction['grade_year2'] == $yearlevel->elementary_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->elementary_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearleveljunior as $yearlevel)
                                                        <option data-target="Junior High School" 
                                                            value="{{ $yearlevel->junior_high_list }}"
                                                            {{ $transaction['grade_year2'] == $yearlevel->junior_high_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->junior_high_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearlevelsenior as $yearlevel)
                                                        <option data-target="Senior High School"
                                                            value="{{ $yearlevel->senior_high_list }}"
                                                            {{ $transaction['grade_year2'] == $yearlevel->senior_high_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->senior_high_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearlevelcollege as $yearlevel)
                                                        <option data-target="College"
                                                            value="{{ $yearlevel->college_list }}"
                                                            {{ $transaction['grade_year2'] == $yearlevel->college_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->college_list }}
                                                        </option>
                                                        @endforeach
                                                </select>
                                                <div id="yearlevelValidationMessage031" class="invalid-feedback"></div>
                                                <script>
                                                    var grade_yearSelect03 = document.getElementById('grade-year03');
                                                    var grade_yearValidationMessage03 = document.getElementById(
                                                        'yearlevelValidationMessage031');
                                                    var grade_yearClicked03 = false;

                                                    grade_yearSelect03.addEventListener('change', function () {
                                                        if (grade_yearSelect03.value !== '') {
                                                            grade_yearSelect03.classList.remove('is-invalid');
                                                            grade_yearValidationMessage031.textContent = '';
                                                        } else {
                                                            grade_yearSelect03.classList.add('is-invalid');
                                                            grade_yearValidationMessage031.textContent =
                                                                'Please select a year level.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    grade_yearSelect03.addEventListener('click', function () {
                                                        grade_yearClicked03 = true;
                                                    });

                                                    grade_yearSelect03.addEventListener('blur', function () {
                                                        if (grade_yearClicked03 && grade_yearSelect031.value ===
                                                            '') {
                                                            grade_yearSelect03.classList.add('is-invalid');
                                                            grade_yearValidationMessage031.textContent =
                                                                'Please select a year level.';
                                                        }

                                                        grade_yearClicked03 = false;
                                                    });

                                                </script>
                                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                <script>
                                                    $(document).ready(function () {
                                                        // Get the third select field element
                                                        var yearLevelSelect03 = $("#grade-year03");

                                                        // Hide all options initially
                                                        yearLevelSelect03.find("option").hide();

                                                        // Show options based on the selected department
                                                        $("#selectInput203").change(function () {
                                                            var selectedDepartment03 = $(this).val();

                                                            // Hide all options
                                                            yearLevelSelect03.find("option").hide();

                                                            // Show options based on the selected department
                                                            yearLevelSelect03.find(
                                                                "option[data-target='" +
                                                                selectedDepartment03 + "']").show();

                                                            // Select the first visible option
                                                            yearLevelSelect03.find(
                                                                    "option[data-target='" +
                                                                    selectedDepartment03 + "']").first()
                                                                .prop("selected", true);
                                                        });
                                                    });

                                                </script>

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputScholarshipstatus03" class="form-label"><b>6</b>. Scholarship
                                                    Status:</label>
                                                <select id="selectInput503" class="form-control"
                                                    name="scholarshipStatus2" required>
                                                    <option value="Partial Scholar"
                                                    {{ $transaction['department1'] == 'Partial Scholar' ? 'selected' : '' }}>
                                                    Partial Scholar</option>

                                                <option value="Full Scholar"
                                                    {{ $transaction['department1'] == 'Full Scholar' ? 'selected' : '' }} disabled>
                                                    Full Scholar</option>
                                                </select>
                                                <div id="scholarshipStatusValidationMessage03" class="invalid-feedback">
                                                </div>
                                                <script>
                                                    var scholarshipStatusSelect03 = document.getElementById(
                                                        'selectInput503');
                                                    var scholarshipStatusValidationMessage03 = document.getElementById(
                                                        'scholarshipStatusValidationMessage03');
                                                    var scholarshipStatusClicked03 = false;

                                                    scholarshipStatusSelect03.addEventListener('change', function () {
                                                        if (scholarshipStatusSelect03.value !== '') {
                                                            scholarshipStatusSelect03.classList.remove(
                                                                'is-invalid');
                                                            scholarshipStatusValidationMessage03.textContent =
                                                                '';
                                                        } else {
                                                            scholarshipStatusSelect03.classList.add(
                                                                'is-invalid');
                                                            scholarshipStatusValidationMessage03.textContent =
                                                                'Please select a scholarship status.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    scholarshipStatusSelect03.addEventListener('click', function () {
                                                        scholarshipStatusClicked03 = true;
                                                    });

                                                    scholarshipStatusSelect03.addEventListener('blur', function () {
                                                        if (scholarshipStatusClicked03 &&
                                                            scholarshipStatusSelect03.value === '') {
                                                            scholarshipStatusSelect03.classList.add(
                                                                'is-invalid');
                                                            scholarshipStatusValidationMessage03.textContent =
                                                                'Please select a scholarship status.';
                                                        }

                                                        scholarshipStatusClicked03 = false;
                                                    });

                                                </script>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            @else

                            <div class="card-2 m-3 bg-form">
                                <h2 class="card-title pt-3 ">Student 01</h2>
                                <div id="formsContainer" class="card-body p-3">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Fullname" class="form-label"><b>1</b>. Full Name:</label>
                                                <input type="text" name="fullname1" id="searchInput"
                                                    class="form-control" value="{{ $transaction->fullname1 }}"
                                                    placeholder="Fullname" required>
                                            </div>
                                        </div>
                                                <div id="fullnameValidationMessage" class="invalid-feedback"></div>

                                                <script>
                                                    var fullnameInput = document.getElementById('searchInput');
                                                    var fullnameValidationMessage = document.getElementById(
                                                        'fullnameValidationMessage');

                                                    fullnameInput.addEventListener('input', function () {
                                                        var selectedOption = false;
                                                        var inputText = fullnameInput.value;

                                                        // Check if the input matches any of the available options
                                                        var options = document.getElementById('searchOptions')
                                                            .options;
                                                        for (var i = 0; i < options.length; i++) {
                                                            if (options[i].value === inputText) {
                                                                selectedOption = true;
                                                                break;
                                                            }
                                                        }

                                                        if (selectedOption) {
                                                            fullnameInput.classList.remove('is-invalid');
                                                            fullnameValidationMessage.textContent = '';
                                                        } else {
                                                            fullnameInput.classList.add('is-invalid');
                                                            fullnameValidationMessage.textContent =
                                                                'Select a valid option from the list.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                </script>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputScholarshipType" class="form-label"><b>2</b>. Student
                                                    Type:</label>
                                                <select id="selectInput1" class="form-control" name="student_type1"
                                                    required onchange="updateEmailValidation1(this)">
                                                    <option value="New Student"
                                                        {{ $transaction['student_type1'] == 'New Student' ? 'selected' : '' }}>
                                                        New Student</option>
                                                    <option value="Old Student"
                                                        {{ $transaction['student_type1'] == 'Old Student' ? 'selected' : '' }}>
                                                        Old Student</option>
                                                </select>
                                                <div id="studentTypeValidationMessage1" class="invalid-feedback"></div>
                                                <script>
                                                    var studentTypeSelect1 = document.getElementById('selectInput1')
                                                    var studentTypeValidationMessage1 = document.getElementById(
                                                        'studentTypeValidationMessage1');
                                                    var studentTypeClicked1 = false;

                                                    studentTypeSelect1.addEventListener('change', function () {
                                                        if (studentTypeSelect1.value !== '') {
                                                            studentTypeSelect1.classList.remove('is-invalid');
                                                            studentTypeValidationMessage1.textContent = '';
                                                        } else {
                                                            studentTypeSelect1.classList.add('is-invalid');
                                                            studentTypeValidationMessage1.textContent =
                                                                'Please select a student type.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    studentTypeSelect1.addEventListener('click', function () {
                                                        studentTypeClicked1 = true;
                                                    });

                                                    studentTypeSelect1.addEventListener('blur', function () {
                                                        if (studentTypeClicked1 && studentTypeSelect1.value ===
                                                            '') {
                                                            studentTypeSelect1.classList.add('is-invalid');
                                                            studentTypeValidationMessage1.textContent =
                                                                'Please select a student type.';
                                                        }

                                                        studentTypeClicked1 = false;
                                                    });

                                                </script>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emailLabel1" class="form-label"
                                                    id="emailLabel1"><b>3</b>. Email:</label>
                                                <input type="email" class="form-control" id="email1" placeholder="Email"
                                                    name="email1" value="{{ $transaction->email1 }}" required>
                                                <div id="emailValidationMessage1" class="invalid-feedback"></div>
                                                <script>
                                                    var emailInput1 = document.getElementById('email1');
                                                    var emailLabel1 = document.getElementById('emailLabel1');
                                                    var emailValidationMessage1 = document.getElementById(
                                                        'emailValidationMessage1');

                                                    function updateEmailValidation1(selectElement) {
                                                        var studentType1 = selectElement.value;

                                                        if (studentType1 === 'New Student') {
                                                                emailInput1.setAttribute('pattern', '[a-zA-Z0-9._%+-]+@gmail.com');
                                                                emailInput1.setAttribute('placeholder', 'Email (@gmail.com)');
                                                                emailLabel1.innerHTML = '3. Email:';
                                                            } else if (studentType1 === 'Old Student') {
                                                                emailInput1.setAttribute('pattern', '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                                                emailInput1.setAttribute('placeholder', 'Email (@student.laverdad.edu.ph)');
                                                                emailLabel1.innerHTML = '3. LV Email:';
                                                            }

                                                            var labelContent = emailLabel1.innerHTML;
                                                            var boldNumberThree = '<strong>3.</strong>';
                                                            emailLabel1.innerHTML = labelContent.replace('3.', boldNumberThree);

                                                        emailInput1.value = '';
                                                        emailInput1.setCustomValidity('');
                                                        emailInput1.classList.remove('is-invalid');
                                                        emailValidationMessage1.textContent = '';
                                                        enableDisableButton();
                                                    }

                                                    emailInput1.addEventListener('input', function () {
                                                        if (emailInput1.checkValidity()) {
                                                            emailInput1.classList.remove('is-invalid');
                                                            emailValidationMessage1.textContent = '';
                                                        } else {
                                                            emailInput1.classList.add('is-invalid');
                                                            emailValidationMessage1.textContent =
                                                                'Please enter a valid email address.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                </script>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputDepartment" class="form-label"><b>4</b>. Department:</label>
                                                <select id="selectInput2" class="form-control" name="department1"
                                                    required>
                                                    <option value="Elementary"
                                                        {{ $transaction['department1'] == 'Elementary' ? 'selected' : '' }}>
                                                        Elementary</option>
                                                    <option value="Junior High School"
                                                        {{ $transaction['department1'] == 'Junior High School' ? 'selected' : '' }}>
                                                        Junior High School</option>
                                                    <option value="Senior High School"
                                                        {{ $transaction['department1'] == 'Senior High School' ? 'selected' : '' }}>
                                                        Senior High School</option>
                                                    <option value="College"
                                                        {{ $transaction['department1'] == 'College' ? 'selected' : '' }}>
                                                        College</option>
                                                </select>
                                                <div id="departmentValidationMessage" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <script>
                                            var departmentSelect = document.querySelector(
                                                'select[name="department1"]');
                                            var departmentValidationMessage = document.getElementById(
                                                'departmentValidationMessage');
                                            var departmentClicked = false;

                                            departmentSelect.addEventListener('change', function () {
                                                if (departmentSelect.value !== '') {
                                                    departmentSelect.classList.remove('is-invalid');
                                                    departmentValidationMessage.textContent = '';
                                                } else {
                                                    departmentSelect.classList.add('is-invalid');
                                                    departmentValidationMessage.textContent =
                                                        'Please select a department.';
                                                }
                                                enableDisableButton();
                                            });

                                            departmentSelect.addEventListener('click', function () {
                                                departmentClicked = true;
                                            });

                                            departmentSelect.addEventListener('blur', function () {
                                                if (departmentClicked && departmentSelect.value === '') {
                                                    departmentSelect.classList.add('is-invalid');
                                                    departmentValidationMessage.textContent =
                                                        'Please select a department.';
                                                }

                                                departmentClicked = false;
                                            });

                                        </script>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputGradeCourse"
                                                    class="form-label"><b>5</b>. Grade&Section/Course&Level:</label>
                                                    <select name="grade_year1" class="form-control" required>
                                            
                                                        @foreach ($yearlevelelem as $yearlevel)
                                                        <option data-target="Elementary"
                                                            value="{{ $yearlevel->elementary_list }}"
                                                            {{ $transaction['grade_year1'] == $yearlevel->elementary_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->elementary_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearleveljunior as $yearlevel)
                                                        <option data-target="Junior High School" 
                                                            value="{{ $yearlevel->junior_high_list }}"
                                                            {{ $transaction['grade_year1'] == $yearlevel->junior_high_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->junior_high_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearlevelsenior as $yearlevel)
                                                        <option data-target="Senior High School"
                                                            value="{{ $yearlevel->senior_high_list }}"
                                                            {{ $transaction['grade_year1'] == $yearlevel->senior_high_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->senior_high_list }}
                                                        </option>
                                                        @endforeach
                                                    
                                                        @foreach ($yearlevelcollege as $yearlevel)
                                                        <option data-target="College"
                                                            value="{{ $yearlevel->college_list }}"
                                                            {{ $transaction['grade_year1'] == $yearlevel->college_list ? 'selected' : '' }}>
                                                            {{ $yearlevel->college_list }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    
                                                <div id="yearlevelValidationMessage" class="invalid-feedback"></div>
                                                <script>
                                                    var grade_yearSelect = document.querySelector(
                                                        'select[name="grade_year1"]');
                                                    var grade_yearValidationMessage = document.getElementById(
                                                        'yearlevelValidationMessage');
                                                    var grade_yearClicked = false;

                                                    grade_yearSelect.addEventListener('change', function () {
                                                        if (grade_yearSelect.value !== '') {
                                                            grade_yearSelect.classList.remove('is-invalid');
                                                            grade_yearValidationMessage.textContent = '';
                                                        } else {
                                                            grade_yearSelect.classList.add('is-invalid');
                                                            grade_yearValidationMessage.textContent =
                                                                'Please select a year level.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    grade_yearSelect.addEventListener('click', function () {
                                                        grade_yearClicked = true;
                                                    });

                                                    grade_yearSelect.addEventListener('blur', function () {
                                                        if (grade_yearClicked && grade_yearSelect.value ===
                                                            '') {
                                                            grade_yearSelect.classList.add('is-invalid');
                                                            grade_yearValidationMessage.textContent =
                                                                'Please select a year level.';
                                                        }

                                                        grade_yearClicked = false;
                                                    });

                                                </script>
                                            </div>
                                        </div>
                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                        <script>
                                            $(document).ready(function () {
                                                // Get the second select field element
                                                var yearLevelSelect = $("select[name='grade_year1']");

                                                // Hide all options initially
                                                yearLevelSelect.find("option").hide();

                                                // Show options based on the selected department
                                                $("#selectInput2").change(function () {
                                                    var selectedDepartment = $(this).val();

                                                    // Hide all options
                                                    yearLevelSelect.find("option").hide();

                                                    // Show options based on the selected department
                                                    yearLevelSelect.find("option[data-target='" +
                                                        selectedDepartment + "']").show();

                                                    // Select the first visible option
                                                    yearLevelSelect.find("option[data-target='" +
                                                        selectedDepartment + "']").first().prop(
                                                        "selected",
                                                        true);
                                                });
                                            });

                                        </script>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputScholarshipstatus" class="form-label"><b>6</b>. Scholarship
                                                    Status:</label>
                                                <select id="selectInput5" class="form-control" name="scholarshipStatus1"
                                                    required>
                                                    <option value="Partial Scholar"
                                                        {{ $transaction['department1'] == 'Partial Scholar' ? 'selected' : '' }}>
                                                        Partial Scholar</option>

                                                    <option value="Full Scholar"
                                                        {{ $transaction['department1'] == 'Full Scholar' ? 'selected' : '' }} disabled>
                                                        Full Scholar</option>
                                                </select>
                                                <div id="scholarshipStatusValidationMessage" class="invalid-feedback">
                                                </div>
                                                <script>
                                                    var scholarshipStatusSelect = document.querySelector(
                                                        'select[name="scholarshipStatus1"]');
                                                    var scholarshipStatusValidationMessage = document.getElementById(
                                                        'scholarshipStatusValidationMessage');
                                                    var scholarshipStatusClicked = false;

                                                    scholarshipStatusSelect.addEventListener('change', function () {
                                                        if (scholarshipStatusSelect.value !== '') {
                                                            scholarshipStatusSelect.classList.remove(
                                                                'is-invalid');
                                                            scholarshipStatusValidationMessage.textContent = '';
                                                        } else {
                                                            scholarshipStatusSelect.classList.add('is-invalid');
                                                            scholarshipStatusValidationMessage.textContent =
                                                                'Please select a scholarship status.';
                                                        }
                                                        enableDisableButton();
                                                    });

                                                    scholarshipStatusSelect.addEventListener('click', function () {
                                                        scholarshipStatusClicked = true;
                                                    });

                                                    scholarshipStatusSelect.addEventListener('blur', function () {
                                                        if (scholarshipStatusClicked && scholarshipStatusSelect
                                                            .value === '') {
                                                            scholarshipStatusSelect.classList.add('is-invalid');
                                                            scholarshipStatusValidationMessage.textContent =
                                                                'Please select a scholarship status.';
                                                        }

                                                        scholarshipStatusClicked = false;
                                                    });

                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endif
                            @endforeach

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="button-container flexed start">
                                        <a href="{{ route('privacy-form') }}" class="btn  btn-primary">
                                            <i class="fas fa-arrow-left"></i> Back
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="button-container flexed end">
                                        <button id="nextBtn" class="btn  btn-success" type="submit" name="submit"
                                                >
                                            Next <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{-- <script>
                                function checkFormValidity() {
                                    var inputs = document.querySelectorAll('input[required], select[required]');
                                    var nextBtn = document.getElementById('nextBtn');
                                    var isValid = true;

                                    inputs.forEach(function (input) {
                                        if (!input.value) {
                                            isValid = false;
                                        }
                                    });

                                    nextBtn.disabled = !isValid;
                                }

                                // Call the checkFormValidity function whenever an input value changes
                                var formInputs = document.querySelectorAll('input[required], select[required]');
                                formInputs.forEach(function (input) {
                                    input.addEventListener('input', checkFormValidity);
                                });

                            </script> --}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-form-layout>
