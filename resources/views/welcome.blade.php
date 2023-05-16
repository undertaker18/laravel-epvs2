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
        padding-bottom: 90px;
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
        float: right;
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
        font-weight:normal ;
        margin-left: 10px;
    }
    .font2 {
       
        margin-left: 70px;
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
      .green {
        background-color: green;
    }

</style>

<body>
    <!--  section  -->
    <section  class="image-bg"
    style=" background-image: url('./assets/landing/landingpage.png'); "> 
        <div class="d-flex flex-wrap justify-content-center py-3 mb-4 ">
            <a href="{{ url('/login') }}"   target="_blank" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto  text-decoration-none">
                <img src="./assets/landing/lvcclogo.png" alt="lvcc Logo" style=" width:250px ; height: 250px;">
            <span class="font-logo"><b>LVCC Enrollment Payment<br>
                Validation System<b> 
            </h2></span>
            </a>
        </div>
        <main class="container-fluid">
            <div class="p- p-md-5 mb-4 rounded bg-white">
              <img src="./assets/landing/bdo.png" alt="bdo" style=" width:100% ; height: 100%;">
              <div class="wrapper">
                <div class="box">
                  <input type="checkbox" id="my-checkbox" name="my-checkbox" class="checkbox">
                  <label for="my-checkbox" class="font">Yes, I have paid and completed the payment.
                                                          <br>(Oo, nagbayad na ako at natapos ko na ang 
                                                          <br> pagbabayad. )
                                                          <br></label>
                </div>
                <div class="box">
                  <i class="fas fa-link font2"></i><a href="https://docs.google.com/document/d/1DsumzkN6wB1zRqlAEfTHH3Lafy3ABPtfzBr5eiyOiIs/edit" class="font">How to Use Enrollment Payment Form</a>
                </div>
              </div>
              <div class="col-md-6 px-0">
              </div>
            </div>
            <a href="{{ url('/privacy-form') }}">
              <button id="proceed-btn" class="right-button btn-green{{ old('my-checkbox') ? ' green' : '' }}" disabled>Proceed <i class="fas fa-arrow-right"></i></button>
            </a>

            <script>
                const checkbox = document.getElementById('my-checkbox');
                const proceedBtn = document.getElementById('proceed-btn');
              
                checkbox.addEventListener('change', function() {
                  if (checkbox.checked) {
                    proceedBtn.classList.add('btn-green');
                    proceedBtn.removeAttribute('disabled');
                  } else {
                    proceedBtn.classList.remove('btn-green');
                    proceedBtn.setAttribute('disabled', true);
                  }
                });
            </script>
          </main>
        <main class="container-fluid ">
            <div class="p- p-md-5 mb-4 rounded bg-white ">
                <header>
                    <h1>Example of Valid Receipt</h1>
                </header>
                <ul class="container">
                    <li class="box2"> 
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary button"style=" background-color: #1266B4;" data-bs-toggle="modal" data-bs-target="#FromDesktopBDO">
                            From Desktop BDO
                        </button>
                    </li>
                    <li class="box2">
                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary button" style=" background-color: #1266B4;"data-bs-toggle="modal" data-bs-target="#DepositSlipfromBDOBranch">
                            Deposit Slip from BDO Branch
                        </button>
                    </li>
                    <li class="box2">
                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary button"style=" background-color: #1266B4;" data-bs-toggle="modal" data-bs-target="#MobileBankingBDO">
                            Mobile Banking BDO
                        </button>   
                    </li>
                    <li class="box2">
                        <!-- Button trigger modal -->
                       <button type="button" class="btn btn-primary button"style=" background-color: #1266B4;" data-bs-toggle="modal" data-bs-target="#TransactionHistoryfromGcashApp">
                        Transaction History from Gcash App
                       </button>   
                   </li>
                   <li class="box2">
                    <!-- Button trigger modal -->
                   <button type="button" class="btn btn-primary button"style=" background-color: #1266B4;" data-bs-toggle="modal" data-bs-target="#EmailfromGcash">
                        Email from Gcash
                   </button>   
                    </li>
                    <li class="box2">
                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary button"style=" background-color: #1266B4;" data-bs-toggle="modal" data-bs-target="#InboxofGcashApp">
                        Inbox of Gcash App
                    </button>   
                    </li>
                    <li class="box2">
                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary button" style=" background-color: #1266B4;"data-bs-toggle="modal" data-bs-target="#TextMessagefromGcash">
                        Text Message from Gcash
                    </button>   
                    </li>
                    <li class="box2">
                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary button"  style=" background-color: #1266B4;"data-bs-toggle="modal" data-bs-target="#Metrobank">
                        Metrobank                    
                    </button>   
                    </li>
                </ul>
               
                
                <!-- FromDesktopBDO -->
                <div class="modal fade" id="FromDesktopBDO" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">From Desktop BDO</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="./assets/landing/fromdesktopbdo.png" alt="fromdesktopbdo" width="100%" height="100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="DepositSlipfromBDOBranch" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Deposit Slip from BDO Branch</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="./assets/landing/fromdesktopbdo.png" alt="DepositSlipfromBDOBranch" width="100%" height="100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="MobileBankingBDO" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mobile Banking BDO</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="./assets/landing/fromdesktopbdo.png" alt="MobileBankingBDO" width="100%" height="100%">
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Transaction History from Gcash App</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="./assets/landing/fromdesktopbdo.png" alt="TransactionHistoryfromGcashApp" width="100%" height="100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="EmailfromGcash" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Email from Gcash</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="./assets/landing/fromdesktopbdo.png" alt="EmailfromGcash" width="100%" height="100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="InboxofGcashApp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Inbox of Gcash App</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="./assets/landing/fromdesktopbdo.png" alt="InboxofGcashApp" width="100%" height="100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
                
                <div class="modal fade" id="TextMessagefromGcash" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Text Message from Gcash</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="./assets/landing/fromdesktopbdo.png" alt="TextMessagefromGcash" width="100%" height="100%">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="modal fade" id="Metrobank" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Metrobank</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="./assets/landing/fromdesktopbdo.png" alt="Metrobank" width="100%" height="100%">
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