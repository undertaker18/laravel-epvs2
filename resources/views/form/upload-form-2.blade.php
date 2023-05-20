
<x-form-layout>
    <style>
        .row.main-content {
        display: flex;
        justify-content: center;
        align-items: center;

        }

        .drag-area {
            margin-top: 50px;
            /* border: 2px dashed #080808; */
            /* height: 500px;
            width: 700px; */
            border-radius: 15px;

            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .drag-area.active {
            border: 2px solid #802525;
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
        }

        .drag-area img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 5px;
        }

    </style>

    <div class="row main-content">
        <form method="post" action="/upload-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="drag-area mx-auto col-md-7 col-sm-12">
                    <br><br>
                    <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                    <header>Proof of Payment</header>
                    <p>Image Type: .jpg .jpeg .png</p>

                    {{-- <p>Drag and Drop to Upload File </p> --}}
                    {{-- <span>OR</span> --}}
                    <br>
                    {{-- <button type="button">Browse File</button> --}}

                    {{-- <input class="text-center form-control" name="c" type="file" id="image" style="height: 38px; width: 20rem;"> --}}


                </div>
            <div class="col-md-5 col-sm-12 my-3 mx-auto my-auto px-5">
                <div class="my-2">
                    <input type="text" value="{{ $LoggedUserProfile['profile_key'] }}" name="uploadform_key" hidden>
                    <input type="file" name="receipt" id="receipt">
                </div>
                <select id="" name="receipt_type" class="form-select " style="" required>
                    <option selected disabled>Receipt Type</option>
                    <option value="instapay">Instapay</option>
                    <option value="gcash">Gcash</option>
                    <option value="gcash_instapay">Gcash Powered by Instapay</option>
                    <option value="bdo_mobile_banking">BDO Mobile Banking</option>
                    <option value="bdo_cash_transaction_slip">BDO Cash Transaction Slip</option>
                </select>
            </div>


    </div>

        <div class="column  mx-auto" style="padding-top: 30px;">
            <div class="buttons">
                <a href="../pages/profile.html ">
                    <button type="button" class="left-button"> <i class="fas fa-arrow-left"></i> BACK</button>
                </a>
                {{-- <a href="../pages/verify.html"> --}}
                    <button type="submit" value="submit"  class="right-button">NEXT <i class="fas fa-arrow-right"></i></button>
                {{-- </a> --}}
            </div>
        </div>
        </form>
    </div>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <script>
        //selecting all required elements
        const dropArea = document.querySelector(".drag-area"),
        dragText = dropArea.querySelector("header"),
        button = dropArea.querySelector("button"),
        input = document.querySelector("#receipt");
        let file; //this is a global variable and we'll use it inside multiple functions

        // button.onclick = ()=>{
        // input.click(); //if user click on the button then the input also clicked
        // }

        input.addEventListener("change", function(){
        //getting user select file and [0] this means if user select multiple files then we'll select only the first one
        file = this.files[0];
        // dropArea.classList.add("active");
        showFile(); //calling function
        });


        //If user Drag File Over DropArea
        // dropArea.addEventListener("dragover", (event)=>{
        // event.preventDefault(); //preventing from default behaviour
        // dropArea.classList.add("active");
        // dragText.textContent = "Release to Upload File";
        // });

        //If user leave dragged File from DropArea
        // dropArea.addEventListener("dragleave", ()=>{
        // dropArea.classList.remove("active");
        // dragText.textContent = "Drag & Drop to Upload File";
        // });

        //If user drop File on DropArea
        // dropArea.addEventListener("drop", (event)=>{
        // event.preventDefault(); //preventing from default behaviour
        // //getting user select file and [0] this means if user select multiple files then we'll select only the first one
        // file = event.dataTransfer.files[0];
        // showFile(); //calling function
        // });

        function showFile(){
            console.log('showFile');
        let fileType = file.type; //getting selected file type
        let validExtensions = ["image/jpeg", "image/jpg", "image/png"]; //adding some valid image extensions in array
        if(validExtensions.includes(fileType)){ //if user selected file is an image file
            let fileReader = new FileReader(); //creating new FileReader object
            fileReader.onload = ()=>{
            let fileURL = fileReader.result; //passing user file source in fileURL variable
            let imgTag = `<img src="${fileURL}" alt="" style="width: 50%">`; //creating an img tag and passing user selected file source inside src attribute
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

</x-form-layout>
