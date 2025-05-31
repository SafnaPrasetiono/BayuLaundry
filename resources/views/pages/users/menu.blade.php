<div class="d-block rounded overflow-hidden shadow">

    <div class="d-flex flex-column justify-content-end" style="height: 220px">
        <div class="d-block py-3 px-4 mb-3">
            <img src="{{ url('/images/avatar/' . auth('users')->user()->avatar) }}" alt="" class="tmp-image"
                style="width: 64px; height: 64px;">
            <div class="lh-1 mt-3">
                <p class="fw-bold mb-0">{{ auth('users')->user()->username }}</p>
                <small>{{ auth('users')->user()->email }}</small>
            </div>
        </div>
    </div>
    <div class="d-block pb-3">
        <nav class="nav flex-column" id="navAccordion">
            <a class="nav-link link-dark" href="#account" data-bs-toggle="collapse" data-bs-target="#account">
                <i class="fas fa-user fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Account</span>
            </a>
            <div class="accordion-collapse collapse" id="account" data-bs-parent="#navAccordion">
                <a class="nav-link ps-5 @if (Route::currentRouteName() == 'user.profile') link-primary @else link-dark @endif" href="{{route('user.profile')}}">Profile</a>
                <a class="nav-link ps-5 @if (Route::currentRouteName() == 'user.address') link-primary @else link-dark @endif" href="{{route('user.address')}}">Address</a>
                <a class="nav-link ps-5 @if (Route::currentRouteName() == 'admin.dashboard') link-primary @else link-dark @endif" href="#">Payment Card</a>
                <a class="nav-link ps-5 @if (Route::currentRouteName() == 'admin.dashboard') link-primary @else link-dark @endif" href="#">Ubah Password</a>
                <a class="nav-link ps-5 @if (Route::currentRouteName() == 'admin.dashboard') link-primary @else link-dark @endif" href="#">Privasi</a>
            </div>
            <a class="nav-link link-dark" href="#">
                <i class="fas fa-shopping-basket fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Pesanan Saya</span>
            </a>
            <hr class="soft mx-3 my-1">
            <a class="nav-link link-dark" href="#">
                <i class="fas fa-envelope fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Pesan</span>
            </a>
            <a class="nav-link link-dark" href="#">
                <i class="fas fa-heart fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Kesukaan Saya</span>
            </a>
            <a class="nav-link link-dark" href="#">
                <i class="fas fa-bell fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Notifikasi</span>
            </a>
            <hr class="soft mx-3 my-1">
            <a class="nav-link link-dark" href="#">
                <i class="fas fa-cog fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Setting</span>
            </a>
            <a class="nav-link link-dark LogOut" href="#logout">
                <i class="fas fa-sign-out-alt fa-sm fa-fw" style="width: 28px"></i>
                <span class="fw-bold">Logout</span>
            </a>
        </nav>
    </div>

</div>
