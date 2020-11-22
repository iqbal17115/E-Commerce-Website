@extends('admin.master')

@section('content')
  
<div class="main-panel">
          <div class="content-wrapper">
           
    <form action='/division/create' method="post" enctype="multipart/form-data">
      @csrf

       <div class="form-group">
        <label for="division">Division</label>
        <input type="text" name="division" class="form-control" id="division" placeholder="Enter Division" required>
       </div>

       <div class="form-group">
       <label for="priority">Priority</label>
       <input type="number" name="priority" class="form-control" id="priority" placeholder="Enter Priority">
      </div>
      
      <button class="btn btn-primary pull-right btn-lg">Submit</button>
   </form>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.Layout.footer')
          <!-- partial -->
        </div>

@endsection