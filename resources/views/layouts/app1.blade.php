<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Google Fonts -->
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=GFS+Didot">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Raleway&display=swap" rel="stylesheet">

   
    <!-- Google Font Ends -->



    
<!-- 
    <link rel="stylesheet" href="cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> -->


    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/new/login.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/new/product_details.css')}}">
 
    <link rel="stylesheet" href="{{asset('frontend/css/mainstyle1.css')}}">


    <!-- Store Page  Css-->

    <link rel="stylesheet" href="{{asset('frontend/css/core-style.css')}}">

    

    <!-- Store Page Responsive Css -->

    <!-- Responsive CSS -->
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

    <!-- Custom Css Ends -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

<!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->




    <!-- Scripts -->


    <!-- Font Awesome  Script-->
    <script src="https://kit.fontawesome.com/d9f6b943ea.js" crossorigin="anonymous"></script>

    <!-- Ends -->

<style>
  /* CheckOut Page  */

.Thanks-Heading {
  margin-bottom:34px;
    font-family: GFS Didot;
    font-size: 36px;
    font-style: normal;
    font-weight: 400;
    line-height: 54px;
    letter-spacing: 0em;
    text-align: center;

    color: #000000;
}

.Order-Heading {
  margin-bottom:26px;
    font-family: GFS Didot;
    font-style: normal;
    font-weight: normal;
    font-size: 36px;
    line-height: 120%;
    /* or 43px */

    text-align: center;

    /* Color / Gray 1 */

    color: #3a3a3a;
}

.Thanks-Div {
    margin-top: 20px;
    margin-bottom: 91px;
}

.Order-Div {
    padding-left: 150px;
    margin-top: 20px;
    margin-bottom: 5rem;
}

.Product-Heading {
    font-family: Raleway;
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
    line-height: 120%;
    /* identical to box height, or 29px */

    text-align: center;

    color: #000000;
    float: left;
}

.Product-Price {
    font-family: Raleway;
    font-style: normal;
    font-weight: bold;
    font-size: 18px;
    line-height: 120%;
    /* identical to box height, or 22px */

    text-align: center;

    color: #000000;
    float: right;
}

.Product-Payment {
    width: 140px;
    height: 69.21px;
    margin-left: 3.1em;
    padding: 10px;

    font-family: Raleway;
    font-style: normal;
    font-weight: bold;
    font-size: 18px;
    line-height: 120%;
    /* or 22px */

    text-align: center;

    color: #ffffff;

    background: #353537;
    border-radius: 15px;
}

.Proceed-To-Payment {
    text-align: center;
}

.Proceed-Payment {
    width: 100%;
    height: 52px;
    font-family: Raleway;
    font-style: normal;
    font-weight: bold;
    font-size: 18px;
    line-height: 120%;
    /* identical to box height, or 22px */

    text-align: center;

    color: #ffffff;

    background: #000000;
}


/* Greetings Page Css */

.tick-check{
  color:green;
  margin-right:10px;
}


.Greetings-Order-Info{
  font-family: GFS Didot;
font-style: normal;
font-weight: normal;
font-size: 20.3824px;
line-height: 120%;
/* identical to box height, or 24px */

text-align: center;

color: #000000;

}

.Greetings-ThankYou-Heading{
  margin-top:20.87px;

  font-family: GFS Didot;
font-style: normal;
font-weight: normal;
font-size: 36px;
line-height: 120%;
/* or 43px */

text-align: center;

color: #000000;

}

.Greetings-ThankYou-Div{
  margin-top:100px;
  margin-bottom:200px;
}

@media screen and (max-width: 992px) {
    .Thanks-Div {
        margin-top: 1px;
    }

    .Thanks-Heading {
        font-family: GFS Didot;
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: 54px;
        letter-spacing: 0em;
        text-align: center;

        color: #000000;
    }
}

@media screen and (max-width: 768px) {
    .Order-Div {
        padding: 0;
    }
}

@media screen and (max-width: 450px) {


  .Order-Div {
        padding: 0;
    }

    .Proceed-To-Payment {
        margin-top: 5rem;
    }

    .Proceed-Payment {
        width: 70%;
    }
}

</style>


     
    <!--  -->


    <title>Document</title>


    
</head>
<body>

@include('layouts.header')

    
    @yield('content')
    
   
       <!--Footer-->
  <footer class="  text-center text-md-left pt-4">

<!--Footer Links-->
<div class="container-fluid">
  <div class="row">

    <!--First column-->
    <div class="col-md-2 imprint">
      <h5 class="text-uppercase font-weight-bold mb-4 footer-logo font-rale-footer font-size-24">Imprint</h5>
      <p></p>
      <p class="font-rale">Made In Pakistan</p>
 
      <p class="font-rale">www.imprint-co.com</p>
    </div>
    <!--/.First column-->

    <hr class="w-100 clearfix d-md-none">

    <!--Second column-->
    <!-- <div class="col-md-2 mx-auto">
      <h5 class="text-uppercase font-weight-bold mb-4 font-rale-footer font-size-24">Menu</h5>
      <ul class="list-unstyled">
        <li><a href="#!" class="font-rale">Shop</a></li>
        <li><a href="#!" class="font-rale">Orders</a></li>
        <li><a href="#!" class="font-rale">About Us</a></li>
        <li><a href="{{route('contactusview')}}" class="font-rale">Contact Us</a></li>
      </ul>
    </div> -->
    <!--/.Second column-->

    <hr class="w-100 clearfix d-md-none">

    <!--Third column-->
    <div class="col-md-3 mx-auto">
      <h5 class="text-uppercase font-weight-bold mb-4 font-rale-footer font-size-24">Account</h5>
      <ul class="list-unstyled">
        <li><a href="#!" class="font-rale">My Account</a></li>
        <li><a href="#!" class="font-rale">Cart</a></li>
        <li><a href="#!" class="font-rale">WishList</a></li>

      </ul>
    </div>
    <!--/.Third column-->

    <hr class="w-100 clearfix d-md-none">

    <!--Fourth column-->
    <div class="col-md-2 mx-auto">
      <h5 class="text-uppercase font-weight-bold mb-4 text-nowrap font-rale-footer font-size-24">Stay Connected</h5>
      <ul class="list-unstyled">
       
       <span class="social-icons"><i class="fab fa-instagram"></i></span>
     
       

      </ul>

    </div>

    

  
   
    
   

  </div>

  
</div>

<br><br>
<!--/.Footer Links-->




<!--/.Call to action-->




<!--/.Social buttons-->

<!--Copyright-->

<!--/.Copyright-->

</footer>
<!--/.Footer-->
    </div>
    
    
    
    <!-- Menu Scripts -->
      
    <script>
          function myFunction() {
            var x = document.getElementById("nav-ul-hidden");
            if (x.className === "topnav-hidden") {
              x.className += " responsive";
              x.style.display ="block";
            } 

            else  if (x.className == "topnav-hidden" && x.className==="responsive" && $(window).width() >= 1000) {
              x.style.display ="none";
            } 


            
            else {
              x.className = "topnav-hidden";
              x.style.display ="none";
            }
          }



        </script>

    <!-- Scripts FOr Store Page -->



    <!-- jQuery (Necessary for All JavaScript Plugins) -->
  
    <!-- Popper js -->

    <!-- Bootstrap js -->
 
    <!-- Plugins js -->
    <!-- <script src="{{asset('frontend/js/plugins.js')}}"></script> -->
    <!-- Active js -->
    <!-- <script src="{{asset('frontend/js/active.js')}}"></script> -->

    <script src="{{asset('frontend/assets/js/script.min.js')}}"></script>





    <!-- /End -->

    
    



    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>

    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <!-- custom javascript for project -->


        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>





   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
 

 <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>  


 <script>  
         $(document).on("click", "#return", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to Return?",
                  text: "Once Teturn, this will return your money!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Cancel!");
                  }
                });
            });
    </script>

    </body>
    </html>