@extends('admin.master')

@section('content')
  
<div class="main-panel">
          <div class="content-wrapper">
           
          <table class="table">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Division</th>
      <th scope="col">Priority</th>
      <th scope="col">Action</th>
    </tr>

  </thead>
  <tbody>
  <?php $i=1 ?>
  @foreach($divisions as $division)
    <tr>

      <th scope="row">{{ $i++ }}</th>
      <td>{{ $division->name }}</td>
      <td>{{ $division->priority }}</td>
     
      <td>
      <a href="/division/edit?id=<?php echo $division->id ?>" class="btn btn-primary">Edit</a>
      <a href="/division/delete?id=<?php echo $division->id ?>" class="btn btn-danger">Delete</a>
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