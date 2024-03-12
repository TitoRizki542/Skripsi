<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <link rel="icon" type="image/png" href="{{ URL('user/image/wayang.png') }}">
    <title>Register Page</title>

    <link rel="stylesheet" href="{{ URL::asset('user/css/app.css') }}">
</head>

<body>
    <div class="register-section">
        @include('include.flash')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card card shadow ">
                        <div class="row">
                            <div class="col-lg-4 img" style="background-image: url(user/image/wayang2.png)">
                            </div>
                            <div class="col-lg-8">
                                <div class="text-center mt-2 mb-2">
                                    <h4 class="mt-4">Register</h4>
                                </div>
                                <div class="container-fluid">
                                    <form action="{{ route('register-store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">

                                                {{-- Nama --}}
                                                <div class="mb-2">
                                                    <label for="nama" class="form-label">Nama</label>
                                                    <input type="text" class="form-control " id="nama"
                                                        placeholder="Masukan nama " autocomplete="off"name="nama"
                                                        value="{{ old('nama') }}">
                                                </div>
                                                @error('nama')
                                                    {{ $message }}
                                                @enderror

                                                {{-- Email --}}
                                                <div class="mb-2">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control " id="email"
                                                        placeholder="Masukan email" autocomplete="off" name="email"
                                                        value="{{ old('email') }}">
                                                </div>
                                                @error('email')
                                                    {{ $message }}
                                                @enderror

                                                {{-- Nomor Whatsapp --}}
                                                <div class="mb-2">
                                                    <label for="nomorhp" class="form-label">Nomor Whatapp</label>
                                                    <input type="text" class="form-control " id="nomorhp"
                                                        placeholder="Contoh : 0857xxxxxxxx" autocomplete="off"
                                                        name="nomor_hp" value="{{ old('nomor_hp') }}">
                                                </div>
                                                @error('nomor_hp')
                                                    {{ $message }}
                                                @enderror

                                                {{-- Alamat --}}
                                                <div class="mb-2">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control " id="alamat"
                                                        placeholder="Masukan alamat " autocomplete="off" name="alamat"
                                                        value="{{ old('alamat') }}">
                                                </div>
                                                @error('alamat')
                                                    {{ $message }}
                                                @enderror
                                            </div>

                                            <div class="col-lg-6">
                                                {{-- Username --}}
                                                <div class="mb-2">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" class="form-control " id="username"
                                                        placeholder="Masukan  Username" autocomplete="off"
                                                        name="username" value="{{ old('username') }}">
                                                </div>
                                                @error('username')
                                                    {{ $message }}
                                                @enderror

                                                {{-- Password --}}
                                                <div class="mb-2">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" class="form-control "
                                                        placeholder="Masukan password" id="password" name="password"
                                                        value="{{ old('password') }}" autocomplete="off">
                                                </div>
                                                @error('password')
                                                    {{ $message }}
                                                @enderror

                                                <div class="mb-3">
                                                    <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                                    <div class="col-auto">
                                                        <select class="form-select" id="jeniskelamin"
                                                            name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">>
                                                            <option selected>Pilih Jenis Kelamin..</option>
                                                            <option value="laki laki">Laki Laki</option>
                                                            <option value="perempuan">Perepuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="persetujuan" class="form-label">Persetujuan</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="persetujuan">
                                                        <label class="form-check-label" for="persetujuan">
                                                            Saya menyetujui semua persyaratan!
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mx-auto text-center">
                                                    <button type="submit"
                                                        class="btn btn-primary mb-3">Register!</button>
                                                </div>
                                            </div>

                                            <div class="col text-center mb-4">
                                                <p>Have account? <a style="text-decoration: none"
                                                        href="{{ route('login') }}">Login
                                                        here!</a></p>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
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
@if ($message = Session::get('failed'))
    <script>
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: ('{{ $message }}'),
        });
    </script>
@endif
