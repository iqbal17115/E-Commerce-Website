@extends('admin.master')

@section('content')
  
<div class="main-panel">
          <div class="content-wrapper">
           
          <table class="table">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Brand Name</th>
      <th scope="col">Brand Image</th>
      <th scope="col">Action</th>
    </tr>

  </thead>
  <tbody>
  <?php $i=1 ?>
  @foreach($brand as $brand)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $brand->name }}</td>
      <td>{{ $brand->image }}</td>

      <td>
      <a href="/admin/edit/brand?id=<?php echo $brand->id ?>" class="btn btn-primary">Edit</a>
      <a href="/admin/delete/brand?id=<?php echo $brand->id ?>" class="btn btn-danger">Delete</a>
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