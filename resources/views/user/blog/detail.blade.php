@include('layout.header')
@include('layout.navbar')
<section class="section__container">
    <div class="detail__content">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="detail__card mb-3">
                            <img src="{{ asset('storage/' . $blog->gambar) }}" alt="img-blur-shadow">
                        </div>

                    </div>
                    <div class="text-center mb-4">
                        <h3>{{ $blog->judul }}</h3>
                    </div>
                    <div>
                        <p style="text-align: justify">Wayang kertas adalah seni pertunjukan tradisional Indonesia
                            yang
                            menggunakan
                            boneka-boneka yang
                            terbuat dari kertas sebagai tokoh utamanya. Boneka-boneka tersebut dipotong dan dibentuk
                            dengan
                            tangan secara hati-hati untuk menciptakan karakter-karakter yang beraneka ragam. Setiap
                            boneka
                            memiliki desain yang unik dan dihiasi dengan warna-warna cerah yang mencolok.</p>
                    </div>
                </div>

                <div class="text-center mb-4 mt-4">
                    <h4>Rekomendasi Paket Wisata</h4>
                </div>

                <div class="row">
                    @foreach ($paketwis as $item)
                        <div class="col-lg-3">

                            <a href="{{ route('wisata.detail', ['id' => $item->id]) }}">
                                <div class="popular__card mb-2">
                                    <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="img-blur-shadow">
                                    <div class="popular__content">
                                        <div class="popular__card__header">
                                            <p><strong>{{ $item->nama_paket }}</strong></p>
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
            </div>
        </div>
    </div>
</section>
@include('layout.footer')
