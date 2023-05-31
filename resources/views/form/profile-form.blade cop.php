<x-form-layout>

        <label for="inputScholarshipType" class="form-label">Student Type:</label>
        <select id="selectInput1" class="form-control" name="student_type" required
            onchange="updateEmailValidation1(this)">
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
                if (studentTypeClicked1 && studentTypeSelect1.value === '') {
                    studentTypeSelect1.classList.add('is-invalid');
                    studentTypeValidationMessage1.textContent =
                        'Please select a student type.';
                }

                studentTypeClicked1 = false;
            });

        </script>



      <label for="emailLabel1" class="form-label" id="emailLabel1">Email:</label>
      <input type="email" class="form-control" id="email1" placeholder="Email" name="email[]"
          required>
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
                  emailInput1.setAttribute('placeholder', 'Email (@gmail.com)');
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

      {{-- 2 N D --}}

      <label for="inputScholarshipType" class="form-label">Student Type:</label>
        <select id="selectInput2" class="form-control" name="student_type" required
            onchange="updateEmailValidation2(this)">
            <option value="" selected disabled>Choose...</option>
            <option value="New Student">New Student</option>
            <option value="Old Student">Old Student</option>
        </select>
        <div id="studentTypeValidationMessage2" class="invalid-feedback"></div>

        <script>
            var studentTypeSelect2 = document.getElementById('selectInput2')
            var studentTypeValidationMessage2 = document.getElementById(
                'studentTypeValidationMessage2');
            var studentTypeClicked2 = false;

            studentTypeSelect2.addEventListener('change', function () {
                if (studentTypeSelect2.value !== '') {
                    studentTypeSelect2.classList.remove('is-invalid');
                    studentTypeValidationMessage2.textContent = '';
                } else {
                    studentTypeSelect2.classList.add('is-invalid');
                    studentTypeValidationMessage2.textContent =
                        'Please select a student type.';
                }
                enableDisableButton();
            });

            studentTypeSelect2.addEventListener('click', function () {
                studentTypeClicked2 = true;
            });

            studentTypeSelect2.addEventListener('blur', function () {
                if (studentTypeClicked2 && studentTypeSelect2.value === '') {
                    studentTypeSelect2.classList.add('is-invalid');
                    studentTypeValidationMessage2.textContent =
                        'Please select a student type.';
                }

                studentTypeClicked2 = false;
            });

        </script>



      <label for="emailLabel2" class="form-label" id="emailLabel2">Email:</label>
      <input type="email" class="form-control" id="email2" placeholder="Email" name="email[]"
          required>
      <div id="emailValidationMessage2" class="invalid-feedback"></div>

      <script>
          var emailInput2 = document.getElementById('email2');
          var emailLabel2 = document.getElementById('emailLabel2');
          var emailValidationMessage2 = document.getElementById(
              'emailValidationMessage2');

          function updateEmailValidation2(selectElement) {
              var studentType2 = selectElement.value;

              if (studentType2 === 'New Student') {
                  emailInput2.setAttribute('pattern',
                      '[a-zA-Z0-9._%+-]+@gmail.com');
                  emailInput2.setAttribute('placeholder', 'Email (@gmail.com)');
                  emailLabel2.textContent = 'Email:';
              } else if (studentType2 === 'Old Student') {
                  emailInput2.setAttribute('pattern',
                      '[a-zA-Z0-9._%+-]+@student.laverdad.edu.ph');
                  emailInput2.setAttribute('placeholder',
                      'Email (@student.laverdad.edu.ph)');
                  emailLabel2.textContent = 'LV Email:';
              }

              emailInput2.value = '';
              emailInput2.setCustomValidity('');
              emailInput2.classList.remove('is-invalid');
              emailValidationMessage2.textContent = '';
              enableDisableButton();
          }

          emailInput2.addEventListener('input', function () {
              if (emailInput2.checkValidity()) {
                  emailInput2.classList.remove('is-invalid');
                  emailValidationMessage2.textContent = '';
              } else {
                  emailInput2.classList.add('is-invalid');
                  emailValidationMessage2.textContent =
                      'Please enter a valid email address.';
              }
              enableDisableButton();
          });

      </script>

      {{-- 3 R D --}}

      <label for="inputScholarshipType" class="form-label">Student Type:</label>
      <select id="selectInput3" class="form-control" name="student_type" required
          onchange="updateEmailValidation3(this)">
          <option value="" selected disabled>Choose...</option>
          <option value="New Student">New Student</option>
          <option value="Old Student">Old Student</option>
      </select>
      <div id="studentTypeValidationMessage3" class="invalid-feedback"></div>

      <script>
          var studentTypeSelect3 = document.getElementById('selectInput3')
          var studentTypeValidationMessage3 = document.getElementById(
              'studentTypeValidationMessage3');
          var studentTypeClicked3 = false;

          studentTypeSelect3.addEventListener('change', function () {
              if (studentTypeSelect3.value !== '') {
                  studentTypeSelect3.classList.remove('is-invalid');
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
              if (studentTypeClicked3 && studentTypeSelect3.value === '') {
                  studentTypeSelect3.classList.add('is-invalid');
                  studentTypeValidationMessage3.textContent =
                      'Please select a student type.';
              }

              studentTypeClicked3 = false;
          });

      </script>



    <label for="emailLabel3" class="form-label" id="emailLabel3">Email:</label>
    <input type="email" class="form-control" id="email3" placeholder="Email" name="email[]"
        required>
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
                emailInput3.setAttribute('placeholder', 'Email (@gmail.com)');
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
 

</x-form-layout>