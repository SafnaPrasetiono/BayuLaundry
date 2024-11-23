@extends('layouts.panel')

@section('head')
    <title></title>
    <style>
        .banner1 {
            background-image: url('/images/banner/banner2.png');
            background-position: top;
            background-size: cover;
        }
    </style>
@endsection

@section('body')
    <div class="py-5 banner1">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6">
                    <h1 class="display-4 fw-bold mb-4">Dapatkan Laundry Sekarang Juga</h1>
                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus perspiciatis molestias
                        assumenda
                        quaerat cum, quo eos, temporibus necessitatibus ipsam.</p>
                    <a href="#" class="btn btn-primary btn-lg px-5">Daftar Sekarang</a>
                </div>
                <div class="col-12 col-md-5">
                    <img src="{{ url('/images/banner/laundrybanner1.png') }}" alt="bannerlaundry" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container pt-2 pb-5">
            <div class="d-block mb-5">
                <h2 class="fw-bold mb-0">Yuk Pilih Paketmu</h2>
                <p class="mb-0">Lorem ipsum sint excepturi architecto
                    voluptatibus praesentium unde voluptas animi.</p>
            </div>
            <div class="row g-4">

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="ratio ratio-4x3"
                            src="https://info.populix.co/articles/wp-content/uploads/2022/03/usaha-laundry.jpg"
                            alt="paket1">
                        <div class="card-body py-4">
                            <div class="card-titles mb-2">
                                <h5 class="mb-0">Paket Cepat Kilat</h5>
                                <p class="mb-0">Laundry pakaian dalam tiga jam siap kirim</p>
                            </div>
                            <div class="card-price mb-3">
                                <div class="mb-2">
                                    <span class="text-decoration-line-through">Rp. 120.000</span>
                                    <span class="badge rounded-pill text-bg-primary">Diskon 60%</span>
                                </div>
                                <div class="d-flex align-items-end">
                                    <span class="fs-4 mb-1">Rp.</span>
                                    <span class="fw-bold fs-1">72.000</span>
                                    <span class="fs-4 mb-1">/Kg</span>
                                </div>
                            </div>
                            <button class="btn btn-outline-primary btn-lg w-100 mb-4">Pilih paket</button>
                            <hr class="soft">
                            <ul style="list-style: none" class="px-2">
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Laundry selesai dalam 3 jam</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Wangi semerebak bunga mawar</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Harga diskon lebih murah</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Bisa menggunakan jasa pengiriman</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Bersih tanpa noda hitam</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Bisa menggunakan layanan antar jemput</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="ratio ratio-4x3"
                            src="https://info.populix.co/articles/wp-content/uploads/2022/03/usaha-laundry.jpg"
                            alt="paket1">
                        <div class="card-body py-4">
                            <div class="card-titles mb-2">
                                <h5 class="mb-0">Paket Santuy Rapih</h5>
                                <p class="mb-0">Laundry pakaian dalam satu hari siap kirim</p>
                            </div>
                            <div class="card-price mb-3">
                                <div class="mb-2">
                                    <span class="text-decoration-line-through">Rp. 45.000</span>
                                    <span class="badge rounded-pill text-bg-primary">Diskon 60%</span>
                                </div>
                                <div class="d-flex align-items-end">
                                    <span class="fs-4 mb-1">Rp.</span>
                                    <span class="fw-bold fs-1">27.000</span>
                                    <span class="fs-4 mb-1">/Kg</span>
                                </div>
                            </div>
                            <button class="btn btn-outline-primary btn-lg w-100 mb-4">Pilih paket</button>
                            <hr class="soft">
                            <ul style="list-style: none" class="px-2">
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Laundry selesai dalam 3 jam</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Wangi semerebak bunga mawar</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Harga diskon lebih murah</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Bisa menggunakan jasa pengiriman</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Bersih tanpa noda hitam</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Bisa menggunakan layanan antar jemput</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="ratio ratio-4x3"
                            src="https://info.populix.co/articles/wp-content/uploads/2022/03/usaha-laundry.jpg"
                            alt="paket1">
                        <div class="card-body py-4">
                            <div class="card-titles mb-2">
                                <h5 class="mb-0">Paket Bersih Wangi</h5>
                                <p class="mb-0">Laundry pakaian dalam dua hari siap kirim</p>
                            </div>
                            <div class="card-price mb-3">
                                <div class="mb-2">
                                    <span class="text-decoration-line-through">Rp. 30.000</span>
                                    <span class="badge rounded-pill text-bg-primary">Diskon 60%</span>
                                </div>
                                <div class="d-flex align-items-end">
                                    <span class="fs-4 mb-1">Rp.</span>
                                    <span class="fw-bold fs-1">18.000</span>
                                    <span class="fs-4 mb-1">/Kg</span>
                                </div>
                            </div>
                            <button class="btn btn-outline-primary btn-lg w-100 mb-4">Pilih paket</button>
                            <hr class="soft">
                            <ul style="list-style: none" class="px-2">
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Laundry selesai dalam 3 jam</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Wangi semerebak bunga mawar</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Harga diskon lebih murah</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Bisa menggunakan jasa pengiriman</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Bersih tanpa noda hitam</span>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-3" aria-hidden="true"></i>
                                    <span class="mb-0">Bisa menggunakan layanan antar jemput</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="py-5" style="background-color: rgb(240, 240, 240)">
        <div class="container">
            <div class="text-center py-3">
                <h1>Buruan Daftar Laundryku</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quod eum reprehenderit, rerum ullam culpa
                    hic ab placeat natus consectetur voluptates excepturi</p>
                <button class="btn btn-outline-primary btn-lg px-5">DAFTAR</button>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row g-4 align-items-center justify-content-center mb-4">
                <div class="col-12 col-lg-6 order-2">
                    <div class="text-center text-lg-start">
                        <h1 class="">Mengapa Harus Laundry di Laundryku</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium libero quos nihil neque illo
                            aliquid magnam similique eligendi non quibusdam, deleniti velit asperiores possimus, voluptatem
                            illum laborum consectetur! Corrupti, atque!</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-lg-2">
                    <img class="ratio ratio-1x1" src="{{ url('/images/content/Laundry3.jpeg') }}" alt="paket1">
                </div>
            </div>
            <div class="row g-4 align-items-center justify-content-center mb-4">
                <div class="col-12 col-lg-6">
                    <img class="ratio ratio-1x1" src="{{ url('/images/content/Laundry4.jpg') }}" alt="paket1">
                </div>
                <div class="col-12 col-lg-6">
                    <div class="text-center text-lg-start">
                        <h1 class="">Kenali dahulu sebelum laundry pakaian</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium libero quos nihil neque illo
                            aliquid magnam similique eligendi non quibusdam, deleniti velit asperiores possimus, voluptatem
                            illum laborum consectetur! Corrupti, atque!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5" style="background-color: rgb(240, 240, 240)">
        <div class="container pb-3">
            <div class="title-partner mb-4">
                <h5 class="fw-bold">Partner Laundryku</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia at dicta enim quasi.</p>
            </div>
            <div class="row g-4">
                @for ($x = 0; $x < 8; $x++)
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="alert alert-secondary mb-0" role="alert">
                            A simple secondary alert—check it out!
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container py-4">
            <div class="title-testimony text-center mb-4">
                <h5 class="fw-bold">User Testimonial</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia at dicta enim quasi.</p>
            </div>
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        @for ($i = 0; $i < 8; $i++)
                            <div class="owl-item">
                                <div class="card">
                                    <div class="d-flex flex-column justify-content-center align-items-center py-3">
                                        <img class="rounded-circle mb-2"
                                            src="https://i.pinimg.com/736x/cb/4d/99/cb4d9904f620667d89ed35924d99909a.jpg"
                                            alt="profile" style="width: 46px; height: 46px">
                                        <p class="fw-bold mb-0">YourName</p>
                                        <div class="d-block">
                                            @for ($x = 0; $x < 5; $x++)
                                                <i class="fas fa-star fa-sm fa-fw text-warning"></i>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="card-body pt-2 pb-4">
                                        <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Facere, officiis in, iusto illo, neque ipsa sed quisquam laborum expedita
                                            fuga delectus et esse autem vero harum ratione suscipit voluptatibus deserunt.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="owl-nav">
                    <div class="owl-prev customPrevBtn">prev</div>
                    <div class="owl-next customNextBtn">next</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var owl = $('.owl-carousel');
        
        owl.owlCarousel({
            items: 1,
            loop: false,
            margin: 24,
            dots: false,
            autowidth: true,
            responsive: {
                480: {
                    items: 2
                },
                // 678: {
                //     items: 2,
                // },
                768: {
                    items: 2,
                },
                992: {
                    items: 4,
                },

            }
        })

        $('.customNextBtn').click(function() {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.customPrevBtn').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [300]);
        })
    </script>
@endsection
