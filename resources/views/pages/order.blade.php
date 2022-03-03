@extends('layouts.app')



@section('content')





 
<div class="container">
     
<br><br><br>
      
<div class="block-heading Greetings-Breadcrumb-Div"> 
        <ol class="breadcrumb special-breadcrumb text-center d-xxl-flex justify-content-center align-items-center align-content-center justify-content-xxl-center align-items-xxl-center" style="font-size: 20px;">
            <li class="breadcrumb-item link-dark"><a href="#"><span class="text-dark font-rale font-size-24">Store</span></a></li>
            <li class="breadcrumb-item"><a href="#"><span class="text-dark font-rale font-size-24">Order</span></a></li>
        </ol>
    </div>

    <div class="row ">

<div class="col-12   " style="margin-top:10rem;margin-bottom:10rem;">

         
        

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Product List
  <a href="{{ route('add.product') }}" class="btn btn-sm btn-info" style="float: right;">Shop</a>
          </h6>
           

          <div class="table-wrapper">
            <table id="myTable" class="table display responsive nowrap">
              <thead>
                <tr>
                <th class="wd-15p">Order Id</th>
                  <th class="wd-15p">Items</th>
                  <th class="wd-15p">Products</th>
                  <th class="wd-15p">Order Date</th>
                  <th class="wd-15p">Order Amount</th>
                  <th class="wd-15p">Payment Method</th>
                  <th class="wd-15p">Payment Status</th>
                  <th class="wd-20p">Order Status</th>
                  <th class="wd-20p">Details</th>
        
                </tr>
              </thead>
              <tbody>
               
                <tr>
           
                <td>1021</td>
                <td>2</td>
                <td>Frame 1 ,Frame 2</td>
                <td>04/03/2021 </td>
                <td>12000 Pkr</td>
                <td>Online Payment</td>
                <td><span class="badge badge-success">Paid</span></td>
                <td><span class="badge badge-success">Delivered</span></td>
                <td><a href="">View Details</a></td>
 
                   
                </tr>
            
                 
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->


</div>
</div>

        

 

</div>
</div>


 
 

@endsection