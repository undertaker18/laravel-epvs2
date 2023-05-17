<x-form-layout>
       
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