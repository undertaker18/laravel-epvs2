<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPVS</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/data-privacy/lvcclogo.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="../CSS/landingpage.css" rel="stylesheet">
</head>

<style>

    .link {
      font-size: 12px;
    }

    /* image background */
    .image-bg {
      
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
       
    }

    .logo {
        padding-top: 0px;
    }

    .font-logo {
        font-size: 65px;
        padding-top: 0px;
        margin: 10px;
        color: white;
    }

    /* logo */
    .img-fluid-custom-default{
      width: 60%;
      height: auto;
      
    }

    .img-fluid-custom{
      width: 30%;
      height: 30%;
    }

    /* font */
    .bdo-font{
      font-size: 15px;
      padding-top: 20px;
      padding-bottom: 10px;
      margin: 0 10px 0 10px;
    }
    .bg-card-bdo{
      background-color: #cce1f6; /* Adjust the alpha value (0.5 in this example) to control the transparency */
      
    }
    /* container */
    .card  {
      width: 85%;
    }

    .btn-success {
        width: 25%;
        font-size: 14px;
        font-weight: 500;
    }

    /*Checkbox and button */
    .custom-control-input {
        position: absolute;
        left: -9999px;
    }

    .custom-control-input:checked~.custom-control-label::before {
        background-color: #007bff;
        border-color: #007bff;
    }

    .custom-control-input:focus~.custom-control-label::before {
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-control-input:focus:not(:checked)~.custom-control-label::before {
        border-color: #80bdff;
    }

    .custom-control-input:not(:disabled):active~.custom-control-label::before {
        background-color: #b3d7ff;
        border-color: #b3d7ff;
    }

    .custom-control-input:not(:disabled):active:checked~.custom-control-label::before {
        background-color: #004085;
        border-color: #004085;
    }

    .custom-control-input:checked~.custom-control-label::after {
        color: #fff;
        content: url('checkmark-white.png');
    }

    .custom-control-label::before {
        border: 1px solid #adb5bd;
    }

    .custom-control-label::after {
        background-image: none;
    }

    .custom-control {
        position: relative;
        display: block;
        min-height: 1.5rem;
        padding-left: 1.5rem;
        margin-bottom: 0;
        cursor: pointer;
    }

    .custom-control-label {
        margin-bottom: 0;
        vertical-align: top;
    }

    .text-color {
        color: #6C6C6C;
        margin-left: 2px;
        font-size: 16px;
        font-weight: 400;
        margin-top: 2px;
    }

    .button-padding {
        padding-left: 3px;
        padding-right: 3px;
    }

    .button-size {
        width: 200px;
        font-size: 14px;
        font-weight: 500;
    }

    /* Example receipts */
    .modal-dialog {
        max-width: 800px;
        margin: 1.75rem auto;
    }

    .modal-content {
        padding: 0;
        border: none;
    }

    .modal-body {
        position: relative;
        padding: 0;
    }

    .modal-close {
        position: absolute;
        top: 0;
        right: 0;
        padding: 1rem;
        color: #000;
        opacity: 0.6;
        transition: opacity 0.25s ease;
    }

    .modal-close:hover {
        opacity: 1;
    }

    .modal-close span {
        font-size: 2rem;
        font-weight: 700;
        line-height: 1;
    }

    .modal-image {
        width: 100%;
        height: auto;
        vertical-align: middle;
        border: 0;
        max-height: calc(100vh - 2rem);
    }
        * {
      box-sizing: border-box;
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
    .btn-success {
        width: 50%;
        font-size: 12px;
        font-weight: 500;
    }
    }

        /* Modal container */
    

    /* Modal content */
    .modal-content {
      background-color: #fefefe;
      margin: 10% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%; /* Adjust this value to resize the modal width */
      max-width: 600px; /* Set a max-width if needed */
    }

    /* Close button */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

</style>

<body>
    <section class="image-bg" style=" background-image: url('{{ asset('assets/landing/landingpage.png') }}')"  >
      <div class="header-logo" >
        
          <div class="header-column">
            <div class="logo p-3">
              <img class="img-fluid-custom-default" src="{{ asset('assets/landing/LVCC-V2.png') }}" alt="lvcc Logo">
            </div>
            <div class="container">
              <div class="row justify-content-center align-items-center">
                <div class="card">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card-body  payment-font ">
                        <h4 class="card-title"><strong>Payment Instructions</strong></h4>
        
                        <p>
                          Please make sure to make a payment to the provided BDO bank account number before proceeding to the next step.
                          <br>
                          <i>(Bago magpatuloy sa susunod na step, tiyaking nakapagbayad muna sa ibinigay na BDO Bank account.)</i>
                        </p>
                        <p>
                          Once payment is complete, please obtain a proof of payment and check the designated checkbox to confirm payment and proceed to the next step.
                          <br>
                          <i>(Kapag tapos na ang pagbabayad, mangyaring kumuha ng proof of payment o resibo para makumpirma na nakapagbayad na bago punan ang checkbox.)</i>
                        </p>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="my-checkbox" name="box" value="I Agree"  onchange="toggleButton()">
                          <label class="form-check-label" for="paymentCheckbox">
                            Yes, I have paid and completed the payment.
                            <br>
                            <i>(Oo, nagbayad na ako at natapos ko na ang pagbabayad.)</i>
                          </label>
                        </div>
                      
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card-body bg-card-bdo rounded my-4 mx-3">
                        <div class="text-center bdo-font">
                          <img src="{{ asset('assets/landing/bdo-logo.png') }}" alt="BDO Logo" class="bdo-logo img-fluid-custom">
                          <p>
                            You may pay thru our BDO Account:
                          </p>
                        </div>
                        <div class="text-left bdo-font">
                          <p>
                            <strong>Bank Name:</strong> BDO
                            <br>
                            <strong>Bank Account Name:</strong> La Verdad Christian School
                            <br>
                            <strong>Bank Account No:</strong> 00561 800 2114
                          </p>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col-12 col-md-12 text-left mb-3">
                          <i class="fas fa-link font2"></i>
                          <a href="https://docs.google.com/document/d/1DsumzkN6wB1zRqlAEfTHH3Lafy3ABPtfzBr5eiyOiIs/edit" class="font3">How to Use Enrollment Payment Form</a>
                        </div>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container bg-default">
              <div class="row justify-content-center align-items-center">
                <div class="card" style="background-color: rgba(0, 0, 255, 0); ">
                  <div class="text-left my-3 ">
                    <button id="next-button" class="btn btn-success pl-5 pr-5 "  onclick="window.location.href='{{ url('/privacy-form') }}'" data-toggle="tab"   disabled>
                      Proceed <i class="fas fa-arrow-right"></i>
                    </button>
                    <script>
                      function toggleButton() {
                          var checkBox = document.getElementById("my-checkbox");
                          var button = document.getElementById("next-button");
                          if (checkBox.checked) {
                              button.disabled = false;
                              button.classList.remove("btn-success");
                              button.classList.add("btn-success");
                          } else {
                              button.disabled = true;
                              button.classList.remove("btn-success");
                              button.classList.add("btn-success");
                          }
                      }
                  </script>
                  </div>
                </div>
              </div>
            </div>
            <div class="container" style=" margin-bottom: 0px;">
              <div class="row justify-content-center align-items-center">
                <div class="card" style=" margin-bottom: 200px;">
                        <div class="card-body rounded">
                          <header>
                            <h4 class="card-title"><strong>Example of Valid Receipt</strong></h4>
                          </header>
                          
                          <div class="container">
                            <div class="row ">
                              <div class="col-md-4">
                                <div class="box">
                                  <button type="button" class="btn btn-default button w-100" style="text-align: left !important;" data-bs-toggle="modal" data-bs-target="#FromDesktopBDO">
                                    <i class="fas fa-link font2"></i>
                                    Gcash Email
                                  </button>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="box">
                                  <button type="button" class="btn btn-default button w-100" style="text-align: left !important;"  data-bs-toggle="modal" data-bs-target="#DepositSlipfromBDOBranch">
                                    <i class="fas fa-link font2"></i>
                                    Gcash Mobile App
                                  </button>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="box">
                                  <button type="button" class="btn btn-default button w-100" style="text-align: left !important;" data-bs-toggle="modal" data-bs-target="#MobileBankingBDO">
                                    <i class="fas fa-link font2"></i>
                                    Gcash Mobile Screenshot
                                  </button>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="box">
                                  <button type="button" class="btn btn-default button w-100" style="text-align: left !important;" data-bs-toggle="modal" data-bs-target="#TransactionHistoryfromGcashApp">
                                    <i class="fas fa-link font2"></i>
                                    Metrobank
                                  </button>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="box">
                                  <button type="button" class="btn btn-default button w-100" style="text-align: left !important;" data-bs-toggle="modal" data-bs-target="#EmailfromGcash">
                                    <i class="fas fa-link font2"></i>
                                    Unionbank
                                  </button>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="box">
                                  <button type="button" class="btn btn-default button w-100" style="text-align: left !important;" data-bs-toggle="modal" data-bs-target="#InboxofGcashApp">
                                    <i class="fas fa-link font2"></i>
                                    PNB Debit
                                  </button>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="box">
                                  <button type="button" class="btn btn-default button w-100" style="text-align: left !important;" data-bs-toggle="modal" data-bs-target="#TextMessagefromGcash">
                                    <i class="fas fa-link font2"></i>
                                    Send via Instapay
                                  </button>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="box">
                                  <button type="button" class="btn btn-default button w-100" style="text-align: left !important;" data-bs-toggle="modal" data-bs-target="#Metrobank">
                                    <i class="fas fa-link font2"></i>
                                    Pesonet Gateway
                                  </button>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="box">
                                  <button type="button" class="btn btn-default button w-100" style="text-align: left !important;" data-bs-toggle="modal" data-bs-target="#slip">
                                    <i class="fas fa-link font2"></i>
                                    Bdo Transaction Slip 
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                </div>
              </div>
            </div>
            <div class="container" style=" margin-bottom: 0px;">
              <div class="row justify-content-center align-items-center">
                <div class="card" style=" margin-bottom: 20px;">
                        <div class="card-body rounded">
                          <div class="row">
                            <div class="col-md-12">
                                <div class="p-1 p-md-1 image text-center">
                                    @include('layouts.admin-footer')
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
              </div>
            </div>
            
          </div>
        
      </div>


        <!-- FromDesktopBDO -->
        <div class="modal fade" id="FromDesktopBDO" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Gcash Email</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <img src="{{ asset('assets/sample-receipts/Gcash-email.png') }}" alt="fromdesktopbdo" width="100%" height="auto">
                </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="DepositSlipfromBDOBranch" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Gcash Mobile App </h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/sample-receipts/Gcash-mobile-save.jpg') }}" alt="DepositSlipfromBDOBranch" width="100%" height="auto">
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="MobileBankingBDO" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Gcash Mobile ScreenShot</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/sample-receipts/Gcash-mobile-ss.jpg') }}" alt="MobileBankingBDO" width="100%" height="auto">
                </div>
            </div>
            </div>
        </div>
        
        <div class="modal fade" id="TransactionHistoryfromGcashApp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Metrobank</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/sample-receipts/metrobank.jpg') }}" alt="TransactionHistoryfromGcashApp" width="100%" height="auto">
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="EmailfromGcash" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Unionbank</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/sample-receipts/Unionbank.jpg') }}" alt="EmailfromGcash" width="100%" height="auto">
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="InboxofGcashApp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
            <div class="modal-content"> 
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">PNB Debit</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/sample-receipts/PNB-debit.jpg') }}" alt="InboxofGcashApp" width="100%" height="auto">
                </div>
            </div>
            </div>
        </div>
        
        <div class="modal fade" id="TextMessagefromGcash" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Send via Instapay</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/sample-receipts/Send-money-instapay.jpg') }}" alt="TextMessagefromGcash" width="100%" height="auto">
                </div>
            </div>
            </div>
        </div>

        <div class="modal fade" id="Metrobank" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Pesonet Gateway</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/sample-receipts/pesonet-gateway.jpg') }}" alt="Metrobank" width="100%" height="auto">
                </div>
            </div>
            </div>
        </div>  
        <div class="modal fade" id="slip" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel"> Bdo Transaction Slip </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <img src="{{ asset('assets/sample-receipts/bdo-slip.jpg ') }}" alt="Metrobank" width="100%" height="auto">
              </div>
          </div>
          </div>
      </div> 


    </section>

    

    <!--  cdn for bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <!--  end cdn for bootstrap  -->   
    
    <!--  ionicons  -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!--  end ionicons  -->

</body>
</html>