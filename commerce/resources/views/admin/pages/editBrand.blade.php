@extends('admin.master')

@section('content')
  
<div class="main-panel">
          <div class="content-wrapper">
           
    <form action='/admin/edit/brand' method="post" enctype="multipart/form-data">
      @csrf
        
        <input type="number" name="c_id" value="<?php echo $brand->id ?>" hidden>
       <div class="form-group">
        <label for="title">Name</label>
        <input type="text" name="brand" value=<?php echo $brand->name ?> class="form-control" id="brand" placeholder="brand" required>
       </div>

       <div class="form-group">
       <label for="description">Description</label>
       <textarea value=<?php echo $brand->description ?> name="description" id="" cols="7" rows="3" class="form-control" id="description" placeholder="Description" required>{{ $brand->description }}</textarea>
      </div>
      
      <div class="form-group">
      <label for="description">brand Old Image</label>
          <br>
          <img src="../../{{ $brand->image }}" alt="image" style="width: 120px;height: 150px">
        
      </div>

      <div class="form-group">
      <label for="description">Select Image</label>
         
          <input type="file" name="image" class="form-control" />
        
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