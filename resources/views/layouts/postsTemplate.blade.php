<!DOCTYPE html>
<html lang="en">
   <head>
        <title>@yield('articleTitle')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/logo.png" />
        <!--meta-->
        @include('layouts.meta')
   </head>
   
   <body id="page-top"> 


    @include('layouts.header_main')
    
    <!-- Article Title-->
    <header class="masthead">
        @yield('articleCover')
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end" data-aos="fade-up">
                    <br><br>
                    <h1 class="display-4 text-uppercase text-white font-weight-bold">@yield('articleTitle')</h1>
                    <h3 class="text-white font-weight-bold">@yield('subTitle')</h1>
                </div>
                <div class="col-lg-8 align-self-baseline" data-aos="fade-up">
                    <p class="text-white font-italic font-weight-light mb-5">@yield('date')</p>
                </div>
            </div>
        </div>
    </header>

    
    <!-- Content-->   
    <div class="container bg-light" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                 @yield('content')

            </div>
        </div>    
    </div>
        
    

    @include('layouts.footer')

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