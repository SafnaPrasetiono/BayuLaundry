<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('head')
    <link rel="stylesheet" href="{{ asset('/assets/app/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/icons/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dist/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/OwlCarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/OwlCarousel/css/owl.theme.default.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Laundryku</a>
            <button class="btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#slider">
                <i class="fas fa-bars fa-lg fa-fw"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Me</a>
                    </li>
                    <div class="d-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signup') }}">Daftar</a>
                        </li>
                    </div>
                </ul>
                <form class="d-none d-lg-flex gap-2 ms-2" role="search">
                    <a href="{{ route('login') }}" class="btn btn-outline-secondary py-1"
                        style="width: 120px">Masuk</a>
                    <a href="{{ route('signup') }}" class="btn btn-outline-warning py-1"
                        style="width: 120px">Daftar</a>
                </form>
            </div>
        </div>
    </nav>
    <main>
        @yield('body')
    </main>

    <footer class="bg-primary text-light">
        <div class="pt-5 pb-4">
            <div class="container">
                <div class="row g-4 mb-5">
                    <div class="col-12 col-md-7">
                        <div class="me-0 me-md-5">
                            <h4 class="fw-bold">About Me</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti beatae aperiam, modi
                                architecto corporis amet adipisci assumenda, libero vero dicta nam, placeat eligendi
                                cumque? Officiis, excepturi. Deserunt, nemo laborum. Nostrum!</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <p class="fw-bold">About Link</p>
                                <ul class="nav flex-column">
                                    <a class="nav-link link-secondary px-0 link-light" href="#">Link</a>
                                    <a class="nav-link link-secondary px-0 link-light" href="#">Link</a>
                                    <a class="nav-link link-secondary px-0 link-light" href="#">Link</a>
                                    <a class="nav-link link-secondary px-0 link-light" href="#">Link</a>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6">
                                <p class="fw-bold">About Link</p>
                                <ul class="nav flex-column">
                                    <a class="nav-link link-secondary px-0 link-light" href="#">Link</a>
                                    <a class="nav-link link-secondary px-0 link-light" href="#">Link</a>
                                    <a class="nav-link link-secondary px-0 link-light" href="#">Link</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-block">
                    <hr class="soft">
                    <div
                        class="d-flex flex-column-reverse flex-md-row justify-content-center justify-content-md-between align-items-center">
                        <span class="mb-0 py-2 text-center text-light">Copyrights ©2024 Eduport.
                            Build by Safna Prasetiono</span>
                        <ul class="nav">
                            <a class="nav-link link-light" href="#">Link</a>
                            <a class="nav-link link-light" href="#">Link</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="slider" style="width: 22rem">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            
        </div>
    </div>

    <script src="{{ asset('/assets/dist/js/jquery.js') }}"></script>
    <script src="{{ asset('/assets/dist/js/popper.js') }}"></script>
    <script src="{{ asset('/assets/app/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/OwlCarousel/owl.carousel.min.js') }}"></script>
    @yield('script')
</body>

</html>
