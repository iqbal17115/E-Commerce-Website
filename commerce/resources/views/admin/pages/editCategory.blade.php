@extends('admin.master')

@section('content')
  
<div class="main-panel">
          <div class="content-wrapper">
           
    <form action='/admin/edit/category' method="post" enctype="multipart/form-data">
      @csrf
        
        <input type="number" name="c_id" value="<?php echo $category->id ?>" hidden>
       <div class="form-group">
        <label for="title">Name</label>
        <input type="text" name="category" value=<?php echo $category->name ?> class="form-control" id="category" placeholder="Category" required>
       </div>

       <div class="form-group">
       <label for="description">Description</label>
       <textarea value=<?php echo $category->description ?> name="description" id="" cols="7" rows="3" class="form-control" id="description" placeholder="Description" required>{{ $category->description }}</textarea>
      </div>
      
      
      <div class="form-group">
       <label for="cat_id">Parent Category ( Optional )</label>
       <select class="form-control" name="cat_id" id="cat_id">
       @foreach($category1 as $category1)
       <option value="<?php echo $category1->id ?>" {{ $category1->id == $category->parent_id ? 'selected' : '' }}>{{ $category1->name }}</option>
       @endforeach
       </select>
      </div>
      
      <div class="form-group">
      <label for="description">Category Old Image</label>
          <br>
          <img src="../../{{ $category->image }}" alt="image" style="width: 120px;height: 150px">
        
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