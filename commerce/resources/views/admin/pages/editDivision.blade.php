@extends('admin.master')

@section('content')
  
<div class="main-panel">
          <div class="content-wrapper">
           
    <form action='/division/edit' method="post">
      @csrf
        
        <input type="number" name="d_id" value="<?php echo $division->id ?>" hidden>
       <div class="form-group">
        <label for="title">Name</label>
        <input type="text" name="division" value=<?php echo $division->name ?> class="form-control" id="division" placeholder="division" required>
       </div>

       <div class="form-group">
       <label for="priority">priority</label>
       <input value=<?php echo $division->priority ?> name="priority" class="form-control" id="priority" placeholder="priority" required/>
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