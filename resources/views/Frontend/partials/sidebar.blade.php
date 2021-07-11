<div class="main_department_left">
  <h5>Category</h5>
  @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
  <a href="{!! route('categories.show', $parent->id) !!}"><span class="arrow"><i class="fas fa-chevron-right"></i> </span>{{ $parent->name }}</a>
  <h6><b></b></h6>
  @endforeach

</div>





<!-- <div class="main_department_left">
  <h5>Department</h5>
  @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
  <a href="{!! route('products.show', $parent->id) !!}" data-toggle="collapse"><span class="arrow"><i class="fas fa-chevron-right"></i> </span>{{ $parent->name }}</a>
  <h6><b></b></h6>
  @endforeach

</div> -->



<!-- main vedio
<div class="list-group">
  @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
    <a href="#main-{{ $parent->id }}" class="list-group-item list-group-item-action" data-toggle="collapse">
      <img src="{!! asset('images/categories/'.$parent->image) !!}" width="50">
      {{ $parent->name }}
    </a>
    <div class="collapse" id="main-{{ $parent->id }}">
      <div class="child-rows">
        @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
          <a href="{!! route('categories.show', $child->id) !!}" class="list-group-item list-group-item-action">
            <img src="{!! asset('images/categories/'.$child->image) !!}" width="30">
            {{ $child->name }}
          </a>
        @endforeach
      </div>


    </div>
  @endforeach
</div> -->