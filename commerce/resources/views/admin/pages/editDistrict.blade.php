@extends('admin.master')

@section('content')
  
<div class="main-panel">
          <div class="content-wrapper">
           
    <form action='/district/edit' method="post">
      @csrf
        
        <input type="number" name="id" value={{ $dis->id }} hidden>
       <div class="form-group">
        <label for="district">District</label>
        <select name="district" id="district" class="form-control">
          @foreach($districts as $district)
          {{ $district->district }}
            <option value="{{ $district->district }}" {{ $dis->district==$district->district ? 'selected' : '' }} >{{ $district->district }}</option>
          @endforeach
        </select>
       </div>

       <div class="form-group">
       <label for="division">Division</label>
       <select name="division_id" id="division_id" class="form-control">
          @foreach($divisions as $division)
            <option value="{{ $division->id }}" {{ $division->id==$dis->division_id ? 'selected' : '' }} >{{ $division->name }}</option>
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