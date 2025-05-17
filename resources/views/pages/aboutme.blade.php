@extends('pages.layouts.panel')

@section('head')
    <title>laundryku - About Me Pages</title>
@endsection

@section('body')
    <div class="py-5 mb-3">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-8 col-md-6">
                    <img src="{{ url('/images/banner/about-kopitu.png') }}" alt="icon" class="img-fluid">
                </div>
                <div class="col-12 col-md-6">
                    <h1 class="fw-bold text-capitalize">kopitu e-store</h1>
                    <hr class="soft mb-4" style="width: 30%">
                    <p class="mb-4 lh-lg">KOPITU E-Store merupakan platform E-Store asli Indonesia yang berfungsi sebagai
                        wadah penetrasi pasar digital baik lokal maupun global bagi pelaku UKM. KOPITU E-Store dirancang
                        ground up untuk menjadi "One Stop Service" atau “Layanan Terpadu Satu Pintu” Indonesia untuk
                        perdagangan melalui platform digital, memberdayakan pelaku UKM Indonesia dalam ekspor, serta
                        mengatasi kendala ekspor yang banyak dialami oleh UKM. </p>

                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row g-4">

                <div class="col-12">
                    <h2 class="fw-bold">Apa yang Kami Sediakan?</h2>
                    <hr class="soft mb-4" style="width: 20%">
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100">
                        <div class="text-center py-4">
                            <img src="{{ url('/images/icons/aboutme/icon-5.svg') }}" alt="icon" width="100px">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-title fw-bold fs-4 mb-3">Kurasi produk</p>
                            <p class="card-text mb-4">Produk yang disediakan kopitu e-store merupakan produk pilihan terbaik
                                dari para UMKM.</p>
                            <a href="#" class="text-decoration-none stretched-link link-orange">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100">
                        <div class="text-center py-4 mb-3">
                            <img src="{{ url('/images/icons/aboutme/icon-1.svg') }}" alt="icon" width="100px">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-title fw-bold fs-4 mb-3">Captive Market</p>
                            <p class="card-text mb-4">Mitra kami menyedikan tempat untuk bekerja sama membangaun pertumbuhan
                                ekonomi UMKM.</p>
                            <a href="#" class="text-decoration-none stretched-link link-orange">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100">
                        <div class="text-center py-4">
                            <img src="{{ url('/images/icons/aboutme/icon-2.svg') }}" alt="icon" width="100px">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-title fw-bold fs-4 mb-3">Enabler KOPITU</p>
                            <p class="card-text mb-4">Kami menyedikan pendampingan dan perizinan terkait menjual produk
                                bersama kopitu e-store.</p>
                            <a href="#" class="text-decoration-none stretched-link link-orange">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100">
                        <div class="text-center py-4">
                            <img src="{{ url('/images/icons/aboutme/icon-4.svg') }}" alt="icon" width="100px">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-title fw-bold fs-4 mb-3">Fulfillment Center</p>
                            <p class="card-text mb-4">
                                Mitra kami menyedikan layanan fulfillment servie untuk para enambler UMKM.
                            </p>
                            <a href="#" class="text-decoration-none stretched-link link-orange">Detail</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="d-block">
                <h2 class="fw-bold">Mengapa Kami</h2>
                <hr class="soft mb-4" style="width: 10%">
            </div>
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <h2 class="fw-bold mb-4">Ayo bergabung dengan <br> <span class="text-orange">Kopitu E-Store</span></h2>
                    <p class="mb-4 lh-lg">Kami menawarkan layanan terpadu melalui satu portal dengan kemampuan mengatasi
                        permasalahan dari hulu hingga ke hilir. Kami juga menjamin kualitas produk terkurasi agar tetap
                        berdaya saing unggul dengan harga yang kompetitif..</p>
                </div>
                <div class="col-9 col-md-8 col-lg-6 order-1 order-lg-2">
                    <img src="{{ url('/images/banner/why-we.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="text-dark">Lokasi Kopitu E-Store</h2>
                        <p>Berikut ini merupakan peta atau alamat mitra kopitu e-store</p>
                    </div>
                </div>
                <div class="col-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.671835339725!2d106.78788781404357!3d-6.1746703622244326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7cd39f3e573%3A0x807e2b3710a7a671!2sKopitu%20office!5e0!3m2!1sid!2sid!4v1646196482266!5m2!1sid!2sid"
                        class="d-block w-100 rounded border-0 shadow" height="420" style="border:0;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <div class="container">
            <hr class="soft">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h3>Alamat Kami</h3>
                    <p>
                        Jl. Merdeka No. 123<br>
                        Jakarta Pusat, DKI Jakarta 10110<br>
                        Indonesia
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>Kontak</h3>
                    <p>
                        WhatsApp: <a href="https://wa.me/6281234567890">+62 812-3456-7890</a><br>
                        Email: <a href="mailto:info@namatoko.com">info@namatoko.com</a><br>
                        Instagram: <a href="https://instagram.com/namatoko" target="_blank">@namatoko</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
