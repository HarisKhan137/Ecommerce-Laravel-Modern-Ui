

    <header>
      <nav>  
    
        
        <ul>
        <li class="logo-li"><a href="{{route('imprint')}}" style="font-weight:bolder " class="brandlogo"><img class=" font-rale font-size-20 font-bolder" src="{{asset('./frontend/images/impringlogoblack.png')}}" alt="" style="height:3rem; "></a></li>
        
      </ul>

      

      <ul class="topnav" id="nav-ul">
      <li><a href="{{route('ordersview')}}" class="hide font-rale font-size-18 font-bolder">Orders</a></li>
        <li><a href="{{ route('storeview') }}" class="active hide font-rale font-size-18 font-bolder">Store</a></li>

        <!-- <a href="{{route('imprint')}}" class="brandlogo hide font-rale font-size-20 font-bolder" style="font-weight:bolder "><img class="hide font-rale font-size-20 font-bolder" src="{{asset('./frontend/images/impringlogoblack.png')}}" alt="" style="height:2.5rem;"></a> -->
        <li><a href="{{route('aboutview')}}" class="hide font-rale font-size-18 font-bolder">About</a></li>
        <li>
            <a href="#" class=" font-rale font-size-18 font-bolder">Help</a>
            <ul class="dropdown">
                <li><a href="#"  class=" font-rale font-size-16 no-wrap">Return And Shipments</a></li>
                <li><a href="#" class=" font-rale font-size-16 no-wrap">Contact Us</a></li>
         
            </ul>
        </li>
      
      </ul>

      <ul id="icons-ul">
     
        <li class="hide-icons">
        
      
        <a href="{{route('show.cart')}}">  <img src="{{asset('frontend/images/cart.png')}} "style="padding-right: 2px;" > <span id="cart_count">{{Cart::count()}}</span>  </a></li>
          <li class="hide-icons"><a href="{{route('login')}}"> <img src="{{asset('frontend/images/user.png')}} " > </a></li>
        <li><a href="javascript:void(0);" class="icon" onclick="myFunction()" style="padding-top: 7px;"> <i class="fa fa-bars"></i> </a></li>
      </ul >










    
    </nav>
    <br><br>

    <ul class="topnav-hidden" id="nav-ul-hidden">
      
    <li><a href="{{route('ordersview')}}" class="hide font-rale font-size-20 font-bolder">Order</a></li>
      <li><a href="{{ route('storeview') }}" class="active hide font-rale font-size-20 font-bolder">Store</a></li>

      <li><a href="{{route('pageredirect')}}" class="hide font-rale font-size-20 font-bolder">About</a></li>
      <li><a href="{{route('pageredirect')}}" class="hide font-rale font-size-20 font-bolder">Return And Shipments</a></li>
      <li><a href="{{route('contactusview')}}" class="hide font-rale font-size-20 font-bolder">Contact Us</a></li>
      

    
          
        
     
      
     
    </ul>
     
  
    
    </header>


    <script type="text/javascript">
    
  

       



</script>






  


  