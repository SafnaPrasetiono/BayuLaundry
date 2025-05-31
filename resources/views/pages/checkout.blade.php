@extends('pages.layouts.panel')

@section('head')
    <title></title>
@endsection

@section('body')
    <div class="py-5">
        <div class="container">

            <div class="mb-4">
                <h2 class="">Checkout</h2>
                <p>Berikut detail pemesanan produk anda</p>
            </div>
            <hr class="soft">

            <div class="d-d-block rounded shadow mb-5 pb-3" id="address">
                <div class="d-flex gap-2 align-items-center p-3">
                    <i class="fas fa-map-marker fa-sm fa-fw"></i>
                    <h5 class="fw-bold m-0">Alamat</h5>
                </div>
                <hr class="soft m-0">
                <div class="d-flex flex-column flex-md-row gap-3 gap-md-5 align-items-md-center px-3 py-4">
                    <div class="d-block pe-2 fw-bold">
                        <p class="text-truncate mb-0">Safna Prsetiono</p>
                        <small>0823487288</small>
                    </div>
                    <p class="m-0">
                        Jalan Cempaka Putih Barat No. 2, RT.9/RW.13, Barat (Dekat Seblak gerah), KOTA JAKARTA PUSAT -
                        CEMPAKA PUTIH, DKI JAKARTA, ID 10520
                    </p>
                    <div class="d-flex flex-md-row align-items-center justify-content-end gap-3">
                        <span class="badge text-bg-primary">Utama</span>
                        <a href="#" class="btn btn-outline-success">Edit</a>
                    </div>
                </div>
            </div>

            <div class="d-block rounded shadow mb-5" id="address">
                <div class="d-flex gap-2 align-items-center p-3">
                    <i class="fas fa-box fa-sm fa-fw"></i>
                    <h5 class="fw-bold m-0">Pesanan Produk</h5>
                </div>
                <hr class="soft my-0">
                <div class="table-responsive p-3">
                    <table class="table align-middle table-borderless">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="text-truncate text-end">Harga Satuan</th>
                                <th class="text-truncate text-end">Jumlah</th>
                                <th class="text-truncate text-end">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0; ?>
                            @foreach (session('cart') as $item)
                                <?php $total += $item['price'] * $item['qty']; ?>
                                <tr class="">
                                    <td class="text-truncate w-50">
                                        <div class="d-flex align-items-center gap-2 ">
                                            <img src="/images/product/{{ $item['image'] }}" alt="{{ $item['image'] }}"
                                                class="img-fluid rounded" width="92px">
                                            <p class="text-truncate fs-5 m-0">{{ $item['title'] }}</p>
                                        </div>
                                    </td>
                                    <td class="text-truncate text-end">Rp. {{ number_format($item['price']) }}</td>
                                    <td class="text-truncate text-end">{{ $item['qty'] }}</td>
                                    <td class="text-truncate text-end">
                                        Rp. {{ number_format($item['price'] * $item['qty'], 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4">
                                    <div class="d-flex gap-5 align-items-center justify-content-end">
                                        <small>Total Pesanan ({{ count(session('cart')) }} Produk):</small>
                                        <p class="fs-5 fw-bold mb-0 text-success">Rp. {{ number_format($total, 0, ',','.') }}</p>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <div class="d-block rounded shadow mb-5">
                <div class="d-flex gap-2 align-items-center p-3">
                    <i class="fas fa-money-bill fa-sm fa-fw"></i>
                    <h5 class="fw-bold m-0">Metode Pembayaran</h5>
                </div>
                <hr class="soft my-0">
                <div class="d-block p-3">
                    
                </div>
            </div>

            <div class="d-flex flex-column justify-content-end align-items-end">
                <!-- Kanan: Ringkasan -->
                    <div class="col-12 col-md-5">
                        <div class="card shadow-sm">
                            <div class="card-header">
                                <h5 class="mb-0">Ringkasan</h5>
                            </div>
                            <div class="card-body">
                                <p class="d-flex justify-content-between fw-bold">
                                    <span>Total Harga</span>
                                    <span>Rp. {{ number_format($total,0 ,',','.') }}</span>
                                </p>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-outline-success btn-lg px-5">Buat Pesanan</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>


        </div>
    </div>
@endsection

@section('script')
@endsection
