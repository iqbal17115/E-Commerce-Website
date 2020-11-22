@extends('admin.master')

@section('content')
  
<div class="main-panel">
          <div class="content-wrapper">
           
          <table class="table">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">District</th>
      <th scope="col">district</th>
      <th scope="col">Action</th>
    </tr>

  </thead>
  <tbody>
  <?php $i=1 ?>
  @foreach($districts as $district)
    <tr>

      <th scope="row">{{ $i++ }}</th>
      <td>{{ $district->district }}</td>
      <td>{{ $district->name }}</td>
     
      <td>
      <a href="/district/edit?id=<?php echo $district->id ?>" class="btn btn-primary">Edit</a>
      <a href="/district/delete?id=<?php echo $district->id ?>" class="btn btn-danger">Delete</a>
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