@include('layout.header')
@include('layout.navbar')
<section class="section__container popular__container">
    <div class="row mb-4">
        <div class="col-lg-8">
            <div class="text-center">
                <div class="pt-4 mt-4 mb-4">
                    <h2>Nagari Wayang Kertas</h2>
                </div>
                <div style="text-align: justify">
                    <p> Nagari Wayang Kertas adalah satu dari sekian banyak destinasi wisata yang ada di Desa Candirejo.
                        Nagari Wayang Kertas ini merupakan ruang belajar membuat wayang dengan bahan dasar kertas
                        sebagai media pembuatannya. Pembuatan Wayang Kertas ini sudah di mulai sejak tahun 90 oleh Bapak
                        Sukoco yang sekaligus sebagai penggerak Wayang Kertas di Desa Candirejo. Nagari Wayang Kertas
                        ini di populerkan dengan membuat tokoh dalam cerita pewayangan, selain itu juga membuat wayang
                        dengan aneka kreasi bentuk lain. Nagari wayang kertas sendiri juga dijadikan tujuan wisatawan
                        lokal yang datang di Desa Wisata Candirejo untuk belajar membuat wayang yang sekaligus juga
                        sebagai wadah untuk melestarikan keberadaan sebuah wayang.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="text-center">
                <img src="{{ URL::asset('user/image/wayang1.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
@include('layout.footer')
