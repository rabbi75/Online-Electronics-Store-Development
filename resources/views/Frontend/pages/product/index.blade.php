@extends('Frontend.layouts.master')
@section('content')
<!-- All Product -->
<section>
  <div class="container-fluid">
    <div class="main_department mt-4 mb-4">  
      <div class="row">
        <div class="col-2">
          @include('Frontend.partials.sidebar')
        </div>

        <div class="col-10">
          <div class="department_product">
              <div class="row text-center">
                @foreach($products as $product)
                <div class="col-4">
                  <div class="img_container">
                    @php $i=1; @endphp
                    @foreach($product->images as $image)
                    
                      @if($i>0)
                      <a href="{!! route('products.show', $product->slug) !!}"><img src="{{ asset('images/products/'. $image->image) }}" alt="{{ $product->title }}"></a>
                      @endif
                    @php $i--;@endphp
                    @endforeach
                    
                    <div class="addCart">
                      <form action="{{ route('carts.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="number" hidden name="product_quantity" value="1">
                        <button type="submit" name="submit" class="btn"><i class="fas fa-shopping-cart"></i></button>
                      </form>
                    </div>

                  </div>
                  <div class="bottom">
                    <a href="{!! route('products.show', $product->slug) !!}">{{$product->title}}</a>
                    <div class="price">
                      <span>TK {{$product->price}} <!-- <del>1000</del> --></span>
                    </div>
                  </div>
                </div>
                @endforeach
            
          </div>

        </div>
      </div>

        </div>
                          <div class="row">
          <div class="pagination">
            {{ $products->links() }}
          </div>

<!--         <div class="page_btn">
          <span>1</span>
          <span>2</span>
          <span>3</span>
          <span>4</span>
          <span>&#8594;</span>
        </div> -->



    </div>
  </div>  
</section>
@endsection