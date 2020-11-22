@extends('admin.master')

@section('content')
  
<div class="main-panel">
          <div class="content-wrapper">
           
          <table class="table">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category Image</th>
      <th scope="col">Parent Category</th>
      <th scope="col">Action</th>
    </tr>

  </thead>
  <tbody>
  <?php $i=1 ?>
  @foreach($category as $category)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $category->name }}</td>
      <td>{{ $category->image }}</td>
      <td>
      
       @if($category->parent_id==NULL)
         Primary Category
       @else
         {{ $category->name }}
       @endif
    
      </td>

      <td>
      <a href="/admin/edit/category?id=<?php echo $category->id ?>" class="btn btn-primary">Edit</a>
      <a href="/admin/delete/category?id=<?php echo $category->id ?>" class="btn btn-danger">Delete</a>
      </td>
     
    </tr>
  @endforeach
   
  </tbody>
</table>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.Layout.footer')
          <!-- partial -->
        </div>

@endsection