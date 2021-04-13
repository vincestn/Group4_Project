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
        <title>QuaraNtimes</title>
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
   
   <body id="page-top"> 
    @include('layouts.header_index')

    <!--Carousel-->
    <div class="container-xxl">
    <div class="carousel slide" data-ride="carousel" style="background-repeat: no-repeat; background-size:cover;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="/img/carou1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="/img/carou2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="/img/carou3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Get Started-->
    <div class="jumbotron jumbotron-fluid text-center " id="get_started">
        <h1 class="display-5">Welcome to Quara<i class="fab fa-neos"></i>times</h1>
        <div class="col-lg-8 col-md-10 mx-auto">
            <p class="lead">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
                Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover
                without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular 
                disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness. We aim to inform
                you about news and happennings regarding with the COVID-19.
            </p>
        </div>
        <hr class="my-4">
        <p>We care for you and protect you by delivering information.</p>
        <a class="btn btn-dark btn-lg" href="{{ url('/main') }}" role="button">Read More</a>
    </div>

    <!-- Services-->
    <section class="page-section" id="services">
            <div class="container"> 
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fas fa-flask text-dark mb-4"></i>
                            <h3 class="h4 mb-2">Research on Cure </h3>
                            <p class="text-muted mb-0">News about the cure to COVID-19 !</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-dark mb-4"></i>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">Latest news and information are present.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-dark mb-4"></i>
                            <h3 class="h4 mb-2">World Wide</h3>
                            <p class="text-muted mb-0">Both International and Local News about COVID-19 is brought to you.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-dark mb-4"></i>
                            <h3 class="h4 mb-2">Because we Care</h3>
                            <p class="text-muted mb-0">This is site is made because we care for you.</p>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--Playstore Dl-->
    <section class="download bg-primary text-center" id="mobile">
    <div style="height: 400px; background-image: url(img/coralbg.jpg); 
	    height: 400px; background-repeat: repeat; background-size:auto;">
    <div class="container d-flex justify-content-center ">
      <div class="row">
      <div style="margin-top: 60px;">
        <div class="col-md-8 mx-auto">
          <h1 class="section-heading">News about COVID-19 anywhere you go?</h2>
          <p>We also cater our service on Android devices! Download now to get started!</p>
          <div class="badges">
            <a class="badge-link" href="https://play.google.com/store?utm_source=apac_med&utm_medium=hasem&utm_
            content=Jan0421&utm_campaign=Evergreen&pcampaignid=MKT-EDR-apac-ph-1003227-med-hasem-py-Evergreen-
            Jan0421-Text_Search_BKWS-BKWS%7cONSEM_kwid_43700057529550448_creativeid_468734232461_device_c&gclid
            =Cj0KCQjw9YWDBhDyARIsADt6sGZxQRy-yQv2xsPe6obaLvYsXZ6y2lO5M70UtzafP2CwW8p4YGm1uSEaAsGGEALw_wcB&gclsrc
            =aw.ds"><img src="img/google-play-badge.svg" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br><br>

    <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">You need to share something?</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Is there a recent COVID-19 related events near you? Or you need some help? Give us 
                        a call or send us an email and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+2 (134) 190-4017</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:contact@yourwebsite.com">quaraNtimes_Help@gmail.com</a><br><br>
                    </div>
                </div>
            </div>
        </section>

    @include('layouts.footer')


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