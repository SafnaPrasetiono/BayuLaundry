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
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <button class="btn ms-auto" id="sliderButton" type="button">
                    <i class="fas fa-bars fa-lg fa-fw"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                        <a class="nav-link" id="slider-btn" aria-current="page" href="#">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="slider shadow" id="sliderExample">
            <div class="slider-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            </div>
            <div class="slider-body">
                <nav class="nav flex-column">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                    <a class="nav-link" href="#">Link</a>
                    <a class="nav-link" href="#">Link</a>
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </nav>
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
    <script src="{{ asset('/assets/OwlCarousel/owl.carousel.min.js') }}"></script>
    @yield('script')
    <script>
        $('#sliderButton').click(function(event) {
            if ($('#sliderExample').hasClass('active')) {
                $('#sliderExample').removeClass('active');
                $('#sliderBackground').removeClass('active');
            } else {
                $('#sliderExample').addClass('active');
                $('#sliderBackground').addClass('active');
            }
        });
        $('#sliderBackground').click(function() {
            $('#sliderExample').removeClass('active');
            $('#sliderBackground').removeClass('active');
        })
    </script>
</body>

</html>
