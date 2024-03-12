@extends('admin.master.layout')
@section('judul halaman', 'Halaman Tambah Blog')
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                <li class="breadcrumb-item">Tambah Blog</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <form method="POST" action="{{ route('blog.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                @csrf
                {{-- Kolom 1 --}}
                <div class="col-lg-12">
                    <div class="card">

                        {{-- Card Form --}}
                        <div class="card-body">
                            <h5 class="card-title">Lengkapi Data</h5>
                            <!-- Multi Columns Form -->

                            {{-- Form Nama Paket --}}
                            <form method="POST" action="{{ route('blog.store') }}" class="mt-6 space-y-6"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12 mb-3">
                                    <label for="judul" class="form-label">Judul Blog</label>
                                    <input name="judul" type="text"
                                        class="form-control @error('judul') is-invalid @enderror" id="judul"
                                        placeholder="Masukan Judul Blog">
                                    @error('judul')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Form Editor Deskripsi --}}
                                <div class="col-md-12 mb-3">
                                    <label for="deskripsi" class="col-sm-2 col-form-label">Kutipan</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="kutipan"
                                            class="form-control @error('kutipan') is-invalid @enderror" id="kutipan"
                                            placeholder="Masukan kutipan"></input>
                                        @error('kutipan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Form Fasilitas --}}
                                <div class="col-md-12 mb-3">
                                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-12">
                                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="3"
                                            placeholder="Masukan Deskripsi Destinasi Wisata..."></textarea>
                                        @error('deskirpsi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <script>
                                        // editor1 adalah value attribute name dari textarea yang mau dipasangkan ckeditor4
                                        CKEDITOR.replace('deskripsi');
                                    </script>
                                </div>

                                {{-- Form thumbnail --}}
                                <div class="col-md-12 mb-3">
                                    <label for="gambar" class="form-label">Tambahkan Gambar</label>
                                    <input name="gambar" type="file"
                                        class="form-control  @error('gambar') is-invalid @enderror" id="gambar"
                                        onchange="previewImage()">
                                    <img class="img-preview mt-4" width="400">
                                    @error('gambar')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- Button --}}
                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('blog.index') }}" class="btn btn-secondary">Kembali</a>
                                </div>
                            </form>
                            <!-- End Multi Columns Form -->
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <script>
        function previewImage() {

            const thumbnail = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(thumbnail.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
