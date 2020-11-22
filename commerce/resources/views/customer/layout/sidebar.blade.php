<div class="col-md-4">

<div class="list-group mt-2 ml-5">
    <?php $category=DB::table('categories')->where('parent_id','=',NULL)->get(); ?>
    @foreach($category as $category)
    <a href="#main-{{ $category->id }}" class="list-group-item list-group-item-action" data-toggle="collapse" >
      <img src="../../{{ $category->image }}" alt="" style="width: 50px;height:50px"> &nbsp; &nbsp; 
      {{ $category->name }}
    </a>

    <?php
      $cat=DB::table('categories')->orderBy('name', 'asc')->where('parent_id', $category->id)->get();
    ?>

    <div class="child-rows collapse" id="main-{{ $category->id }}">
      
    @foreach($cat as $cat)
      
    <a href="/category/search/{{ $cat->id }}" class="list-group-item list-group-item-action">
      <img src="../../{{ $cat->image }}" alt="" style="width: 50px;height:50px" class="ml-4 rounded"> &nbsp; &nbsp; 
     {{ $cat->name }}
    </a>
    @endforeach

    </div>

    @endforeach
</div>

</div>