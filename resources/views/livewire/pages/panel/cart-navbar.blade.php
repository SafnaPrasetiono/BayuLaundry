<div>
    <li class="nav-item dropdown">
        <a class="nav-link position-relative" href="#" role="button" data-bs-toggle="dropdown">
            <i class="fas fa-shopping-cart fa-sm fa-fw"></i>
            @if (session('cart') && count(session('cart')) > 0)
                <span class="position-absolute top-0 start-100 mt-1 translate-middle badge rounded-pill bg-danger">
                    {{ count(session('cart')) }}
                </span>
            @endif
        </a>
        <div class="dropdown-menu start-50 translate-middle-x shadow border-0 p-0" style="width: 360px;">
            <div class="px-3 py-2">
                <i class="fas fa-shopping-cart fa-sm fa-fw"></i>
                <span class="ms-1">Shopping Cart</span>
            </div>
            <hr class="soft m-0">
            <div>
                @if (session('cart'))
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2"
                        style="margin-left: -4px">
                        {{ count(session('cart')) }}
                    </span>
                @else
                    @foreach (session('cart', []) as $item)
                        <div class="d-flex position-relative">
                            <div style="img-shopping-cart"
                                style="background-image: url('/images/product/{{ $cart['image'] }}');"></div>
                            <div class="lh-1">
                                <p class="mb-1 fw-bold">{{ $item->title }}</p>
                                <p class="fw-bold text-danger mb-0">
                                    Rp. {{ number_format($item['price'], 0, ',', '.') }}
                                    <small class="text-secondary">x {{ $item['qty'] }}</small>
                                </p>
                            </div>
                            <button class="btn btn-outline-danger btn-sm position-absolute end-0 m-2">
                                <i class="fas fa-trash-alt fa-xs fa-fw"></i>
                            </button>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </li>
</div>
