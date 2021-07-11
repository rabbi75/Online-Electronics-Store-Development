    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ route('backend.index') }}"><img src="{{ asset('images/logo.svg')}}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('backend.index') }}"><img src="{{ asset('images/logo-mini.svg')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="{{ route('index') }}" target="_blank" class="nav-link"><i class="mdi mdi-image-filter"></i>Visit Main Site</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('backend.products') }}" class="nav-link"><i class="mdi mdi-email-outline"></i>Manage Product</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('backend.orders') }}" class="nav-link"><i class="mdi mdi-calendar"></i>Manage Order</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item">
            <a class="nav-link"  href="#">
              <form class="form-inline" action="{{ route('admin.logout') }}" method="post">
                @csrf
                <input type="submit" value="Logout Now" class="btn btn-danger">
              </form>
            </a>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>