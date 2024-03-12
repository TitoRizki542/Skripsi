@extends('admin.master.layout')
@section('judul halaman', 'Dashboard')
@section('content')

    {{-- Judul Halaman --}}
    {{-- <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            </ol>
        </nav>
    </div> --}}
    {{-- Akhir Judul Halaman --}}

    {{-- Main Dashboard --}}
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    {{-- Card Paket Wisata --}}
                    <div class="col-xxl-6 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="filter">
                                <a class="icon" href="{{ route('paketwisata.index') }}" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('paketwisata.index') }}"><i
                                                class="bi bi-eye"></i>Tampilkan
                                            Detail</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Paket Wisata <span>| Nagari Wayang Kertas</span>
                                </h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-pin-map"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $countPaketwisata }}</h6>
                                        <span class="text-muted small pt-2 ps-1">Total Paket Wisata Terdaftar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card Jumlah Pesanan --}}
                    <div class="col-xxl-6 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="filter">
                                <a class="icon" href="{{ route('daftarpesanan.index') }}" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li><a class="dropdown-item" href="{{ route('daftarpesanan.index') }}"><i
                                                class="bi bi-eye"></i>Tampilkan
                                            Detail</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Pesanan <span>| Nagari Wayang Kertas</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-clipboard-check"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $countPesanan }}</h6>
                                        <span class="text-muted small pt-2 ps-1">Total Paket Wisata Terpesan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card Blog --}}
                    <div class="col-xxl-6 col-md-6">
                        <div class="card info-card blog-card">

                            <div class="filter">
                                <a class="icon" href="{{ route('blog.index') }}" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li><a class="dropdown-item" href="{{ route('blog.index') }}"><i
                                                class="bi bi-eye"></i>Tampilkan
                                            Detail</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Blog <span>| Nagari Wayang Kertas</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-eye"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $countBlog }}</h6>
                                        <span class="text-muted small pt-2 ps-1">Total Blog Tebrit</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- User --}}
                    <div class="col-xxl-6 col-md-6">
                        <div class="card info-card user-card">

                            <div class="filter">
                                <a class="icon" href="" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li><a class="dropdown-item" href="{{ route('pengguna.index') }}"><i
                                                class="bi bi-eye"></i>User</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.index') }}"><i
                                                class="bi bi-eye"></i>Admin</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Pengguna <span>| Nagari Wayang Kertas</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $countUser }}</h6>
                                        <span class="text-muted small pt-2 ps-1">Total Pengguna Terdaftar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @if ($message = Session::get('success'))
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Done",
                    text: ('{{ $message }}'),
                });
            </script>
        @endif
    </section>
@endsection
