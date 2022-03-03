@extends('layouts.app')

@section('content')
 

<main class="page product-page">

<section class="clean-block clean-product dark">
    <div class="container">


        <div class="block-heading"> 
        <ol class="breadcrumb special-breadcrumb text-center d-xxl-flex justify-content-center align-items-center align-content-center justify-content-xxl-center align-items-xxl-center" style="font-size: 20px;">
            <li class="breadcrumb-item link-dark"><a href="#"><span class="text-dark">Store</span></a></li>
            <li class="breadcrumb-item"><a href="#"><span class="text-dark">Product Details</span></a></li>
        </ol>
    </div>


    
        <div class="block-content">
            <div class="product-info">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="gallery order-1">
                            <div id="product-preview" class="vanilla-zoom">
                                <div class="zoomed-image"></div>
                                <div class="sidebar"><img class="img-fluid d-block small-preview" src="{{asset('frontend/assets/img/tech/image1.jpg')}}"><img class="img-fluid d-block small-preview" src="{{asset('frontend/assets/img/tech/image2.jpg')}}"><img class="img-fluid d-block small-preview" src="{{asset('frontend/assets/img/tech/image2.jpg')}}"></div>
                            </div>
                        </div>

                       
                        
                      

                    </div>
               

             



                    <div class="col-md-6 product-infodiv order-sm-2 order-2">
                        <div class="info">
                            <h3 class="font-didot">Slytherine</h3>
                            <br>
                          
                                <!-- <span id="start-at" class="d-inline">Starting at</span> -->
                                <h3 id="price" class="d-inline"><b>Pkr 2500</b> </h3>
                                <br>
                                <br>
                                <div class="color-selection">
                               
                                    <span>Select Color : </span>     Black

                                    <input type="radio" id="male" name="gender" value="male">
                               
                                </div>
                                
                                <button class="text-white d-inline-block add-cart" type="button">
                                <i class="icon-basket"></i>Add to Cart</button>
                                <div class="about-productinfo">
                                <!-- <h3 id="about-product">About:</h3> -->
                                <p>In the end things must be as they are and have always been--the great things remain for the great,
                                     the abysses for the profound, the delicacies and thrills for the refined,
                                     and, to sum up shortly, everything rare for the rare.
                                     In the end things must be as they are and have always been--the great things remain for the great,
                                     the abysses for the profound, the delicacies and thrills for the refined, and, to sum up shortly,
                                     everything rare for the rare.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
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
        <h5 class="mb-0 accordion-heading">
          Craftsmanship <i class="fas fa-angle-down rotate-icon" style="float:right"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse " role="tabpanel" aria-labelledby="headingOne1"
         data-parent="#accordionEx">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
        labore sustainable VHS.
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
        <h5 class="mb-0 accordion-heading">
         Return And Shipments <i class="fas fa-angle-down rotate-icon" style="float:right"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
         data-parent="#accordionEx">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
        labore sustainable VHS.
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


@endsection