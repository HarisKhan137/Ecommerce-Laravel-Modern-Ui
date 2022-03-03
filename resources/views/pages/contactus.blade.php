@extends('layouts.app')

@section('content')

<br>
<br>
<br>
 
<div class="container">

<div class="block-heading"> 
        <ol class="breadcrumb special-breadcrumb text-center d-xxl-flex justify-content-center align-items-center align-content-center justify-content-xxl-center align-items-xxl-center" style="font-size: 20px;">
            <li class="breadcrumb-item link-dark"><a href="#"><span class="text-dark font-rale font-size-24">Help</span></a></li>
            <li class="breadcrumb-item"><a href="#"><span class="text-dark font-rale font-size-24">Contact Us</span></a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-5 col-lg-6 mx-auto Thanks-Div">
           
        <h3 class="Thanks-Heading font-rale font-size-36">How can we help you? </h3>


        <form>


    <div class="form-group">
        <label for="exampleInputEmail1" class="font-rale font-size-20">Name</label>
        <input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Name">
    
    </div>

    <div class="form-group">
            <label for="exampleInputEmail1" class="font-rale font-size-20">Email</label>
            <input type="email" class="form-control" require id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
        
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="font-rale font-size-20">Phone Number (Optional)</label>
        <input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter Phone Number">
    
    </div>

    <div class="form-group">
    <label for="exampleFormControlTextarea1" class="font-rale font-size-20">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Enter Message"> </textarea>
  </div>

    <div class="Proceed-To-Payment">
    <button class="Proceed-Payment" type="submit">Submit</button>
    </div>

    
    </form>



           
           
         
           
     

        </div>

    
            
    




       
    </div>
</div>

@endsection