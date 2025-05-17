<div>
    <div class="d-flex mb-3">
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Choise
            Product</button>
        <input type="text" wire:model='selectedProduct[]' name="product_id[]" class="d-none">
    </div>

    <div class="d-block rounded">
        @if (count($sProduct) != 0)
            @foreach ($sProduct as $items)
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <div class="ratio ratio-4x3 image-upload"
                                style="background-image: url('/images/product/{{ $items->image }}')"></div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $items->title }}</h5>
                                <p class="card-text mb-2">{{ $items->description }}</p>
                                @if ($items->discount)
                                    <div class="d-flex mb-3">
                                        <small class="text-decoration-line-through text-secondary">
                                            Rp.{{ number_format($items->price, 0, ',', '.') }}
                                        </small>
                                        <span class="badge rounded-pill text-bg-primary">Diskon{{ $items->discount }}%</span>
                                    </div>
                                    <h5 class="fw-bole">Rp.{{ number_format($items->price_other, 0, ',', '.') }}</h5>
                                @else
                                    <h5 class="fw-bole">Rp.{{ number_format($items->price, 0, ',', '.') }}</h5>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute end-0">
                        <button class="btn m-3">
                            <i class="fas fa-trash-alt fa-lg fa-fw"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        @else
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-3">
                        <div class="ratio ratio-4x3">
                            <div class="d-flex justify-content-center align-items-center">
                                <i class="fas fa-box-open fa-5x fa-fw"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body text-secondary py-5">
                            <h5 class="card-title">Please choise yout product!</h5>
                            <p class="card-text">Your don't have product here, please choise your product for new order.
                                Tap
                                or click choise product then selected product for buyer</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Product</h1>
                    <div class="d-flex ms-auto">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="search...">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                <i class="fas fa-search fa-xs fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-body p-0">
                    <ul class="list-group list-group-flush">
                        @foreach ($data as $index => $item)
                            <li class="list-group-item">
                                <div class="d-flex gap-3 align-items-center">
                                    <input type="checkbox" wire:model="selected" class="form-check-input"
                                        value="{{ $item->product_id }}">
                                    <div style="width: 92px">
                                        <div class="border rounded ratio ratio-4x3 image-upload"
                                            style="background-image: url('/images/product/{{ $item->image }}')">
                                        </div>
                                    </div>
                                    <div class="lh-1">
                                        <p class="fw-bold mb-0">{{ $item->title }}</p>
                                        <span class="d-block mb-2">{{ $item->description }}</span>
                                        @if ($item->discount)
                                            <div class="d-flex gap-2">
                                                <h6 class="fw-bole">Rp.
                                                    {{ number_format($item->price_other, 0, ',', '.') }}</h6>
                                                <small class="text-decoration-line-through text-secondary">Rp.
                                                    {{ number_format($item->price, 0, ',', '.') }} <span
                                                        class="badge rounded-pill text-bg-primary">Diskon
                                                        {{ $item->discount }}%</span></small>
                                            </div>
                                        @else
                                            <h6 class="fw-bole">Rp. {{ number_format($item->price, 0, ',', '.') }}</h6>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click='pushSelected'>Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        window.addEventListener('ModelHide', () => {
            $("#exampleModal").modal('hide');
        });
    </script>
</div>
