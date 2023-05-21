<style>
    
    body {
        background: #000000;
        /* Set the background color to light gray  #EAF1F8*/
    }
    .card{
                background-color: #879BAE;
            }
    a {
    color: #879BAE;
    list-style: none;
    text-decoration: none;
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



    .nav-item {
        list-style: none;
        text-decoration: none;
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

   

    /* Default button styles */
        .btn-primary {
       
        padding: 10px 20px;
        font-size: 20px;
        border: none;
        background-color: #1266b4 !important;
        color: #fff;
        border-radius: 5px;
        }

        .btn-secondary {
       
       padding: 10px 20px;
       font-size: 20px;
       border: none;
       background-color: gray !important;
       color: #fff;
       border-radius: 5px;
       }

       .form-group{
        text-align: left !important;
        }

        .card-title {

        font-size: 1.5rem; /* Change the font size as per your preference */
        font-weight: bold;
        }
      
      

        
         /* upload */

         .row.main-content {
    display: flex;
    justify-content: center;
    align-items: center;
    
    }
   
    .drag-area {
        margin-bottom: 50px;
        border: 2px dashed #080808;
        height: 60%;
        width:60%;
        border-radius: 15px;
        
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .drag-area.active {
        border: 2px solid #005606;
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
        margin-bottom: 50px;
    }

    .drag-area img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 5px;
    }


    .image {
        text-align: center;
        border-radius: 30px;
        height: auto;   
        background-color: #ffffff;


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
        margin-left: 100px;
        margin-right: 100px;
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



        /* Media query for small screens */
        @media screen and (max-width: 300px) {
                button {
            display: inline-block;
            float: none !important;
            font-size: 14px;
            padding: 8px 16px;
            
        }
        }

        /* Media query for medium screens */
        @media screen and (min-width: 577px) and (max-width: 992px) {
        button {
            display: inline-block;
            float: none !important;
            font-size: 16px;
            padding: 10px 20px;
        }
        }

        /* Media query for large screens */
        @media screen and (min-width: 993px) {
        button {
            font-size: 18px;
            padding: 12px 24px;
        }
        }

    @media (min-width: 375px) {
   
   .nav-link {
       font-size: 15px; /* or any other desired size */
   }
   .icon{
       font-size: 40px; /* or any other desired size */
   }
   .privacy-content{
       font-size: 16px;
       margin-left: 10px;
       margin-right: 10px;
   }
   .drag-area {
   height: 60%;
   width:100%;
   }
   
}
@media (min-width: 400px) {

   .nav-link {
       font-size: 15px; /* or any other desired size */
   }
   .icon{
       font-size: 40px; /* or any other desired size */
   }
   .privacy-content{
       font-size: 18px;
   }
   .btn-primary {
       font-size: 20px;
   }
   .drag-area {
       height: 60%;
       width:100%;
   }
   .drag-area header {
       font-size: 18px;
       font-weight: 500;
       color: #1266b4;
   }
   
   .drag-area p {
       font-size: 12px;
       font-weight: 500;
       color: #080808;
   }
  
}
@media (min-width: 600px) {

   .nav-link {
       font-size: 15px; /* or any other desired size */
   }
   .icon{
       font-size: 40px; /* or any other desired size */
   }
   .privacy-content{
       font-size: 20px;
   }
   .drag-area header {
       font-size: 18px;
       font-weight: 500;
       color: #1266b4;
   }
   
   .drag-area p {
       font-size: 12px;
       font-weight: 500;
       color: #080808;
   }
}

@media (min-width: 800px) {
   .nav-link {
       font-size: 18px; /* or any other desired size */
   }
   .icon{
       font-size: 40px; /* or any other desired size */
   }
   .privacy-content{
       font-size: 21px;
   }
}

@media (min-width: 992px) {
   .nav-link {
       font-size: 20px; /* or any other desired size */
   }
   .icon{
       font-size: 55px; /* or any other desired size */
   }
   .privacy-content{
       font-size: 23px;
   }
}

@media (min-width: 1200px) {
   .nav-link {
       font-size: 24px; /* or any other desired size */
   }
   .icon{
       font-size: 70px; /* or any other desired size */
   }
   .privacy-content{
       font-size: 24px;
   }
}



</style><?php /**PATH C:\xampp\htdocs\epvs-app2\resources\views/layouts/form-css.blade.php ENDPATH**/ ?>