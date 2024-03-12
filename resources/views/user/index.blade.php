@include('layout.header')
@include('layout.navbar')
<style>
    .header__image__container {
        position: relative;
        min-height: 500px;
        background-image: linear-gradient(to right,
                rgba(52, 53, 90, 0.9),
                rgba(223, 223, 223, 0)), url("user/image/candi.jpg");
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 2rem;
    }
</style>
<header class="section__container header__container">
    <div class="header__image__container">
        <div class="header__content">
            <h1>Nagari Wayang Kertas</h1>
            <h2>Sangen Candirejo</h2>
            <p>Book Hotels, Flights and stay packages at lowest price.</p>
        </div>
    </div>
</header>

{{-- Paket wisata --}}
<section class="section__container popular__container">
    <h2 class="section__header">Paket Wisata</h2>
    <div class="row">
        <div class="col-lg-4">
            <div class="popular__card">
                <img src="{{ URL::asset('user') }}/image/hotel-1.jpg" alt="popular hotel" />
                <div class="popular__content">
                    <div class="popular__card__header">
                        <h4>The Plaza Hotel</h4>
                        <h4>$499</h4>
                    </div>
                    <p>New York City, USA</p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('wisata.index') }}">
                <h6>Lihat Semua...</h6>
            </a>
        </div>

    </div>
</section>

{{-- Blog  --}}
<section class="section__container blog__container">
    <h2 class="section__header">Blog</h2>
    <div class="row">
        <div class="col-lg-4">
            <div class="blog__card">
                <img src="{{ URL::asset('user') }}/image/hotel-1.jpg" alt="popular hotel" />
                <div class="blog__content">
                    <div class="blog__card__header">
                        <h4>The Plaza Hotel</h4>
                        <h4>$499</h4>
                    </div>
                    <p>New York City, USA</p>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('user.blog') }}">
                <h6>Lihat Semua...</h6>
            </a>
        </div>
    </div>
</section>

{{-- Blog  --}}
<section class="section__container blog__container">
    <h2 class="section__header">Tentang</h2>

</section>
@include('layout.footer')

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
