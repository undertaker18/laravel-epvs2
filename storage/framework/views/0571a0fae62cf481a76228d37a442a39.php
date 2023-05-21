
<?php if (isset($component)) { $__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6 = $component; } ?>
<?php $component = App\View\Components\FormLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FormLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <style>
        .row.main-content {
        display: flex;
        justify-content: center;
        align-items: center;
        
        }
       
        .drag-area {
            margin-top: 50px;
            border: 2px dashed #080808;
            height: 500px;
            width: 700px;
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

    <div class="row main-content ">
        <div class="drag-area">
            
            <br><br>
            <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
            <header>Proof of Payment</header>
            <p>Image Type: .jpg .jpeg .png</p>

            <p>Drag and Drop to Upload File </p>
            <span>OR</span>
            <br>
            <button>Browse File</button>
            <input type="file" hidden>
        </div>
        
        <div class="column " style="padding-top: 30px;">

            <div class="buttons">
                <a href="../pages/profile.html ">
                    <button class="left-button"> <i class="fas fa-arrow-left"></i> BACK</button>
                </a>
                <a href="../pages/verify.html">
                    <button class="right-button">NEXT <i class="fas fa-arrow-right"></i></button>
                </a>
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

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6)): ?>
<?php $component = $__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6; ?>
<?php unset($__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\epvs-app2\resources\views/upload-form.blade.php ENDPATH**/ ?>