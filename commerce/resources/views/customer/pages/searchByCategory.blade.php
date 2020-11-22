@extends('customer.master')

@section('content')
<!-- Start Sidebar AND Content -->

    <div class="row">

       <!-- Start SideBar -->
       @include('customer.layout.sidebar')
       <!-- End SideBar -->

       <!-- Start Content -->
       <div class="col-md-8">
           <div class="widget">
           <h1>Featured Products</h1>
             <div class="row">
                @foreach($products as $product)
                <div class="col-md-3">
                <div class="card">
                  
                  <?php 
                  $images=DB::table('product_images')->where('product_images.product_id','=', $product->id)->get();
                  $i=0;
                  ?> 
 
                  @foreach($images as $image)

                  @if($i < 1)
                  <a href="/product/show/<?php echo $product->slug ?>">
                  <img class="card-img-top feature_img" src="../../{{ $image->image }}" alt="Card image cap">
                  </a>
                  <?php  $i++; ?>
                  @endif

                  @endforeach
                 
                <div class="card-body">
                 <h5 class="card-title">Taka- {{ $product->price }}</h5>
                 <p class="card-text">{{ $product->title }}</p>
                 <a href="#" class="btn btn-primary">add To Card</a>
                 </div>
                 </div>
                </div>
             @endforeach
             </div>

             
           </div>
           <div class="widget"></div>
       </div>
       <!-- End Content -->

    </div>
  </div>
<!-- End Sidebar AND Content -->

@endsection('content')