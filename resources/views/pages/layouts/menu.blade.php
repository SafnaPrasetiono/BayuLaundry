<div>
    @auth('users')
        <div class="d-block py-3 px-2 mb-3">
            <img src="{{ url('/images/avatar/' . auth('users')->user()->avatar) }}" alt="" class="radius-circle"
                style="width: 64px; height: 64px;">
            <div class="lh-1 mt-3">
                <p class="fw-bold mb-0">{{ auth('users')->user()->username }}</p>
                <small>{{ auth('users')->user()->email }}</small>
            </div>
        </div>
        <nav class="nav flex-column" id="navAccordion">
            <a class="nav-link px-0 link-dark" href="{{ route('index') }}">
                <i class="fas fa-home fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Halaman Depan</span>
            </a>
            <a class="nav-link px-0 link-dark" href="#">
                <i class="fas fa-boxes fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Lihat Produk</span>
            </a>
            <hr class="soft">
            <a class="nav-link px-0 link-dark" href="#account" data-bs-toggle="collapse" data-bs-target="#account">
                <i class="fas fa-user fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Account</span>
            </a>
            <div class="accordion-collapse collapse" id="account" data-bs-parent="#navAccordion">
                <a style="padding-left: 2rem" class="nav-link @if (Route::currentRouteName() == 'user.profile') link-primary @else link-dark @endif" href="{{route('user.profile')}}">Profile</a>
                <a style="padding-left: 2rem" class="nav-link @if (Route::currentRouteName() == 'user.address') link-primary @else link-dark @endif" href="{{route('user.address')}}">Address</a>
                <a style="padding-left: 2rem" class="nav-link @if (Route::currentRouteName() == 'admin.dashboard') link-primary @else link-dark @endif" href="#">Payment Card</a>
                <a style="padding-left: 2rem" class="nav-link @if (Route::currentRouteName() == 'admin.dashboard') link-primary @else link-dark @endif" href="#">Ubah Password</a>
                <a style="padding-left: 2rem" class="nav-link @if (Route::currentRouteName() == 'admin.dashboard') link-primary @else link-dark @endif" href="#">Privasi</a>
            </div>
            <a class="nav-link px-0 link-dark" href="#">
                <i class="fas fa-shopping-basket fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Pesanan Saya</span>
            </a>
            <hr class="soft">
            <a class="nav-link px-0 link-dark" href="#">
                <i class="fas fa-envelope fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Pesan</span>
            </a>
            <a class="nav-link px-0 link-dark" href="#">
                <i class="fas fa-heart fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Kesukaan Saya</span>
            </a>
            <a class="nav-link px-0 link-dark" href="#">
                <i class="fas fa-bell fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Notifikasi</span>
            </a>
            <hr class="soft">
            <a class="nav-link px-0 link-dark" href="#">
                <i class="fas fa-cog fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Setting</span>
            </a>
            <a class="nav-link px-0 link-dark LogOut" href="#">
                <i class="fas fa-sign-out-alt fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Logout</span>
            </a>
        </nav>
    @else
        <div class="d-flex gap-2 mb-3">
            <a href="{{ route('signup') }}" class="flex-fill btn btn-outline-success">Daftar</a>
            <a href="{{ route('login') }}" class="flex-fill btn btn-primary">Masuk</a>
        </div>
        <hr class="soft">
        <nav class="nav flex-column" id="navAccordion">
            <a class="nav-link px-0 link-dark" href="{{ route('index') }}">
                <i class="fas fa-home fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Halaman Depan</span>
            </a>
            <a class="nav-link px-0 link-dark" href="#">
                <i class="fas fa-boxes fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Lihat Produk</span>
            </a>
        </nav>
    @endauth
</div>
