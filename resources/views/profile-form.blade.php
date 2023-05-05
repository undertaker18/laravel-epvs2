<x-form-layout>
    <style>
        body {
            background: #EAF1F8;
            /* Set the background color to light gray */
        }
    
        .image {
            text-align: center;
            border-radius: 30px;
            height: 1010px;   
            background-color: #ffffff;
    
    
        }
    
        .container {
            margin-top: 30px;
            justify-content: center;
          
        }
    
        ul {
            justify-content: center;
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
    
    
        }
    
        li {
            align-items: center;
            font-size: 25px;
            margin: 0 10px;
            padding: 5px 10px;
        }
    
        .icon {
            font-size: 60px;
            /* Set the font size to 50 pixels */
        }
    
        .main-content {
            display: flex;
            align-items: center;
    
        }
    
        .privacy-content {
            padding: 20px;
            font-family: Georgia;
            font-size: 25px;
            text-align: left;
            margin-bottom: 250px;
            margin-left: 160px;
            margin-right: 160px;
            color: #000000
    
    
        }
    
        .asteris {
            color: red;
        }
    
        /*check box */
        .checkbox {
            size: 20px;
    
        }
    
        input[type=checkbox] {
            height: 20px;
            width: 20px;
    
        }
    
        /*button */
    
        .buttons {
            justify-content: center;
            align-items: center;
            margin-left: 130px;
            margin-right: 150px;
            
        }
    
        .left-button {
            float: left;
            width: 200px;
            height: 50px;
            padding: 8px;
            margin-left: 8px;
            background-color: #1266B4;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 20px;
        }
    
        .right-button {
            float: right;
            width: 200px;
            height: 50px;
            padding: 8px;
            margin-left: 8px;
            background-color: #879BAE;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 20px;
        }
        .right-button-student {
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
            margin-right: 150px;
            margin-top: 20px;
        }
        .form-content {
            background-color: #EAF1F8;
            margin-left: 150px;
            margin-right: 150px;
            margin-top: 90px;
            border-radius: 15px;  
            position: relative; /* set the position to relative */
            z-index: 1000; /* set the z-index to a high value */
        }
      
        .form-control {
           border: none;   
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
        h2{
           padding-top: 20px;
    
        }
    
        /* Create two equal columns that floats next to each other */
        .column {
        float: left;
        width: 100%;
        padding: 10px;
        height: 300px; /* Should be removed. Only for demonstration */
        }
        
        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        } 
    
    </style> 

    <form action="{{ route('profile-form') }}" method="get">

        <div class="row main-content ">
            <div class="column " >
                <div class="button-student">
                    <button class="right-button-student"><i class="fas fa-plus"></i> ADD STUDENT </button>
                </div>
                <!--Student 01 -->
                <div class="form-content">
                    <h2>Student 01</h2>
                    <div class="row">
                        <div class="col">
                            <label for="inputLastname" class="form-label">Lastname:</label>
                            <input type="text" class="form-control" placeholder="Lastname" aria-label="Lastname" required>
                        </div>
                        <div class="col">
                            <label for="inputFirstname" class="form-label">Firstname:</label>
                            <input type="text" class="form-control" placeholder="Firstname" aria-label=" Firstname" required>
                        </div>
                        <div class="col">
                            <label for="inputMiddlename" class="form-label">Middlename:</label>
                            <input type="text" class="form-control" placeholder="Middlename" aria-label="Middlename" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="inputEmail" class="form-label">Email:</label>
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email" required>
                        </div>
                        <div class="col">
                            <label for="inputScholarshipType" class="form-label">Student type:</label>
                            <select id="inputScholarshipType" class="form-select" style="border: none; outline: none; box-shadow: none; background-color: white;"required>
                                <option selected>Choose...</option>
                                <option >New Student</option>
                                <option >Old Student</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="inputDepartment" class="form-label">Department:</label>
                            <select id="inputDepartment" class="form-select" style="border: none; outline: none; box-shadow: none; background-color: white;"required>
                                <option selected>Choose...</option>
                                <option>Elementary</option>
                                <option>High School</option>
                                <option>College</option>
                              </select>
                              
                        </div>
                        <div class="col">
                            <label for="inputGradeCourse" class="form-label">Grade/Course:</label>
                            <select id="inputGradeCourse" class="form-select" style="border: none; outline: none; box-shadow: none; background-color: white;" required>
                                <option selected>Choose...</option>
                                <option>BSIS</option>
                                <option>BAB</option>
                                <option>BSAIS</option>
                                <option>BSSW</option>
                                <option>BSA</option>
                                <option>ACT</option>
                              </select>
                        </div>
                        <div class="col">
                            <label for="inputLevelYear" class="form-label">Level/Year:</label>
                            <select id="inputLevelYear" class="form-select" style="border: none; outline: none; box-shadow: none; background-color: white;" required>
                                <option selected>Choose...</option>
                                <option>1 Year</option>
                                <option>2 Year</option>
                                <option>3 Year</option>
                                <option>4 Year</option>
                              </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="cols" style="width: 50%;">
                            <label for="inputScholarshiptatus*" class="form-label">Scholarship Status:</label>
                            <select id="inputScholarshiptatus" class="form-select" style="border: none; outline: none; box-shadow: none; background-color: white;"required>
                                <option selected>Choose...</option>
                                <option >Partial Scholar</option>
                                <option >Full Scholar</option>
                              </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column " style="padding-top: 230px;">
                
                <div class="buttons">
                    <a href="{{ url('/privacy-notice') }} ">
                    <button class="left-button"> <i class="fas fa-arrow-left"></i> BACK</button>
                    </a>
                   <a href="{{ url('/upload-form') }}">
                    <button id="next-button" class="right-button" disabled>NEXT <i class="fas fa-arrow-right"></i></button>
                    </a>

                </div> 
            </div>
        </div>
    
    </form>

    <script>
        const nextButton = document.getElementById("next-button");
        const inputFields = document.querySelectorAll(".form-control");
    
        function updateButtonState() {
            const isEmpty = Array.from(inputFields).some(input => input.value === "");
            nextButton.disabled = isEmpty;
            nextButton.style.backgroundColor = isEmpty ? "" : "green";
            const isEmpty2 = Array.from(inputFields).some(select => select.value === "");
            nextButton.disabled = isEmpty2;
            nextButton.style.backgroundColor = isEmpty ? "" : "green";
        }
    
        inputFields.forEach(input => {
            input.addEventListener("input", updateButtonState);
        });
    </script>
</x-form-layout>