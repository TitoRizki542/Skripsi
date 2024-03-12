@extends('admin.master.layout')
@section('judul halaman', 'Tambah Data User')
@section('content')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('pengguna.index') }}">User</a></li>
            <li class="breadcrumb-item">Tambah Data</li>
        </ol>
    </nav>
    <section>
        <div class="row">
            <div class="card">
                <div class="col-lg-6 mx-auto">
                    <div class="card-body">
                        <h5 class="card-title">Lengkapi Data</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{ route('pengguna.store') }}" method="POST">
                            @csrf
                            <div class="col-12">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="col-12">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                            <div class="col-12">
                                <label for="alamat" class="form-label">Nomor Hp</label>
                                <input type="text" class="form-control" id="alamat" name="nomor_hp">
                            </div>
                            <div class="col-12">
                                <label for="jenis_kelamin" class="form-label">jenis Kelamin</label>
                                <select id="jenis_kelamin" class="form-select" name="jenis_kelamin">
                                    <option selected="">Pilih...</option>
                                    <option value="laki laki">Laki Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- Vertical Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
