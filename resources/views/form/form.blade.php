<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<title>Form | EPVSystem</title>
<link rel="shortcut icon" type="image/png" href="{{ asset('assets/data-privacy/lvcclogo.png') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
<link href="{{ asset('form.css') }}" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  border-radius: 20px;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h2 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: green;
  color: #ffffff;
  border: none;
  border-radius: 10px;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #1266b4;
}

/* Make circles that indicate the steps of the form: */
.icon2 {
  margin: 0 2px;
  color: #1266b4;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: .7;
}

.icon2.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.icon2.finish {
  color: #1266b4;
  opacity: 1;
}
.icon2{
font-size: 60px; /* or any other desired size */
padding-left: 3px;
padding-right: 3px;
}
.nav-font{
font-size: 30px; /* or any other desired size */
}
</style>
<body>

<form id="regForm" action="/action_page.php">
     <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:20px;">
    <span class="icon2"><i class="fas fa-user-shield icon2"></i><span>
    <span class="icon2"><i class="fas fa-user-alt icon2"></i></span>
    <span class="icon2"><i class="fas fa-file-upload icon2"></i></span>
    <span class="icon2"><i class="fas fa-user-check icon2"></i></span>
    <span class="icon2"><i class="fas fa-search icon2"></i></span>  
    <span class="icon2"><i class="fas fa-check-circle icon2"></i></span>
  </div>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <h2>PRIVACY</h2>
    <p><b>PRIVACY NOTICE:
    </b> Dear student(s)/parent(s)/guardian(s), we would 
    like to inform you that we are collecting your personal information(s)
    for the purpose of your payment in La Verdad Christian College. This
    information(s) shall be utilized for payment process only. In
    compliance to Data Privacy Act of 2012, these personal information(s)
    shall not be used outside of its declared purpose. We would like to 
    inform you also that personal information(s) will be stored in our LVCC 
    Database. The use, storage, retention and disposal of your personal 
    information(s) shall be governed by our data privacy policies. If you 
    agree to this privacy notice, kindly check the box below. *I ACCEPT</p>
    {{-- <input type="text" name="privacy_key" value="{{ $privacy->privacy_key }}" hidden> --}}
    <input type="checkbox" id="privacy_notice" name="privacy_notice" value="1" class="checkbox" onchange="toggleButton()">
    <label for="checkbox" class="font"><b>I ACCEPT</b></label>
  </div>
    <div class="tab">
        <h2>PROFILE</h2>
        <div class="">
            
            @if ($countForm == 1)

            <div class="card-2 m-3 bg-form">
                <h2 class="card-title pt-3 ">Student 01</h2>
                <div id="formsContainer" class="card-body p-3">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Fullname" class="form-label">Full Name:</label>
                                <input type="text" name="fullname[]" id="searchInput"
                                    class="form-control" list="searchOptions" placeholder="Fullname"
                                    required>
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
                                <label for="inputScholarshipType" class="form-label">Student
                                    Type:</label>
                                <select id="selectInput1" class="form-control" name="student_type[]"
                                    required onchange="updateEmailValidation1(this)">
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="New Student">New Student</option>
                                    <option value="Old Student">Old Student</option>
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emailLabel1" class="form-label"
                                    id="emailLabel1">Email:</label>
                                <input type="email" class="form-control" id="email1" placeholder="Email"
                                    name="email[]" required>
                                <div id="emailValidationMessage1" class="invalid-feedback"></div>
                                <script>
                                    var emailInput1 = document.getElementById('email1');
                                    var emailLabel1 = document.getElementById('emailLabel1');
                                    var emailValidationMessage1 = document.getElementById(
                                        'emailValidationMessage1');

                                    function updateEmailValidation1(selectElement) {
                                        var studentType1 = selectElement.value;

                                        if (studentType1 === 'New Student') {
                                            emailInput1.setAttribute('pattern',
                                                '[a-zA-Z0-9._%+-]+@gmail.com');
                                            emailInput1.setAttribute('placeholder',
                                                'Email (@gmail.com)');
                                            emailLabel1.textContent = 'Email:';
                                        } else if (studentType1 === 'Old Student') {
                                            emailInput1.setAttribute('pattern',
                                                '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                            emailInput1.setAttribute('placeholder',
                                                'Email (@student.laverdad.edu.ph)');
                                            emailLabel1.textContent = 'LV Email:';
                                        }

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

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputDepartment" class="form-label">Department:</label>
                                <select id="selectInput2" class="form-control" name="department[]"
                                    required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Elementary" data-target="Elementary">Elementary
                                    </option>
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
                            var departmentSelect = document.querySelector(
                                'select[name="department[]"]');
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

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGradeCourse"
                                    class="form-label">Grade&Section/Course&Level:</label>
                                <select name="grade_year[]" class="form-control" required>
                                    <option value="" selected disabled>Choose...</option>
                                    @foreach ($yearlevelelem as $yearlevel)
                                    <option value="{{ $yearlevel->elementary_list }}"
                                        data-target="Elementary">{{ $yearlevel->elementary_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearleveljunior as $yearlevel)
                                    <option value="{{ $yearlevel->junior_high_list }}"
                                        data-target="Junior High School">
                                        {{ $yearlevel->junior_high_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearlevelsenior as $yearlevel)
                                    <option value="{{ $yearlevel->senior_high_list }}"
                                        data-target="Senior High School">
                                        {{ $yearlevel->senior_high_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearlevelcollege as $yearlevel)
                                    <option value="{{ $yearlevel->college_list }}"
                                        data-target="College">
                                        {{ $yearlevel->college_list }}</option>
                                    @endforeach
                                </select>
                                <div id="yearlevelValidationMessage" class="invalid-feedback"></div>
                                <script>
                                    var grade_yearSelect = document.querySelector(
                                        'select[name="grade_year[]"]');
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
                                var yearLevelSelect = $("select[name='grade_year[]']");

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
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputScholarshipstatus" class="form-label">Scholarship
                                    Status:</label>
                                <select id="selectInput5" class="form-control"
                                    name="scholarshipStatus[]" required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Partial Scholar">Partial Scholar</option>
                                    <option value="Full Scholar" disabled>Full Scholar</option>
                                </select>
                                <div id="scholarshipStatusValidationMessage" class="invalid-feedback">
                                </div>
                                <script>
                                    var scholarshipStatusSelect = document.querySelector(
                                        'select[name="scholarshipStatus[]"]');
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
                        <div class="col-md-6">
                            <!-- Add any additional fields or form elements here -->
                        </div>
                    </div>
                </div>
            </div>

            @elseif ($countForm == 2)

            <div class="card-2 m-3 bg-form">
                <h2 class="card-title pt-3 ">Student 01</h2>
                <div id="formsContainer" class="card-body p-3">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Fullname" class="form-label">Full Name:</label>
                                <input type="text" name="fullname[]" id="searchInput"
                                    class="form-control" list="searchOptions" placeholder="Fullname"
                                    required>
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
                                <label for="inputScholarshipType" class="form-label">Student
                                    Type:</label>
                                <select id="selectInput1" class="form-control" name="student_type[]"
                                    required onchange="updateEmailValidation1(this)">
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="New Student">New Student</option>
                                    <option value="Old Student">Old Student</option>
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emailLabel1" class="form-label"
                                    id="emailLabel1">Email:</label>
                                <input type="email" class="form-control" id="email1" placeholder="Email"
                                    name="email[]" required>
                                <div id="emailValidationMessage1" class="invalid-feedback"></div>
                                <script>
                                    var emailInput1 = document.getElementById('email1');
                                    var emailLabel1 = document.getElementById('emailLabel1');
                                    var emailValidationMessage1 = document.getElementById(
                                        'emailValidationMessage1');

                                    function updateEmailValidation1(selectElement) {
                                        var studentType1 = selectElement.value;

                                        if (studentType1 === 'New Student') {
                                            emailInput1.setAttribute('pattern',
                                                '[a-zA-Z0-9._%+-]+@gmail.com');
                                            emailInput1.setAttribute('placeholder',
                                                'Email (@gmail.com)');
                                            emailLabel1.textContent = 'Email:';
                                        } else if (studentType1 === 'Old Student') {
                                            emailInput1.setAttribute('pattern',
                                                '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                            emailInput1.setAttribute('placeholder',
                                                'Email (@student.laverdad.edu.ph)');
                                            emailLabel1.textContent = 'LV Email:';
                                        }

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

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputDepartment" class="form-label">Department:</label>
                                <select id="selectInput2" class="form-control" name="department[]"
                                    required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Elementary" data-target="Elementary">Elementary
                                    </option>
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
                            var departmentSelect = document.querySelector(
                                'select[name="department[]"]');
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

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGradeCourse"
                                    class="form-label">Grade&Section/Course&Level:</label>
                                <select name="grade_year[]" class="form-control" required>
                                    <option value="" selected disabled>Choose...</option>
                                    @foreach ($yearlevelelem as $yearlevel)
                                    <option value="{{ $yearlevel->elementary_list }}"
                                        data-target="Elementary">{{ $yearlevel->elementary_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearleveljunior as $yearlevel)
                                    <option value="{{ $yearlevel->junior_high_list }}"
                                        data-target="Junior High School">
                                        {{ $yearlevel->junior_high_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearlevelsenior as $yearlevel)
                                    <option value="{{ $yearlevel->senior_high_list }}"
                                        data-target="Senior High School">
                                        {{ $yearlevel->senior_high_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearlevelcollege as $yearlevel)
                                    <option value="{{ $yearlevel->college_list }}"
                                        data-target="College">
                                        {{ $yearlevel->college_list }}</option>
                                    @endforeach
                                </select>
                                <div id="yearlevelValidationMessage" class="invalid-feedback"></div>
                                <script>
                                    var grade_yearSelect = document.querySelector(
                                        'select[name="grade_year[]"]');
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
                                var yearLevelSelect = $("select[name='grade_year[]']");

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
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputScholarshipstatus" class="form-label">Scholarship
                                    Status:</label>
                                <select id="selectInput5" class="form-control"
                                    name="scholarshipStatus[]" required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Partial Scholar">Partial Scholar</option>
                                    <option value="Full Scholar" disabled>Full Scholar</option>
                                </select>
                                <div id="scholarshipStatusValidationMessage" class="invalid-feedback">
                                </div>
                                <script>
                                    var scholarshipStatusSelect = document.querySelector(
                                        'select[name="scholarshipStatus[]"]');
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
                        <div class="col-md-6">
                            <!-- Add any additional fields or form elements here -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-2 m-3 bg-form ">
                <div class="row " style="margin-right: 10px;">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <h2 class="card-title pt-3">Student 02</h2>
                    </div>
                    <div class="col-md-4">
                        <div class="card-tools align-right">
                            <a href="#" class="btn delete-button" data-counts="0"
                                style="width: 40px;  border: none !important;">
                                <i class="fas fa-times-circle text-danger" style="font-size: 20px;"></i>
                            </a>
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function () {
                                    $('.delete-button').click(function (e) {
                                        e.preventDefault();

                                        var counts = $(this).data('counts');
                                        // Perform your desired action here using the 'counts' value

                                        // Example: Redirect to another page with the 'counts' value in the URL
                                        window.location.href =
                                            '/profile-form?counts=' +
                                            counts;
                                    });
                                });

                            </script>
                        </div>
                    </div>
                </div>

                <div id="formsContainer" class="card-body ">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Fullname02" class="form-label">Full Name:</label>
                                <input type="text" name="fullname[]" id="searchInput02"
                                    class="form-control" list="searchOptions02" placeholder="Fullname"
                                    required>
                                <datalist id="searchOptions02">
                                    @foreach($results as $result)
                                    <option value="{{ $result->xero_account_name }}"></option>
                                    @endforeach
                                </datalist>
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputScholarshipType" class="form-label">Student
                                    Type:</label>
                                <select id="selectInput3" class="form-control" name="student_type[]"
                                    required onchange="updateEmailValidation3(this)">
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="New Student">New Student</option>
                                    <option value="Old Student">Old Student</option>
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emailLabel3" class="form-label"
                                    id="emailLabel3">Email:</label>
                                <input type="email" class="form-control" id="email3" placeholder="Email"
                                    name="email[]" required>
                                <div id="emailValidationMessage3" class="invalid-feedback"></div>

                                <script>
                                    var emailInput3 = document.getElementById('email3');
                                    var emailLabel3 = document.getElementById('emailLabel3');
                                    var emailValidationMessage3 = document.getElementById(
                                        'emailValidationMessage3');

                                    function updateEmailValidation3(selectElement) {
                                        var studentType3 = selectElement.value;

                                        if (studentType3 === 'New Student') {
                                            emailInput3.setAttribute('pattern',
                                                '[a-zA-Z0-9._%+-]+@gmail.com');
                                            emailInput3.setAttribute('placeholder',
                                                'Email (@gmail.com)');
                                            emailLabel3.textContent = 'Email:';
                                        } else if (studentType3 === 'Old Student') {
                                            emailInput3.setAttribute('pattern',
                                                '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                            emailInput3.setAttribute('placeholder',
                                                'Email (@student.laverdad.edu.ph)');
                                            emailLabel3.textContent = 'LV Email:';
                                        }

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

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputDepartment03" class="form-label">Department:</label>
                                <select id="selectInput203" class="form-control" name="department[]"
                                    required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Elementary" data-target="Elementary">Elementary
                                    </option>
                                    <option value="Junior High School" data-target="Junior High School">
                                        Junior High School</option>
                                    <option value="Senior High School" data-target="Senior High School">
                                        Senior High School</option>
                                    <option value="College" data-target="College">College</option>
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




                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGradeCourse03"
                                    class="form-label">Grade&Section/Course&Level:</label>
                                <select name="grade_year[]" id="grade-year03" class="form-control"
                                    required>
                                    <option value="" selected disabled>Choose...</option>
                                    @foreach ($yearlevelelem as $yearlevel)
                                    <option value="{{ $yearlevel->elementary_list }}"
                                        data-target="Elementary">
                                        {{ $yearlevel->elementary_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearleveljunior as $yearlevel)
                                    <option value="{{ $yearlevel->junior_high_list }}"
                                        data-target="Junior High School">
                                        {{ $yearlevel->junior_high_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearlevelsenior as $yearlevel)
                                    <option value="{{ $yearlevel->senior_high_list }}"
                                        data-target="Senior High School">
                                        {{ $yearlevel->senior_high_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearlevelcollege as $yearlevel)
                                    <option value="{{ $yearlevel->college_list }}"
                                        data-target="College">
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
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputScholarshipstatus03" class="form-label">Scholarship
                                    Status:</label>
                                <select id="selectInput503" class="form-control"
                                    name="scholarshipStatus[]" required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Partial Scholar">Partial Scholar</option>
                                    <option value="Full Scholar" disabled>Full Scholar</option>
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
                        <div class="col-md-6">
                            <!-- Add any additional fields or form elements here -->
                        </div>
                    </div>
                </div>
            </div>

            @elseif ($countForm == 3)

            <div class="card-2 m-3 bg-form">
                <h2 class="card-title pt-3 ">Student 01</h2>
                <div id="formsContainer" class="card-body p-3">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Fullname" class="form-label">Full Name:</label>
                                <input type="text" name="fullname[]" id="searchInput"
                                    class="form-control" list="searchOptions" placeholder="Fullname"
                                    required>
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
                                <label for="inputScholarshipType" class="form-label">Student
                                    Type:</label>
                                <select id="selectInput1" class="form-control" name="student_type[]"
                                    required onchange="updateEmailValidation1(this)">
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="New Student">New Student</option>
                                    <option value="Old Student">Old Student</option>
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emailLabel1" class="form-label"
                                    id="emailLabel1">Email:</label>
                                <input type="email" class="form-control" id="email1" placeholder="Email"
                                    name="email[]" required>
                                <div id="emailValidationMessage1" class="invalid-feedback"></div>
                                <script>
                                    var emailInput1 = document.getElementById('email1');
                                    var emailLabel1 = document.getElementById('emailLabel1');
                                    var emailValidationMessage1 = document.getElementById(
                                        'emailValidationMessage1');

                                    function updateEmailValidation1(selectElement) {
                                        var studentType1 = selectElement.value;

                                        if (studentType1 === 'New Student') {
                                            emailInput1.setAttribute('pattern',
                                                '[a-zA-Z0-9._%+-]+@gmail.com');
                                            emailInput1.setAttribute('placeholder',
                                                'Email (@gmail.com)');
                                            emailLabel1.textContent = 'Email:';
                                        } else if (studentType1 === 'Old Student') {
                                            emailInput1.setAttribute('pattern',
                                                '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                            emailInput1.setAttribute('placeholder',
                                                'Email (@student.laverdad.edu.ph)');
                                            emailLabel1.textContent = 'LV Email:';
                                        }

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

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputDepartment" class="form-label">Department:</label>
                                <select id="selectInput2" class="form-control" name="department[]"
                                    required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Elementary" data-target="Elementary">Elementary
                                    </option>
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
                            var departmentSelect = document.querySelector(
                                'select[name="department[]"]');
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

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGradeCourse"
                                    class="form-label">Grade&Section/Course&Level:</label>
                                <select name="grade_year[]" class="form-control" required>
                                    <option value="" selected disabled>Choose...</option>
                                    @foreach ($yearlevelelem as $yearlevel)
                                    <option value="{{ $yearlevel->elementary_list }}"
                                        data-target="Elementary">{{ $yearlevel->elementary_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearleveljunior as $yearlevel)
                                    <option value="{{ $yearlevel->junior_high_list }}"
                                        data-target="Junior High School">
                                        {{ $yearlevel->junior_high_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearlevelsenior as $yearlevel)
                                    <option value="{{ $yearlevel->senior_high_list }}"
                                        data-target="Senior High School">
                                        {{ $yearlevel->senior_high_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearlevelcollege as $yearlevel)
                                    <option value="{{ $yearlevel->college_list }}"
                                        data-target="College">
                                        {{ $yearlevel->college_list }}</option>
                                    @endforeach
                                </select>
                                <div id="yearlevelValidationMessage" class="invalid-feedback"></div>
                                <script>
                                    var grade_yearSelect = document.querySelector(
                                        'select[name="grade_year[]"]');
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
                                var yearLevelSelect = $("select[name='grade_year[]']");

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
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputScholarshipstatus" class="form-label">Scholarship
                                    Status:</label>
                                <select id="selectInput5" class="form-control"
                                    name="scholarshipStatus[]" required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Partial Scholar">Partial Scholar</option>
                                    <option value="Full Scholar" disabled>Full Scholar</option>
                                </select>
                                <div id="scholarshipStatusValidationMessage" class="invalid-feedback">
                                </div>
                                <script>
                                    var scholarshipStatusSelect = document.querySelector(
                                        'select[name="scholarshipStatus[]"]');
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
                        <div class="col-md-6">
                            <!-- Add any additional fields or form elements here -->
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
                            <a href="#" class="btn delete-button disabled" data-counts="0"
                                style="width: 40px;  border: none !important;">
                                <i class="fas fa-times-circle text-danger" style="font-size: 20px;"></i>
                            </a>
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function () {
                                    $('.delete-button').click(function (e) {
                                        e.preventDefault();

                                        var counts = $(this).data('counts');
                                        // Perform your desired action here using the 'counts' value

                                        // Example: Redirect to another page with the 'counts' value in the URL
                                        window.location.href =
                                            '/profile-form?counts=' +
                                            counts;
                                    });
                                });

                            </script>
                        </div>
                    </div>
                </div>

                <div id="formsContainer" class="card-body ">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Fullname02" class="form-label">Full Name:</label>
                                <input type="text" name="fullname[]" id="searchInput02"
                                    class="form-control" list="searchOptions02" placeholder="Fullname"
                                    required>
                                <datalist id="searchOptions02">
                                    @foreach($results as $result)
                                    <option value="{{ $result->xero_account_name }}"></option>
                                    @endforeach
                                </datalist>
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputScholarshipType" class="form-label">Student
                                    Type:</label>
                                <select id="selectInput3" class="form-control" name="student_type[]"
                                    required onchange="updateEmailValidation3(this)">
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="New Student">New Student</option>
                                    <option value="Old Student">Old Student</option>
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emailLabel3" class="form-label"
                                    id="emailLabel3">Email:</label>
                                <input type="email" class="form-control" id="email3" placeholder="Email"
                                    name="email[]" required>
                                <div id="emailValidationMessage3" class="invalid-feedback"></div>

                                <script>
                                    var emailInput3 = document.getElementById('email3');
                                    var emailLabel3 = document.getElementById('emailLabel3');
                                    var emailValidationMessage3 = document.getElementById(
                                        'emailValidationMessage3');

                                    function updateEmailValidation3(selectElement) {
                                        var studentType3 = selectElement.value;

                                        if (studentType3 === 'New Student') {
                                            emailInput3.setAttribute('pattern',
                                                '[a-zA-Z0-9._%+-]+@gmail.com');
                                            emailInput3.setAttribute('placeholder',
                                                'Email (@gmail.com)');
                                            emailLabel3.textContent = 'Email:';
                                        } else if (studentType3 === 'Old Student') {
                                            emailInput3.setAttribute('pattern',
                                                '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                            emailInput3.setAttribute('placeholder',
                                                'Email (@student.laverdad.edu.ph)');
                                            emailLabel3.textContent = 'LV Email:';
                                        }

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

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputDepartment03" class="form-label">Department:</label>
                                <select id="selectInput203" class="form-control" name="department[]"
                                    required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Elementary" data-target="Elementary">Elementary
                                    </option>
                                    <option value="Junior High School" data-target="Junior High School">
                                        Junior High School</option>
                                    <option value="Senior High School" data-target="Senior High School">
                                        Senior High School</option>
                                    <option value="College" data-target="College">College</option>
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




                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGradeCourse03"
                                    class="form-label">Grade&Section/Course&Level:</label>
                                <select name="grade_year[]" id="grade-year03" class="form-control"
                                    required>
                                    <option value="" selected disabled>Choose...</option>
                                    @foreach ($yearlevelelem as $yearlevel)
                                    <option value="{{ $yearlevel->elementary_list }}"
                                        data-target="Elementary">
                                        {{ $yearlevel->elementary_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearleveljunior as $yearlevel)
                                    <option value="{{ $yearlevel->junior_high_list }}"
                                        data-target="Junior High School">
                                        {{ $yearlevel->junior_high_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearlevelsenior as $yearlevel)
                                    <option value="{{ $yearlevel->senior_high_list }}"
                                        data-target="Senior High School">
                                        {{ $yearlevel->senior_high_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearlevelcollege as $yearlevel)
                                    <option value="{{ $yearlevel->college_list }}"
                                        data-target="College">
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
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputScholarshipstatus03" class="form-label">Scholarship
                                    Status:</label>
                                <select id="selectInput503" class="form-control"
                                    name="scholarshipStatus[]" required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Partial Scholar">Partial Scholar</option>
                                    <option value="Full Scholar" disabled>Full Scholar</option>
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
                        <div class="col-md-6">
                            <!-- Add any additional fields or form elements here -->
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
                            <a href="#" class="btn delete-button" data-counts="1"
                                style="width: 40px;  border: none !important;">
                                <i class="fas fa-times-circle text-danger" style="font-size: 20px;"></i>
                            </a>
                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function () {
                                    $('.delete-button').click(function (e) {
                                        e.preventDefault();

                                        var counts = $(this).data('counts');
                                        // Perform your desired action here using the 'counts' value

                                        // Example: Redirect to another page with the 'counts' value in the URL
                                        window.location.href =
                                            '/form?counts=' +
                                            counts;
                                    });
                                });

                            </script>
                        </div>
                    </div>
                </div>

                <div id="formsContainer" class="card-body ">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Fullname04" class="form-label">Full Name:</label>
                                <input type="text" name="fullname[]" id="searchInput04"
                                    class="form-control" list="searchOptions04" placeholder="Fullname"
                                    required>
                                <datalist id="searchOptions04">
                                    @foreach($results as $result)
                                    <option value="{{ $result->xero_account_name }}"></option>
                                    @endforeach
                                </datalist>
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputScholarshipType" class="form-label">Student
                                    Type:</label>
                                <select id="selectInput304" class="form-control" name="student_type[]"
                                    required onchange="updateEmailValidation304(this)">
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="New Student">New Student</option>
                                    <option value="Old Student">Old Student</option>
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

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emailLabel304" class="form-label"
                                    id="emailLabel304">Email:</label>
                                <input type="email" class="form-control" id="email304"
                                    placeholder="Email" name="email[]" required>
                                <div id="emailValidationMessage304" class="invalid-feedback"></div>

                                <script>
                                    var emailInput304 = document.getElementById('email304');
                                    var emailLabel304 = document.getElementById('emailLabel304');
                                    var emailValidationMessage304 = document.getElementById(
                                        'emailValidationMessage304');

                                    function updateEmailValidation304(selectElement) {
                                        var studentType304 = selectElement.value;

                                        if (studentType304 === 'New Student') {
                                            emailInput304.setAttribute('pattern',
                                                '[a-zA-Z0-9._%+-]+@gmail.com');
                                            emailInput304.setAttribute('placeholder',
                                                'Email (@gmail.com)');
                                            emailLabel304.textContent = 'Email:';
                                        } else if (studentType304 === 'Old Student') {
                                            emailInput304.setAttribute('pattern',
                                                '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                                            emailInput304.setAttribute('placeholder',
                                                'Email (@student.laverdad.edu.ph)');
                                            emailLabel304.textContent = 'LV Email:';
                                        }

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

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputDepartment04" class="form-label">Department:</label>
                                <select id="selectInput204" class="form-control" name="department[]"
                                    required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Elementary" data-target="Elementary">Elementary
                                    </option>
                                    <option value="Junior High School" data-target="Junior High School">
                                        Junior High School</option>
                                    <option value="Senior High School" data-target="Senior High School">
                                        Senior High School</option>
                                    <option value="College" data-target="College">College</option>
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





                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGradeCourse04"
                                    class="form-label">Grade&Section/Course&Level:</label>
                                <select name="grade_year[]" id="grade-year04" class="form-control"
                                    required>
                                    <option value="" selected disabled>Choose...</option>
                                    @foreach ($yearlevelelem as $yearlevel)
                                    <option value="{{ $yearlevel->elementary_list }}"
                                        data-target="Elementary">
                                        {{ $yearlevel->elementary_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearleveljunior as $yearlevel)
                                    <option value="{{ $yearlevel->junior_high_list }}"
                                        data-target="Junior High School">
                                        {{ $yearlevel->junior_high_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearlevelsenior as $yearlevel)
                                    <option value="{{ $yearlevel->senior_high_list }}"
                                        data-target="Senior High School">
                                        {{ $yearlevel->senior_high_list }}
                                    </option>
                                    @endforeach
                                    @foreach ($yearlevelcollege as $yearlevel)
                                    <option value="{{ $yearlevel->college_list }}"
                                        data-target="College">
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
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputScholarshipstatus04" class="form-label">Scholarship
                                    Status:</label>
                                <select id="selectInput504" class="form-control"
                                    name="scholarshipStatus[]" required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="Partial Scholar">Partial Scholar</option>
                                    <option value="Full Scholar" disabled>Full Scholar</option>
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
                        <div class="col-md-6">
                            <!-- Add any additional fields or form elements here -->
                        </div>
                    </div>
                </div>
            </div>

            @endif
    
        </div>
    </div>
    <div class="tab">
        <h2>UPLOAD</h2>
        <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
        <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
        <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
    </div>
    <div class="tab">
        <h2>VERIFY</h2>
        <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
        <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
    </div>
    <div class="tab">
        <h2>SUMMARY</h2>
        <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
        <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
    </div>
    <div style="overflow:auto;">
        <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
    </div>
  
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("icon2")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("icon2");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
 <!--  cdn for bootstrap  -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
 integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
 integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
 crossorigin="anonymous"></script>
<!--  end cdn for bootstrap  -->

<!--  ionicons  -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!--  end ionicons  -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

</body>
</html>
