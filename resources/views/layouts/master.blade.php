<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendataan Barang</title>
    <link rel="stylesheet" href="{{ asset('/css/materialize.min.css') }}">
</head>
<body>
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Logo</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                        <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
        </div>
      </nav>
    @yield('content')
    
    <script src="{{ asset('/js/materialize.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
</body>
</html>