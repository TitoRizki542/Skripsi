{{-- @extends('user.master.app')
@section('content')
    <section>
        <div class="container text-center mb-2 mt-3">
            <h2> Blog Informasi </h2>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                @foreach ($blog as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                                <a href="{{ route('blog.detail', ['id' => $item->id]) }}" class="d-block blur-shadow-image">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-lg" loading="lazy">
                                </a>
                            </div>

                            <h5>
                                <div class="text-dark font-weight-bold mt-4">{{ $item->judul }}</div>
                            </h5>
                            <p class="text-justify">
                                {!! $item->kutipan !!}
                            </p>
                            <a href="{{ route('blog.detail', ['id' => $item->id]) }}"
                                class="text-info text-sm icon-move-right mb-3">Baca selengkapnya
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection --}}


@include('layout.header')
@include('layout.navbar')

{{-- Blog  --}}
<section class="section__container blog__container">
    <h2 class="section__header">Blog</h2>
    <div class="blog__grid">
        @foreach ($blog as $item)
            <a href="{{ route('blog.detail', ['id' => $item->id]) }}">
                <div class="blog__card mb-2">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="img-blur-shadow">
                    <div class="blog__content">
                        <div class="blog__card__header">
                            <h4>{{ $item->judul }}</h4>
                        </div>
                        <p class="text-justify"> {!! $item->kutipan !!}</p>
                        <div class="">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>

                </div>
            </a>
        @endforeach
    </div>
</section>
@include('layout.footer')
