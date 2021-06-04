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
                    <h3 class="display-4 text-uppercase text-white font-weight-bold">COVID-19 WORLD COUNT</h1>
                    <h3 class="text-danger font-weight-bold">133,018,307</h1>
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
            
            @if (count($articles->where('tags', '=', 'Local News')) > 0)
                
                @foreach($articles->where('tags', '=', 'Local News') as $index => $article)
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">
                            <div class="post-preview">
                                <a href="{{ route('articles.show', $article) }}">
                                    <h2 style="font-size: 45px; margin-top: 30px; margin-bottom: 10px;"> {{$article->title}} </h2>
                                </a>
                                <h4 style=" margin-top: 10px;"> {{$article->subTitle}} </h3>
                                <p style="font-style: italic;">
                                    Posted by {{$article->author}} on {{$article->created_at}}
                                    @isset($article->updated_at)
                                        ; Updated on {{ $article->updated_at }}
                                    @endisset
                                </p>
                            </div>
                            <hr />   
                        </div>
                    </div>
                @endforeach

            @else
                <h5 style="display: flex; justify-content: space-around; align-items: center">Ang aming manunulat tila ay tinatamad :/</h5>       
            @endif
                    
            <hr />

            <!-- International News -->
            <div class="card text-white my-1 py-1 text-center" style="background-image: url(img/news.jpg); 
                height: 130px; background-repeat: no-repeat; background-size:cover;" id="InterNews">
                <div class="card-body" data-aos="fade-up">
                    <h1 class="section-heading">International News</h2>
                    <p class="text-white m-0">News to inform you what happens around the globe.</p>
                </div>
            </div>

            @if (count($articles->where('tags', '=', 'International News')) > 0)
                
                @foreach($articles->where('tags', '=', 'International News') as $index => $article)
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">
                            <div class="post-preview">
                                <a href="{{ route('articles.show', $article) }}">
                                    <h2 style="font-size: 45px; margin-top: 30px; margin-bottom: 10px;"> {{$article->title}} </h2>
                                </a>
                                <h4 style=" margin-top: 10px;"> {{$article->subTitle}} </h3>
                                <p style="font-style: italic;">
                                    Posted by {{$article->author}} on {{$article->created_at}}
                                    @isset($article->updated_at)
                                        ; Updated on {{ $article->updated_at }}
                                    @endisset
                                </p>
                            </div>
                            <hr />   
                        </div>
                    </div>
                @endforeach

            @else
                <h5 style="display: flex; justify-content: space-around; align-items: center">Our writers seems to be feeling lazy :/</h5>       
            @endif

            <hr /> 

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