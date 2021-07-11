  <ul>
  	@foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
    <li><a href="#">{{ $child->name }}</a></li>
    <li><a href="#">Jackets & Coats</a></li>
    <li><a href="#">Jeans</a></li>
    <li><a href="#">Pants</a></li>
    <li><a href="#">Sleep & Lounge</a></li>
    <li><a href="#">T-Shirts & Tanks</a></li>
    @endforeach
  </ul>