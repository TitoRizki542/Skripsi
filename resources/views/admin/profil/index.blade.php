@extends('admin.master.layout')
@section('judul halaman', 'Profil')
@section('content')

    {{-- Judul Halaman --}}
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item">Profil</li>
            </ol>
        </nav>
    </div>
    {{-- Akhir Judul Halaman --}}
    <section class="section profile">
        <div class="card">
            <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Data
                            Admin</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">
                            Edit Profil
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change
                            Password</button>
                    </li>

                </ul>
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                            <div class="col-lg-9 col-md-8"><strong>{{ auth('admin')->user()->nama }}</strong></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                            <div class="col-lg-9 col-md-8">{{ auth('admin')->user()->jenis_kelamin }}</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Username</div>
                            <div class="col-lg-9 col-md-8">{{ auth('admin')->user()->username }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Email</div>
                            <div class="col-lg-9 col-md-8">{{ auth('admin')->user()->email }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Alamat</div>
                            <div class="col-lg-9 col-md-8">{{ auth('admin')->user()->alamat }}</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Nomor HP</div>
                            <div class="col-lg-9 col-md-8">{{ auth('admin')->user()->nomer_hp }}</div>
                        </div>


                    </div>

                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                        <!-- Profile Edit Form -->
                        <form>
                            <div class="row mb-3">
                                <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="nama" type="text" class="form-control" id="nama"
                                        value="{{ old('nama') }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jeniskelamin" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="jenisKelamin" type="text" class="form-control" id="jeniskelamin"
                                        value="{{ old('jenis_kelamin') }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="username" type="text" class="form-control" id="Username"
                                        value="{{ old('username') }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="email" type="text" class="form-control" id="email"
                                        value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="alamat" type="text" class="form-control" id="Alamat"
                                        value="{{ old('alamat') }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nomor_hp" class="col-md-4 col-lg-3 col-form-label">Nomor HP</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="nomor_hp" type="text" class="form-control" id="nomor_hp"
                                        value="{{ old('nomer_hp') }}">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form><!-- End Profile Edit Form -->
                    </div>
                </div><!-- End Bordered Tabs -->
            </div>
        </div>
    </section>
@endsection
