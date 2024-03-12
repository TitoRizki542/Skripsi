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
    <title>Login page</title>

    <link rel="stylesheet" href="{{ URL::asset('user/css/app.css') }}">
</head>

<body>
    <div class="login-section">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card card shadow ">
                        <div class="row">
                            <div class="col-lg-6 img" style="background-image: url(user/image/wayang2.png)">
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="text-center mt-4 mb-4">
                                    <h4>Login</h4>
                                </div>
                                <div class="container-fluid">
                                    <form action="{{ route('login-proses') }}" method="POST">
                                        @csrf
                                        {{-- Username --}}
                                        <div class="mb-2">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control " id="username"
                                                placeholder="Masukan  Username" autocomplete="off" name="username"
                                                value="{{ old('username') }}">
                                        </div>
                                        @error('username')
                                            {{ $message }}
                                        @enderror

                                        {{-- Password --}}
                                        <div class="mb-2">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control " placeholder="Masukan password"
                                                id="password" name="password" value="{{ old('password') }}"
                                                autocomplete="off">
                                        </div>
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                        <div class="">

                                            <button type="submit" class="btn btn-primary mb-4 mt-4">Login!</button>
                                            <div class="row text-center">
                                                <div class="col text-center mb-4">
                                                    <p>Dont have account? <a style="text-decoration: none"
                                                            href="{{ route('register') }}">Register here!</a></p>
                                                </div>
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
