<!DOCTYPE html>
<html lang="en">
   <head>
   	  <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
   <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
   </head>
   
   <body> 
        <div class="d-flex" id="wrapper" >

        <!-- Sidebar -->
        <div style="width:300px;">
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
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class="container border-left" id="page-content-wrapper">

            <!-- Navbar Mainpage -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top px-5">
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
            </nav>

            <!-- Live Update -->
            <header class="masthead" id="LiveUpdate">
                @yield('cover')
                    <div class="row h-100 align-items-center justify-content-center text-center">
                        <div class="col-lg-10 align-self-end">
                            <br><br>
                            <h3 class="display-4 text-uppercase text-white font-weight-bold">@yield('coverTitle')</h1>
                            <h3 class="text-danger font-weight-bold">@yield('subTitle')</h1>
                        </div>
                        <div class="col-lg-8 align-self-baseline">
                        <br>
                            <p class="text-white font-italic">Last updated: April 07, 2021, 02:25 GMT. Visit Worldometer to view detailed reports.</p>
                            <a class="btn btn-secondary btn-lg" href="https://www.worldometers.info/coronavirus/" role="button">Visit Now</a>
                        </div>
                    </div>
                </div>
            </header>

                
            <!-- Main Content-->
            <br><br>

            <!-- Local News -->
            <div class="card text-white my-1 py-1 text-center" style="background-image: url(img/news.jpg); 
                height: 130px; background-repeat: no-repeat; background-size:cover;" id="LocalNews">
                <div class="card-body">
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
                <div class="card-body">
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

        </div>
        
        <br>
          <!-- Symptoms -->
          <div class="container-xxl" id="Symptoms">
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
                        @include('layouts.footer')
                </div>  
            </div>

        <!-- /#wrapper -->

         <!-- Bootstrap core JS-->
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
   </body>
</html>