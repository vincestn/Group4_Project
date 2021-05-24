<!DOCTYPE html>
<html lang="en">
   <head>
        <title>Main</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/logo.png" />
        <!--meta-->
        @include('layouts.meta')
   </head>
   
   <body> 
        <!-- <div class="d-flex" id="wrapper" > -->

        <!-- Sidebar -->
        <!-- <div style="width:300px;">
            <div class="bg-light border-right" id="sidebar-wrapper">
                <br>
                <div class="sidebar-heading text-center">QuaraNtimes</div>
                <div class="list-group list-group-flush mt-2">
                    <a href="https://www.worldometers.info/coronavirus/" class="list-group-item list-group-item-action bg-light text-center">Live Update</a>
                    <a href="#LocalNews" class="list-group-item list-group-item-action bg-light text-center">Local News</a>
                    <a href="#InterNews" class="list-group-item list-group-item-action bg-light text-center">International News</a>
                    <a href="#Symptoms" class="list-group-item list-group-item-action bg-light text-center">COVID-19 Symptoms</a>
                    <a href="{{ url('/index#mobile ') }}" class="list-group-item list-group-item-action bg-light text-center">QuaraNtimes Mobile</a>
                    <a href="{{ url('/index') }}" class="list-group-item list-group-item-action bg-light text-center">Overview Page</a>
                </div>
            </div>
        </div> -->
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <!-- <div class="container border-left" id="page-content-wrapper"> -->

            <!-- Navbar Mainpage -->
            <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top px-5">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">&emsp;@yield('websiteName')</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <form class="form-inline">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                                        <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><a href=""><i class="fas fa-search"></i></a></span></div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
            </nav> -->
            <!--Header-->
            <header id="header" class="fixed-top py-2">
                <div class="container d-flex">

                <div class="logo mr-auto">
                    <h1 class="text-light"><a href="#page-top">QuaraNtimes</a></h1>
                </div>

                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                        <li><a href="#hero">Live Update</a></li>
                        <li><a href="#LocalNews">Local News</a></li>
                        <li><a href="#InterNews">International News</a></li>
                        <li><a href="#Symptoms">Covid-19 Symptoms</a></li>
                        <li class="active"><a href="{{ url('/index') }}">Overview Page</a></li>                       
                        </ul>
                    </nav><!-- .nav-menu -->

                </div>
            </header>
            <!-- End Header -->

            <!-- Live Update -->
            <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
                <div class="col-lg-8 col-md-10 mx-auto text-center" data-aos="fade-up">
                    <h3 class="display-4 text-uppercase text-white font-weight-bold">@yield('coverTitle')</h1>
                    <h3 class="text-danger font-weight-bold">@yield('subTitle')</h1>
                    <h2><br>
                    <p class="lead">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
                                Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover
                                without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular 
                                disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness. We aim to inform
                                you about news and happennings regarding with the COVID-19.
                    </p>
                    <hr class="my-4 ">
                    <p class="lead">Last updated: April 07, 2021, 02:25 GMT. Visit Worldometer to view detailed reports.</p>
                    <a href="https://www.worldometers.info/coronavirus/" class="btn-get-started scrollto">Visit Now</a>
                </div>
            </section>
            <!--Live Update -->

                
            <!-- Main Content-->
            <!-- Local News -->
            <div class="card text-white  py-1 text-center" style="background-image: url(img/news.jpg); 
                height: 130px; background-repeat: no-repeat; background-size:cover;" id="LocalNews">
                <div class="card-body" data-aos="fade-up">
                    <h1 class="section-heading">Local News</h2>
                    <p class="text-white m-0">Daily news from the Philippines to notify the citizens.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-preview">
                        @yield('postL1')
                    </div>
                    <hr />   
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-preview">
                        @yield('postL2')
                    </div>
                    <hr />   
                </div>
            </div>
                    
            <hr />

            <!-- International News -->
            <div class="card text-white my-1 py-1 text-center" style="background-image: url(img/news.jpg); 
                height: 130px; background-repeat: no-repeat; background-size:cover;" id="InterNews">
                <div class="card-body" data-aos="fade-up">
                    <h1 class="section-heading">International News</h2>
                    <p class="text-white m-0">News to inform you what happens around the globe.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-preview">
                        @yield('postI1')
                    </div>
                    <hr />   
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-preview">
                        @yield('postI2')
                    </div>
                    <hr />   
                </div>
            </div>

            </div>
            <hr /> 
            <!-- /#page-content-wrapper -->

        <!-- </div> -->
        
          <!-- Symptoms -->
          <!-- <div class="container-xxl" id="S">
                <div class="card text-white my-1 py-1 text-center" style="background-image: url(img/symp.jpg); 
                    height: 325px; background-repeat: no-repeat; background-size:cover;" id="Symptoms">
                    <div class="card-body">
                        <br>
                        <h1 class="section-heading text-white">COVID-19 Symptoms</h2>
                        <p class="text-white m-0">Be aware, you might have it without knowing.</p>
                        <p class="text-white m-0">Article by Feca, John Neil G.</p>
                        <br><br>
                        <a class="btn btn-secondary btn-lg" href="{{ url('/postSymp') }}" role="button">Learn More</a>
                    </div>
                </div>  
            </div> -->

        <!-- Symptoms -->
            <section id="Symptoms" class="d-flex flex-column justify-content-center align-items-center">
                <div class="col-lg-8 col-md-10 mx-auto text-center" data-aos="fade-up">
                    <h3 class="display-4 text-uppercase text-white font-weight-bold">COVID-19 Symptoms</h1>
                    <h2><br>
                    <p class="lead">Article by Feca, John Neil G.</p>
                    <hr class="my-4 ">
                    <p class="lead">COVID-19 affects different people in different ways. Most infected people 
                        will develop mild to moderate illness and recover without hospitalization. Seek immediate
                         medical attention if you have serious symptoms. Always call before visiting your doctor or health facility.
                        People with mild symptoms who are otherwise healthy should manage their symptoms at home.</p>   
                    <a href="{{ url('/postSymp') }}" class="btn-get-started scrollto">Learn More</a>
                </div>
            </section>
        <!--Symptoms -->        

            @include('layouts.footer')

        <!-- /#wrapper -->

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