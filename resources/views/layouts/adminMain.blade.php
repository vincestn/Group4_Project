<!DOCTYPE html>
<html lang="en">
   <head>
        <title>Admin Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/logo.png" />
        <!--meta-->
        @include('layouts.meta')
   </head>
   
   <body>
       {{$i=0}} 
        <!-- Navbar Admin -->
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
                            <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="nav-link text-dark " href="{{ url('/index') }}">&emsp;{{ __('Overview Page') }}</a>
                                            <a class="nav-link text-dark " href="{{ url('/main') }}">&emsp;{{ __('Main Page') }}</a>
                                            <a class="nav-link text-danger" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">&emsp;
                                                {{ __('LOGOUT') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- End of Navbar Admin-->

            <!-- Add Articles -->
            <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
                
                <div class="col-lg-8 col-md-10 mx-auto text-center" data-aos="fade-up">
                    <h3 class="display-4 text-uppercase text-white font-weight-bold">Publish Articles</h1>
                    <h2><br>
                    <p class="lead">Publish new articles anything related to the Covid-19 Pandemic.</p>
                    <hr class="my-4 ">
                    <a href="{{ route('articles.create') }}" class="btn-get-started scrollto">Create Article</a>
                </div>
            </section>

            <!-- List of Articles -->
            <div class="card text-white py-1 text-center" style="background-image: url(img/news.jpg); 
                height: 130px; background-repeat: no-repeat; background-size:cover;" id="LocalNews">
                <div class="card-body" data-aos="fade-up">
                    <h1 class="section-heading">List Of Articles</h2>
                    <p class="text-white m-0">Update or delete certain articles</p>
                </div>
            </div>

        <section id="steps" class="steps section-bg">
            <div class="container">
                <div class="row no-gutters" style="display: flex; flex-direction: column;">
                    @if (count($articles) > 0)
                        @foreach($articles as $index => $article)
                            <div class="content-item" style="display: flex; justify-content: space-between" data-aos="fade-in">
                                
                                <div class="left-container">
                                    <a href="{{ route('articles.show', $article) }}" >
                                        <span>{{ $index + 1 }}</span>
                                        <h4>{{ $article->title }}</h4>
                                        <h6>{{ $article->subTitle }}</h6>
                                        <p>Posted by {{ $article->author }}, on {{ $article->created_at }} 
                                            @isset($article->updated_at)
                                                ; Updated on {{ $article->updated_at }}
                                            @endisset
                                        </p>
                                        <br>
                                    </a>
                                </div>

                                <div class="right-container" style="display: flex; justify-content: space-around; align-items: center">
                                    
                                    <a href="{{ route('articles.edit', $article) }}" class="btn-edit scrollto m-3" style="width: 160px; text-align: center">Edit Article</a>
                                    
                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-delete scrollto" style="width: 160px">Delete Article</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach

                    @else

                        <h5 style="display: flex; justify-content: space-around; align-items: center">No articles submitted yet, scroll up and click the button to create a new article!</h5>
                    
                    @endif

                </div>
            </div>
        </section>


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