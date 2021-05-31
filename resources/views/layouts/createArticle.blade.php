
<!DOCTYPE html>
<html lang="en">
   <head>
        <title>Publish Article</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/logo.png" />
        <!--meta-->
        @include('layouts.meta')
   </head>
   
   <body id="page-top"> 


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
                                            <a class="nav-link text-dark " href="{{ url('/home') }}">&emsp;{{ __('Admin Home') }}</a>
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

    <!-- Content-->   
    <div class="container bg-light">
        <div class="row d-flex justify-content-center mt-5 mb-5">
            <div class="col-lg-8 col-md-10 mt-5">

            <div class="container">
                <div class="row justify-content-center mx-auto">
                    <div class="col-xl-12 bg-secondary py-3">
                        <div class="card">
                            <div class="card-header d-flex justify-content-center font-weight-bold">{{ __('Publish New Article') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Article Title') }}</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="subtitle" class="col-md-4 col-form-label text-md-right">{{ __('SubTitle') }}</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Enter SubTitle" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tags" class="col-md-4 col-form-label text-md-right">{{ __('Tags') }}</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control" name="tags" id="tags" required>
                                                    <option selected="selected" disabled="disabled" value="">Please Select</option>
                                                    <option value="Local News">Local News</option>
                                                    <option value="International News">International News</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="author" id="author" placeholder="{{ Auth::user()->name }}" value="{{Auth::user()->name}}" readonly>
                                        </div>
                                    </div>

                                    {{--

                                    <div class="form-group row">
                                        <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date Published') }}</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="date" placeholder="Enter Date">
                                        </div>
                                    </div>

                                    --}}

                                    <div class="form-group row">
                                        <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Cover Photo') }}</label>

                                        <div class="col-md-6">
                                            <input type="file"  accept="image/*" name="coverImage" id="coverImage"  onchange="loadFile(event)" required>
                                            <p><img id="output" width="200" class="img-thumbnail" /></p>

                                            <script>
                                                var loadFile = function(event) {
                                                    var image = document.getElementById('output');
                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                            </script>
                                        </div>
                                    </div>

                                    <div class="form-group d-flex justify-content-center">
                                    
                                        <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                                        <div class="col-md-8">
                                            <textarea class="form-control" name="content" id="content" rows="20" required></textarea>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Publish Article') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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

