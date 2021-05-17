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

    <!-- HEADER FILE -->
    <header id="header" class="fixed-top py-2">
        <div class="container d-flex">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="{{ url('/index') }}">QuaraNtimes</a></h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
            <li><a href="{{ url('/main') }}">Home</a></li>
            <li><a href="https://www.worldometers.info/coronavirus/">Live Update</a></li>
            <li><a href="{{ url('/index#mobile') }}">QuaraNtimes Mobile</a></li>
            </ul>
        </nav>

        </div>
    </header><!-- End Header -->
</body>
</html>