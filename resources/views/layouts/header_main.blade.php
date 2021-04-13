<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Title here</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-2" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="{{ url('/index') }}" ><i class="fa fa-arrow-left" aria-hidden="true"></i> Overview Page</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/main') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://www.worldometers.info/coronavirus/">Live Update</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/index#mobile') }}">QuaraNtimes Mobile &emsp; </a></li>
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
        </div>
    </nav>
</body>
</html>