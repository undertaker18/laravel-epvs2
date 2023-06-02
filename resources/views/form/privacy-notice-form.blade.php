<x-form-layout>
    <style>
       .btn {
            width: 200px;
            margin-top: 15px;
            margin-bottom: 0px;
        }

        



        .btn-primary2 {
            background-color: green !important;
            color: white !important;
            border-radius: 5px !important;
            padding: 9px;
        }

        .btn-primary1 {
            background-color: rgb(118, 172, 118) !important;
            color: white !important;
            border-radius: 5px !important;
            padding: 9px;
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
    </style>
        <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="profile">
                    <div class=" main-content">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-12">

                                        <form action="/privacy-form" method="POST">
                                            @csrf 
                                        <div class="privacy-content1">
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
                                                <input type="text" name="privacy_key" value="{{ $privacy->privacy_key }}" hidden>
                                                <input type="checkbox" id="privacy_notice" name="privacy_notice" value="1" class="checkbox" onchange="toggleButton()">
                                                <label for="checkbox" class="font"><b>I ACCEPT</b></label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6  d-flex justify-content-start">
                                                <button class="btn btn-lg btn-primary pl-5 pr-5" onclick="window.location.href='{{ url('/') }}'" data-toggle="tab">
                                                    <i class="fas fa-arrow-left"></i> Back
                                                </button>
                                            </div>
                                            <div class="col-md-6  d-flex justify-content-end">
                                                <button id="next-button" type="submit"  value="submit" class="btn btn-lg btn-primary1 pl-5 pr-5" data-toggle="tab" disabled>
                                                    Next <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </form>

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

        <!-- Modal -->
        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="errorModalLabel">Error</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="errorMessage">Error message goes here</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

</x-form-layout>
