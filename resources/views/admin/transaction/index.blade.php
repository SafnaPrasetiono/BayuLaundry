@extends('admin.layouts.panel')

@section('head')
    <title></title>
@endsection

@section('body')
    <div class="container-fluid">

        <div class="d-block p-3 mb-2">
            <h2 class="text-them fw-bold mb-0">Transaction</h2>
            <p class="text-them-sec mb-0">Selamat datang kembali di aplikasi laundryku</p>
        </div>

        <div class="d-block bg-white rounded shadow p-3">
            <div class="form-tables mb-3">
                <div class="d-flex gap-2">

                    <div class="position-relative ms-auto">
                        <input type="text" class="form-control pe-5">
                        <button class="btn border-0 position-absolute top-0 end-0">
                            <i class="fas fa-search fa-sm fa-fw"></i>
                        </button>
                    </div>
                    <div class="dropstart">
                        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="dropdown">
                            <i class="fas fa-filter fa-fw"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
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
                            <th class="text-them">Action</th>
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
                                <a href="#" class="btn btn-primary btn-sm rounded">
                                    <i class="fas fa-eye fa-xs fa-fw"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-sm rounded">
                                    <i class="fas fa-pencil-alt fa-xs fa-fw"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm rounded">
                                    <i class="fas fa-trash fa-xs fa-fw"></i>
                                </a>
                            </td>
                        </tr>
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
                                <a href="#" class="btn btn-primary btn-sm rounded">
                                    <i class="fas fa-eye fa-xs fa-fw"></i>
                                </a>
                                <a href="#" class="btn btn-warning btn-sm rounded">
                                    <i class="fas fa-pencil-alt fa-xs fa-fw"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm rounded">
                                    <i class="fas fa-trash fa-xs fa-fw"></i>
                                </a>
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
@endsection

@section('script')
@endsection
