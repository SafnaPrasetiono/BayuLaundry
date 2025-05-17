@extends('admin.layouts.panel')

@section('head')
    <title></title>
    <style>
        .image-product{
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection

@section('body')
    <div class="container-fluid">
        <div class="d-block p-3 mb-3">
            <h2 class="text-them fw-bold mb-0">Create Order</h2>
            <p class="text-them-sec mb-0">Selamat data di aplikasi laundryku</p>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="d-block rounded bg-white p-3 mb-3">
                <div class="position-relative m-4">
                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0"
                        aria-valuemax="100" style="height: 1px;">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                    <button type="button"
                        class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill"
                        style="width: 2rem; height:2rem;">1</button>
                    <button type="button"
                        class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill"
                        style="width: 2rem; height:2rem;">2</button>
                    <button type="button"
                        class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill"
                        style="width: 2rem; height:2rem;">3</button>
                </div>
            </div>

            <div class="d-block rounded bg-white p-3 m-3">
                @livewire('admin.order.order-product')
            </div>

            <div class="d-block rounded bg-white p-3 mb-3">
                <div class="row gx-3">

                    <div class="col-12">
                        <label for="#" class="form-label">Username</label>
                        <input type="username" name="username"
                            class="form-control  @error('username') is-invalid @enderror">
                        @error('username')
                            <span class="invalid-feedback text-capitalize">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="#" class="form-label">payment_method</label>
                        <input type="payment_method" name="payment_method"
                            class="form-control  @error('payment_method') is-invalid @enderror">
                        @error('payment_method')
                            <span class="invalid-feedback text-capitalize">
                                <strong>{{ $errors->first('payment_method') }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="d-block rounded bg-white p-3 mb-3">
                <button type="submit" class="btn btn-outline-success" name="save">Create Order</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
@endsection
