<x-form-layout>
    <style>
        .row.main-content {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        /* Hide the default file input button */
        .file-input {
            display: none;
        }

        /* Style the custom file input button */
        .custom-file-input {
            display: inline-block;
            padding: 8px 12px;
            background-color: #1266b4;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Remove the hover effect */
        .custom-file-input:hover {
            background-color: #1266b4;
            /* Set the same background color as the default state */
            /* Add any other styles as desired */
        }

        /* Optional: Style the label to display the selected file name */
        .file-name {
            margin-top: 8px;
            font-style: italic;
        }


        .drag-area {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 2px solid #080808;
            /* height: 500px;
            width: 700px; */
            border-radius: 15px;

            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .drag-area1 {
            margin-top: 20px;
            margin-bottom: 20px;
            border: none;
            /* height: 500px;
            width: 700px; */
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .drag-area .icon {
            font-size: 100px;
            color: #1266b4;
            margin-top: 0px !important;
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
        }

        .drag-area img {
            height: 100%;
            width: 100%;
            object-fit: fill;
            border-radius: 5px;
        }

    </style>

    <div class="row main-content">
        <form method="post" action="/upload-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <header class="h4"><b>Take Note:</b> Make sure your receipt is readable!</header>
                
                <div class="drag-area1 mx-auto col-md-7 col-sm-12">
                    <input class="form-control" name="receipt" type="file" id="receipt">
                    <select id="" name="receipt_type" class="form-select" style="" required>
                        <option value="" selected disabled>Receipt Type</option>
                        <option value="instapay">Instapay</option>
                        <option value="gcash">Gcash</option>
                        <option value="gcash_instapay">Gcash Powered by Instapay</option>
                        <option value="bdo_mobile_banking">BDO Mobile Banking</option>
                        <option value="bdo_cash_transaction_slip">BDO Cash Transaction Slip</option>
                    </select>
                    <div id="receiptTypeValidationMessage" class="invalid-feedback"></div>
                </div>
                <div class="drag-area mx-auto col-md-7 col-sm-12">
                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="icon my-auto"><i class="fas fa-cloud-upload-alt"></i></div>
                    <header>Proof of Payment</header>
                    <p>Image Type: .jpg .jpeg .png</p> 
                </div>
                <script>
                    var receiptTypeSelect = document.querySelector('select[name="receipt_type"]');
                        var receiptTypeValidationMessage = document.getElementById('receiptTypeValidationMessage');
                      
                        receiptTypeSelect.addEventListener('change', function () {
                          if (receiptTypeSelect.value !== '') {
                            receiptTypeSelect.classList.remove('is-invalid');
                            receiptTypeValidationMessage.textContent = '';
                          } else {
                            receiptTypeSelect.classList.add('is-invalid');
                            receiptTypeValidationMessage.textContent = 'Please select a receipt type.';
                          }
                          enableDisableButton();
                        });
                      
                        receiptTypeSelect.addEventListener('focus', function () {
                          receiptTypeSelect.classList.remove('is-invalid');
                          receiptTypeValidationMessage.textContent = '';
                        });      
                </script>
                <div class="drag-area1 mx-auto col-md-7 col-sm-12">    
                    <div class="row mt-4">
                        <div class="col-md-6 d-flex justify-content-start">
                            <div>
                                <a href="{{ url('/profile-form') }}" class="btn btn-lg btn-primary" style="width: 200px;">
                                    <i class="fas fa-arrow-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <div>
                                <button id="nextBtn" class="btn btn-lg btn-success" style="width: 200px;" type="submit" name="submit"
                                    disabled>
                                    Next <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
    <script>
        // Update the selected file name on change
        function handleFileChange(event) {
            const fileName = event.target.files[0].name;
            document.getElementById('file-name').textContent = fileName;
        }

    </script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script>
        //selecting all required elements
        const dropArea = document.querySelector(".drag-area"),
            dragText = dropArea.querySelector("header"),
            button = dropArea.querySelector("button"),
            input = document.querySelector("#receipt");
        let file; //this is a global variable and we'll use it inside multiple functions

        input.addEventListener("change", function () {
            //getting user select file and [0] this means if user select multiple files then we'll select only the first one
            file = this.files[0];
            // dropArea.classList.add("active");
            showFile(); //calling function
        });

        function showFile() {
            console.log('showFile');
            let fileType = file.type; //getting selected file type
            let validExtensions = ["image/jpeg", "image/jpg",
                "image/png"
            ]; //adding some valid image extensions in array
            if (validExtensions.includes(fileType)) { //if user selected file is an image file
                let fileReader = new FileReader(); //creating new FileReader object
                fileReader.onload = () => {
                    let fileURL = fileReader.result; //passing user file source in fileURL variable
                    let imgTag =
                        `<img src="${fileURL}" alt="" style="width: 50%">`; //creating an img tag and passing user selected file source inside src attribute
                    dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
                }
                fileReader.readAsDataURL(file);
            } else {
                alert("This is not an Image File!");
                dropArea.classList.remove("active");
                dragText.textContent = "Drag & Drop to Upload File";
            }
        }

    </script>



</x-form-layout>
