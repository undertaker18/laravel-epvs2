<x-form-layout>
    <style>
         body {
        background: #000000;
        /* Set the background color to light gray  #EAF1F8*/
    }
       a {
        color: #879BAE;
        list-style: none;
        text-decoration: none;
        }

        ul li a.show {
            color: red !important;
        }

        .nav-link:focus{
            background-color: transparent !important;
            color: #1266b4 !important;
        }

        .nav-link {
            color: #879BAE !important;
            font-size: 25px !important; /* or any other desired size */
        }
        .icon{
            font-size: 70px !important; /* or any other desired size */
        }

        .nav-link:hover {
            color: #1266b4 !important;
        }


        .nav-link:after {
            background-color: red !important;
        }

        .nav-item {
            list-style: none;
            text-decoration: none;
        }

        .nav-link:active{
            /* Remove background color */
            background-color: transparent !important;
            color: #1266b4 !important;
        }

        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            /* Remove background color */
            background-color: transparent !important;
        }
        .card-header  {
            border: none !important;
        }
        .tab-content {
            border: none !important;
        }
        .card {
            border: none !important;
            box-shadow: none !important;
        }

        @media (min-width: 375px) {
       
            .nav-link {
                font-size: 15px; /* or any other desired size */
            }
            .icon{
                font-size: 40px; /* or any other desired size */
            }
            .privacy-content{
                font-size: 16px;
                margin-left: 10px;
                margin-right: 10px;
            }
            .drag-area {
            height: 60%;
            width:100%;
            }
            
        }
        @media (min-width: 400px) {
        
            .nav-link {
                font-size: 15px; /* or any other desired size */
            }
            .icon{
                font-size: 40px; /* or any other desired size */
            }
            .privacy-content{
                font-size: 18px;
            }
            .btn-primary {
                font-size: 20px;
            }
            .drag-area {
                height: 60%;
                width:100%;
            }
            .drag-area header {
                font-size: 18px;
                font-weight: 500;
                color: #1266b4;
            }
            
            .drag-area p {
                font-size: 12px;
                font-weight: 500;
                color: #080808;
            }
           
        }
        @media (min-width: 600px) {
        
            .nav-link {
                font-size: 15px; /* or any other desired size */
            }
            .icon{
                font-size: 40px; /* or any other desired size */
            }
            .privacy-content{
                font-size: 20px;
            }
            .drag-area header {
                font-size: 18px;
                font-weight: 500;
                color: #1266b4;
            }
            
            .drag-area p {
                font-size: 12px;
                font-weight: 500;
                color: #080808;
            }
        }

        @media (min-width: 800px) {
            .nav-link {
                font-size: 18px; /* or any other desired size */
            }
            .icon{
                font-size: 40px; /* or any other desired size */
            }
            .privacy-content{
                font-size: 21px;
            }
        }

        @media (min-width: 992px) {
            .nav-link {
                font-size: 20px; /* or any other desired size */
            }
            .icon{
                font-size: 55px; /* or any other desired size */
            }
            .privacy-content{
                font-size: 23px;
            }
        }

        @media (min-width: 1200px) {
            .nav-link {
                font-size: 24px; /* or any other desired size */
            }
            .icon{
                font-size: 70px; /* or any other desired size */
            }
            .privacy-content{
                font-size: 24px;
            }
        }
        /* Default button styles */
            .btn-primary {
           
            padding: 10px 20px;
            font-size: 20px;
            border: none;
            background-color: #1266b4 !important;
            color: #fff;
            border-radius: 5px;
            }

            .btn-secondary {
           
           padding: 10px 20px;
           font-size: 20px;
           border: none;
           background-color: gray !important;
           color: #fff;
           border-radius: 5px;
           }

           .form-group{
            text-align: left !important;
            }

            .card-title {

            font-size: 1.5rem; /* Change the font size as per your preference */
            font-weight: bold;
            }
          

            /* Media query for small screens */
            @media screen and (max-width: 300px) {
            button {
                display: inline-block;
                float: none !important;
                font-size: 14px;
                padding: 8px 16px;
                
            }
            }

            /* Media query for medium screens */
            @media screen and (min-width: 577px) and (max-width: 992px) {
            button {
                display: inline-block;
                float: none !important;
                font-size: 16px;
                padding: 10px 20px;
            }
            }

            /* Media query for large screens */
            @media screen and (min-width: 993px) {
            button {
                font-size: 18px;
                padding: 12px 24px;
            }
            }
             /* upload */

             .row.main-content {
        display: flex;
        justify-content: center;
        align-items: center;
        
        }
       
        .drag-area {
            margin-bottom: 50px;
            border: 2px dashed #080808;
            height: 60%;
            width:60%;
            border-radius: 15px;
            
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
    
        .drag-area.active {
            border: 2px solid #005606;
        }
    
        .drag-area .icon {
            font-size: 100px;
            color: #1266b4;
        }
    
        .drag-area header {
            font-size: 30px;
            font-weight: 500;
            color: #1266b4;
        }
        
        .drag-area p {
            font-size: 20px;
            font-weight: 500;
            color: #080808;
        }
    
        .drag-area span {
            font-size: 20px;
            font-weight: 500;
            color: #080808;
            margin: 10px 0 15px 0;
        }
    
        .drag-area button {
            padding: 10px 25px;
            font-size: 20px;
            font-weight: 500;
            border: none;
            outline: none;
            background: #1266b4;
            color: #ffffff;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 50px;
        }
    
        .drag-area img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 5px;
        }


   
        </style>
       
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header p-2">
                      <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#privacy" data-toggle="tab"> <i class="fas fa-user-shield icon" ></i><br>PRIVACY</a></li>
                        <li class="nav-item"><a class="nav-link " href="#profile" data-toggle="tab"> <i class="fas fa-user-alt icon" ></i><br>PROFILE</a></li>
                        <li class="nav-item"><a class="nav-link " href="#upload" data-toggle="tab"> <i class="fas fa-file-upload icon" ></i><br>UPLOAD</a></li>
                        <li class="nav-item"><a class="nav-link " href="#verify" data-toggle="tab"> <i class="fas fa-user-check icon" ></i><br>VERIFY</a></li>
                        <li class="nav-item"><a class="nav-link " href="#summary" data-toggle="tab"> <i class="fas fa-search icon" ></i><br>SUMMARY</a></li>
                        <li class="nav-item"><a class="nav-link " href="#submit" data-toggle="tab"> <i class="fas fa-check-circle icon" ></i><br>SUBMIT</a></li>
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            
                            <div class="active tab-pane " id="privacy">
                                <div class="row main-content">
                                    <div class="column">
                                        <div class="privacy-content">
                                            <p><b>PRIVACY NOTICE:</b> Dear student(s)/parent(s)/guardian(s), we would 
                                                like to inform you that we are collecting your personal information(s)
                                                for the purpose of your payment in La Verdad Christian College. This
                                                information(s) shall be utilized for payment process only. In
                                                compliance to Data Privacy Act of 2012, these personal information(s)
                                                shall not be used outside of its declared purpose. We would like to 
                                                inform you also that personal information(s) will be stored in our LVCC 
                                                Database. The use, storage, retention and disposal of your personal 
                                                information(s) shall be governed by our data privacy policies. If you 
                                                agree to this privacy notice, kindly check the box below. *I ACCEPT</p>
                                                <input type="checkbox" id="my-checkbox" name="my-checkbox" class="checkbox" onchange="toggleButton()">
                                                <label for="my-checkbox" class="font"><b>I ACCEPT </b></span></label>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-md-6">
                                          <a class="btn btn-lg btn-primary float-left pl-5 pr-5" href="#" data-toggle="tab">
                                            <i class="fas fa-arrow-left"></i> Back
                                          </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a id="next-button" class="btn btn-lg btn-secondary float-right pl-5 pr-5" href="#profile" data-toggle="tab">
                                                Next <i class="fas fa-arrow-right"></i>
                                            </a>
                                          <script>
                                           function toggleButton() {
                                            var checkBox = document.getElementById("my-checkbox");
                                            var button = document.getElementById("next-button");
                                            if (checkBox.checked == true) {
                                                button.disabled = false;
                                                button.classList.remove("btn-secondary");
                                                button.classList.add("btn-primary");
                                            } else {
                                                button.disabled = true;
                                                button.classList.remove("btn-primary");
                                                button.classList.add("btn-secondary");
                                            }
                                            }
                                        </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id="profile">
                                <div class="row main-content">
                                    <div class="card">
                                        <form>
                                            <div class="card-header">
                                                <h3 class="card-title ">Student 01 Information</h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-success" onclick="showStudentInfo()">
                                                        <i class="fas fa-plus"></i> Add Student
                                                      </button>
                                                </div>
                                            </div>
                                        
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="inputFullname" class="form-label">Fullname:</label>
                                                            <input id="inputFullname" type="text" class="form-control" placeholder="Fullname" aria-label="Fullname" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="inputEmail" class="form-label">LV Email:</label>
                                                            <input  id="inputEmail" type="email" class="form-control" placeholder="Email" aria-label="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group" class="form-label">
                                                            <label for="inputScholarshipstatus">Scholarship Status:</label>
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
                                                            <label for="inputLevelYear"class="form-label">Level/Year:</label>
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
                                                            <label for="inputScholarshipType"class="form-label">Student type:</label>
                                                            <select id="inputScholarshipType" class="form-control" required>
                                                                <option selected>Choose...</option>
                                                                <option>New Student</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="inputAmount" class="form-label" >Amount of Payment:</label>
                                                            <input type="text" class="form-control" placeholder="inputAmount" aria-label="inputAmount" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="studentInfo" style="display:none">
                                                <div class="card-header">
                                                    <h3 class="card-title ">Student 02 Information</h3>
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-danger" onclick="hideStudentInfo()">
                                                            <i class="fas fa-times"></i> Remove Student
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="inputFullname" class="form-label">Fullname:</label>
                                                                <input id="inputFullname" type="text" class="form-control" placeholder="Fullname" aria-label="Fullname" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="inputEmail" class="form-label">LV Email:</label>
                                                                <input  id="inputEmail" type="email" class="form-control" placeholder="Email" aria-label="Email" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group" class="form-label">
                                                                <label for="inputScholarshipstatus">Scholarship Status:</label>
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
                                                                <label for="inputLevelYear"class="form-label">Level/Year:</label>
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
                                                                <label for="inputScholarshipType"class="form-label">Student type:</label>
                                                                <select id="inputScholarshipType" class="form-control" required>
                                                                    <option selected>Choose...</option>
                                                                    <option>New Student</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="inputAmount" class="form-label">Amount of Payment:</label>
                                                                <input id="inputAmount" type="text" class="form-control" placeholder="inputAmount" aria-label="inputAmount" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <script>
                                                function showStudentInfo() {
                                                  document.getElementById("studentInfo").style.display = "block";
                                                }
                                              
                                                function hideStudentInfo() {
                                                  document.getElementById("studentInfo").style.display = "none";
                                                }
                                              </script>
                                        </form>
                                       

                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                          <a class="btn btn-lg btn-primary float-left pl-5 pr-5" href="#privacy" data-toggle="tab">
                                            <i class="fas fa-arrow-left"></i> Back
                                          </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a id="next-button" class="btn btn-lg btn-secondary float-right pl-5 pr-5" href="#upload" data-toggle="tab">
                                                Next <i class="fas fa-arrow-right"></i>
                                            </a>
                                          <script>
                                           function toggleButton() {
                                            var checkBox = document.getElementById("my-checkbox");
                                            var button = document.getElementById("next-button");
                                            if (checkBox.checked == true) {
                                                button.disabled = false;
                                                button.classList.remove("btn-secondary");
                                                button.classList.add("btn-primary");
                                            } else {
                                                button.disabled = true;
                                                button.classList.remove("btn-primary");
                                                button.classList.add("btn-secondary");
                                            }
                                            }
                                        </script>
                                        </div>
                                    </div>
                                </div>
                            </div>

        
                            <div class="tab-pane" id="upload">
                                <div class="row main-content">
                                    
                                    <div class="drag-area">
                                        <br><br>
                                        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                        <header>
                                            Upload Proof of Payment
                                            <p class="header-notes text-dark">Amount Transfer | Reference | Date | Time</p>
                                        </header>
                                        <p class="note">Image Type can Accept: .jpg .jpeg .png</p>
                                        <p class="note">Maximum File Size: 10MB</p>
                                       
                                        <p class="note">Drag and Drop to Upload File</p>
                                        <span>OR</span>
                                        <br>
                                        <button>Browse File</button>
                                        <input type="file" hidden>
                                    </div>
                                    
                                
                                
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                          <a class="btn btn-lg btn-primary float-left pl-5 pr-5" href="#" data-toggle="tab">
                                            <i class="fas fa-arrow-left"></i> Back
                                          </a>
                                        </div>
                                        <div class="col-md-6">
                                            <a id="next-button" class="btn btn-lg btn-secondary float-right pl-5 pr-5" href="#profile" data-toggle="tab">
                                                Next <i class="fas fa-arrow-right"></i>
                                            </a>
                                          <script>
                                           function toggleButton() {
                                            var checkBox = document.getElementById("my-checkbox");
                                            var button = document.getElementById("next-button");
                                            if (checkBox.checked == true) {
                                                button.disabled = false;
                                                button.classList.remove("btn-secondary");
                                                button.classList.add("btn-primary");
                                            } else {
                                                button.disabled = true;
                                                button.classList.remove("btn-primary");
                                                button.classList.add("btn-secondary");
                                            }
                                            }
                                        </script>
                                        </div>
                                    </div>
                                </div>  
                                <script>
                                    //selecting all required elements
                                    const dropArea = document.querySelector(".drag-area"),
                                    dragText = dropArea.querySelector("header"),
                                    button = dropArea.querySelector("button"),
                                    input = dropArea.querySelector("input");
                                    let file; //this is a global variable and we'll use it inside multiple functions
                            
                                    button.onclick = ()=>{
                                    input.click(); //if user click on the button then the input also clicked
                                    }
                            
                                    input.addEventListener("change", function(){
                                    //getting user select file and [0] this means if user select multiple files then we'll select only the first one
                                    file = this.files[0];
                                    dropArea.classList.add("active");
                                    showFile(); //calling function
                                    });
                            
                            
                                    //If user Drag File Over DropArea
                                    dropArea.addEventListener("dragover", (event)=>{
                                    event.preventDefault(); //preventing from default behaviour
                                    dropArea.classList.add("active");
                                    dragText.textContent = "Release to Upload File";
                                    });
                            
                                    //If user leave dragged File from DropArea
                                    dropArea.addEventListener("dragleave", ()=>{
                                    dropArea.classList.remove("active");
                                    dragText.textContent = "Drag & Drop to Upload File";
                                    });
                            
                                    //If user drop File on DropArea
                                    dropArea.addEventListener("drop", (event)=>{
                                    event.preventDefault(); //preventing from default behaviour
                                    //getting user select file and [0] this means if user select multiple files then we'll select only the first one
                                    file = event.dataTransfer.files[0];
                                    showFile(); //calling function
                                    });
                            
                                    function showFile(){
                                    let fileType = file.type; //getting selected file type
                                    let validExtensions = ["image/jpeg", "image/jpg", "image/png"]; //adding some valid image extensions in array
                                    if(validExtensions.includes(fileType)){ //if user selected file is an image file
                                        let fileReader = new FileReader(); //creating new FileReader object
                                        fileReader.onload = ()=>{
                                        let fileURL = fileReader.result; //passing user file source in fileURL variable
                                        let imgTag = `<img src="${fileURL}" alt="">`; //creating an img tag and passing user selected file source inside src attribute
                                        dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
                                        }
                                        fileReader.readAsDataURL(file);
                                    }else{
                                        alert("This is not an Image File!");
                                        dropArea.classList.remove("active");
                                        dragText.textContent = "Drag & Drop to Upload File";
                                    }
                                    }
                            
                                </script>
                            </div>

                            <div class="tab-pane" id="verify">
                            <p>Verify</p>
                            </div>

        
                            <div class="tab-pane" id="summary">
                            <p> Summary</p>
                            </div>
                        
                            <div class="tab-pane" id="submit">
                            <p> Submit</p>
                            </div>

                        </div>
                      <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
        
</x-form-layout>