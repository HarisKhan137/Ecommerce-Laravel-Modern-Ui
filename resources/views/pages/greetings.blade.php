@extends('layouts.app')

@section('content')

<br>
<br>
<br>
 
<div class="container">

<div class="block-heading Greetings-Breadcrumb-Div"> 
        <ol class="breadcrumb special-breadcrumb text-center d-xxl-flex justify-content-center align-items-center align-content-center justify-content-xxl-center align-items-xxl-center" style="font-size: 20px;">
            <li class="breadcrumb-item link-dark"><a href="#"><span class="text-dark">Store</span></a></li>
            <li class="breadcrumb-item"><a href="#"><span class="text-dark">Thank You</span></a></li>
        </ol>
    </div>


         <div class="row ">

         <div class="col-12 mx-auto  Greetings-ThankYou-Div">

   <p class="Greetings-Order-Info"><i class="fas fa-check tick-check"></i>Order Placed Sucessfully</p>
      <p class="Greetings-Order-Info"><i class="fas fa-check tick-check"></i>Order Details Emailed</p>
      <p class="Greetings-Order-Info"><i class="fas fa-check tick-check"></i>Order will be Shipped within 72h</p>
            <p class="Greetings-ThankYou-Heading">Thank you for being our valued <br>customer.</p>

         </div>
     


               
        
    </div>
</div>

@endsection