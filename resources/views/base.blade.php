<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Regular CSS Link --}}
    {{-- <link rel="stylesheet" href="{{ URL::asset('assets/styles/font.css') }}"> --}}
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/custom.css') }}">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    {{-- Fonts --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    {{-- Yield for title --}}
    <title>@yield('title') - Rujucare</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-xl">
            <a class="navbar-brand" href="{{ URL('/') }}"><img class="logo"
                    src="{{ URL::asset('assets/images/logo.png') }}" alt="rujucare-logo" style="height: 36px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @yield('navbar')
                </ul>
                <form class="d-flex">
                    {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> --}}
                    {{-- <button class="btn btn-outline-teal me-2" type="submit">Search</button> --}}
                    <div class="dropdown">
                        <button class="btn btn-outline-teal me-2 dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Search
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ URL('/find/faskes') }}">by Faskes</a></li>
                            <li><a class="dropdown-item" href="{{ URL('/find/spesialis') }}">by Spesialis</a></li>
                        </ul>
                    </div>

                    @auth
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link text-nowrap p-0" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{-- <img class="rounded-circle" src="{{ URL::asset(auth()->user()->kredensial->faskesPicture) }}"
                                        alt="{{ auth()->user()->kredensial->namaPublik }}"
                                        style="height: 38px; max-width: 38px; object-fit: cover;"> --}}
                                    @if (auth()->user()->kredensial->faskesPicture != null)
                                        <img class="border rounded-circle"
                                            src="{{ URL::asset('storage/' . auth()->user()->kredensial->faskesPicture) }}"
                                            alt="{{ auth()->user()->kredensial->namaPublik }}"
                                            style="height: 38px; max-width: 38px; object-fit: cover;">
                                    @else
                                        <div class="border text-teal rounded-circle d-flex justify-content-center align-items-center"
                                            style="height: 38px; width: 38px;">
                                            <i class="fas fa-hospital-alt" style="font-size: 18px;"></i><br>
                                        </div>
                                    @endif

                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/admin/informasi-ketersediaan"><i
                                                class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            <i class="bi bi-box-arrow-right"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @else
                        <a class="btn btn-teal" href="{{ route('login') }}" role="button">Login</a>
                    @endauth

                </form>
            </div>
        </div>
    </nav>

    {{-- Yield for the actual content and sections --}}
    <div id="content">
        @yield('content')
    </div>

    <footer class="mt-auto footer-dark">
        <div class="container-xl">
            <div class="row">
                <div class="col-8 col-sm-6 col-md-8 col-lg-9">
                    <a class="navbar-brand" href="{{ URL('/') }}"><img class="logo"
                            src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="rujucare-logo"></a>
                </div>
                <div class="col-4 col-sm-4 col-md-2 col-lg-2">
                    <h3>Search</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ URL('/find/faskes') }}" class="text-reset text-decoration-none">Fasilitas
                                Kesehatan</a></li>
                        <li><a href="{{ URL('/find/spesialis') }}" class="text-reset text-decoration-none">Dokter
                                Spesialis</a></li>
                    </ul>
                </div>
                <div class="col-2 col-lg-1 text-end">
                    @auth
                        <a href="/admin/informasi-ketersediaan"><img class="rounded-circle"
                                src="{{ URL::asset('storage/' . auth()->user()->kredensial->faskesPicture) }}"
                                alt="{{ auth()->user()->kredensial->namaPublik }}"
                                style="height: 32px; max-width: 32px;"></a>
                    @else
                        <a class="btn btn-teal" href="{{ URL('/login') }}" role="button">Login</a>
                    @endauth
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-8 col-lg-9">
                    <p class="copyright">?? Rujucare, Inc. 2022</p>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <p>Follow us:</p>
                        </li>
                        <li class="list-inline-item"><a class="list-inline-item me-1 text-reset" href="#"><i
                                    class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="list-inline-item me-1 text-reset" href="#"><i
                                    class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="list-inline-item me-1 text-reset" href="#"><i
                                    class="fab fa-discord" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a class="list-inline-item me-1 text-reset" target="_blank"
                                href="https://github.com/harisde03/INF206-2022-RI6-Rujucare"><i class="fab fa-github"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    {{-- Bootstrap JavaScript Link --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
