<x-form-layout>
    <style>
       
        .btn-primary2 {
            background-color: green !important;
            color: white !important;
            border-radius: 5px !important;
           
        }

        .btn-primary1 {
            background-color: rgb(118, 172, 118) !important;
            color: white !important;
            border-radius: 5px !important;
           
        }

        .btn-primary {
            background-color: #1266b4 !important;
        }



        .tab-content {
            border: none !important;
        }

        .card {
            border: none !important;
            border-radius: none !important;
            box-shadow: none !important;
        }

        .card-2 {
            border-radius: 12px !important;
            box-shadow: none !important;
        }

        .form-group {
            text-align: left !important;
        }

        .form-label {

            padding-top: 5px;
        }

        /* .card-title {

        font-size: 1.5rem; 
        text-align: left !important;
        }

        .card-tools {
            text-align: right !important;
        } */

        .container {
            margin-top: 30px;
            justify-content: center;

        }


        .main-content {
            align-items: center;
            margin-left: 19%;
            margin-right: 19%;
            color: #000000 !important;

        }

        .privacy-content1 {
            padding: 2px;
            font-weight: normal;
            font-size: 22px;
            text-align: left;

            color: #000000;

        }

        .btn {
            width: 200px;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .modal-btn-primary{
            background-color: #1266b4 !important; width: 100px;
            color: #ffffff !important;
        }
        .modal-btn-danger{
            background-color: red !important; width: 100px;
            color: #ffffff !important;
        }

        

        .align-left {
            text-align: left;
            padding-top: 15px;
            margin: 0;
        }

        .align-right {
            text-align: right;
            margin: 0;
        }

        .bg-form {
            background-color: #EAF1F8;
        }
        .col-md-5 {
        flex: 0 0 50%;
        max-width: 50%;
        }

        .flexed {
        display: flex;
        }

        .end {
        justify-content: flex-end;
        }
        .start {
        justify-content: flex-start;
        }

        .mb-3 {
        margin-bottom: 1rem;
        }

        .mt-5 {
        margin-top: 3rem;
        }


        @media screen and (max-width: 761px) {

            /* logo */
            .img-fluid-custom-default{
            width: 100%;
            height: auto;
            }

            /* font */
            .bdo-font{
            font-size: 11px;
            padding-top: 0px;
            padding-bottom: 0px;
            margin: 0 0px 0 0px;
            }
            .payment-font{
            font-size: 12px;
            }
            .container {
            width: 100%;    
            padding: 0px;
            }

            .main-content {
            align-items: center;
            margin-left: 0%;
            margin-right: 0%;
            color: #000000 !important;

        }
            .privacy-content1 {
            padding: 2px;
            font-weight: normal;
            font-size: 14px;
            text-align: left;

            color: #000000;

        }
            
        .btn {
            width: 100%;
            margin-top: 5px;
            margin-bottom: 5px;
            }

            .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            }

            
            }
    </style>
        <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="profile">
                    <div class=" main-content">
                       
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="privacy-content1">
                                            <p><b>PRIVACY NOTICE:<br>
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
                                                <input type="checkbox" id="privacy_notice" name="privacy_notice" value="1" class="checkbox" onchange="toggleButton()">
                                                <label for="checkbox" class="font"><b>I ACCEPT</b></label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                          <div class="col-md-5">
                                            <div class="button-container flexed start">
                                                <a href="#" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#confirmModal">
                                                    <i class="fas fa-arrow-left"></i> Back
                                                </a>
                                            </div>
                                          </div>
                                          <div class="col-md-5">
                                            <div class="button-container flexed end">
                                                
                                                <a  href="{{ route('profile-form') }}" id="next-button" class="btn btn-primary1" disabled>
                                                        NEXT <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                          </div>
                                        </div>
                                            <script>
                                                    function toggleButton() {
                                                        var checkBox = document.getElementById("privacy_notice");
                                                        var button = document.getElementById("next-button");
                                                        if (checkBox.checked) {
                                                            button.disabled = false;
                                                            button.classList.remove("btn-primary1");
                                                            button.classList.add("btn-primary2");
                                                        } else {
                                                            button.disabled = true;
                                                            button.classList.remove("btn-primary2");
                                                            button.classList.add("btn-primary1");
                                                        }
                                                    }
                                            </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                     <!-- Modal -->
                     <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog"
                     aria-labelledby="confirmModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="confirmModalLabel">Confirmation</h5>
                                 <a type="button" style="font-size: 30px; margin-right: 10px;" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </a>
                             </div>
                             <div class="modal-body">
                                 Are you sure you want to go back?<br>
                                 Your data will be removed.
                             </div>
                             <div class="modal-footer">
                                 <div class="">
                                     <button type="button" class="btn modal-btn-primary"
                                         data-dismiss="modal">No</button>
                                 </div>
                                 <div class="">
                                     <a href="{{ URL('/') }}" class="btn modal-btn-danger">Yes</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Update the error message dynamically and trigger the modal -->
        @if(!empty($errorMessage))
        <script>
            var errorMessage = "{{ $errorMessage }}";
            $('#errorMessage').text(errorMessage);
            $('#errorModal').modal('show');
        </script>
        @endif

      

       

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</x-form-layout>
