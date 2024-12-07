<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('head')
    <link rel="stylesheet" href="{{ asset('/assets/app/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/icons/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dist/css/admin/panel.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/OwlCarousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/OwlCarousel/css/owl.theme.default.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">
                <button id="sliderButton" class="btn ms-auto" type="button">
                    <i class="fas fa-bars fa-lg fa-fw"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <div class="navbar-nav gap-2 ms-auto">
                        <a class="nav-link text-them-sec" aria-current="page" href="#">
                            <i class="fas fa-bell fa-lg fa-fw"></i>
                        </a>
                        <a class="nav-link text-them-sec" aria-current="page" href="#">
                            <i class="fas fa-envelope fa-lg fa-fw"></i>
                        </a>
                        <a class="nav-link text-them-sec" aria-current="page" href="#">
                            <i class="fas fa-user fa-lg fa-fw"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="slider shadow" id="sliderExample">
            <div class="slider-head">
                    <img src="https://image.civitai.com/xG1nkqKTMzGDvpLrqFT7WA/39a9ecd2-cfa9-49cd-a1bc-7747a5ca50de/width=700,original=false/00838.jpeg" 
                        alt="admins" 
                        class="slider-profile-image mb-2">
                        <div class="lh-1">
                            <p class="text-them fw-bold mb-0">Admin LongName</p>
                            <small class="text-them-sec">youradmin@gmail.com</small>
                        </div>
            </div>
            <div class="slider-body">
                {{-- {{ dd(Route::currentRouteName()) }} --}}
                <div class="container">
                    <nav class="nav flex-column">
                        <a class="nav-link slider-link @if(Route::currentRouteName() == 'admin.dashboard') active @endif" href="{{ route('admin.dashboard') }}">
                            <i class="fas fa-home slider-icons"></i>Dashboard
                        </a>
                        <a class="nav-link slider-link" href="#">
                            <i class="fas fa-user slider-icons"></i>Profile
                        </a>
                        <a class="nav-link slider-link @if(Route::currentRouteName() == 'admin.transaction') active @endif" href="{{route('admin.transaction')}}">
                            <i class="fas fa-money-bill slider-icons"></i>Transaction
                        </a>
                        <hr class="soft my-1">
                        <a class="nav-link slider-link" href="#">
                            <i class="fas fa-boxes slider-icons"></i>Product
                        </a>
                        <a class="nav-link slider-link" href="#">
                            <i class="fas fa-sign-out slider-icons"></i>LogOut
                        </a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="pages">
            @yield('body')
        </div>
    </div>

    <div class="sliderBackground" id="sliderBackground"><div>
    <script src="{{ asset('/assets/dist/js/jquery.js') }}"></script>
    <script src="{{ asset('/assets/dist/js/popper.js') }}"></script>
    <script src="{{ asset('/assets/app/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/dist/js/admin/panel.js') }}"></script>
    <script src="{{ asset('/assets/OwlCarousel/owl.carousel.min.js') }}"></script>
    @yield('script')
</body>

</html>
