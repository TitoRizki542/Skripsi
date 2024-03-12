@extends('admin.master.layout')
@section('judul halaman', 'Paket Wisata')
@section('content')
    {{-- Judul Halaman --}}
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Paket wisata</li>
            </ol>
        </nav>
    </div>
    {{-- Akhir Judul Halaman --}}
    @include('include.flash')
    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card top-selling overflow-auto">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Paket Wisata <span>| Nagari Wayang Kertas</span></h5>
                        <div class="mb-4">
                            <a class="btn btn-primary" href="{{ route('paketwisata.create') }}">Tambah Data</a>
                        </div>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Thumbnail</th>
                                    <th scope="col">Nama Paket</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Harga</th>
                                    <th class="text-center" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paketwisata as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset('storage/' . $item->thumbnail) }}" width="200">
                                        </td>
                                        <td>{{ $item->nama_paket }}</td>
                                        <td>{!! $item->deskripsi !!}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td> @currency($item->harga) </td>
                                        <td class="text-center">
                                            <a href="{{ route('paketwisata.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a></br>
                                            <form action="{{ route('paketwisata.delete', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" type="submit"
                                                    id="{{ $item->id }}"><i class="bi bi-trash-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Selling -->
    </section>
@endsection
