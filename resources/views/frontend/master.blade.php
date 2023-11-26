<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Page title</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="{{asset('frontend/css/bootstrap/bootstrap.min.css')}}">
      <link rel="icon" type="{{asset('frontend/assets/image/png')}}" sizes="32x32" href="shuffle-for-bootstrap.png">
  </head>
  <body>
    <div class="container-fluid">
    @include('frontend.components.navigation')                  
      
      @yield('content')

      @include('frontend.components.footer')  
    </div>
    <script src="{{asset('frontend/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>
