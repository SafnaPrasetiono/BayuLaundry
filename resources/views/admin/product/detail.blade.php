@extends('admin.layouts.panel')

@section('head')
    <title>laundryku - pembuatan product baru</title>
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
            <h2 class="text-them fw-bold mb-0">Product</h2>
            <p class="text-them-sec mb-0">Selamat data di applikasi laundryku</p>
        </div>

        <div>
            <div class="d-block rounded bg-white p-3 mb-3">
                <div class="row gx-3">
                    <div class="col-12 col-md-7 col-lg-7 order-2 order-md-1">
                        <div class="row g-3 mb-3">
                            <div class="col-12">
                                <label for="#" class="form-label">Nama Product</label>
                                <input type="title" name="title" class="form-control " disabled readonly value="{{$data->title}}">
                            </div>

                            <div class="col-12 col-lg-6">
                                <label for="#" class="form-label">Harga Product</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">Rp.</span>
                                    <input type="text" name="price" class="form-control " disabled readonly value="{{$data->price}}">
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <label for="gender" class="form-label">Status</label>
                                <select name="status" id="status" class="form-select" disabled >
                                    <option value="" disabled selected>Pilih status</option>
                                    <option value="1" @selected($data->status == 1)>Active</option>
                                    <option value="0" @selected($data->status == 0)>Non Active</option>
                                </select>
                            </div>

                            <div class="col-12 col-lg-4">
                                <label for="#" class="form-label">Discound Harga</label>
                                <div class="input-group">
                                    <input type="text" name="discount" class="form-control " disabled readonly value="{{$data->discount}}">
                                    <span class="input-group-text" id="basic-addon1">.%</span>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <label for="#" class="form-label">Priode Discount</label>
                                <div class="d-flex gap-2">
                                    <div class="flex-fill">
                                        <input type="date" name="dateDiscountStart" class="form-control " disabled readonly value="{{$data->dateDiscountStart}}">
                                    </div>
                                    <div class="flex-fill">
                                        <input type="date" name="dateDiscountEnd" class="form-control " disabled readonly value="{{$data->dateDiscountEnd}}">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="#" class="form-label">Deskripsi Product</label>
                            <textarea name="description" id="description" rows="4" class="form-control " disabled readonly>{{$data->description}}</textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-5 order-1 order-md-2">
                        <div class="mb-3">
                            <label for="#" class="form-label d-none d-md-block">Image</label>
                            <div class="image-product ratio ratio-4x3 rounded" style="background-image: url('/images/product/{{$data->image}}');"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block rounded bg-white p-3 mb-3">
                @foreach ($data->descriptionList as $index => $item)
                    <div class="d-flex gap-2 mb-2">
                        <input type="text" class="form-control" value="{{ $item }}" disabled readonly>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
