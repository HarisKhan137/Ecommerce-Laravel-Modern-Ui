@extends('layouts.app')

@section('content')



<!-- Carousel Slider -->

<link rel="stylesheet" href="{{asset('frontend/css/mainslider.css')}}">

    <!-- Carousel Slider Ends -->
    



@php

$featured = DB::table('products')->where('status',1)->orderBy('id','desc')->limit(5)->get();
$count= 0;


@endphp

<main id = "main-site">

<br><br>

<!-- Carousel -->

<div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('./frontend/images/slider3.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5 class="font-rale">The words to make you smile</h5>
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('./frontend/images/slider3.jpg')}}" class="d-block w-100" style="width:1400px;height:650px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5 class="font-rale">Express Yourself!</h5>
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('./frontend/images/slider3.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="font-rale"> Designed to carry your inspirations</h5>
        
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  <!-- Our Products Heading -->


  <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                    <div class="modal-body">
                        <div class="quickview_body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-5 image-col">
                                        <div class="quickview_pro_img">
                                            <img id="pimage" src="" style="width:287px ;height:414px;" alt="">
                                        </div>
                                    </div>
<div class="spinnerdiv">                                  <div class="d-flex justify-content-center">
  <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div></div>
  
                                    <div class="col-12 col-lg-7 product-col">
                                        <div class="quickview_pro_des">
                                            <h4 class="title font-rale font-size-24" id="pname"> </h4>
                                            <div class="top_seller_product_rating mb-15">
                                                <!-- <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i> -->
                                            </div>

      

                                           <h5 class="font-rale font-size-20" >  <span id="product_price" class="font-rale font-size-20"></span></h5>
                                            <p id="product_details" class="font-rale font-size-16"></p>

                                            @php

$featured = DB::table('products')->where('status',1)->orderBy('id','desc')->limit(5)->get();


@endphp
                                            <span class="details-span"><a href=""  id="view-full-product-details">View Full Product Details</a></span>
                                     
                                        </div>
                                        <!-- Add to Cart Form -->


<!--  -->


<!--  -->                       <form method="post" class="cart" action="{{ route('insert.into.cart') }}">
        @csrf 
 
                                        <input type="hidden" name="product_id" id="product_id">


                                            <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="qty" value="1">

                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                            <button type="submit" name="addtocart" class="cart-submit" style="background-color:black">Add to cart</button>
                                            <!-- Wishlist -->
                                            <div class="modal_pro_wishlist">
                                                <a href="wishlist.html" target="_blank"><i class="far fa-heart" ></i></a>
                                            </div>
                                          
                                        </form>

                                        <!-- <div class="share_wf mt-30">
                                            <p>Share With Friend</p>
                                            <div class="_icon">
                                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ****** Quick View Modal Area End ****** -->

        <section class="shop_grid_area section_padding_100">
            <div class="container">

            <div class="block-heading breadcrumb-div"> 
        <ol class="breadcrumb special-breadcrumb text-center d-xxl-flex justify-content-center align-items-center align-content-center justify-content-xxl-center align-items-xxl-center" style="font-size: 20px;">
            <li class="breadcrumb-item link-dark"><a href="#"><span class="text-dark font-rale font-size-24">Featured Products</span></a></li>
           
        </ol>
    </div>

 

                <div class="row">
                    

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="shop_grid_product_area">
                            <div class="row justify-content-md-center">
                            @foreach($featured as $key => $row)
                                <!-- Single gallery Item -->
                                <div class="col-xs-12 col-sm-6 col-md single_gallery_item wow fadeInUpBig" data-wow-delay="0.2s">
                                    <!-- Product Image -->
                                     <div class="product-img" style="border:1px solid black;">
                                     <a href="{{url('products/detail/'.$row->id.'/'.$row->product_name)}}" class="linker"> <img src="{{$row->image_one}}" class="product-card-img" alt="" style="height:300px;">   </a>
                                      
                                        <div class="product-quicview">
                                            <a href="#" data-toggle="modal" data-target="#quickview "  onclick="quickview(this.id)" id="{{$row->id}} " class="quickviewbutton" ><button id="quickviewbutton">Quick View</button></a>
                                        </div>
                                    </div>
                                  
                                    <!-- Product Description -->
                                    <div class="product-description">
                                       
                                        <H6><a href="{{url('products/detail/'.$row->id.'/'.$row->product_name)}}"  style="color:black !important;" class="font-rale font-size-24">{{$row->product_name}}</a>
                                       
                                            <a style="float: right;cursor: pointer;"  data-id="{{ $row->id }}" class="cart-anchortag addcart"><i class="fas fa-shopping-cart circle-icon" ></i></a>

                                        </h6>
                                        <P class="product-price font-rale" style="font-weight:bolder;">


                                        @php
                                        $amount = $row->selling_price - $row->discount_price;
                                        $discount = $amount/$row->selling_price*100;

                                        @endphp


                                            PKR <span class="font-quicksand"> {{$row->selling_price}}</span>
                                            <button class="addwishlist" data-id="{{ $row->id }}" style="background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;">
                    <div class="trends_fav"><i class="far fa-heart" style="color:red;"></i></div>
                </button>
                                            
                                            
                                        </P>
                                 
                                        <!-- Add to Cart -->

                                    </div>
                                </div>
                            

                                <!-- @if($key==1)
                                <div class="w-100"></div>
                             
                                @endif -->
                              
                                @endforeach
                                

                                </div>


                           


                            

                                
                              

                                <!-- Single gallery Item -->
                                

                                <!-- Single gallery Item -->
                                

                                <!-- Single gallery Item -->
                                

                                <!-- Single gallery Item -->
                                

                                <!-- Single gallery Item -->
                                

                                <!-- Single gallery Item -->
                               

                                <!-- Single gallery Item -->
                               

                                <!-- Single gallery Item -->
                                
                         
                        </div>


                    </div>
                </div>
            </div>
        </section>



        
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  
<script type="text/javascript">

    function quickview(id){
        $( "div.image-col" ).hide();
    $( "div.product-col" ).hide();
        $( "div.spinnerdiv" ).show();
    $( ".details-span" ).hide();
    $( ".quantity" ).hide();
    $( ".cart-submit" ).hide();
    $( "#pimage" ).hide();
    $( ".modal_pro_wishlist" ).hide();
 
        $.ajax({
         url: "{{ url('product/quickview/') }}/"+id, 
         type: "GET",
         dataType:"json",
         success:function(data){

            $( "div.image-col" ).show();
    $( "div.product-col" ).show();
    $( "div.spinnerdiv" ).hide();
    $( ".details-span" ).show();
    $( ".quantity" ).show();
    $( ".cart-submit" ).show();
    $( "#pimage" ).show();
    $( ".modal_pro_wishlist" ).show();

    // After ajax is completed .

       $('#pcode').text(data.product.product_code);
       $('#pcat').text(data.product.category_name);
       $('#psub').text(data.product.subcategory_name);
       $('#pbrand').text(data.product.brand_name);
       $('#pname').text(data.product.product_name);
       $('#pimage').attr('src',data.product.image_one);
       $('#product_id').val(data.product.id);
       $('#view-full-product-details').attr("href", ['products', 'detail', (data.product.id),data.product.product_name].join('/') );
   


       

      

       $('#product_price').text(data.product.selling_price);
       $('#product_details').text(data.product.product_details);

       var d = $('select[name="color"]').empty();
       $.each(data.color,function(key,value){
       $('select[name="color"]').append('<option value="'+value+'">'+value+'</option>'); 
        });

          var d = $('select[name="size"]').empty();
       $.each(data.size,function(key,value){
       $('select[name="size"]').append('<option value="'+value+'">'+value+'</option>'); 
        });


         }  
        })
    }


</script>




        
<script type="text/javascript">
    
    $(document).ready(function(){
      $('.addcart').on('click', function(){


         var id = $(this).data('id');
        
         if (id) {
             $.ajax({
                 url: " {{ url('add/to/cart/') }}/"+id,
                 type:"GET",
                 datType:"json",
                 success:function(data){
            $('#cart_count').text(data.cartcount);
              const Toast = Swal.mixin({
                   toast: true,
                   position: 'top-end',
                   showConfirmButton: false,
                   timer: 3000,
                   timerProgressBar: true,
                   onOpen: (toast) => {
                     toast.addEventListener('mouseenter', Swal.stopTimer)
                     toast.addEventListener('mouseleave', Swal.resumeTimer)
                   }
                 })

                 
 
              if ($.isEmptyObject(data.error)) {
 
                 Toast.fire({
                   icon: 'success',
                   title: data.success
              
                 })
              }else{
                  Toast.fire({
                   icon: 'error',
                   title: data.error
        
                 })
              }
  
 
                 },
             });
 
         }else{
             alert('danger');
         }
  
         
        
      });
 
    });
 
 
 </script>
<script type="text/javascript">
    
    $(document).ready(function(){
      $('.addwishlist').on('click', function(){
         var id = $(this).data('id');
         if (id) {
             $.ajax({
                 url: " {{ url('add/wishlist/') }}/"+id,
                 type:"GET",
                 datType:"json",
                 success:function(data){
              const Toast = Swal.mixin({
                   toast: true,
                   position: 'top-end',
                   showConfirmButton: false,
                   timer: 3000,
                   timerProgressBar: true,
                   onOpen: (toast) => {
                     toast.addEventListener('mouseenter', Swal.stopTimer)
                     toast.addEventListener('mouseleave', Swal.resumeTimer)
                   }
                 })
 
              if ($.isEmptyObject(data.error)) {
 
                 Toast.fire({
                   icon: 'success',
                   title: data.success
                 })
              }else{
                  Toast.fire({
                   icon: 'error',
                   title: data.error
                 })
              }
  
 
                 },
             });
 
         }else{
             alert('danger');
         }
      });
 
    });
 
 
 </script>



@endsection

<!-- 
<section class="clean-block clean-services">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-dark">Featured Products</h2>
                <p>Discover Our Most Trending Frames from the month of March.</p>
            </div>
          

            

            
                   


           
        </div>
    </section>
</main> -->


