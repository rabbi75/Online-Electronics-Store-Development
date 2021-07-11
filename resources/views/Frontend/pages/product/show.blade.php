@extends('Frontend.layouts.master')
  @section('title')
    {{ $product->title }} | OESD 
  @endsection
@section('content')
    <!-- Single Product Details -->
    <div class="container-fluid single_product mb-4">
      <div class="row">
        <div class="col-5">
          @php $i=1; @endphp
          @foreach($product->images as $img)
          @if($i>0)
         <img src="{!! asset('images/products/'.$img->image) !!}" width="100%" id="productImg">
          @endif
          @php $i--;@endphp
          @endforeach

            <div class="small-img-row">
              @php $i=1; @endphp
              @foreach($product->images as $image)  
              <div class="small-img-col {{ $i==1 ? 'active':'' }}">
                <img src="{!! asset('images/products/'.$image->image) !!}" width="100%" class="small-img">
              </div>
              @php $i++; @endphp
              @endforeach
            </div>
        </div>
        <div class="col-6">
          <h1>{{ $product->title}}</h1>
          <p class="badge badge-primary">{{ $product->quantity <1 ? 'No Item is Available' : $product->quantity.' '.'Item in Stock'}}</p>
          <h4>TK: {{ $product->price}}</h4>
<!--           <select>
            <option>Select Size</option>
            <option>Large</option>
            <option>Medium</option>
            <option>Small</option>
          </select> -->
            <form action="{{ route('carts.store') }}" method="post">
              @csrf
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <input type="number" name="product_quantity" value="1">
              <!-- <a href="cart.html" class="btn">Add To Cart</a> -->
              <button type="submit" name="submit" class="btn">Add To Cart</button>
            </form>
          <h3>Product Details <i class="fa fa-indent"></i></h3>
          <br>
          <p><p>{{ $product->description}}</p></p>
        </div>
      </div>
    </div>



    <!-- title -->
    <!-- <div class="container-fluid related">
      <div class="row row-2">
        <h2>Related Products</h2>
        <p><a href="#">View More</a></p>
      </div>
    </div> -->

    <!-- product -->
   <!--  <section>
      <div class="container-fluid">
        <div class="all_product">
          <div class="row">
              <div class="department_product">
                  <div class="row text-center">
                    <div class="col-4">
                      <div class="img_container">
                        <a href="product_details.html"><img src="img/product1.jpg"></a>
                        <div class="addCart">
                          <i class="fas fa-shopping-cart"></i>
                        </div>

                        <ul class="side_icons">
                          <span><i class="fas fa-search"></i></span>
                          <span><i class="fas fa-heart"></i></span>
                          <span><i class="fas fa-sliders-h"></i></span>
                        </ul>
                      </div>
                      <div class="bottom">
                        <a href="#">Bambi Print Mini Backpack</a>
                        <div class="price">
                          <span>TK 800 <del>1000</del></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="img_container">
                        <img src="img/product2.jpg">
                        <div class="addCart">
                          <i class="fas fa-shopping-cart"></i>
                        </div>

                        <ul class="side_icons">
                          <span><i class="fas fa-search"></i></span>
                          <span><i class="fas fa-heart"></i></span>
                          <span><i class="fas fa-sliders-h"></i></span>
                        </ul>
                      </div>
                      <div class="bottom">
                        <a href="#">Bambi Print Mini Backpack</a>
                        <div class="price">
                          <span>TK 800 <del>1000</del></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="img_container">
                        <img src="img/product3.jpg">
                        <div class="addCart">
                          <i class="fas fa-shopping-cart"></i>
                        </div>

                        <ul class="side_icons">
                          <span><i class="fas fa-search"></i></span>
                          <span><i class="fas fa-heart"></i></span>
                          <span><i class="fas fa-sliders-h"></i></span>
                        </ul>
                      </div>
                      <div class="bottom">
                        <a href="#">Bambi Print Mini Backpack</a>
                        <div class="price">
                          <span>TK 800 <del>1000</del></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="img_container">
                        <img src="img/product4.jpg">
                        <div class="addCart">
                          <i class="fas fa-shopping-cart"></i>
                        </div>

                        <ul class="side_icons">
                          <span><i class="fas fa-search"></i></span>
                          <span><i class="fas fa-heart"></i></span>
                          <span><i class="fas fa-sliders-h"></i></span>
                        </ul>
                      </div>
                      <div class="bottom">
                        <a href="#">Bambi Print Mini Backpack</a>
                        <div class="price">
                          <span>TK 800 <del>1000</del></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="img_container">
                        <img src="img/product6.jpg">
                        <div class="addCart">
                          <i class="fas fa-shopping-cart"></i>
                        </div>

                        <ul class="side_icons">
                          <span><i class="fas fa-search"></i></span>
                          <span><i class="fas fa-heart"></i></span>
                          <span><i class="fas fa-sliders-h"></i></span>
                        </ul>
                      </div>
                      <div class="bottom">
                        <a href="#">Bambi Print Mini Backpack</a>
                        <div class="price">
                          <span>TK 800 <del>1000</del></span>
                        </div>
                      </div>
                    </div>
              </div> 
          </div>
        </div>
      </div>
  
    </section> -->

@endsection