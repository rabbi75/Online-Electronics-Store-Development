@extends('Frontend.layouts.master')
@section('content')
  @include('Frontend.partials.slider')
    <!-- shop by category item start -->
<section>
  <div class="container-fluid">
    <div class="promotion_layout">
      <div class="row">
        <div class="vediogame">
          <h4>Shop by category</h4>
          <div class="vediogame-carousel owl-carousel">
            @foreach ($categories as $category)
            <div class="cool-4">
              <img src="{{ asset('images/categories/'.$category->image) }}" alt="" />
                  <div class="promotion-content">
                    <h3>{{ $category->name }}</h3>
                    <a href="{!! route('categories.show', $category->id) !!}">SHOP NOW</a>
                  </div>
            </div>
            @endforeach
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- shop by category item end -->    <!-- shop by category item start -->
<section>
  <div class="container-fluid">
    <div class="promotion_layout">
      <div class="row">
        <div class="vediogame">
          <h4>Our Brands</h4>
          <div class="vediogame-carousel owl-carousel">
            @foreach ($brands as $brand)
            <div class="cool-4">
              <img src="{{ asset('images/brands/'.$brand->image) }}" alt="" />
                  <div class="promotion-content">
                    <!-- <h3>{{ $brand->name }}</h3> -->
                    <!-- <a href="">SHOP NOW</a> -->
                  </div>
            </div>
            @endforeach
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- shop by category item end -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="vediogame">
            <h4>Camera</h4>
              <div class="vediogame-carousel owl-carousel">
              @foreach ($products as $product)
              @if ($product->category_id == "9")
              <div>
                @php $i=1; @endphp
                @foreach($product->images as $image)
                @if($i>0)
                <a href="{!! route('products.show', $product->slug) !!}"><img src="{{ asset('images/products/'. $image->image) }}"></a>
                @endif
                @php $i--;@endphp
                @endforeach
              </div>
              @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- laptop Item -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="vediogame">
            <h4>Laptop</h4>
              <div class="vediogame-carousel owl-carousel">
              @foreach ($products as $product)
              @if ($product->category_id == "8")
              <div class="laptopItem">
                @php $i=1; @endphp
                @foreach($product->images as $image)
                @if($i>0)        
                <a href="{!! route('products.show', $product->slug) !!}"><img src="{{ asset('images/products/'. $image->image) }}"></a>
                @endif
                @php $i--;@endphp
                @endforeach
              </div>
              @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Offer Section 1 -->
    <section>
      <div class="container-fluid">
        <div class="offer">
          <div class="row">
            <div class="col-6">
              <img src="{{ asset('images/products/'. 'offer1.jpg') }}">
                <div class="content left">
                  <span>Exclusive Sales</span>
                  <h3>Spring Collections</h3>
                  <a href="">View Collection</a>
                </div>
            </div>
            <div class="col-6">
              <img src="{{ asset('images/products/'. 'offer2.jpg') }}">
              <div class="content  right">
                <span>New Trending</span>
                <h3>Designer Bags</h3>
                <a href="">Shop Now </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- offer section end -->
    <!-- Refrigerator Item -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="refrigerator">
            <h4>Refrigerator</h4>
              <div class="vediogame-carousel owl-carousel">
              @foreach ($products as $product)
              @if ($product->category_id == "12")
              <div class="laptopItem">
                @php $i=1; @endphp
                @foreach($product->images as $image)
                @if($i>0)        
                <a href="{!! route('products.show', $product->slug) !!}"><img src="{{ asset('images/products/'. $image->image) }}"></a>
                @endif
                @php $i--;@endphp
                @endforeach
              </div>
              @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Refrigerator Item -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="refrigerator">
            <h4>Television</h4>
              <div class="vediogame-carousel owl-carousel">
              @foreach ($products as $product)
              @if ($product->category_id == "11")
              <div class="laptopItem">
                @php $i=1; @endphp
                @foreach($product->images as $image)
                @if($i>0)        
                <a href="{!! route('products.show', $product->slug) !!}"><img src="{{ asset('images/products/'. $image->image) }}"></a>
                @endif
                @php $i--;@endphp
                @endforeach
              </div>
              @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Phone Item -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="refrigerator">
            <h4>Phone</h4>
              <div class="vediogame-carousel owl-carousel">
              @foreach ($products as $product)
              @if ($product->category_id == "10")
              <div class="laptopItem">
                @php $i=1; @endphp
                @foreach($product->images as $image)
                @if($i>0)        
                <a href="{!! route('products.show', $product->slug) !!}"><img src="{{ asset('images/products/'. $image->image) }}"></a>
                @endif
                @php $i--;@endphp
                @endforeach
              </div>
              @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Air Conditioner Item -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="refrigerator">
            <h4>Air Conditioner</h4>
              <div class="vediogame-carousel owl-carousel">
              @foreach ($products as $AirConditioner)
              @if ($AirConditioner->category_id == "13")
              <div class="laptopItem">
                @php $i=1; @endphp
                @foreach($AirConditioner->images as $image)
                @if($i>0)        
                <a href="{!! route('products.show', $AirConditioner->slug) !!}"><img src="{{ asset('images/products/'. $image->image) }}"></a>
                @endif
                @php $i--;@endphp
                @endforeach
              </div>
              @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection