<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EPVS</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/data-privacy/lvcclogo.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="../CSS/landingpage.css" rel="stylesheet">
</head>
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

 
      .bd-mode-toggle {
        z-index: 1500;
      }

      
    /* image background */
    .image-bg {
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
     /* image background */
     .image-bg2 {
        background-size: 100% 100%;
        color: #1266B4;
    }


      /*logo */

      .header-logo{
        text-align: left; 
      }

      .header-column{ 
        display: inline-block;
        
        
      }
      .logo{
        padding-top: 0px;
      }
      .font-logo{
        font-size: 65px;
        padding-top: 0px;
        margin-left : 10px;
        color: white;
      }

       /*content */
      .container-fluid{
        width: 90%;
        height: 90%;
        padding-bottom: 20px;
      }

       /*check box */
      .checkbox {
        size: 20px;
        
      }
      input[type=checkbox] {
        height: 20px;
        width: 20px;
       
    }
        /*button */
      .right-button {
        float: left;
        width: 250px;
        height: 70;
        padding: 8px;
        margin-left: 8px;
        border: none;
        border-radius: 8px;
        font-size: 30px;
    }
     /*check box align */
    .wrapper {
    text-align: left; /* optional - center the wrapper element */
    padding-left: 60px;
    }

    .box {
        display: inline-block;
        width: 49%;
        height: 10px;
       
        font-size: 25px;
       
    }
    
    .font {
      color: #12283A;
      font-family:Verdana, Geneva, Tahoma, sans-serif;
      font-size: 19px;
    }
    .font2 {
      color: #1266b4;
      margin-left: 70px;
    }
    .font3 {
      color: #1266b4;
      margin-left: 10px;
    }

    header {
        text-align: center;
        padding-bottom: 50px;
      }

    .link-button{
        font-size: 25px;
    }

    .column {
        width: 30%;
        float: center;
        margin: 0 2% 0 0;
      }

      .modal-body {
        width: 100%;
        height: 500px;
        max-width: 100%;
       
      }

      ul {
        list-style: none;
      }
      .box2 {
        display: inline-block;
        width: 300PX;
        height: 50PX;
        margin-right: 1px;
      }
      .container{
        text-align: center;
      }

      .button {
            width: 300px;
      }

      .btn {
           width: 300px;
           padding: 10px;
        }
        .btn-primary2 {
            width: 300px !important;
            background-color: rgb(27, 170, 27) !important;
            color: white !important;
            border-radius: 5px !important;
           

            
        }
        .btn-primary {
            width: 300px !important;
            background-color: #1266b4 !important;
        }

        .logo-welcome {

          margin-top: 30px !important;
          margin-bottom: 30px !important;
        }
     

</style>

<body>
    <!--  section  -->
    <section  class="image-bg" style=" background-image: url({{ asset('assets/landing/landingpage.png') }});"> 
=======
    <section  class="image-bg" style=" background-image: url('{{ asset('assets/landing/landingpage.png') }}')"> 
>>>>>>> xero_bdo-ocr_form
        <main class="container-fluid">
            <div class="col-md-6">
              <a href="{{ url('/login') }}"   target="_blank" class=" d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                <img class="logo-welcome" src="{{ asset('assets/landing/LVCC.png') }}" alt="lvcc Logo" style=" width:908px ; height:169px;">
              </a>
            </div>
            <div class="p-md-5 mb-4 rounded bg-white">
              <img src="{{ asset('assets/landing/bdo2.png') }}" alt="bdo" style=" width:100% ; height: 100%;">
              <div class="wrapper">
                <div class="box row ">
                  <div class="col-11">
                    <input type="checkbox" id="my-checkbox" name="my-checkbox" class="checkbox" onchange="toggleButton()">
                  </div>
                </div>
                <div class="box">
                  <i class="fas fa-link font2"></i><a href="https://docs.google.com/document/d/1DsumzkN6wB1zRqlAEfTHH3Lafy3ABPtfzBr5eiyOiIs/edit" class="font3">How to Use Enrollment Payment Form</a>
                </div>
              </div>
              <div class="col-md-6 px-0">
              </div>
            </div>
            <button id="next-button" class="btn btn-lg btn-secondary pl-5 pr-5" onclick="window.location.href='{{ url('/privacy-form') }}'" data-toggle="tab" disabled>
              Proceed <i class="fas fa-arrow-right"></i>
            </button>

            <script>
              function toggleButton() {
                  var checkBox = document.getElementById("my-checkbox");
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
          </main>
        <main class="container-fluid ">
            <div class=" p-md-5 mb-4 rounded bg-white ">
                <header>
                    <h1>Example of Valid Receipt</h1>
                </header>
                <ul class="container">
                    <li class="box2"> 
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary button"style=" background-color: #1266B4;" data-bs-toggle="modal" data-bs-target="#FromDesktopBDO">
                           Gcash Email 
                        </button>
                    </li>
                    <li class="box2">
                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary button" style=" background-color: #1266B4;"data-bs-toggle="modal" data-bs-target="#DepositSlipfromBDOBranch">
                          Gcash Mobile App
                        </button>
                    </li>
                    <li class="box2">
                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary button"style=" background-color: #1266B4;" data-bs-toggle="modal" data-bs-target="#MobileBankingBDO">
                          Gcash Mobile ScreenShot
                        </button>   
                    </li>
                    <li class="box2">
                        <!-- Button trigger modal -->
                       <button type="button" class="btn btn-primary button"style=" background-color: #1266B4;" data-bs-toggle="modal" data-bs-target="#TransactionHistoryfromGcashApp">
                        Metrobank
                       </button>   
                   </li>
                   <li class="box2">
                    <!-- Button trigger modal -->
                   <button type="button" class="btn btn-primary button"style=" background-color: #1266B4;" data-bs-toggle="modal" data-bs-target="#EmailfromGcash">
                        Unionbank
                   </button>   
                    </li>
                    <li class="box2">
                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary button"style=" background-color: #1266B4;" data-bs-toggle="modal" data-bs-target="#InboxofGcashApp">
                      PNB Debit
                    </button>   
                    </li>
                    <li class="box2">
                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary button" style=" background-color: #1266B4;"data-bs-toggle="modal" data-bs-target="#TextMessagefromGcash">
                        Send via Instapay
                    </button>   
                    </li>
                    <li class="box2">
                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary button"  style=" background-color: #1266B4;"data-bs-toggle="modal" data-bs-target="#Metrobank">
                        Pesonet Gateway                     
                    </button>   
                    </li>
                </ul>
               
                
                <!-- FromDesktopBDO -->
                <div class="modal fade" id="FromDesktopBDO" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Gcash Email</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('assets/sample-receipts/Gcash-email.png') }}" alt="fromdesktopbdo" width="100%" height="100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                            <img src="{{ asset('assets/sample-receipts/Gcash-mobile-save.jpg') }}" alt="DepositSlipfromBDOBranch" width="100%" height="100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                            <img src="{{ asset('assets/sample-receipts/Gcash-mobile-ss.jpg') }}" alt="MobileBankingBDO" width="100%" height="100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                            <img src="{{ asset('assets/sample-receipts/metrobank.jpg') }}" alt="TransactionHistoryfromGcashApp" width="100%" height="100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                            <img src="{{ asset('assets/sample-receipts/unionbank.jpg') }}" alt="EmailfromGcash" width="100%" height="100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                            <img src="{{ asset('assets/sample-receipts/PNB-debit.jpg') }}" alt="InboxofGcashApp" width="100%" height="100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                            <img src="{{ asset('assets/sample-receipts/send-money-instapay.jpg') }}" alt="TextMessagefromGcash" width="100%" height="100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                            <img src="{{ asset('assets/sample-receipts/pesonet-gateway.jpg') }}" alt="Metrobank" width="100%" height="100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
            
            
            </div>
        </main>
    </section>
        

    <!--  check box button  -->
    

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