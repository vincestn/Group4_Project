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
                    <a href="{{ url('/create') }}" class="list-group-item list-group-item-action bg-light text-center">Publish Article</a>
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
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'QuaraNtimes') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
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
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
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

<<<<<<< Updated upstream
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
=======
        {{-- dito na apply ang read function --}}
        {{-- $article is from ArticlesController index function, instance of Articles model bali dala dala non yung data from articles table sa db. Bali ginamitan ng foreach para makuha per row ang data then $articles->table column, kada loop magpi print ng div so malalagay lahat ng data sa kanya kanyang div at malalagay lahat ng article from db --}}
        <section id="steps" class="steps section-bg">
            <div class="container">
                <div class="row no-gutters" style="display: flex; flex-direction: column;">
                    
                    @foreach($articles as $index => $article)
                        {{-- Need adjustment --}}
                        <div class="content-item" style="display: flex; justify-content: space-between" data-aos="fade-in">
                            
                            <div class="left-container">
                                <a href="{{ route('articles.show', $article)}}" >
                                    {{-- counter, not working properly :< --}}
                                    <span>{{ $index + 1 }}</span>
                                    <h4>{{ $article->title }}</h4>
                                    <h6>{{ $article->subTitle }}</h6>
                                    <p>Posted by {{ $article->author }}, on {{ $article->created_at }} {{-- unfinished, if updated, show updated_at data from db; else don't show updated by keme --}}</p>
                                    <br>
                                </a>
                            </div>

                            {{-- no need to apply this to user side, pang admin lang to --}}
                            <div class="right-container" style="display: flex; justify-content: space-around; align-items: center">
                                <a href="{{-- route('articles.index', $article->id) --}}" class="btn-edit scrollto m-3" style="width: 160px; text-align: center">Edit Article</a>
    
                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-delete scrollto" style="width: 160px">Delete Article</button>
                                </form>
                            </div>

                        </div>
                    @endforeach
>>>>>>> Stashed changes

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