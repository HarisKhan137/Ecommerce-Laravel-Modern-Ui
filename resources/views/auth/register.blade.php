@extends('layouts.app')

@section('content')



<div class="row">
<div class="col-sm-12">

          
              <form action="{{ route('register') }}"  class="loginbox" method="post">
             @csrf

        <h6 class="font-rale font-size-20">STORE/REGISTER</h6>
        <h1 class="font-rale">
            REGISTER NOW
        </h1>
        <input type="text" name="name" placeholder="Enter name" class="name" required autocomplete="off">
       
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="email" name="email" placeholder="Email Address" class="email-address" required autocomplete="off">
        
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="password" name="password" placeholder="Password" class="password" required autocomplete="off">
        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="password" required autocomplete="off">
        
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror


         <input type="text" name="address" placeholder="Address" class="username" required autocomplete="off">
         <input type="text" name="phone" placeholder="Mobile Number Optional (Format: 03xx-xxxxxxx)" class="username"  autocomplete="off">





        <button class="login-btn" type="submit">REGISTER</button>
        <h6 class="register font-rale">Already have an Account ? <span><a href="{{route('login')}}" class="register font-rale">Login</a></span></h6>
    
    
    </form>

     </div>
    </div>

    <br><br>



    @endsection



   