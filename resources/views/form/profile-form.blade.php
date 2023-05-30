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
                        @if(session('error'))
                            <div class="alert alert-danger ">
                                {{ session('error') }}
                            </div>
                        @endif
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

                    <div class="card-2 m-3 bg-form">
                        <h2 class="card-title pt-3 ">Student 01</h2>
                        <form action="/profile-form1" method="post">
                            @csrf
                            <div id="formsContainer" class="card-body p-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                            <input type="text" id="searchInput" class="form-control" name="fullname"
                                                list="searchOptions" placeholder="Fullname" required>
                                            <datalist id="searchOptions">
                                                @foreach($results as $result)
                                                <option value="{{ $result->xero_account_name }}">
                                                    @endforeach
                                            </datalist>
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
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipType" class="form-label">Student Type:</label>
                                            <select id="selectInput1" class="form-control" name="student_type" required
                                                onchange="updateEmailValidation(this)">
                                                <option value="" selected disabled>Choose...</option>
                                                <option value="New Student">New Student</option>
                                                <option value="Old Student">Old Student</option>
                                            </select>
                                            <div id="studentTypeValidationMessage" class="invalid-feedback"></div>
                                            <script>
                                                var studentTypeSelect = document.querySelector(
                                                    'select[name="student_type"]');
                                                var studentTypeValidationMessage = document.getElementById(
                                                    'studentTypeValidationMessage');
                                                var studentTypeClicked = false;

                                                studentTypeSelect.addEventListener('change', function () {
                                                    if (studentTypeSelect.value !== '') {
                                                        studentTypeSelect.classList.remove('is-invalid');
                                                        studentTypeValidationMessage.textContent = '';
                                                    } else {
                                                        studentTypeSelect.classList.add('is-invalid');
                                                        studentTypeValidationMessage.textContent =
                                                            'Please select a student type.';
                                                    }
                                                    enableDisableButton();
                                                });

                                                studentTypeSelect.addEventListener('click', function () {
                                                    studentTypeClicked = true;
                                                });

                                                studentTypeSelect.addEventListener('blur', function () {
                                                    if (studentTypeClicked && studentTypeSelect.value === '') {
                                                        studentTypeSelect.classList.add('is-invalid');
                                                        studentTypeValidationMessage.textContent =
                                                            'Please select a student type.';
                                                    }

                                                    studentTypeClicked = false;
                                                });

                                            </script>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputEmail" class="form-label" id="emailLabel">Email:</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email"
                                                required>
                                            <div id="emailValidationMessage" class="invalid-feedback"></div>
                                            <script>
                                                var emailInput = document.querySelector('input[name="email"]');
                                                var emailLabel = document.getElementById('emailLabel');
                                                var emailValidationMessage = document.getElementById(
                                                    'emailValidationMessage');

                                                function updateEmailValidation(selectElement) {
                                                    var studentType = selectElement.value;

                                                    if (studentType === 'New Student') {
                                                        emailInput.setAttribute('pattern',
                                                            '[a-zA-Z0-9._%+-]+@gmail.com');
                                                        emailInput.setAttribute('placeholder', 'Email (@gmail.com)');
                                                        emailLabel.textContent = 'Email:';
                                                    } else if (studentType === 'Old Student') {
                                                        emailInput.setAttribute('pattern',
                                                            '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                                        emailInput.setAttribute('placeholder',
                                                            'Email (@student.laverdad.edu.ph)');
                                                        emailLabel.textContent = 'LV Email:';
                                                    }

                                                    emailInput.value = '';
                                                    emailInput.setCustomValidity('');
                                                    emailInput.classList.remove('is-invalid');
                                                    emailValidationMessage.textContent = '';
                                                    enableDisableButton();
                                                }

                                                emailInput.addEventListener('input', function () {
                                                    if (emailInput.checkValidity()) {
                                                        emailInput.classList.remove('is-invalid');
                                                        emailValidationMessage.textContent = '';
                                                    } else {
                                                        emailInput.classList.add('is-invalid');
                                                        emailValidationMessage.textContent =
                                                            'Please enter a valid email address.';
                                                    }
                                                    enableDisableButton();
                                                });

                                            </script>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputDepartment" class="form-label">Department:</label>
                                            <select id="selectInput2" class="form-control" name="department" required>
                                                <option value="" selected disabled>Choose...</option>
                                                <option value="Elementary" data-target="Elementary">Elementary</option>
                                                <option value="Junior High School" data-target="Junior High School">
                                                    Junior High School</option>
                                                <option value="Senior High School" data-target="Senior High School">
                                                    Senior High School</option>
                                                <option value="College" data-target="College">College</option>
                                            </select>
                                            <div id="departmentValidationMessage" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                     <script>
                                        var departmentSelect = document.querySelector('select[name="department"]');
                                        var departmentValidationMessage = document.getElementById('departmentValidationMessage');
                                        var departmentClicked = false;

                                        departmentSelect.addEventListener('change', function () {
                                            if (departmentSelect.value !== '') {
                                                departmentSelect.classList.remove('is-invalid');
                                                departmentValidationMessage.textContent = '';
                                            } else {
                                                departmentSelect.classList.add('is-invalid');
                                                departmentValidationMessage.textContent = 'Please select a department.';
                                            }
                                            enableDisableButton();
                                        });

                                        departmentSelect.addEventListener('click', function () {
                                            departmentClicked = true;
                                        });

                                        departmentSelect.addEventListener('blur', function () {
                                            if (departmentClicked && departmentSelect.value === '') {
                                                departmentSelect.classList.add('is-invalid');
                                                departmentValidationMessage.textContent = 'Please select a department.';
                                            }

                                            departmentClicked = false;
                                        });

                                     </script>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputGradeCourse"
                                                class="form-label">Grade&Section/Course&Level:</label>
                                            <select name="grade_year" class="form-control" required>
                                                <option value="" selected disabled>Choose...</option>
                                                @foreach ($yearlevelelem as $yearlevel)
                                                <option value="{{ $yearlevel->elementary_list }}"
                                                    data-target="Elementary">{{ $yearlevel->elementary_list }}</option>
                                                @endforeach
                                                @foreach ($yearleveljunior as $yearlevel)
                                                <option value="{{ $yearlevel->junior_high_list }}"
                                                    data-target="Junior High School">{{ $yearlevel->junior_high_list }}
                                                </option>
                                                @endforeach
                                                @foreach ($yearlevelsenior as $yearlevel)
                                                <option value="{{ $yearlevel->senior_high_list }}"
                                                    data-target="Senior High School">{{ $yearlevel->senior_high_list }}
                                                </option>
                                                @endforeach
                                                @foreach ($yearlevelcollege as $yearlevel)
                                                <option value="{{ $yearlevel->college_list }}" data-target="College">
                                                    {{ $yearlevel->college_list }}</option>
                                                @endforeach
                                            </select>
                                            <div id="yearlevelValidationMessage" class="invalid-feedback"></div>
                                            <script>
                                                var grade_yearSelect = document.querySelector('select[name="grade_year"]');
                                                var grade_yearValidationMessage = document.getElementById('yearlevelValidationMessage');
                                                var grade_yearClicked = false;

                                                grade_yearSelect.addEventListener('change', function () {
                                                    if (grade_yearSelect.value !== '') {
                                                        grade_yearSelect.classList.remove('is-invalid');
                                                        grade_yearValidationMessage.textContent = '';
                                                    } else {
                                                        grade_yearSelect.classList.add('is-invalid');
                                                        grade_yearValidationMessage.textContent = 'Please select a year level.';
                                                    }
                                                    enableDisableButton();
                                                });

                                                grade_yearSelect.addEventListener('click', function () {
                                                    grade_yearClicked = true;
                                                });

                                                grade_yearSelect.addEventListener('blur', function () {
                                                    if (grade_yearClicked && grade_yearSelect.value === '') {
                                                        grade_yearSelect.classList.add('is-invalid');
                                                        grade_yearValidationMessage.textContent = 'Please select a year level.';
                                                    }

                                                    grade_yearClicked = false;
                                                });

                                            </script>
                                        </div>
                                    </div>
                                </div>

                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                <script>
                                    $(document).ready(function () {
                                        // Get the second select field element
                                        var yearLevelSelect = $("select[name='grade_year']");

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
                                                selectedDepartment + "']").first().prop("selected",
                                                true);
                                        });
                                    });

                                </script>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputScholarshipstatus" class="form-label">Scholarship
                                                Status:</label>
                                            <select id="selectInput5" class="form-control" name="scholarshipStatus"
                                                required>
                                                <option value="" selected disabled>Choose...</option>
                                                <option value="Partial Scholar">Partial Scholar</option>
                                                <option value="Full Scholar">Full Scholar</option>
                                            </select>
                                            <div id="scholarshipStatusValidationMessage" class="invalid-feedback"></div>
                                            <script>
                                                var scholarshipStatusSelect = document.querySelector('select[name="scholarshipStatus"]');
                                                var scholarshipStatusValidationMessage = document.getElementById('scholarshipStatusValidationMessage');
                                                var scholarshipStatusClicked = false;

                                                scholarshipStatusSelect.addEventListener('change', function () {
                                                    if (scholarshipStatusSelect.value !== '') {
                                                        scholarshipStatusSelect.classList.remove('is-invalid');
                                                        scholarshipStatusValidationMessage.textContent = '';
                                                    } else {
                                                        scholarshipStatusSelect.classList.add('is-invalid');
                                                        scholarshipStatusValidationMessage.textContent = 'Please select a scholarship status.';
                                                    }
                                                    enableDisableButton();
                                                });

                                                scholarshipStatusSelect.addEventListener('click', function () {
                                                    scholarshipStatusClicked = true;
                                                });

                                                scholarshipStatusSelect.addEventListener('blur', function () {
                                                    if (scholarshipStatusClicked && scholarshipStatusSelect.value === '') {
                                                        scholarshipStatusSelect.classList.add('is-invalid');
                                                        scholarshipStatusValidationMessage.textContent = 'Please select a scholarship status.';
                                                    }

                                                    scholarshipStatusClicked = false;
                                                });

                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Add any additional fields or form elements here -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 d-flex justify-content-start">
                                        <div class="">
                                            <a href="{{ url('/privacy-form') }}" class="btn btn-lg btn-primary">
                                                <i class="fas fa-arrow-left"></i> Back
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <div class="">
                                            <button id="nextBtn" class="btn btn-lg btn-success" type="submit" name="submit" disabled>
                                                Next <i class="fas fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                
                                <script>
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
                                </script>
                                
                            </div>
                        </form>
                    </div>


                    @elseif ($countForm == 2)

                    <div class="card-2 m-3 bg-form ">
                        <h3 class="card-title pt-3 text-danger">Temporarily Unavailable!</h3>
                        <h2 class="card-title pt-3 pb-3">Student 01</h2 >
                        <form action="/profile-form1" method="post" hidden>
                            @csrf
                            <div id="formsContainer" class="card-body p-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                            <input type="text" id="searchInput" class="form-control" name="search[]"
                                                list="searchOptions" placeholder="Fullname" required>
                                           
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
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipType" class="form-label">Student Type:</label>
                                            <select id="selectInput1" class="form-control" name="student_type" required
                                                onchange="updateEmailValidation1(this)">
                                                <option value="" selected disabled>Choose...</option>
                                                <option value="New Student">New Student</option>
                                                <option value="Old Student">Old Student</option>
                                            </select>
                                            <div id="studentTypeValidationMessage" class="invalid-feedback"></div>
                                            <script>
                                                var studentTypeSelect = document.querySelector(
                                                    'select[name="student_type"]');
                                                var studentTypeValidationMessage = document.getElementById(
                                                    'studentTypeValidationMessage');
                                                var studentTypeClicked = false;

                                                studentTypeSelect.addEventListener('change', function () {
                                                    if (studentTypeSelect.value !== '') {
                                                        studentTypeSelect.classList.remove('is-invalid');
                                                        studentTypeValidationMessage.textContent = '';
                                                    } else {
                                                        studentTypeSelect.classList.add('is-invalid');
                                                        studentTypeValidationMessage.textContent =
                                                            'Please select a student type.';
                                                    }
                                                    enableDisableButton();
                                                });

                                                studentTypeSelect.addEventListener('click', function () {
                                                    studentTypeClicked = true;
                                                });

                                                studentTypeSelect.addEventListener('blur', function () {
                                                    if (studentTypeClicked && studentTypeSelect.value === '') {
                                                        studentTypeSelect.classList.add('is-invalid');
                                                        studentTypeValidationMessage.textContent =
                                                            'Please select a student type.';
                                                    }

                                                    studentTypeClicked = false;
                                                });

                                            </script>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputEmail" class="form-label" id="emailLabel2">Email:</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email"
                                                required>
                                            <div id="emailValidationMessage" class="invalid-feedback"></div>
                                            <script>
                                                var emailInput = document.querySelector('input[name="email"]');
                                                var emailLabel2 = document.getElementById('emailLabel2');
                                                var emailValidationMessage = document.getElementById(
                                                    'emailValidationMessage');

                                                function updateEmailValidation1(selectElement) {
                                                    var studentType = selectElement.value;

                                                    if (studentType === 'New Student') {
                                                        emailInput.setAttribute('pattern',
                                                            '[a-zA-Z0-9._%+-]+@gmail.com');
                                                        emailInput.setAttribute('placeholder', 'Email (@gmail.com)');
                                                        emailLabel2.textContent = 'Email:';
                                                    } else if (studentType === 'Old Student') {
                                                        emailInput.setAttribute('pattern',
                                                            '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                                        emailInput.setAttribute('placeholder',
                                                            'Email (@student.laverdad.edu.ph)');
                                                        emailLabel2.textContent = 'LV Email:';
                                                    }

                                                    emailInput.value = '';
                                                    emailInput.setCustomValidity('');
                                                    emailInput.classList.remove('is-invalid');
                                                    emailValidationMessage.textContent = '';
                                                    enableDisableButton();
                                                }

                                                emailInput.addEventListener('input', function () {
                                                    if (emailInput.checkValidity()) {
                                                        emailInput.classList.remove('is-invalid');
                                                        emailValidationMessage.textContent = '';
                                                    } else {
                                                        emailInput.classList.add('is-invalid');
                                                        emailValidationMessage.textContent =
                                                            'Please enter a valid email address.';
                                                    }
                                                    enableDisableButton();
                                                });

                                            </script>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputDepartment" class="form-label">Department:</label>
                                            <select id="selectInput2" class="form-control" name="department" required>
                                                <option value="" selected disabled>Choose...</option>
                                                <option value="Elementary" data-target="Elementary">Elementary</option>
                                                <option value="Junior High School" data-target="Junior High School">
                                                    Junior High School</option>
                                                <option value="Senior High School" data-target="Senior High School">
                                                    Senior High School</option>
                                                <option value="College" data-target="College">College</option>
                                            </select>
                                            <div id="departmentValidationMessage" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                     <script>
                                        var departmentSelect = document.querySelector('select[name="department"]');
                                        var departmentValidationMessage = document.getElementById('departmentValidationMessage');
                                        var departmentClicked = false;

                                        departmentSelect.addEventListener('change', function () {
                                            if (departmentSelect.value !== '') {
                                                departmentSelect.classList.remove('is-invalid');
                                                departmentValidationMessage.textContent = '';
                                            } else {
                                                departmentSelect.classList.add('is-invalid');
                                                departmentValidationMessage.textContent = 'Please select a department.';
                                            }
                                            enableDisableButton();
                                        });

                                        departmentSelect.addEventListener('click', function () {
                                            departmentClicked = true;
                                        });

                                        departmentSelect.addEventListener('blur', function () {
                                            if (departmentClicked && departmentSelect.value === '') {
                                                departmentSelect.classList.add('is-invalid');
                                                departmentValidationMessage.textContent = 'Please select a department.';
                                            }

                                            departmentClicked = false;
                                        });

                                     </script>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputGradeCourse"
                                                class="form-label">Grade&Section/Course&Level:</label>
                                            <select name="year_level" class="form-control" required>
                                                <option value="" selected disabled>Choose...</option>
                                                @foreach ($yearlevelelem as $yearlevel)
                                                <option value="{{ $yearlevel->elementary_list }}"
                                                    data-target="Elementary">{{ $yearlevel->elementary_list }}</option>
                                                @endforeach
                                                @foreach ($yearleveljunior as $yearlevel)
                                                <option value="{{ $yearlevel->junior_high_list }}"
                                                    data-target="Junior High School">{{ $yearlevel->junior_high_list }}
                                                </option>
                                                @endforeach
                                                @foreach ($yearlevelsenior as $yearlevel)
                                                <option value="{{ $yearlevel->senior_high_list }}"
                                                    data-target="Senior High School">{{ $yearlevel->senior_high_list }}
                                                </option>
                                                @endforeach
                                                @foreach ($yearlevelcollege as $yearlevel)
                                                <option value="{{ $yearlevel->college_list }}" data-target="College">
                                                    {{ $yearlevel->college_list }}</option>
                                                @endforeach
                                            </select>
                                            <div id="yearlevelValidationMessage" class="invalid-feedback"></div>
                                            <script>
                                                var yearLevelSelect = document.querySelector('select[name="year_level"]');
                                                var yearlevelValidationMessage = document.getElementById('yearlevelValidationMessage');
                                                var yearLevelClicked = false;

                                                yearLevelSelect.addEventListener('change', function () {
                                                    if (yearLevelSelect.value !== '') {
                                                        yearLevelSelect.classList.remove('is-invalid');
                                                        yearlevelValidationMessage.textContent = '';
                                                    } else {
                                                        yearLevelSelect.classList.add('is-invalid');
                                                        yearlevelValidationMessage.textContent = 'Please select a year level.';
                                                    }
                                                    enableDisableButton();
                                                });

                                                yearLevelSelect.addEventListener('click', function () {
                                                    yearLevelClicked = true;
                                                });

                                                yearLevelSelect.addEventListener('blur', function () {
                                                    if (yearLevelClicked && yearLevelSelect.value === '') {
                                                        yearLevelSelect.classList.add('is-invalid');
                                                        yearlevelValidationMessage.textContent = 'Please select a year level.';
                                                    }

                                                    yearLevelClicked = false;
                                                });

                                            </script>
                                        </div>
                                    </div>
                                </div>

                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                <script>
                                    $(document).ready(function () {
                                        // Get the second select field element
                                        var yearLevelSelect = $("select[name='year_level']");

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
                                                selectedDepartment + "']").first().prop("selected",
                                                true);
                                        });
                                    });

                                </script>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputScholarshipstatus" class="form-label">Scholarship
                                                Status:</label>
                                            <select id="selectInput5" class="form-control" name="scholarshipStatus"
                                                required>
                                                <option value="" selected disabled>Choose...</option>
                                                <option value="Partial Scholar">Partial Scholar</option>
                                                <option value="Full Scholar">Full Scholar</option>
                                            </select>
                                            <div id="scholarshipStatusValidationMessage" class="invalid-feedback"></div>
                                            <script>
                                                var scholarshipStatusSelect = document.querySelector('select[name="scholarshipStatus"]');
                                                var scholarshipStatusValidationMessage = document.getElementById('scholarshipStatusValidationMessage');
                                                var scholarshipStatusClicked = false;

                                                scholarshipStatusSelect.addEventListener('change', function () {
                                                    if (scholarshipStatusSelect.value !== '') {
                                                        scholarshipStatusSelect.classList.remove('is-invalid');
                                                        scholarshipStatusValidationMessage.textContent = '';
                                                    } else {
                                                        scholarshipStatusSelect.classList.add('is-invalid');
                                                        scholarshipStatusValidationMessage.textContent = 'Please select a scholarship status.';
                                                    }
                                                    enableDisableButton();
                                                });

                                                scholarshipStatusSelect.addEventListener('click', function () {
                                                    scholarshipStatusClicked = true;
                                                });

                                                scholarshipStatusSelect.addEventListener('blur', function () {
                                                    if (scholarshipStatusClicked && scholarshipStatusSelect.value === '') {
                                                        scholarshipStatusSelect.classList.add('is-invalid');
                                                        scholarshipStatusValidationMessage.textContent = 'Please select a scholarship status.';
                                                    }

                                                    scholarshipStatusClicked = false;
                                                });

                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Add any additional fields or form elements here -->
                                    </div>
                                </div>                        
                            </div>
                        </form>
                    </div>


                    <div class="card-2 m-3 bg-form " >
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
                                        <button type="submit" class="btn "
                                            style="width: 40px;  border: none !important;">
                                            <i class="fas fa-times-circle text-danger" style="font-size: 20px;"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <form action="/profile-form1" method="post" hidden>
                            @csrf
                            <div id="formsContainer" class="card-body p-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                            <input type="text" id="searchInput" class="form-control" name="search"
                                                list="searchOptions" placeholder="Fullname" required>
                                           
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
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipType" class="form-label">Student Type:</label>
                                            <select id="selectInput1" class="form-control" name="student_type" required
                                                onchange="updateEmailValidation1(this)">
                                                <option value="" selected disabled>Choose...</option>
                                                <option value="New Student">New Student</option>
                                                <option value="Old Student">Old Student</option>
                                            </select>
                                            <div id="studentTypeValidationMessage" class="invalid-feedback"></div>
                                            <script>
                                                var studentTypeSelect = document.querySelector(
                                                    'select[name="student_type"]');
                                                var studentTypeValidationMessage = document.getElementById(
                                                    'studentTypeValidationMessage');
                                                var studentTypeClicked = false;

                                                studentTypeSelect.addEventListener('change', function () {
                                                    if (studentTypeSelect.value !== '') {
                                                        studentTypeSelect.classList.remove('is-invalid');
                                                        studentTypeValidationMessage.textContent = '';
                                                    } else {
                                                        studentTypeSelect.classList.add('is-invalid');
                                                        studentTypeValidationMessage.textContent =
                                                            'Please select a student type.';
                                                    }
                                                    enableDisableButton();
                                                });

                                                studentTypeSelect.addEventListener('click', function () {
                                                    studentTypeClicked = true;
                                                });

                                                studentTypeSelect.addEventListener('blur', function () {
                                                    if (studentTypeClicked && studentTypeSelect.value === '') {
                                                        studentTypeSelect.classList.add('is-invalid');
                                                        studentTypeValidationMessage.textContent =
                                                            'Please select a student type.';
                                                    }

                                                    studentTypeClicked = false;
                                                });

                                            </script>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputEmail" class="form-label" id="emailLabel2">Email:</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email"
                                                required>
                                            <div id="emailValidationMessage" class="invalid-feedback"></div>
                                            <script>
                                                var emailInput = document.querySelector('input[name="email"]');
                                                var emailLabel2 = document.getElementById('emailLabel2');
                                                var emailValidationMessage = document.getElementById(
                                                    'emailValidationMessage');

                                                function updateEmailValidation1(selectElement) {
                                                    var studentType = selectElement.value;

                                                    if (studentType === 'New Student') {
                                                        emailInput.setAttribute('pattern',
                                                            '[a-zA-Z0-9._%+-]+@gmail.com');
                                                        emailInput.setAttribute('placeholder', 'Email (@gmail.com)');
                                                        emailLabel2.textContent = 'Email:';
                                                    } else if (studentType === 'Old Student') {
                                                        emailInput.setAttribute('pattern',
                                                            '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                                        emailInput.setAttribute('placeholder',
                                                            'Email (@student.laverdad.edu.ph)');
                                                        emailLabel2.textContent = 'LV Email:';
                                                    }

                                                    emailInput.value = '';
                                                    emailInput.setCustomValidity('');
                                                    emailInput.classList.remove('is-invalid');
                                                    emailValidationMessage.textContent = '';
                                                    enableDisableButton();
                                                }

                                                emailInput.addEventListener('input', function () {
                                                    if (emailInput.checkValidity()) {
                                                        emailInput.classList.remove('is-invalid');
                                                        emailValidationMessage.textContent = '';
                                                    } else {
                                                        emailInput.classList.add('is-invalid');
                                                        emailValidationMessage.textContent =
                                                            'Please enter a valid email address.';
                                                    }
                                                    enableDisableButton();
                                                });

                                            </script>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputDepartment" class="form-label">Department:</label>
                                            <select id="selectInput2" class="form-control" name="department" required>
                                                <option value="" selected disabled>Choose...</option>
                                                <option value="Elementary" data-target="Elementary">Elementary</option>
                                                <option value="Junior High School" data-target="Junior High School">
                                                    Junior High School</option>
                                                <option value="Senior High School" data-target="Senior High School">
                                                    Senior High School</option>
                                                <option value="College" data-target="College">College</option>
                                            </select>
                                            <div id="departmentValidationMessage" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                     <script>
                                        var departmentSelect = document.querySelector('select[name="department"]');
                                        var departmentValidationMessage = document.getElementById('departmentValidationMessage');
                                        var departmentClicked = false;

                                        departmentSelect.addEventListener('change', function () {
                                            if (departmentSelect.value !== '') {
                                                departmentSelect.classList.remove('is-invalid');
                                                departmentValidationMessage.textContent = '';
                                            } else {
                                                departmentSelect.classList.add('is-invalid');
                                                departmentValidationMessage.textContent = 'Please select a department.';
                                            }
                                            enableDisableButton();
                                        });

                                        departmentSelect.addEventListener('click', function () {
                                            departmentClicked = true;
                                        });

                                        departmentSelect.addEventListener('blur', function () {
                                            if (departmentClicked && departmentSelect.value === '') {
                                                departmentSelect.classList.add('is-invalid');
                                                departmentValidationMessage.textContent = 'Please select a department.';
                                            }

                                            departmentClicked = false;
                                        });

                                     </script>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputGradeCourse"
                                                class="form-label">Grade&Section/Course&Level:</label>
                                            <select name="year_level" class="form-control" required>
                                                <option value="" selected disabled>Choose...</option>
                                                @foreach ($yearlevelelem as $yearlevel)
                                                <option value="{{ $yearlevel->elementary_list }}"
                                                    data-target="Elementary">{{ $yearlevel->elementary_list }}</option>
                                                @endforeach
                                                @foreach ($yearleveljunior as $yearlevel)
                                                <option value="{{ $yearlevel->junior_high_list }}"
                                                    data-target="Junior High School">{{ $yearlevel->junior_high_list }}
                                                </option>
                                                @endforeach
                                                @foreach ($yearlevelsenior as $yearlevel)
                                                <option value="{{ $yearlevel->senior_high_list }}"
                                                    data-target="Senior High School">{{ $yearlevel->senior_high_list }}
                                                </option>
                                                @endforeach
                                                @foreach ($yearlevelcollege as $yearlevel)
                                                <option value="{{ $yearlevel->college_list }}" data-target="College">
                                                    {{ $yearlevel->college_list }}</option>
                                                @endforeach
                                            </select>
                                            <div id="yearlevelValidationMessage" class="invalid-feedback"></div>
                                            <script>
                                                var yearLevelSelect = document.querySelector('select[name="year_level"]');
                                                var yearlevelValidationMessage = document.getElementById('yearlevelValidationMessage');
                                                var yearLevelClicked = false;

                                                yearLevelSelect.addEventListener('change', function () {
                                                    if (yearLevelSelect.value !== '') {
                                                        yearLevelSelect.classList.remove('is-invalid');
                                                        yearlevelValidationMessage.textContent = '';
                                                    } else {
                                                        yearLevelSelect.classList.add('is-invalid');
                                                        yearlevelValidationMessage.textContent = 'Please select a year level.';
                                                    }
                                                    enableDisableButton();
                                                });

                                                yearLevelSelect.addEventListener('click', function () {
                                                    yearLevelClicked = true;
                                                });

                                                yearLevelSelect.addEventListener('blur', function () {
                                                    if (yearLevelClicked && yearLevelSelect.value === '') {
                                                        yearLevelSelect.classList.add('is-invalid');
                                                        yearlevelValidationMessage.textContent = 'Please select a year level.';
                                                    }

                                                    yearLevelClicked = false;
                                                });

                                            </script>
                                        </div>
                                    </div>
                                </div>

                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                <script>
                                    $(document).ready(function () {
                                        // Get the second select field element
                                        var yearLevelSelect = $("select[name='year_level']");

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
                                                selectedDepartment + "']").first().prop("selected",
                                                true);
                                        });
                                    });

                                </script>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputScholarshipstatus" class="form-label">Scholarship
                                                Status:</label>
                                            <select id="selectInput5" class="form-control" name="scholarshipStatus"
                                                required>
                                                <option value="" selected disabled>Choose...</option>
                                                <option value="Partial Scholar">Partial Scholar</option>
                                                <option value="Full Scholar">Full Scholar</option>
                                            </select>
                                            <div id="scholarshipStatusValidationMessage" class="invalid-feedback"></div>
                                            <script>
                                                var scholarshipStatusSelect = document.querySelector('select[name="scholarshipStatus"]');
                                                var scholarshipStatusValidationMessage = document.getElementById('scholarshipStatusValidationMessage');
                                                var scholarshipStatusClicked = false;

                                                scholarshipStatusSelect.addEventListener('change', function () {
                                                    if (scholarshipStatusSelect.value !== '') {
                                                        scholarshipStatusSelect.classList.remove('is-invalid');
                                                        scholarshipStatusValidationMessage.textContent = '';
                                                    } else {
                                                        scholarshipStatusSelect.classList.add('is-invalid');
                                                        scholarshipStatusValidationMessage.textContent = 'Please select a scholarship status.';
                                                    }
                                                    enableDisableButton();
                                                });

                                                scholarshipStatusSelect.addEventListener('click', function () {
                                                    scholarshipStatusClicked = true;
                                                });

                                                scholarshipStatusSelect.addEventListener('blur', function () {
                                                    if (scholarshipStatusClicked && scholarshipStatusSelect.value === '') {
                                                        scholarshipStatusSelect.classList.add('is-invalid');
                                                        scholarshipStatusValidationMessage.textContent = 'Please select a scholarship status.';
                                                    }

                                                    scholarshipStatusClicked = false;
                                                });

                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Add any additional fields or form elements here -->
                                    </div>
                                </div>                        
                            </div>
                        </form>

                        <div class="col-md-12" hidden>
                            <div class="row">
                                <div class="col-md-6 d-flex justify-content-start">
                                    <div class="">
                                        <a href="{{ url('/profile-form') }}" class="btn btn-lg btn-primary">
                                            <i class="fas fa-arrow-left"></i> Back
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <div class="">
                                        <button id="nextBtn" class="btn btn-lg btn-success" type="submit" name="submit"  onclick="submitForms()" disabled>
                                            Next <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <script>
                                function submitForms() {
                                    document.querySelector('form[action="/profile-form1"]').submit();
                                    document.querySelector('form[action="/profile-form2"]').submit();
                                }

                            </script>
                            <script>
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
                            </script>     
                        </div>
                    </div>


                    @elseif ($countForm == 3)

                    <div class="card-2 m-3 bg-form ">
                        <h3 class="card-title pt-3 text-danger">Temporarily Unavailable!</h3>
                        <h2 class="card-title pt-3 pb-3">Student 01</h2>
                        <form action="profile-form1" method="post" hidden>
                            @csrf
                            <div id="formsContainer" class="card-body p-3">
                                <div class="row">
                                   
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                            <input type="text" class="form-control" name="fullname"
                                                placeholder="Fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputEmail" class="form-label">LV Email:</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipstatus" class="form-label">Scholarship
                                                Status:</label>
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
                                            <input type="text" class="form-control" placeholder="Input Amount"
                                                name="amount">
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
                                        <button type="submit" class="btn" style="width: 40px; border: none !important;"
                                            disabled>
                                            <i class="fas fa-times-circle text-danger" style="font-size: 20px;"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <form action="profile-form2" method="post" hidden>
                            @csrf
                            <div id="formsContainer" class="card-body p-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                            <input type="text" class="form-control" name="fullname"
                                                placeholder="Fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputEmail" class="form-label">LV Email:</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipstatus" class="form-label">Scholarship
                                                Status:</label>
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
                                            <input type="text" class="form-control" placeholder="Input Amount"
                                                name="amount">
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
                                <h2 class="card-title pt-3">Student 03</h2>
                            </div>
                            <div class="col-md-4">
                                <div class="card-tools align-right">
                                    <form method="get">
                                        <input hidden name="counts" value="1">
                                        <button type="submit" class="btn "
                                            style="width: 40px;  border: none !important;">
                                            <i class="fas fa-times-circle text-danger" style="font-size: 20px;"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <form action="profile-form3" method="post" hidden>
                            @csrf
                            <div id="formsContainer" class="card-body p-3">
                                <div class="row">
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                            <input type="text" class="form-control" name="fullname"
                                                placeholder="Fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputEmail" class="form-label">LV Email:</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="inputScholarshipstatus" class="form-label">Scholarship
                                                Status:</label>
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
                                            <input type="text" class="form-control" placeholder="Input Amount"
                                                name="amount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6" style="text-align:left;">
                                    <a href="{{ url('/profile-form3') }}" class="btn btn-lg btn-primary pl-5 pr-5">
                                        <i class="fas fa-arrow-left"></i> Back
                                    </a>
                                </div>
                                <div class="col-md-6" style="text-align:right;">
                                    <button class="btn btn-lg btn-secondary pl-5 pr-5" type="button"
                                        onclick="submitForms()">
                                        Next <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>

                                <script>
                                    function submitForms() {
                                        document.querySelector('form[action="/profile-form1"]').submit();
                                        document.querySelector('form[action="/profile-form2"]').submit();
                                        document.querySelector('form[action="/profile-form3"]').submit();
                                    }

                                </script>

                            </div>
                        </div>
                    </div>

                    @endif
                </div>
            </div>

        </div>
    </div>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        // Assuming you have the selected option value stored in a variable called 'studentType'
        var studentType = document.querySelector('select[name="student_type"]').value;
        var emailInput = document.querySelector('input[name="email"]');

        if (studentType === "New Student") {
            emailInput.placeholder = "Email (@gmail.com)";
            emailInput.pattern = "[a-zA-Z0-9._%+-]+@gmail.com";
        } else if (studentType === "Old Student") {
            emailInput.placeholder = "Email (@student.laverdad.edu.ph)";
            emailInput.pattern = "[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph";
        }

    </script>
    <script>
        $(document).ready(function () {
            $('#searchInput').on('input', function () {
                var searchQuery = $(this).val();

                $.ajax({
                    url: '{{ route("profile.search") }}',
                    method: 'GET',
                    data: {
                        search: searchQuery
                    },
                    dataType: 'json',
                    success: function (data) {
                        var optionsHtml = '';
                        $.each(data, function (index, item) {
                            optionsHtml += '<option value="' + item
                                .xero_account_name + '">';
                        });
                        $('#searchOptions').html(optionsHtml);
                    }
                });
            });
        });

    </script>





</x-form-layout>
