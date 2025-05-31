<div>
    <div class="d-block rounded shadow">
        <div class="p-4">
            <h5 class="fw-bold mb-0">Profile Saya</h5>
            <p class="m-0">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun</p>
        </div>
        <hr class="m-0">
        <div class="row p-4 g-5 g-lg-3 justify-content-md-center">
            <form action="#" class="col-12 col-lg-8 order-1 order-md-2 order-lg-0" wire:submit.prevent='save'>
                <div class="d-flex flex-column flex-lg-row align-lg-items-center mb-3">
                    <label for="username" class="col-12 col-lg-4 col-form-label">username</label>
                    <input type="text" id="username" class="form-control" value="{{ old('username') }}" wire:model='username'>
                    @error('username')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="d-flex flex-column flex-lg-row align-lg-items-center mb-3">
                    <label for="email" class="col-12 col-lg-4 col-form-label">Email</label>
                    <input type="text" id="email" class="form-control disabled" wire:model='email'
                        disabled readonly>
                </div>
                <div class="d-flex flex-column flex-lg-row align-lg-items-center mb-3">
                    <label for="phone" class="col-12 col-lg-4 col-form-label">Nomor Telepon</label>
                    <input type="text" id="phone" class="form-control disabled" wire:model='phone'>
                    @error('phone')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="d-flex flex-column flex-lg-row align-lg-items-center mb-3">
                    <label for="gender" class="col-12 col-lg-4 col-form-label">Jenis Kelamin</label>
                    <div class="form-control border-0 d-flex gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="pria"
                                value="M" wire:model='gender'>
                            <label class="form-check-label" for="pria">Pria</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="wanita"
                                value="F" wire:model='gender'>
                            <label class="form-check-label" for="wanita">Wanita</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="lainnya"
                                value="O" wire:model='gender'>
                            <label class="form-check-label" for="lainnya">Lainnya</label>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-lg-row align-lg-items-center mb-4">
                    <label for="born" class="col-12 col-lg-4 col-form-label">Tanggal Lahir</label>
                    <input type="date" id="born" class="form-control disabled" wire:model='born'>
                    @error('born')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="d-flex justify-content-end mb-3">
                    <button type="submit" class="btn btn-outline-primary">Simpan</button>
                </div>
            </form>

            <form action="#" class="col-12 col-md-6 col-lg-4" wire:submit.prevent='uploadFoto'>
                <div class="mb-3">
                    <label for="photos" class="border rounded ratio ratio-1x1 bs-secondary-bg-rgb"
                        style="cursor: pointer; background-color: #e9ecef">
                        @if ($photos)
                            <div for="photos" class="border rounded ratio ratio-1x1 image-upload"
                                style="background-image: url('{{ $photos->temporaryUrl() }}')">
                            </div>
                        @elseif($avatar)
                            <div for="photos" class="border rounded ratio ratio-1x1 image-upload"
                                style="background-image: url('/images/avatar/{{ $avatar }}')">
                            </div>
                        @else
                            <div class="d-flex flex-column align-self-center align-items-center justify-content-center">
                                <i class="fas fa-upload fa-3x fa-fw mb-3"></i>
                                <span class="fw-light">Upload Here...</span>
                            </div>
                        @endif
                        <div class="justify-content-center align-items-center" style="background-color: #e9ecef75;"
                            wire:loading.flex wire:target="photos">
                            <span class="loader"></span>
                        </div>
                    </label>
                </div>
                <div class="mb-3">
                    <input type="file" id="photos" wire:model="photos" name="image"
                        class="form-control @error('image') is-invalid @enderror" placeholder="Upload Photoss here...">
                    @error('image')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @if ($photos)
                <div class="d-flex justify-content-end mb-3">
                    <button class="btn btn-outline-primary">Save</button>
                </div>
                @endif
                <div class="text-center lh-0">
                    <small class="d-block text-secondary">Ukuran gambar: maks. 1 MB</small>
                    <small class="d-block text-secondary">Format gambar: .JPEG, .PNG</small>
                </div>
            </form>
        </div>
    </div>
</div>
