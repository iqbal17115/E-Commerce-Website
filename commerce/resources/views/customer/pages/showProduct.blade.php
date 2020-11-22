@extends('customer.master')

@section('content')
<!-- Start Sidebar AND Content -->

    <div class="row"> 

       <!-- Start SideBar -->
       <div class="col-md-4">

       <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @php
      $i=1;
    @endphp
    @foreach($images as $image)
    <div class="product_item carousel-item {{ $i==1 ? 'active' : ''}}">

      <img class="d-block p-5" src="../../{{ $image->image }}" alt="{{ $title->title }}" style=" height: 500px; width: 400px; background-color: #85929E;">
     
    </div>
      @php
        $i++;
      @endphp
   @endforeach
  </div>
</div>

      </div>
       <!-- End SideBar --> 

       <!-- Start Content -->
       <div class="col-md-8">
           <div class="widget mt-2">
           
          <h2> {{ $title->title }}</h2>
          <h3 class="">
          {{ $title->price }} Taka <span class="badge badge-primary"> {{ $title->quantity>0 ? $title->quantity : 'No item is available!!' }}</span>
          </h3>
         
           </div>
           <hr>
           <div>
           {{ $title->description }}
           </div>
           <div class="widget"></div>
       </div>
       <!-- End Content -->

    </div>
  </div>
<!-- End Sidebar AND Content -->

@endsection('content')