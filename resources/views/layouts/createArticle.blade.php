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
        <title>@yield('articleTitle')</title>
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


    @include('layouts.header_main')
    
    <!-- Article Title-->
    <header class="masthead">
        @yield('articleCover')
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="display-4 text-uppercase text-white font-weight-bold">@yield('articleTitle')</h1>
                    <h3 class="text-white font-weight-bold">@yield('subTitle')</h1>
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white font-italic font-weight-light mb-5">@yield('date')</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Content-->   
    <div class="container bg-light">
        <div class="row d-flex justify-content-center">
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
                                            <input type="text" class="form-control" id="title" placeholder="Enter Title">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="subtitle" class="col-md-4 col-form-label text-md-right">{{ __('SubTitle') }}</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="subtitle" placeholder="Enter SubTitle">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tags" class="col-md-4 col-form-label text-md-right">{{ __('Tags') }}</label>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control" id="tags">
                                                    <option>Local News</option>
                                                    <option>International News</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="author" placeholder="Author Name">
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
                                            <input type="file"  accept="image/*" name="coverImage" id="coverImage"  onchange="loadFile(event)" >
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
                                            <textarea class="form-control" id="content" rows="20"></textarea>
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
