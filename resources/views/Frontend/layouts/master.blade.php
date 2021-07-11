<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
    @yield('title', 'Tiger')
    </title>
    @include('Frontend.partials.link')
  </head>
  <body>
  <!-- header start -->
  <div class="wrapper">
    @include('Frontend.partials.nav')
    @include('Frontend.partials.messages')

    @yield('content')
    <!-- footer section -->
    @include('Frontend.partials.footer')

  </div>
    @include('Frontend.partials.script')
    <!-- @yield('scripts') -->
  </body>
</html>