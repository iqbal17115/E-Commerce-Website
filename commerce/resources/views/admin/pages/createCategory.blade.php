@extends('admin.master')

@section('content')
  
<div class="main-panel">
          <div class="content-wrapper">
           
    <form action='/admin/create/category' method="post" enctype="multipart/form-data">
      @csrf

       <div class="form-group">
        <label for="title">Name</label>
        <input type="text" name="category" class="form-control" id="category" placeholder="Category" required>
       </div>

       <div class="form-group">
       <label for="description">Description</label>
       <textarea name="description" id="" cols="7" rows="3" class="form-control" id="description" placeholder="Description" required></textarea>
      </div>
      
      <div class="form-group">
       <label for="cat_id">Parent Category</label>
       <select class="form-control" name="cat_id" id="cat_id">
       <option value="">Select Category</option>
       @foreach($category as $category)
       <option value="<?php echo $category->id ?>">{{ $category->name }}</option>
       @endforeach
       </select>
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