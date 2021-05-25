<!DOCTYPE html>
<html lang="en">
   <head>
    
    <title>QuaraNtimes</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/logo.png" />
    <!--meta-->
    @include('layouts.meta')
   </head>
   
   <body> 
    @include('layouts.header_index')

    <!--Carousel-->
    <div class="container-xxl" data-aos="fade-up" id="page-top">
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
    <!--End of Carousel-->


    <!-- Get Started-->
    <section id="getstarted" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <div class="col-lg-8 col-md-10 mx-auto text-center">
                <h1 class="display-5">Welcome to Quara<i class="fab fa-neos"></i>times</h1>
                <h2><br>
                <p class="lead">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
                            Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover
                            without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular 
                            disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness. We aim to inform
                            you about news and happennings regarding with the COVID-19.
                </p>
                <hr class="my-4 ">
                <p class="lead">We care for you and protect you by delivering information.</p>
                <a href="{{ url('/main') }}" class="btn-get-started scrollto">Read More</a>
            </div>
        </div>
    </section>
    <!-- End GetStarted -->

    <!-- Services -->
    <section id="services" class="portfolio section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>At Your Service</h2>
          <p>We aim to serve you with our utmost capabilities.</p>
        </div>


        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>RESEARCH ON CURE</h4>
                <h4>News about the cure to COVID-19 !</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>UP TO DATE</h4>
                <h4>Latest news and information are present.</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
            <img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>WORLDWIDE</h4>
                <h4>Both International and Local News about COVID-19 is brought to you.</h4>
              </div>
            </div>
          </div>

        </div>
        <br><br>
    </section><!-- End Services Section -->


    <!-- Mobile-->
    <section id="mobile" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <div class="col-lg-8 col-md-10 mx-auto text-center">
            <!-- <section class="download text-center" id="mobile"> -->
              <div style="height: 400px; background-image: url(img/coralbg.jpg); 
                height: 400px; background-repeat: repeat; background-size:auto;">
              <div class="container d-flex justify-content-center ">
                <div class="row">
                <div style="margin-top: 60px;">
                  <div class="col-md-8 mx-auto">
                    <h1 class="section-heading">News about COVID-19 anywhere you go?</h2>
                    <p class="lead">We also cater our service on Android devices! Download now to get started!</p>
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
            <!-- </section> -->
            </div>
        </div>
    </section>
    <!--End of Mobile -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
            <h2>Contact Us</h2>
            <p>Is there a recent COVID-19 related events near you? Or you need some help? Give us 
                        a call or send us an email and we will get back to you as soon as possible!</p>
            </div>

            <div class="row no-gutters justify-content-center" data-aos="fade-up">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                <div class="address">
                    <i class="icofont-google-map"></i>
                    <h4>Location:</h4>
                    <p>12-B Alcalde Jose, Pasig, 1600 Metro Manila</p>
                </div>

                <div class="email mt-4">
                    <i class="icofont-envelope"></i>
                    <h4>Email:</h4>
                    <p>quaraNtimes_Help@gmail.com</p>
                </div>

                <div class="phone mt-4">
                    <i class="icofont-phone"></i>
                    <h4>Call:</h4>
                    <p>+2 (134) 190-4017</p>
                </div>

                </div>

            </div>

            <div class="col-lg-5 d-flex align-items-stretch">
                <iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=12-B Alcalde Jose, Pasig, 1600 Metro Manila&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>

            </div>

            <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                    <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

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