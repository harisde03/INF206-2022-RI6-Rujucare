<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Regular CSS Link --}}
    {{-- <link rel="stylesheet" href="{{ URL::asset('assets/styles/font.css') }}"> --}}
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/colors.css') }}">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    {{-- Fonts --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    {{-- Yield for title --}}
    <title>@yield('title') - Rujucare</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-xl">
            <a class="navbar-brand" href="{{ URL('/') }}"><img class="logo" src="{{ URL::asset('assets/images/logo.png') }}" alt="rujucare-logo" style="height: 36px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @yield('navbar')
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-teal me-2" type="submit">Search</button>
                    <a class="btn btn-teal" href="{{ URL('/login') }}" role="button">Login</a>
                </form>
            </div>
        </div>
    </nav>

    {{-- Yield for the actual content and sections --}}
    @yield('content')

    <footer class="mt-auto footer-dark">
        <div class="container-xl">
            <div class="row">
                <div class="col-8 col-sm-6 col-md-8 col-lg-9">
                    <a class="navbar-brand" href="{{ URL('/') }}"><img class="logo" src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="rujucare-logo"></a>
                </div>
                <div class="col-4 col-sm-4 col-md-2 col-lg-2">
                    <h3>Search</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ URL('/find/faskes') }}" class="text-reset text-decoration-none">Fasilitas Kesehatan</a></li>
                        <li><a href="{{ URL('/find/spesialis') }}" class="text-reset text-decoration-none">Dokter Spesialis</a></li>
                    </ul>
                </div>
                <div class="col-2 col-lg-1 text-end">
                    <a class="btn btn-teal" href="{{ URL('/login') }}" role="button">Login</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-8 col-lg-9">
                    <p class="copyright">© Rujucare, Inc. 2022</p>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <ul class="list-inline">
                        <li class="list-inline-item"><p>Follow us:</p></li>
                        <li class="list-inline-item"><a class="list-inline-item me-1 text-reset" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="list-inline-item me-1 text-reset" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="list-inline-item me-1 text-reset" href="#"><i class="fab fa-discord" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="list-inline-item me-1 text-reset" target="_blank" href="https://github.com/harisde03/INF206-2022-RI6-Rujucare"><i class="fab fa-github" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    {{-- Bootstrap JavaScript Link --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
