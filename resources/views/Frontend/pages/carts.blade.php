@extends('Frontend.layouts.master')
@section('content')
    <!-- Cart item details -->
    <section>
      <div class="container-fluid cart_page">
      @if (App\Models\Cart::totalItems() > 0)
        <table>
          <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
          </tr>
          @php
          $total_price = 0;
          @endphp
          @foreach (App\Models\Cart::totalCarts() as $cart)
          <tr>
            <td>
              <div class="cart_info">
                @if ($cart->product->images->count() > 0)
                <img src="{{ asset('images/products/'. $cart->product->images->first()->image) }}">
                @endif
                <div>
                  <h6><a href="{{ route('products.show', $cart->product->slug) }}">{{ $cart->product->title }}</a></h6>
                  <small>Price: TK {{ $cart->product->price }}</small>
                  <br>
                  <form action="{{ route('carts.delete', $cart->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="cart_id" />
                    <input type="submit" name="submit" value="remove" />
                  </form>
                </div>
              </div>
            </td>
            <td>
              <form action=" {{ route('carts.update', $cart->id) }}" method="post">
                @csrf
                <input type="number" name="product_quantity" value="{{ $cart->product_quantity }}"/>
                <input type="submit" name="submit" value="Update"/>
              </form>
            </td>
            <td>
                @php
                $total_price += $cart->product->price * $cart->product_quantity;
                @endphp

                TK {{ $cart->product->price * $cart->product_quantity }}
            </td>
          </tr>
          @endforeach
        </table>

        <div class="total_price">
          <table>
            <tr>
              <td>Total :</td>
              <td>TK {{ $total_price }}</td>
            </tr>
            <tr>
              <td>Vat :</td>
              <td>TK35.00</td>
            </tr>
            <tr>
              <td>Grand Total :</td>
              <td>TK230.00</td>
            </tr>
          </table>
        </div>

        <div class="btn_cart_shop">
          <div class="row">
            <div class="">
              <a href="{{ route('products') }}" class="btn btn-info btn-lg">Continue Shopping...</a>
              <a href="{{ route('checkouts') }}" class="btn btn-warning btn-lg">Checkout</a>
            </div>
          </div>
        </div>

      </div>
    @else
        <div class="btn_cart_shop">
          <div class="row">
            <div class="">
              <strong>There is no item in your cart.</strong>
              <br>
              <a href="{{ route('products') }}" class="btn btn-info btn-lg">Continue Shopping...</a>
            </div>
          </div>
        </div>
    @endif
    </section>
@endsection