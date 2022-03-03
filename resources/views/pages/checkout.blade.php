@extends('layouts.app')

@section('content')

@php

$shipping = 500;
$totalamount = 0;

@endphp


<style>
.required:after {
    font-size:30px;
    content:"*";
    color: red;
  }</style>


<br>
<br>
<br>
 
<div class="container">

<div class="block-heading"> 
        <ol class="breadcrumb special-breadcrumb text-center d-xxl-flex justify-content-center align-items-center align-content-center justify-content-xxl-center align-items-xxl-center" style="font-size: 20px;">
            <li class="breadcrumb-item link-dark"><a href="#"><span class="text-dark font-rale font-size-24">Store</span></a></li>
            <li class="breadcrumb-item"><a href="#"><span class="text-dark font-rale font-size-24">Check Out</span></a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-5 col-lg-6 mx-auto Thanks-Div">
           
        <h3 class="Thanks-Heading font-rale">Thanks For Buying Our Product</h3>


        <form action="{{route('payment.process')}}" method="POST">
        @csrf
  <div class="form-group">
    <label for="exampleInputEmail1" class="font-rale font-size-20 required">Name</label>
    <input type="text" name="name" class="form-control font-rale" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
  
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="font-rale font-size-20 required">Province</label>
    <select class="form-select" name="province" aria-label="Default select example" required>
  <option selected>Please Select A Province</option>
  <option value="Islamabad">Islamabad</option>
  <option value="Punjab">Punjab</option>
  <option value="Sindh">Sindh</option>
  <option value="Kpk">KPK</option>
  <option value="Balochistan">Balochistan</option>
  <option value="Gilgit Baltistan">Gilgit Baltistan</option>
</select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="font-rale font-size-20 required">Address</label>
    <input type="text" name="addressline1" class="form-control font-rale" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address Line 1" required>
    <br>
    <input type="text" name="addressline2" class="form-control font-rale" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address Line 2" required>
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="font-rale font-size-20 ">Phone Number (Optional)</label>
    <input type="text" name ="phone" class="form-control font-rale" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number" >
  
  </div>
    <div class="form-group">
        <label for="exampleInputEmail1" class="font-rale font-size-20 required">Email</label>
        <input type="email" name="email" class="form-control font-rale" require id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
    
    </div>


    <div class="form-group">
    <label for="exampleInputEmail1" class="font-rale font-size-20 ">How Did You Hear About Us? (Optional)</label>
    <select class="form-select" aria-label="Default select example" >
  <option selected value="1" class="font-rale  "> Promotion/Ad </option>
  <option value="2" class="font-rale  ">Google Search</option>
  <option value="3" class="font-rale  ">Social Media Search</option>
  <option value="4" class="font-rale  ">Recommended by a friend</option>
  <option value="5" class="font-rale ">Other</option>

</select>
  </div>



           
           
         
           
     

        </div>

        <div class=" col-md-7 col-lg-6 Order-Div">
            
            <h4 class="Order-Heading font-rale">Your Order</h4>
            @foreach($cart as $row)
                <span class="Product-Heading font-rale">{{$row->name}}</span>
                
                <span class="Product-Price font-rale" >Pkr {{{$row->subtotal}}}</span>
                <br><br><br><br>
                @endforeach
                
                <span class="Product-Heading font-rale" >Shipping charges are inclusive.</span>
                <span class="Product-Price font-rale"></span>

                <br><br><br>

                <hr>

                <span class="Product-Heading font-rale">Total (Tax Inc)</span>

                <input type="hidden" name="total" value="{{ Cart::Subtotal() }} ">
                
                <span class="Product-Price font-rale" >{{Cart::Subtotal()}}</span>

                <!-- <br>
                <br><br> -->
           

                <!-- <h4 class="Product-Heading"><br>Payment Option</h4>
                <div class="Product-Price Online-Payment-Div"><button class="Product-Payment" >Online Payment</button></div> -->

                <br><br>
                <br><br>

                <div class="form-group">
        <ul class="logos_list">
          <div class="row">
            <div class="col">            <input type="radio" name="payment" value="mastercard" style="display:inline;"><img src="{{ asset('frontend/images/mastercard.png') }}" style="width: 100px; height: 60px;"> 
</div>
            <!-- <div class="col">             <input type="radio" name="payment" value="paypal"><img src="{{ asset('frontend/images/paypal.png') }}" style="width: 100px; height: 60px;">  -->
<!-- </div> -->
            <div class="col">              <input type="radio" name="payment" value="visa"><img src="{{ asset('frontend/images/mollie.png') }}" style="width: 100px; height: 60px;"> 
            </div>
            <div class="col">              <input type="radio" name="payment" value="cod"><img src="{{ asset('frontend/images/cod.jpg') }}" style="width: 100px; height: 60px;"> 
</div>
          </div>


            
        </ul>
        
    </div>

                <div class="Proceed-To-Payment">

               <button class="Proceed-Payment" type="submit">Proceed To Payment</button>
</div>




               
        </div>
        </form>
    </div>
</div>

@endsection