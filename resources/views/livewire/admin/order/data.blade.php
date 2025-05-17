<div>
    <div class="container-fluid">

        <div class="d-block p-3 mb-2">
            <h2 class="text-them fw-bold mb-0">Orders</h2>
            <p class="text-them-sec mb-0">Selamat datang kembali di aplikasi laundryku</p>
        </div>

        <div class="d-block bg-white rounded p-3">

            <div class="form-tables mb-3">
                <div class="d-flex gap-2">
                    <a href="{{ route('admin.orders.create') }}" class="btn btn-outline-success">
                        <i class="fas fa-plus fa-sm fa-fw"></i>
                    </a>
                    @if ($selected != null)
                        <button class="btn btn-danger px-3" data-bs-toggle="modal"
                            data-bs-target="#ModalDeleteAllData">Delete</button>
                    @endif
                    <div class="ms-auto position-relative">
                        <input type="text" class="form-control me-4" placeholder="Search..." wire:model="search"
                            wire:keydown.enter="searchPush">
                        <button class="btn position-absolute border-0 top-0 end-0">
                            <i class="fas fa-search fa-sm fa-fw"></i>
                        </button>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fas fa-filter fa-xs fa-fw"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end shadow border-0 p-0" style="width: 320px">
                            <div class="dropdown-head p-3 border-bottom">
                                <p class="fw-bold mb-0">Filter Table</p>
                            </div>
                            <div class="dropdown-body p-3">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <label for="status" class="form-label">Status type</label>
                                    <select wire:model="status" name="status" class="form-select form-select-sm col-3"
                                        id="status" style="width: 120px">
                                        <option value="pending">PENDING</option>
                                        <option value="progress">PROGRESS</option>
                                        <option value="decline">DECLINE</option>
                                        <option value="done">FINISHED</option>
                                        <option value="" selected>All</option>
                                    </select>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <label for="pages" class="form-label">Page of view</label>
                                    <select wire:model="pages" name="pages" class="form-select form-select-sm col-3"
                                        id="pages" style="width: 72px">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                        <option value="50">50</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="table-responsive mb-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <input class="form-check-input" type="checkbox" value="">
                            </th>
                            <th class="text-them">ID</th>
                            <th class="text-them">Numbers</th>
                            <th class="text-them">Costumer</th>
                            <th class="text-them">Price</th>
                            <th class="text-them">Status</th>
                            <th class="text-them">Date</th>
                            <th class="text-them"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </th>
                            <th class="text-them">#eMBpT01</th>
                            <td>R1C1</td>
                            <td>Iwan Banara</td>
                            <td>Rp. 56.000</td>
                            <td>
                                <span class="badge text-bg-success">success</span>
                            </td>
                            <td>
                                {{ now() }}
                            </td>
                            <td class="gap-1">
                                <div class="dropstart">
                                    <button class="btn border-0" type="button" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw"></i>
                                    </button>
                                    <div class="dropdown-menu position-fixed border-0 shadow" style="width: 200px">
                                        <a class="dropdown-item link-secondary" href="#">
                                            <i class="fas fa-eye fa-sm me-3"></i> Detail
                                        </a>
                                        <a class="dropdown-item link-secondary" href="#">
                                            <i class="fas fa-pencil-alt fa-sm me-3"></i> Edit Data
                                        </a>
                                        <hr class="soft my-2 mx-2">
                                        <a class="dropdown-item link-secondary" href="">
                                            <i class="fas fa-share fa-sm me-3"></i> Share Link
                                        </a>
                                        <a class="dropdown-item link-secondary" href="">
                                            <i class="fas fa-download fa-sm me-3"></i> Download
                                        </a>
                                        <hr class="soft my-2 mx-2">
                                        <a class="dropdown-item link-secondary" href="#">
                                            <i class="fas fa-trash fa-sm me-3"></i> Delete Data
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <nav class="d-flex" aria-label="Page navigation example">
                <ul class="pagination ms-auto">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>




    </div>
</div>
