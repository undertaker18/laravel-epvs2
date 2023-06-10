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

    .icon2 {
        font-size: 60px;
        /* or any other desired size */
        padding-left: 3px;
        padding-right: 3px;
    }

    .nav-font {
        font-size: 30px;
        /* or any other desired size */
    }

</style>

<body>

    <form id="regForm" action="/action_page.php" enctype="multipart/form-data">
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
            <input type="checkbox" id="privacy_notice" name="privacy_notice" value="I agree" class="checkbox">
            <label for="checkbox" class="font"><b>I ACCEPT</b></label>
        </div>

        <div class="tab">
            <h2>PROFILE</h2>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <div id="buttonContainer">
                                <a class="btn btn-primary" href="#" id="duplicateButton">Add Student</a>
                            </div>
                        </div>
                    </div>
                    <div id="studentContainer">
                        <div class="card-2 m-3 bg-form" id="studentTemplate">
                            <div class="row" style="margin-right: 10px;">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <h2 class="card-title pt-3">Student 01</h2>
                                </div>
                                <div class="col-md-4">
                                    <div style="overflow:auto;">
                                        <div style="float:right;">
                                            <div id="buttonContainer2">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="formsContainer" class="card-body p-3">
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Fullname" class="form-label">Full Name:</label>
                                            <input type="text" name="fullname[]" id="searchInput" class="form-control"
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
                                                            'Your name is not on the list.';
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
                                            <label for="emailLabel1" class="form-label" id="emailLabel1">Email:</label>
                                            <input type="email" class="form-control" id="email1" placeholder="Email"
                                                name="email[]" required>
                                            <div id="emailValidationMessage1" class="invalid-feedback"></div>
                                            <script>
                                                var emailInput1 = document.getElementById('email1');
                                                var emailLabel1 = document.getElementById('emailLabel1');
                                                var emailValidationMessage1 = document.getElementById(
                                                    'emailValidationMessage1');
                                                var studentTypeSelect1 = document.getElementById('selectInput1');

                                                function updateEmailValidation1(selectElement) {
                                                    var studentType1 = selectElement.value;

                                                    if (studentType1 === 'New Student') {
                                                        emailInput1.setAttribute('pattern',
                                                            '[a-zA-Z0-9._%+-]+@gmail.com');
                                                        emailInput1.setAttribute('placeholder', 'Email (@gmail.com)');
                                                        emailLabel1.textContent = 'Email:';
                                                    } else if (studentType1 === 'Old Student') {
                                                        emailInput1.setAttribute(
                                                            'pattern',
                                                            '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph'
                                                        );
                                                        emailInput1.setAttribute(
                                                            'placeholder',
                                                            'Email (@student.laverdad.edu.ph)'
                                                        );
                                                        emailLabel1.textContent = 'LV Email:';
                                                    }

                                                    emailInput1.value = '';
                                                    emailInput1.setCustomValidity('');
                                                    emailInput1.classList.remove('is-invalid');
                                                    emailValidationMessage1.textContent = '';
                                                    enableDisableButton();
                                                }

                                                function validateEmail() {
                                                    var selectedType = studentTypeSelect1.value;
                                                    var enteredEmail = emailInput1.value;
                                                    var emailPattern = '';

                                                    if (selectedType === 'New Student') {
                                                        emailPattern = '[a-zA-Z0-9._%+-]+@gmail.com';
                                                    } else if (selectedType === 'Old Student') {
                                                        emailPattern = '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph';
                                                    }

                                                    if (enteredEmail !== '' && !enteredEmail.match(emailPattern)) {
                                                        emailInput1.classList.add('is-invalid');
                                                        emailValidationMessage1.textContent =
                                                            'Please enter a valid email address.';
                                                    } else {
                                                        emailInput1.classList.remove('is-invalid');
                                                        emailValidationMessage1.textContent = '';
                                                    }

                                                    enableDisableButton();
                                                }

                                                emailInput1.addEventListener('input', validateEmail);

                                            </script>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputDepartment" class="form-label">Department:</label>
                                            <select id="selectInput2" class="form-control" name="department[]" required>
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
                                                <option value="{{ $yearlevel->college_list }}" data-target="College">
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
                                            <select id="selectInput5" class="form-control" name="scholarshipStatus[]"
                                                required>
                                                <option value="" selected disabled>Choose...</option>
                                                <option value="Partial Scholar">Partial Scholar</option>
                                                <option value="Full Scholar" disabled>Full Scholar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Add any additional fields or form elements here -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
              document.addEventListener('DOMContentLoaded', function () {
                  const maxDuplications = 3;
                  let studentCount = 1;
          
                  const duplicateButton = document.querySelector('#duplicateButton button');

                  const container = document.getElementById('studentContainer');
                  const studentTemplate = document.getElementById('studentTemplate');
          
                  duplicateButton.onclick = function (event) {
                      event.preventDefault();
                      const existingDuplications = container.getElementsByClassName('card-2').length;
          
                      if (existingDuplications >= maxDuplications) {
                          alert('Maximum limit reached');
                          return;
                      }
          
                      const clonedContainer = studentTemplate.cloneNode(true);
                      clonedContainer.style.display = 'block';
          
                      studentCount = existingDuplications + 1;
                      const formattedCount = String(studentCount).padStart(2, '0');
                      const clonedHeader = clonedContainer.querySelector('.card-title');
                      clonedHeader.textContent = 'Student ' + formattedCount;
          
                      // Generate unique IDs for the input fields
                      const uniqueIdSuffix = '_' + studentCount;
                      const fullnameInput = document.getElementById('fullname');
                      fullnameInput.id = 'fullname' + uniqueIdSuffix;
          
                      const studentTypeSelect = document.getElementById('studentType');
                      studentTypeSelect.id = 'studentType' + uniqueIdSuffix;
          
                      const emailInput = document.getElementById('email');
                      emailInput.id = 'email' + uniqueIdSuffix;
          
                      const departmentSelect = document.getElementById('department');
                      departmentSelect.id = 'department' + uniqueIdSuffix;
          
                      const gradeYearSelect = document.getElementById('gradeYear');
                      gradeYearSelect.id = 'gradeYear' + uniqueIdSuffix;
          
                      const scholarshipStatusSelect = document.getElementById('scholarshipStatus');
                      scholarshipStatusSelect.id = 'scholarshipStatus' + uniqueIdSuffix;
          
                      container.appendChild(clonedContainer);
          
                      if (existingDuplications > 0) {
                          const removeLink = document.createElement('a');
                          removeLink.href = '#';
                          removeLink.textContent = 'Remove';
                          removeLink.classList.add('btn', 'btn-primary');
                          removeLink.style.float = 'right';
                          removeLink.style.overflow = 'auto';
                          removeLink.addEventListener('click', function (event) {
                              event.preventDefault();
                              clonedContainer.remove();
                          });
                          const buttonContainer = clonedContainer.querySelector('#buttonContainer2');
                          buttonContainer.appendChild(removeLink);
                      }
          
                      const uniqueFullnameInput = document.getElementById('fullname' + uniqueIdSuffix);
                      uniqueFullnameInput.addEventListener('input', function () {
                          // Updated validation code for fullnameInput
                          // Add your validation logic here
                          // Example: validateFullname(uniqueFullnameInput.value);
                      });
          
                      const uniqueStudentTypeSelect = document.getElementById('studentType' + uniqueIdSuffix);
                      uniqueStudentTypeSelect.addEventListener('change', function () {
                          // Updated validation code for studentTypeSelect
                          // Add your validation logic here
                          // Example: validateStudentType(uniqueStudentTypeSelect.value);
                      });
          
                      const uniqueEmailInput = document.getElementById('email' + uniqueIdSuffix);
                      uniqueEmailInput.addEventListener('input', function () {
                          // Updated validation code for emailInput
                          // Add your validation logic here
                          // Example: validateEmail(uniqueEmailInput.value);
                      });
          
                      const uniqueDepartmentSelect = document.getElementById('department' + uniqueIdSuffix);
                      uniqueDepartmentSelect.addEventListener('change', function () {
                          // Updated validation code for departmentSelect
                          // Add your validation logic here
                          // Example: validateDepartment(uniqueDepartmentSelect.value);
                      });
          
                      const uniqueGradeYearSelect = document.getElementById('gradeYear' + uniqueIdSuffix);
                      uniqueGradeYearSelect.addEventListener('change', function () {
                          // Updated validation code for gradeYearSelect
                          // Add your validation logic here
                          // Example: validateGradeYear(uniqueGradeYearSelect.value);
                      });
          
                      const uniqueScholarshipStatusSelect = document.getElementById('scholarshipStatus' + uniqueIdSuffix);
                      uniqueScholarshipStatusSelect.addEventListener('change', function () {
                          // Updated validation code for scholarshipStatusSelect
                          // Add your validation logic here
                          // Example: validateScholarshipStatus(uniqueScholarshipStatusSelect.value);
                      });
          
                  });
              });
          </script>
          
          
          
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
        <div class="tab">
            <h2>SUBMIT</h2>
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
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
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
