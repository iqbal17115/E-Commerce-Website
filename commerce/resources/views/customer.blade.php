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

                <div class="col-md-3">
                <div class="card">
                  <img class="card-img-top feature_img" src="{{ asset('images/'.'img.jpg') }}" alt="Card image cap">
                <div class="card-body">
                 <h5 class="card-title">hone Doe</h5>
                 <p class="card-text">Some Text.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
                 </div>
                </div>

                <div class="col-md-3">
                <div class="card">
                  <img class="card-img-top feature_img" src="{{ asset('images/'.'img.jpg') }}" alt="Card image cap">
                <div class="card-body">
                 <h5 class="card-title">hone Doe</h5>
                 <p class="card-text">Some Text.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
                 </div>
                </div>

                <div class="col-md-3">
                <div class="card">
                  <img class="card-img-top feature_img" src="{{ asset('images/'.'img.jpg') }}" alt="Card image cap">
                <div class="card-body">
                 <h5 class="card-title">hone Doe</h5>
                 <p class="card-text">Some Text.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
                 </div>
                </div>

                <div class="col-md-3">
                <div class="card">
                  <img class="card-img-top feature_img" src="{{ asset('images/'.'img.jpg') }}" alt="Card image cap">
                <div class="card-body">
                 <h5 class="card-title">hone Doe</h5>
                 <p class="card-text">Some Text.</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
                 </div>
                 </div>
                </div>


             </div>

             
           </div>
           <div class="widget"></div>
       </div>
       <!-- End Content -->

    </div>
  </div>
<!-- End Sidebar AND Content -->

@endsection('content')