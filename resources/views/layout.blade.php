<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <title>@yield('title') | muffin ♡</title>



</head>

<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #fba2d3;">
        <div class="container justify-content-center">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item ms-5">
                    <a class="nav-link text-light" aria-current="page" href="#">My gellery</a>
                </li>
                <li class="nav-item ms-5">
                    <a class="nav-link text-light" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item ms-5">
                    <a class="nav-link text-light" aria-current="page" href="#">Something1</a>
                </li>
                <li class="nav-item ms-5">
                    <a class="nav-link text-light" aria-current="page" href="#">Something2</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
