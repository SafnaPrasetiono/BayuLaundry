<div>
    <div class="py-5">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-3 d-none d-lg-block">
                    @include('pages.users.menu')
                </div>

                <div class="col-12 col-lg-9">
                    <div class="d-block rounded overflow-hidden">
                        <div class="d-block p-3">
                            <h5 class="fw-bold m-0">Alamat Saya</h5>
                            <p class="m-0">Kelola informasi alamat anda</p>
                        </div>
                        <hr class="soft">
                        <div class="d-flex gap-2 justify-content-end mb-3">
                            <button type="button" class="btn btn-primary" wire:click='clearInput' data-bs-toggle="modal"
                                data-bs-target="#addressModal">
                                <i class="fas fa-plus fa-sm fa-fw"></i>
                                <span class="d-none d-lg-inline">Tambahkan</span>
                            </button>
                            <div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search..." wire:model.live='search'>
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                        <i class="fas fa-search fa-sm fa-fw"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="d-block">
                            @if(count($userAddress) === 0)
                                <div class="d-block border rounded ratio ratio-16x9">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <i class="fas fa-address-card fa-4x fa-fw"></i>
                                        <span class="fw-bold fs-5">Tidak ada alamat!</span>
                                        <span class="text-secondary">Anda belum menambahkan alamat</span>
                                    </div>
                                </div>
                            @else
                                @foreach ($userAddress as $item)
                                <div class="d-block border rounded position-relative lh-0 p-3 mb-3">
                                    <div class="mb-3 lh-1">
                                        <p class="fw-bold m-0 text-capitalize">{{$item->username}}</p>
                                        <small>{{$item->phone}}</small>
                                    </div>
                                    <p class="text-secondary text-uppercase m-0">
                                        {{$item->detail}}
                                    </p>
                                    <p class="text-secondary m-0">
                                        <span>{{$item->village}}     </span>
                                        <span>{{$item->districts}},  </span>
                                        <span>{{$item->regencies}},  </span>
                                        <span>{{$item->province}},   </span>
                                        <span>{{$item->postal_code}} </span>
                                    </p>
                                    <div class="btn-group dropstart position-absolute top-0 end-0 m-3">
                                        <button type="button" class="btn border-0" data-bs-toggle="dropdown">
                                            <i class="fas fa-bars fa-sm fa-fw"></i>
                                        </button>
                                        <ul class="fade dropdown-menu border-0 shadow" style="width: 200px">
                                            <button class="dropdown-item">
                                                <i class="fas fa-share fa-sm fa-fw" style="width: 32px"></i>
                                                <span>Share Alamat</span>
                                            </button>
                                            <button class="dropdown-item" wire:click='editAddress({{$item->user_address_id}})'>
                                                <i class="fas fa-pencil-alt fa-sm fa-fw" style="width: 32px"></i>
                                                <span>Edit Alamat</span>
                                            </button>
                                            <hr class="soft">
                                            <button class="dropdown-item" onclick="removeAddress({{$item->user_address_id}})" attr_id="{{$item->user_address_id}}">
                                                <i class="fas fa-trash fa-sm fa-fw" style="width: 32px"></i>
                                                <span>Hapus Alamat</span>
                                            </button>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <div id="addressModal" class="modal fade" tabindex="-1" wire:ignore.self>
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alamat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" autocomplete="off">

                        <div class="col-12 col-md-12">
                            <div class="row g-3">
                                <div class="col-6">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Nama Lengkap" wire:model='username'>
                                    @error('username')
                                        <span class="d-block invalid-feedback text-capitalize">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Nomor Telepon" wire:model='phone'>
                                    @error('phone')
                                        <span class="d-block invalid-feedback text-capitalize">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="position-relative">
                                        <div class="d-flex align-items-center" data-bs-toggle="dropdown">
                                            <input type="text" 
                                                name="province"
                                                class="form-control @error('province') is-invalid @enderror" 
                                                id="province" 
                                                placeholder="Provinsi..."
                                                autocomplete="province" 
                                                autocorrect="off"
                                                autocapitalize="off" 
                                                spellcheck="false"
                                                wire:model.live='province' 
                                                @click="$wire.set('province', '')"
                                                @focus="$wire.set('provincefocused', true)"
                                                @blur="$wire.set('provincefocused', false)" />
                                            <label for="province" class="" style="margin-left: -32px">
                                                <i class="fas fa-angle-down fa-sm fa-fw"></i>
                                            </label>
                                        </div>
                                        @if ($provincefocused == true)
                                            <div class="position-absolute d-block bg-white border-0 rounded shadow-lg w-100 overflow-y-scroll"
                                                style="height: 240px; z-index: 9;">
                                                <nav class="nav flex-column">
                                                    @foreach ($provincesData as $item)
                                                        <button type="button" class="nav-link link-dark text-start"
                                                            wire:click='selectProvinces({{ $item->id }},"{{ $item->name }}")'>{{ $item->name }}</button>
                                                    @endforeach
                                                </nav>
                                            </div>
                                        @endif
                                        @error('province')
                                            <span class="d-block invalid-feedback text-capitalize">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="position-relative">
                                        <div class="d-flex align-items-center" data-bs-toggle="dropdown">
                                            <input type="text" 
                                                name="regency"
                                                class="form-control @error('regency') is-invalid @enderror" 
                                                id="regency" 
                                                placeholder="Kota..."
                                                autocomplete="regency" 
                                                autocorrect="off"
                                                autocapitalize="off" 
                                                spellcheck="false"
                                                wire:model.live='regency'
                                                @click="$wire.set('regency', '')"
                                                @focus="$wire.set('regencyfocused', true)"
                                                @blur="$wire.set('regencyfocused', false)"
                                                {{ empty($province_id) ? 'disabled' : '' }} />
                                            <label for="regency" class="" style="margin-left: -32px">
                                                <i class="fas fa-angle-down fa-sm fa-fw"></i>
                                            </label>
                                        </div>
                                        @if ($regencyfocused == true)
                                            <div class="position-absolute d-block bg-white border-0 rounded shadow-lg w-100 overflow-y-scroll"
                                                style="height: 240px; z-index: 9;">
                                                <nav class="nav flex-column">
                                                    @foreach ($regenciesData as $item)
                                                        <button type="button" class="nav-link link-dark text-start"
                                                            wire:click='selectRegencies({{ $item->id }},"{{ $item->name }}")'>{{ $item->name }}</button>
                                                    @endforeach
                                                </nav>
                                            </div>
                                        @endif
                                        @error('regency')
                                            <span class="d-block invalid-feedback text-capitalize">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="position-relative">
                                        <div class="d-flex align-items-center" data-bs-toggle="dropdown">
                                            <input type="text" 
                                                    name="districts"
                                                    class="form-control @error('districts') is-invalid @enderror" 
                                                    id="districts"
                                                    placeholder="Kecamatan..." 
                                                    autocomplete="districts" 
                                                    autocorrect="off"
                                                    autocapitalize="off" 
                                                    spellcheck="false" 
                                                    wire:model.live='districts'
                                                    @click="$wire.set('districts', '')"
                                                    @focus="$wire.set('districtsfocused', true)"
                                                    @blur="$wire.set('districtsfocused', false)"
                                                    {{ empty($regency_id) ? 'disabled' : '' }} />
                                            <label for="districts" class="" style="margin-left: -32px">
                                                <i class="fas fa-angle-down fa-sm fa-fw"></i>
                                            </label>
                                        </div>
                                        @if ($districtsfocused == true)
                                            <div class="position-absolute d-block bg-white border-0 rounded shadow-lg w-100 overflow-y-scroll"
                                                style="height: 240px; z-index: 9;">
                                                <nav class="nav flex-column">
                                                    @foreach ($districtsData as $item)
                                                        <button type="button" class="nav-link link-dark text-start"
                                                            wire:click='Selectdistricts({{ $item->id }},"{{ $item->name }}")'>{{ $item->name }}</button>
                                                    @endforeach
                                                </nav>
                                            </div>
                                        @endif
                                        @error('districts')
                                            <span class="d-block invalid-feedback text-capitalize">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="position-relative">
                                        <div class="d-flex align-items-center" data-bs-toggle="dropdown">
                                            <input type="text" 
                                                    name="village"
                                                    class="form-control @error('village') is-invalid @enderror" 
                                                    id="village"
                                                    placeholder="Kelurahaan..." 
                                                    autocomplete="village" 
                                                    autocorrect="off"
                                                    autocapitalize="off" 
                                                    spellcheck="false" 
                                                    wire:model.live='village'
                                                    @click="$wire.set('village', '')"
                                                    @focus="$wire.set('villagefocused', true)"
                                                    @blur="$wire.set('villagefocused', false)"
                                                    {{ empty($districts_id) ? 'disabled' : '' }}  />
                                            <label for="village" class="" style="margin-left: -32px">
                                                <i class="fas fa-angle-down fa-sm fa-fw"></i>
                                            </label>
                                        </div>
                                        @if ($villagefocused == true)
                                            <div class="position-absolute d-block bg-white border-0 rounded shadow-lg w-100 overflow-y-scroll"
                                                style="height: 240px; z-index: 9;">
                                                <nav class="nav flex-column">
                                                    @foreach ($villageData as $item)
                                                        <button type="button" class="nav-link link-dark text-start"
                                                            wire:click='Selectvillage({{ $item->id }},"{{ $item->name }}")'>{{ $item->name }}</button>
                                                    @endforeach
                                                </nav>
                                            </div>
                                        @endif
                                        @error('village')
                                            <span class="d-block invalid-feedback text-capitalize">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="text" 
                                        name="postalcode"
                                        class="form-control @error('postalCode') is-invalid @enderror" 
                                        placeholder="Kode Post" 
                                        autocomplete="off" 
                                        autocorrect="off"
                                        autocapitalize="off" 
                                        spellcheck="false"
                                        wire:model='postalCode' />
                                    @error('postalCode')
                                        <span class="d-block invalid-feedback text-capitalize">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="row g-3">
                                {{-- <div class="col-12">
                                    <div wire:ignore id="map" class="position-relative w-100"  style="height: 250px"></div>
                                    <input type="hidden" wire:model="latitude">
                                    <input type="hidden" wire:model="longitude">
                                </div> --}}
                                <div class="col-12">
                                    <textarea name="address" 
                                    rows="3"
                                    class="form-control @error('detail') is-invalid @enderror" 
                                    placeholder="Alamat lengkap" 
                                    autocomplete="off" 
                                    autocorrect="off"
                                    autocapitalize="off" 
                                    spellcheck="false"
                                    wire:model='detail'></textarea>
                                    @error('detail')
                                        <span class="d-block invalid-feedback text-capitalize">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="is_primary" wire:model='isPrimary'>
                                        <label class="form-check-label" for="is_primary">Jadikan Alamat Utama</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click='clearInput' @click="$wire.set('is_edit', false)" data-bs-dismiss="modal">Close</button>
                    @if ($is_edit===true)
                        <button type="button" class="btn btn-warning" wire:click='update'>Simpan Perubahan</button>                        
                    @else
                        <button type="button" class="btn btn-primary" wire:click='save'>Simpan Data</button>
                    @endif
                </div>
            </div>
        </div>
    </div>




    <script>
        function removeAddress(post_id) {
            Swal.fire({
                title: "Anda yakin?",
                text: "Apakah kamu yakin untuk hapus alamat ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batalkan",
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('setDeleteAddress', {"id" : post_id});
                }
            });
        }
        
        document.addEventListener('addressModalHide', function() {
            $('#addressModal').modal("hide");
        });

        document.addEventListener('addressModalShow', function() {
            $('#addressModal').modal("show");
        });
        
        // document.addEventListener('livewire:init', function () {
        //     let map = L.map('map').setView([-6.2, 106.8], 16);

        //     L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //         setView: true,
        //         maxZoom: 19,
        //         attribution: ''
        //     }).addTo(map);

        //     let marker = L.marker([-6.2, 106.8], { draggable: true }).addTo(map);

        //     function updateLocation(lat, lng) {
        //         fetch(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lng}`)
        //             .then(res => res.json())
        //             .then(data => {
        //                 Livewire.dispatch('setLocation', { "lat": lat, "lng": lng, "address": data.display_name });
        //             });
        //     }

        //     marker.on('dragend', function (e) {
        //         let lat = marker.getLatLng().lat;
        //         let lng = marker.getLatLng().lng;

        //         // Center map ke marker baru
        //         map.setView([lat, lng], map.getZoom());
    
        //         updateLocation(lat, lng);
        //     });

        //     // First run
        //     updateLocation(-6.2, 106.8);
        // });
       
    </script>
    
</div>
