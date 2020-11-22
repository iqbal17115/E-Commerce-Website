@extends('admin.master')

@section('content')
  
<div class="main-panel">
          <div class="content-wrapper">
           
    <form action='/admin/product/edit' method="post" enctype="multipart/form-data">
      @csrf

       <div class="form-group">
        <label for="title">Title</label>
        <input type="text" value=<?php echo $product->title  ?> name="title" class="form-control" id="title" placeholder="Title" required>
       </div>

       <div class="form-group">
       <label for="description">Description</label>
       <textarea name="description" value=<?php echo $product->description ?> id="" cols="7" rows="3" class="form-control" id="description" placeholder="Description" required> {{ $product->description }} </textarea>
      </div>


      <div class="form-group">
       <select class="form-control" name="category_id">
          <option value="">Select category</option>
          <?php $category=DB::table('categories')->where('parent_id','=',NULL)->get(); ?>
          @foreach($category as $category)
            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }} >{{ $category->name }}</option>

            

        <?php
          $cat=DB::table('categories')->orderBy('name', 'asc')->where('parent_id', $category->id)->get();
        ?>

    @foreach($cat as $cat)
      
    <option value="{{ $cat->id }}" {{ $cat->id == $product->category_id ? 'selected' : '' }} > -->{{ $cat->name }}</option>

    @endforeach
     
    @endforeach
       </select>
      </div>
      
      <div class="form-group">
      <?php $brand=DB::table('brands')->get(); ?>
       <select class="form-control" name="brand_id" id="">
       <option value="">Select Brand</option>
       @foreach($brand as $brand)
       <option value="{{ $brand->id }}" {{ $product->brand_id==$brand->id ? 'selected' : '' }} >{{ $brand->name }}</option>
       @endforeach
       </select>
      </div>

      <div class="form-group">
      <label for="description">Select Image</label>
      <div class="row">

        <div class="col-md-3">
          <input type="file" name="file[]" class="form-control" />
        </div>
        <div class="col-md-3">
        <input type="file" name="file[]" class="form-control" />
        
        </div>
        <div class="col-md-3">
        <input type="file" name="file[]" class="form-control" />
        
        </div>
        <div class="col-md-3">
        <input type="file" name="file[]" class="form-control" />
        
        </div>

        </div>

      </div>
      <div class="form-group">
       <label for="price">Price</label>
       <input type="number" value=<?php echo $product->price ?> name="price" class="form-control" id="price" placeholder="Price" required>
      </div>

      <div class="form-group">
       <label for="quantity">Quantity</label>
       <input type="number" value=<?php echo $product->quantity ?> name="quantity" class="form-control" id="quantity" placeholder="Quantity" required>
      </div>
      <input value=<?php echo $product->id ?> type="number" name="id" hidden>
      <button class="btn btn-primary pull-right btn-lg">Submit</button>
   </form>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.Layout.footer')
          <!-- partial -->
        </div>

@endsection