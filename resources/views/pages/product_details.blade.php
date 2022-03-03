@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="{{asset('./frontend/css/smoothproducts.css')}}">


<style>


.accordion,.card,.card-header{
     background-color : #ffffff !important; 
    border:none !important;

}

.rotate{
    -moz-transition: all 2s linear;
    -webkit-transition: all 2s linear;
    transition: all 2s linear;
}

.down{
    -ms-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}
 
 



</style>
 

 <script>
 $(".rotate").click(function(){
    $(this).toggleClass("down"); 
});</script>

<main class="page product-page">

<section class="clean-block clean-product dark">
    <div class="container">
   

        <div class="block-heading"> 
        <ol class="breadcrumb special-breadcrumb text-center d-xxl-flex justify-content-center align-items-center align-content-center justify-content-xxl-center align-items-xxl-center" style="font-size: 20px;">
            <li class="breadcrumb-item link-dark"><a href="#"><span class="text-dark font-rale  font-size-24">Store</span></a></li>
            <li class="breadcrumb-item"><a href="#"><span class="text-dark font-rale font-size-24">Product Details</span></a></li>
        </ol>
    </div>


    
        <div class="block-content">
            <div class="product-info">
                <div class="row">
                    <div class="col-md-6 " style="" >
                       
                    <!-- <div class=""><img src="{{asset($product->image_one)}}" alt=""><br>LOADING IMAGES</div>
   <div class="sp-wrap">
     <a href="{{asset($product->image_one)}}"><img src="{{asset($product->image_one)}}" alt=""></a>
     <a href="{{asset($product->image_two)}}"><img src="{{asset($product->image_two)}}" alt=""></a>
     <a href="{{asset($product->image_three)}}"><img src="{{asset($product->image_three)}}" alt=""></a>

  </div>
                        -->


             <div class="carousel-container" style="width:100% !important; ">
        <i class="fas fa-chevron-left" id="prevBtn"></i>
        <i class="fas fa-chevron-right" id="nextBtn"></i>
        <div class="carousel-slide">
            <img src="{{asset($product->image_three)}}" id="lastClone" alt="">
            <img src="{{asset($product->image_one)}}" alt="">
            <img src="{{asset($product->image_two)}}" alt="">
            <img src="{{asset($product->image_three)}}" alt="">
            <img src="{{asset($product->image_one)}}" id="firstClone" alt="">
        </div>
        <div id="indicators">
            <img src="{{asset($product->image_one)}}" id="img1" onclick="img1()" class="brightness opacity" alt="">
            <img src="{{asset($product->image_two)}}" id="img2" onclick="img2()" class="brightness" alt="">
            <img src="{{asset($product->image_three)}}" id="img3" onclick="img3()" class="brightness" alt="">
        </div>
    </div>            
                      

                    </div>
               

             



                    <div class="col-md-6 product-infodiv order-sm-2 order-2" style="">
                        <div class="info">
                            <h3 class="font-rale font-size-36">{{$product->product_name}}</h3>
                           
                          
                                <!-- <span id="start-at" class="d-inline">Starting at</span> -->
                                <h3 id="price" class="d-inline"><span class="font-rale font-size-20">Pkr {{$product->selling_price}}</span> </h3>
                                <br>
                                <br>
                                <div class="">
                               
                                   

             <form action="{{URL('cart/product/add/'.$product->id)}}" method="POST">
             @csrf
             
           
                                    <div class="row">
          	<div class="col-lg-4">
          	<div class="form-group">
          		<label for="exampleFormControlSelect1" class="font-rale">Color</label>
          		<select class="form-control input-lg" id="exampleFormControlSelect1" name="color"> @foreach($product_color as $color)
          			<option value="{{ $color }}" class="font-rale">{{ $color }}</option>
          			
                 @endforeach
          		</select>          		
          	</div> 
          	</div> 





          	<div class="col-lg-4">
          	<div class="form-group">
          		<label for="exampleFormControlSelect1" class="font-rale">Quantity</label>
          		 <input class="form-control" type="number" value="1" pattern="[0-9]" name="qty">	
          	</div> 
          	</div>    

 

          </div> 

                                   
                               
                                </div>
                                <br><br>
                                
                                <button class="text-white d-inline-block add-cart" type="submit">
                                <i class="icon-basket"></i>Add to Cart</button>
                                </form>
                       
                                <div class="about-productinfo">
                                <!-- <h3 id="about-product">About:</h3> -->
                                <h5>Frame Type - {{$product->category_name}}</h5>
                                <p class="font-rale">{{$product->product_details}} This modern black frame looks great with pretty much everything, and its thin, gallery profile makes it perfect for small pieces.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                                    </div>


									 
								

                                  
                                     

                                <div class="hr-special" >

                                <div class=" my-4">

 

<hr class="mb-5"/>



<!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card" >

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
         aria-controls="collapseOne1">
        <h5 class="mb-0 accordion-heading font-rale font-size-24 rotate ">
        About the Frame <i class="fas fa-angle-down rotate-icon " style="float:right"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse " role="tabpanel" aria-labelledby="headingOne1"
         data-parent="#accordionEx">
      <div class="card-body font-rale">
     <span class="font-size-20" style="margin:0;padding:0;"> {{$product->category_name}}</span>
<br><br>
       {!!$product->category_about!!}
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo2">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
         aria-expanded="false" aria-controls="collapseTwo2">
        <h5 class="mb-0 accordion-heading font-rale font-size-24">
         Return And Shipments <i class="fas fa-angle-down " style="float:right"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
         data-parent="#accordionEx">
      <div class="card-body font-rale">
 
<p>In order for the Product to be eligible for a return, please make sure that:</p>
<ul>
<li>The Goods were purchased in the last 7 days</li>
<li>You must have the receipt for purchase </li>

</ul>
<p>Conditions For Return</p>
<ul>
<li>Change of Mind Will not be accepted.</li>
<li>A product can be replaced with another product only if it is not damaged.</li>

</ul>
      </div>
    </div>

  </div>
  <!-- Accordion card -->


 

</div>
<!-- Accordion wrapper -->

</div>
                                </div>

                                <!-- <div class="about-productinfo">
                                    <h3 id="about-product">About The Artist</h3>
                                    <p>In the end things must be as they are and have always been--the great things remain for the great,
                                         the abysses for the profound, the delicacies and thrills for the refined,
                                         and, to sum up shortly, everything rare for the rare.
                                         In the end things must be as they are and have always been--the great things remain for the great,
                                         the abysses for the profound, the delicacies and thrills for the refined, and, to sum up shortly,
                                         everything rare for the rare.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                                        </div> -->

                                        <!-- <div class="hr-special" > -->
<!-- 
                                            <div class="about-productinfo">
                                                <h5 class="about-product">Frame Details:</h5>
                                                <h6 class="about-product-details"> <b>Brand</b> : Amazon Frames</h6>
                                                <h6 class="about-product-details"> <b>Artist</b> : Picasso</h6>

                                 

                                
                                            </div> -->

                           
                         
                        </div>
                    </div>
                </div>
            </div>



<!-- 
            <div class="product-info">
                <div> -->
                    <!-- <ul class="nav nav-tabs" role="tablist" id="myTab">
                        <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" id="reviews-tab" href="#reviews">Reviews</a></li>
                    </ul> -->
                    <!-- <div class="tab-content" id="myTabContent"> -->
                     
                      
                        <!-- <div class="tab-pane fade show active" role="tabpanel" id="reviews"> -->

<!--                                     
                            <div class="reviews">
                                <div class="review-item">
                                    <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-empty.svg"></div>
                                    <h4>Incredible product</h4><span class="text-muted"><a href="#">Haris Khan</a>03&nbsp; March 2021</span>
                                    <p>The Product was exactly upto my expectations . I am really satisfied with thier customer service and fast delievery .&nbsp;</p>
                                </div>
                            </div> -->
<!-- 
                            <div class="reviews">
                                <div class="review-item">
                                    <div class="rating"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star.svg"><img src="assets/img/star-empty.svg"></div>
                                    <h4>On-time Delivery and Amazing Product&nbsp;</h4><span class="text-muted"><a href="#">Zaid Bin Tariq&nbsp;</a>, 20 Feb 2021&nbsp;</span>
                                    <p>I got the product within one working day ,. And it is 100% Legit ..</p>
                                </div>
                            </div>
                             -->
                            <!-- <div class="reviews"></div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>



                </div>
            </div>
        </div>
    </div>
</section>
</main><!-- Start: Footer Dark -->

<script type="text/javascript" src="{{asset('./frontend/js/jquery-2.1.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('./frontend/js/smoothproducts.min.js')}}"></script>



<script type="text/javascript">
    /* wait for images to load */
    $(window).load(function() {
        $('.sp-wrap').smoothproducts();
    });
</script>

@endsection