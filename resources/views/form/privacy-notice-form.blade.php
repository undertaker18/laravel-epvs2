<x-form-layout>
    <style>
        .btn {
           width: 200px;
           margin-top: 15px;
           margin-bottom: 15px;
        }
        .btn-primary2 {
            background-color: green !important;
            color: white !important;
            border-radius: 5px !important;
            padding: 9px;
        }
        .btn-primary {
            background-color: #1266b4 !important;
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

       .form-group{
        text-align: left !important;
        }

        .card-title {

        font-size: 1.5rem; /* Change the font size as per your preference */
        font-weight: bold;
        }
      

         .row.main-content {
        display: flex;
        justify-content: center;
        align-items: center;
        
        }
    
        .container {
            margin-top: 30px;
            justify-content: center;
        
        }

        ul {
            justify-content: center;
            list-style: none;
            margin: 0;
            padding: 0;
        


        }

        li {
            align-items: center;
            font-size: 25px;
            margin: 0 10px;
            padding: 5px 10px;
        }

        
        .main-content {
            align-items: center;

        }

        .privacy-content {
            padding: 5px;
            font-weight:normal;
            font-size: 24px;
            text-align: left;
            margin-left: 160px;
            margin-right: 160px;
            color: #000000;
    
        }

        .p{
            padding-left: 10px;
        }

        .asteris {
            color: red;
        }

        /*check box */
        .checkbox {
            size: 20px;
            position: relative; /* set the position to relative */
        /* set the z-index to a high value */    

        }

        input[type=checkbox] {
            height: 20px;
            width: 20px;
            
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
                                                <input type="text" name="privacy_key" value="{{ $privacy->privacy_key }}" hidden>
                                                <input type="checkbox" id="privacy_notice" name="privacy_notice" value="1" class="checkbox" onchange="toggleButton()">
                                                <label for="checkbox" class="font"><b>I ACCEPT</b></label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button class="btn btn-lg btn-primary pl-5 pr-5" onclick="window.location.href='{{ url('/') }}'" data-toggle="tab">
                                                    <i class="fas fa-arrow-left"></i> Back
                                                </button>
                                            </div>
                                            <div class="col-md-6">
                                                <button id="next-button" type="submit"  value="submit" class="btn btn-lg btn-secondary pl-5 pr-5" data-toggle="tab" disabled>
                                                    Next <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </form>

                                                <script>
                                                    function toggleButton() {
                                                        var checkBox = document.getElementById("privacy_notice");
                                                        var button = document.getElementById("next-button");
                                                        if (checkBox.checked) {
                                                            button.disabled = false;
                                                            button.classList.remove("btn-secondary");
                                                            button.classList.add("btn-primary2");
                                                        } else {
                                                            button.disabled = true;
                                                            button.classList.remove("btn-primary2");
                                                            button.classList.add("btn-secondary");
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
</x-form-layout>
