<!doctype html>
<html>
<head>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/logo.png" />
    <!--meta-->
    @include('layouts.meta')
</head>

<body>

  <!-- Navbar -->
  <header id="header" class="fixed-top py-2">
      <div class="container d-flex">
          <div class="logo mr-auto">
              <h1 class="text-light"><a href="{{ url('/index') }}">QuaraNtimes</a></h1>
          </div>
          <nav class="navbar navbar-expand-lg nav-menu d-none d-lg-block">
              <div class="container">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <!-- Left Side Of Navbar -->
                      <ul class="navbar-nav mr-auto"></ul>

                      <!-- Right Side Of Navbar -->
                      <ul class="navbar-nav ">
                          <li><a href="#getstarted">Get Started &emsp;</a></li>
                          <li><a href="#services">Services &emsp;</a></li>
                          <li><a href="#mobile">QuaraNtimes Mobile &emsp;</a></li>
                          <li><a href="#contact">Contact Us &emsp;</a></li>
                          <!-- Authentication Links -->
                              @guest
                                  @if (Route::has('login'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                      </li>
                                  @endif
                                        
                                  @if (Route::has('register'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                                      </li>
                                  @endif
                              @else
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('ADMIN HOME') }}</a>
                                  </li>
                              @endguest
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </header>
  <!-- End of Navbar-->  



    <!-- Vendor JS Files -->
    <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/js/main.js') }}"></script>

    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


</body>
</html>