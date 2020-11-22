@extends('admin.master')

@section('content')
  
<div class="main-panel">
          <div class="content-wrapper">
           
    <form action='/district/create' method="post" enctype="multipart/form-data">
      @csrf

       <div class="form-group">
        <label for="district">District</label>
        <input type="text" name="district" class="form-control" id="district" placeholder="Enter District" required>
       </div>

       <div class="form-group">
       <label for="division">Division</label>
       <select name="division_id" id="division_id" class="form-control" required>
       <option value="">Select Division</option>

        @foreach($divisions as $division)
              <option value="{{ $division->id }}">{{ $division->name }}</option>
        @endforeach

       </select>
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