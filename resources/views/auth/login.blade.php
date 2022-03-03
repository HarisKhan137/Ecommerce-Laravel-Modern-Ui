@extends('layouts.app')

@section('content')
 

<div class="row">
<div class="col-sm-12">
<form action="{{ route('login') }}" class="loginbox"  method="post">
            @csrf
            <h6 class="loginbreadcrumbs font-rale">STORE/LOGIN</h6>
        <h1 class="loginheading  font-rale">LOGIN</h1>
                            
                             
    
    <input type="text" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  aria-describedby="emailHelp"  required="">
             @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
        

 
    <input type="password" class=" @error('password') is-invalid @enderror"  aria-describedby="emailHelp" name="password" required="">
               @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    
                    


                         
              <button type="submit" class="login-btn">Login</button>
              <a href="{{ route('password.request') }}" class="font-rale">I forgot my password</a>   <br> <br>    
        <h6 class="register font-rale">Dont have an Account ? <span><a href="{{route('register')}}" class="register font-rale">Register</a></span></h6>     
                        </form>
                       
    </div>

    

    </div>

@endsection

