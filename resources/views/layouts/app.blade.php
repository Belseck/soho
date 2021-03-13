<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="app">
        <header>
            <nav class="main-menu">
                <a href="{{ route('home') }}" class="nav-icon"><img
                        src="{{ asset('/images/logo-soho.png') }}" /></a>
                <nav-menu active="inicio" />
            </nav>

        </header>
        <main class="container-fluid">
            @yield('content')
            <footer>
                <div class="img text-center">
                    <img src="{{ asset('/images/img6.png') }}" alt="">
                </div>
                <div class="w-row w-sm-1 w-md-3 bg-black padding-bottom-2 padding-x-1 padding-top-3">
                    <p class="column text-white"><b>&copy; 2017</b> SOHO internet + humana</p>
                    <ul class="column contact text-center">
                        <li><a href="#" class="link-contact">Vis&iacute;tanos</a></li>
                        <li><a href="#" class="link-contact">Escr&iacute;benos</a></li>
                        <li><a href="#" class="link-contact">Ll&aacute;manos</a></li>
                    </ul>
                    <ul class="column networks text-right">
                        <li><a href="#" class="link-facebook">Facebook</a></li>
                        <li><a href="#" class="link-twitter">Twitter</a></li>
                        <li><a href="#" class="link-linkedin">Linkedin</a></li>
                        <li><a href="#" class="link-youtube">Youtube</a></li>
                    </ul>
                </div>
            </footer>
        </main>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>
