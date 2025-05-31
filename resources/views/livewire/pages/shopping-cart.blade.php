<div>
    <div class="container py-5">
        <div class="mb-4">
            <h2 class="">Keranjang</h2>
            <p>Berikut detail pemesanan produk anda</p>
        </div>

        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit
                longer
                so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        </div>


        @if (session('cart'))
            <div>
                <div class="row">
                    <!-- Kiri: Daftar Produk -->
                    <div class="col-lg-8">
                        @foreach (session('cart') as $index => $item)
                            <!-- Item Cart (repeat for each item) -->
                            <div class="card mb-3 shadow-sm">
                                <div class="row g-0 align-items-top">
                                    <div class="col-4 col-md-3 text-center p-2">
                                        <img src="/images/product/{{ $item['image'] }}" class="img-fluid rounded"
                                            alt="Produk">
                                    </div>
                                    <div class="col-8 col-md-9">
                                        <div class="flex flex-column align-items-start py-3 px-2">
                                            <h5 class="card-title mb-1">{{ $item['title'] }}</h5>
                                            @if ($item['discount'] != null && strtotime(date('Y-m-d')) < strtotime($item['dateDiscountEnd']))
                                                <div class="mb-2">
                                                    <span class="text-decoration-line-through">
                                                        Rp. {{ number_format($item['price_other']) }}
                                                    </span>
                                                    <span class="badge rounded-pill text-bg-primary">
                                                        Diskon {{ $item['discount'] }}%
                                                    </span>
                                                </div>
                                            @endif
                                            <div class="d-flex gap-3 align-items-center">
                                                <h5 class="fw-bold">
                                                    Rp. {{ number_format($item['price'], 0, ',', '.') }}
                                                    <small class="text-secondary">x {{ $item['qty'] }}</small>
                                                </h5>
                                            </div>
                                            <div class="d-flex justify-content-end gap-2">
                                                <div class="input-group" style="width: 150px">
                                                    <button class="btn btn-outline-secondary" type="button">
                                                        <i class="fas fa-plus fa-xs fa-fw"></i>
                                                    </button>
                                                    <input type="text" class="form-control text-center"
                                                        value="{{ $item['qty'] }}">
                                                    <button class="btn btn-outline-secondary" type="button">
                                                        <i class="fas fa-minus fa-xs fa-fw"></i>
                                                    </button>
                                                </div>
                                                <button class="btn btn-outline-danger"
                                                    wire:click='removeCart({{ $item['product_id'] }})'>
                                                    <i class="fas fa-trash fa-sm fa-fw"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Item Cart -->
                        @endforeach
                    </div>

                    <!-- Kanan: Ringkasan -->
                    <div class="col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-header">
                                <h5 class="mb-0">Ringkasan Belanja</h5>
                            </div>
                            <div class="card-body">
                                <p class="d-flex justify-content-between">
                                    <span>Total Item</span>
                                    <span>{{ $items }}</span>
                                </p>
                                @if ($discount)
                                    <p class="d-flex justify-content-between">
                                        <span>Harga produk</span>
                                        <span>Rp. {{ number_format($price_other, 0, ',','.') }}</span>
                                    </p>
                                    <p class="d-flex justify-content-between text-danger">
                                        <span>Discount produk</span>
                                        <span>{{ $discount }}%</span>
                                    </p>
                                @endif
                                <hr class="soft">
                                <p class="d-flex justify-content-between fw-bold">
                                    <span>Total Harga</span>
                                    <span>Rp. {{ number_format($total,0 ,',','.') }}</span>
                                </p>
                                <hr>
                                <div class="d-grid">
                                    <a href="{{ route('order.checkout') }}" class="btn btn-success">Order Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="ratio ratio-21x9 border">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <i class="fas fa-shopping-basket fa-5x fa-fw"></i>
                    <p class="fw bold text-secondary fs-5">Belum ada belanjaan!</p>
                </div>
            </div>
        @endif
    </div>
</div>
