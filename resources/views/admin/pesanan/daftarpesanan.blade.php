@extends('admin.master.layout')
@section('judul halaman', 'Daftar Pesanan')
@section('content')
    {{-- Judul Halaman --}}
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Administrasi</li>
                <li class="breadcrumb-item">Daftar Pesanan</li>
            </ol>
        </nav>
    </div>
    {{-- Akhir Judul Halaman --}}

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-download"></i> Cetak Laporan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pesanan <span>| Terbaru</span></h5>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Paket</th>
                                    <th scope="col">Nama Pemesan</th>
                                    <th scope="col">Jumlah Orang</th>
                                    <th scope="col">Total Harga</th>
                                    <th scope="col">Tanggal Kedatangan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesanan as $data)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $data->paketwisata->nama_paket }}</td>
                                        <td class="text-left">{{ $data->user->nama }}</td>
                                        <td class="text-left">{{ $data->jumlah_orang }} Orang</td>
                                        <td class="text-left">@currency($data->total_harga)</td>
                                        <td class="text-left">{{ $data->tanggal_kedatangan }}</td>
                                        <th><button class="btn btn-success btn-sm" target="_blank">
                                                <i class="bi bi-check-circle"></i>
                                            </button>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
