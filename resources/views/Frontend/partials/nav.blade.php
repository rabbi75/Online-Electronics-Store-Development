<!--Menu header start -->
<nav class="navbar navbar-expand-lg headertop">
  <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('images/products/'. 'logo.png') }}" align="right" width="100px"></a>

  <div class="navbar-collapse">
    <ul class="navbar-nav mr-auto">

  <form class="form-inline my-2 my-lg-0" action=" {{ route('search') }} " method="get">
    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search" width="50px">
    <button class="btn btn-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></</button>
  </form>

    </ul>
            <nav class="navbar navbar-light headerright">
            
  <!-- laravel authentication -->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Returns & Orders</a>
              </li>
              <!-- cart item -->
              <li>
                <a class="nav-link btn-cart-nav" href="{{ route('carts') }}">

                  <button class="btn btn-danger">
                    <span class="mt-1">Cart</span>
                    <span class="badge badge-warning" id="totalItems">
                      {{ App\Models\Cart::totalItems() }}
                    </span>
                  </button>

                </a>
              </li>

              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @else
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" class="img rounded-circle" style="width:40px">
                      {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                      <span class="caret"></span>
                    </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('user.dashboard') }}">Dashboard</a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
    <!-- laravel authentication  -->



            </nav>
  </div>
</nav>
<!-- Menu header end -->


    <!--Menu start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><span></span><i class="fas fa-map-marker-alt"></i><p class="delivery_location">Delivery to <span class="loca"><br>Bangladesh</p></span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products') }}">All Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>

        </ul>
            <nav class="navbar navbar-light bg-light">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('offer') }}">Today's Offer</a>
                </li>
              </ul>
            </nav>
      </div>
    </nav>
    <!-- Menu end -->