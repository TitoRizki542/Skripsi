@include('layout.header')
@include('layout.navbar')

{{-- Package Section --}}
<section class="section__container popular__container">
    <h2 class="section__header">Paket Wisata</h2>
    <div class="row">
        <div class="col-lg-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($paketwisata as $item)
            <div class="col-lg-4 mt-4">
                <a href="{{ route('wisata.detail', ['id' => $item->id]) }}">
                    <div class="popular__card mb-2">
                        <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="img-blur-shadow">
                        <div class="popular__content">
                            <div class="popular__card__header">
                                <h4>{{ $item->nama_paket }}</h4>
                            </div>
                            <div class="">
                                <h4>@currency($item->harga)</h4>
                            </div>
                            <div class="">
                                <p>{{ $item->alamat }}</p>

                                @auth
                                    <div class="">
                                        <a href="{{ route('wisata.detail', ['id' => $item->id]) }}"
                                            class="btn btn-primary">Reservasi</a>
                                    </div>
                                @else
                                    <div class="">
                                        <a href="{{ route('login') }}" class="btn btn-primary">Reservasi</a>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>
@include('layout.footer')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if ($message = Session::get('success'))
    <script>
        Swal.fire({
            icon: "success",
            title: "Berhasil!",
            text: ('{{ $message }}'),
        });
    </script>
@endif
