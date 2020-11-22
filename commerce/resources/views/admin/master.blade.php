<!DOCTYPE html>
<html lang="en">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    
    @include('admin.script.up')

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('admin.layout.header')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper pl-0">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layout.sidebar')
        <!-- partial -->
        @yield('content')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
   @include('admin.script.down')

    
  </body>
