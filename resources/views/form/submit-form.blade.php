<x-form-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">

    <style>
        .main-content {
            align-items: center;
            margin-left: 19%;
            margin-right: 19%;
            color: #000000 !important;
            margin-bottom: 10%;

        }

        .right-button {
            float: right;
            width: 200px;
            height: 50px;
            padding: 8px;
            margin-right: 20px;
            background-color: #1266b4;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 20px;
        }
        .right-button:hover {
            
            background-color: #0a447a !important;
            color: #ffffff;
        }

        .tab-content {
            border: none !important;
        }

        .card {
            border: none !important;
            border-radius: none !important;
            box-shadow: none !important;
        }

        @media screen and (max-width: 761px) {

            /* logo */
            .img-fluid-custom-default {
                width: 100%;
                height: auto;
            }

            /* font */
            .bdo-font {
                font-size: 11px;
                padding-top: 0px;
                padding-bottom: 0px;
                margin: 0 0px 0 0px;
            }

            .payment-font {
                font-size: 12px;
            }

            .container {
                width: 100%;
                padding: 0px;
            }

            .main-content {
                align-items: center;
                margin-left: 12px;
                margin-right: 12px;
                color: #000000 !important;

            }

            .privacy-content1 {
                padding: 2px;
                font-weight: normal;
                font-size: 14px;
                text-align: left;

                color: #000000;

            }

            .form-content {
                font-size: 14px;
            }


            .btn {
                width: 100%;
                margin-top: 10px;
                margin-bottom: 5px;
            }

            .button-container {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .right-button {
                width: 200px;
                margin-top: 10px;
                margin-bottom: 5px;
                height: 35px;
                padding: 0px;
                margin-right: 0px;
                border-radius: 5px;
                font-size: 14px;
            }

            .col-md-6 {
                flex: 0 0 100% !important;
                max-width: 100% !important;
            }

            .d-flex {
                display: flex !important;
            }

            .justify-content-end {
                justify-content: center !important;
            }

            .mb-3 {
                margin-bottom: 1rem;
            }

            .mt-5 {
                margin-top: 3rem;
            }


        }

       
    </style>
    <div class="card-body">
        <div class="tab-content">

            <div class="active tab-pane" id="profile">
                <div class=" main-content">
                    <div class="card">
                        <div class="form-content">
                            <div class="card d-flex ">
                                <div class="card-body ">

                                    <br>
                                    <div class="icon"><i class="fas fa-check icon" style="color: green;"></i></div>
                                    <h2>THANK YOU!</h2>
                                    <p>
                                        The form was submitted successfully.
                                        <br>
                                        Summary of the form has been sent to your email.
                                    </p>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 d-flex justify-content-start">
                                        <div class="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end mb-3 mt-5 ">
                                        <div>
                                            <a href="{{ '/' }}">
                                                <button class="btn right-button">Back to HomePage</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-form-layout>