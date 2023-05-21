
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

    .form-content {
        background-color: #EAF1F8;
        margin-left: 65px;
        margin-right: 65px;
        margin-top: 90px;
        border-radius: 15px;    
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

    .border-line {
        margin-left: 200px;
        margin-right: 100px;
        padding-top: 250px;

    }

    .quotation {
        font-size: 12px;
    }

    .form-label {
        text-align: left;
    }

    .card-body {
        text-align: left;
    }

    .card {
        border: none;
    }

    .form-control {
        border: none;
        background-color: white;
    }
    </style>
    <div class="row main-content ">
        <div class="column " >
            <!--Student 01 -->
            <div class="form-content">
                <h2>Student 01</h2>
                <div class="row">
                    <div class="col">
                        <label for="inputLastname" class="form-label">Lastname</label>
                        <input type="text" class="form-control" placeholder="" aria-label="Lastname">
                    </div>
                    <div class="col">
                        <label for="inputFirstname" class="form-label">Firstname</label>
                        <input type="text" class="form-control" placeholder="" aria-label=" Firstname">
                    </div>
                    <div class="col">
                        <label for="inputMiddlename" class="form-label">Middlename</label>
                        <input type="text" class="form-control" placeholder="" aria-label="Middlename">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="" aria-label="Email">
                    </div>
                    <div class="col">
                        <label for="inputStudentType" class="form-label">Student Type</label>
                        <input type="text" class="form-control" id="inputStudentType"
                        placeholder="" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="inputDepartment" class="form-label">Department</label>
                        <input type="text" class="form-control" id="inputDepartment"
                        placeholder="" readonly>
                    </div>
                    <div class="col">
                        <label for="inputGradeCourse" class="form-label">Grade/Course</label>
                        <input type="text" class="form-control" id="inputGradeCourse"
                        placeholder="" readonly>
                    </div>
                    <div class="col">
                        <label for="inputLevelYear" class="form-label">Level/Year</label>
                        <input type="text" class="form-control" id="inputLevelYear"
                        placeholder="" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="cols" style="width: 50%;">
                        <label for="inputScholarshiptatus*" class="form-label">Scholarship Status</label>
                        <input type="text" class="form-control" id="inputScholarshiptatus"
                        placeholder="" readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-line">
            <div class="col-sm-7">
                <div class="card">
                    <img src="../ASSETS/verify/receipt.png" alt="Image Description" width="100% "
                        height="550px" title="Image Title" style=" border-radius: 10px;;"
                        class="image-class">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Take note: </h5>
                        <p class="card-text">Ensure that all information provided are
                            accurate and exact before proceeding to the next step.</p>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Payment for student
                                1:*</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Amount of Payment:
                                *</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Reference Number*</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="" readonly>
                        </div>
                        <div class="row">
                            <label for="formGroupExampleInput2" class="form-label">Date & Time of Payment
                                <span class="quotation">(BASED ON YOUR RECEIPT)</span></label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" placeholder=""
                                    aria-label="text" readonly>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder=""
                                    aria-label="time" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="column " style="padding-top: 30px;">

            <div class="buttons">
                <a href="../pages/verify.html ">
                    <button class="left-button"> <i class="fas fa-arrow-left"></i> BACK</button>
                </a>
                <a href="../pages/submit.html">
                    <button class="right-button">NEXT <i class="fas fa-arrow-right"></i></button>
                </a>
            </div>
        </div>
    </div>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6)): ?>
<?php $component = $__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6; ?>
<?php unset($__componentOriginal85d2a8a4f2010bce3f6b1c4fe51c70f6); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\epvs-app2\resources\views/summary-form.blade.php ENDPATH**/ ?>