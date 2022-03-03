@extends('layouts.app')

@section('content')

@php

$shipping = 500;
$totalamount = 0;

@endphp



<br>
<br>
<br>
 
<div class="container">

<div class="block-heading"> 
        <ol class="breadcrumb special-breadcrumb text-center d-xxl-flex justify-content-center align-items-center align-content-center justify-content-xxl-center align-items-xxl-center" style="font-size: 20px;">
            <li class="breadcrumb-item link-dark"><a href="#"><span class="text-dark font-rale font-size-24">Store</span></a></li>
            <li class="breadcrumb-item"><a href="#"><span class="text-dark font-rale font-size-24">Cart</span></a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-5 col-lg-7 mx-auto Thanks-Div">
           
        <h3 class="">Shopping Cart</h3>


		@foreach($cart as $row)
  <hr>

  

  <div class="row">
	  <div class="col">
	<br><img src="{{ asset($row->options->image) }} " style="width: 70px; width: 70px;" alt="">

	  </div>


      <div class="col">		
          <br><br>
          <span class="font-rale font-size-20">  {{ $row->name  }}</span>
   

     <br>   
              <span class="font-rale no-wrap font-size-16"> Price: Pkr {{ $row->price }}</span>  
			</div>


			
			

		

                  
    <div class="col">
    <br><br>

    

           <form method="post" action="{{ route('update.cartitem') }}">
           	@csrf
           	<input type="hidden" name="productid" value="{{ $row->rowId }}">
           	<input type="number" name="qty" value="{{ $row->qty }}" style="width: 50px;">
           	<button type="submit" class="btn btn-success btn-sm"><i class="fas fa-check-square"></i> </button>
 
           </form>  
		</div>
			
				




		
				
					
			
				
		
					<div class="col">
                    <br><br>  Pkr {{ $row->price*$row->qty }}</div>



                    <div class="col">
                        <br><br>
                    <a href="{{ url('remove/cart/'.$row->rowId ) }}" class="btn btn-sm btn-danger">Delete</a>
                    </div>
				

					
	




	 
	  
  </div>

  <hr>

  @endforeach


           
           
         
           
     

        </div>

        <div class=" col-md-7 col-lg-5 Order-Div">
            
            <h4 class="Order-Heading font-rale" style="text-align:left  !important;">Your Order</h4>
            @foreach($cart as $row)
                <span class="Product-Heading font-rale">{{$row->name}}</span>
                
                <span class="Product-Price font-rale" >Pkr {{{$row->subtotal}}}</span>
                <br><br><br><br>
                @endforeach
                
                <span class="Product-Heading font-rale">Shipping</span>
                <span class="Product-Price font-rale">Pkr {{$shipping}}</span>

                <br><br><br>

                <hr>

                <span class="Product-Heading font-rale">Total (Tax Inc)</span>
                
                <span class="Product-Price font-rale" >{{Cart::Subtotal() + $shipping}}</span>

                <!-- <br>
                <br><br> -->
           

                <!-- <h4 class="Product-Heading"><br>Payment Option</h4>
                <div class="Product-Price Online-Payment-Div"><button class="Product-Payment" >Online Payment</button></div> -->

                <br><br>
                <br><br>

     
   

                <div class="Proceed-To-Payment">

               <a href="{{route('user.checkout')}}"><button class="Proceed-Payment" type="submit">Proceed To Checkout</button></a>
</div>




               
        </div>
        </form>
    </div>
</div>

@endsection