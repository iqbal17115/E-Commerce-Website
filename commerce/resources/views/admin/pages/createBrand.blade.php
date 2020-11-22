@extends('admin.master')

@section('content')
  
<div class="main-panel">
          <div class="content-wrapper">
           
    <form action='/admin/create/brand' method="post" enctype="multipart/form-data">
      @csrf

       <div class="form-group">
        <label for="title">Name</label>
        <input type="text" name="brand" class="form-control" id="brand" placeholder="brand" required>
       </div>

       <div class="form-group">
       <label for="description">Description</label>
       <textarea name="description" id="" cols="7" rows="3" class="form-control" id="description" placeholder="Description" required></textarea>
      </div>

      <div class="form-group">
      <label for="description">Select Image</label>
     
          <input type="file" name="file" class="form-control" />
        
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