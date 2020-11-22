@extends('admin.master')

@section('content')
  
<div class="main-panel">
          <div class="content-wrapper">
           <?php $i=1 ?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $product->title }}</td>
      <td>{{ $product->description }}</td>
      <td>{{ $product->quantity }}</td>
      <td>
      <a class="btn btn-info" href="/admin/product/edit?id=<?php echo $product->id ?>">Edit</a>
      <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</a>
     
     </td>

       <!--  Start Delete Modal  -->
  <div id="exampleModal" class="modal mt-5" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
       <a type="button" class="btn btn-primary float-right" href="/admin/product/delete?id=<?php echo $product->id ?>">Delete</a>
      
      </div>
   
    </div>
  </div>
</div>
  <!--  End Delete Modal  -->
      
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