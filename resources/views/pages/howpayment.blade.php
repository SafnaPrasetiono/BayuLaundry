@extends('pages.layouts.panel')

@section('head')
    <title></title>
@endsection

@section('body')
    <div class="container py-5">
        <h1 class="text-center mb-4">Cara Pemesanan</h1>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">1. Pilih Produk</h5>
                        <p class="card-text">Telusuri katalog kami dan pilih produk yang ingin Anda beli. Klik tombol
                            <strong>"Tambah ke Keranjang"</strong> untuk menyimpannya.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">2. Cek Keranjang</h5>
                        <p class="card-text">Setelah selesai memilih, buka halaman <strong>Keranjang</strong> untuk meninjau
                            dan mengedit produk sebelum checkout.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">3. Isi Data Pengiriman</h5>
                        <p class="card-text">Masukkan alamat lengkap dan informasi pengiriman Anda dengan benar agar pesanan
                            dikirim tepat waktu.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">4. Pilih Metode Pembayaran</h5>
                        <p class="card-text">Kami menyediakan berbagai metode pembayaran, seperti transfer bank, e-wallet,
                            atau COD (bayar di tempat).</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">5. Konfirmasi Pesanan</h5>
                        <p class="card-text">Periksa kembali pesanan Anda. Jika semua sudah benar, klik <strong>"Buat
                                Pesanan"</strong> untuk menyelesaikan transaksi.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">6. Tunggu Pengiriman</h5>
                        <p class="card-text">Setelah pembayaran dikonfirmasi, kami akan memproses pesanan Anda dan
                            mengirimkannya ke alamat yang telah ditentukan.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="produk.html" class="btn btn-primary btn-lg">Mulai Belanja Sekarang</a>
        </div>
    </div>
@endsection

@section('script')
@endsection
