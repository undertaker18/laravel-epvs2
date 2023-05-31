<x-form-layout>
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
            width: 250px;
            height: 50px;
            padding: 8px;
            margin-left: 8px;
            background-color: #1266b4;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 20px;
        }

        .tab-content {
            border: none !important;
        }

        .card {
            border: none !important;
            border-radius: none !important;
            box-shadow: none !important;
        }

    </style>
    <div class="card-body">
        <div class="tab-content">

            <div class="active tab-pane" id="profile">
                <div class=" main-content">
                    <div class="card">
                        <div class="form-content">
                            <br>
                            <div class="icon"><i class="fas fa-check icon" style="color: green;"></i></div>
                            <h2>THANK YOU!</h2>
                            <p>
                                The form was submitted successfully.
                                <br>
                                Please wait for the confirmation to your email.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-start">
                                <div class="">

                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end mb-3 mt-5 ">
                                <div style="padding-right: 20px;">
                                    <a href="{{ '/' }}">
                                        <button class="right-button">Back to HomePage</button>
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
