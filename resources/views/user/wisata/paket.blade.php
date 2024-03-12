@include('layout.header')
@include('layout.navbar')
<section class="section__container">
    <div class="row">

        {{-- Bagian Detail Paket --}}
        <div class="col-lg-7">
            <div class="detail__content">
                <div class="detail__card mb-4">
                    <img src="{{ asset('storage/' . $paketwisata->thumbnail) }}" alt="destinasi1" />
                </div>
                <div class="row">
                    <div class="col-lg-8 mt-4">

                        <div class="mb-4">
                            <h4>{{ $paketwisata->nama_paket }}</h4>
                            <h5 style="color: rgb(255, 153, 0)"><i class="fa-solid fa-location-dot"></i><strong>
                                    {{ $paketwisata->alamat }}
                                </strong> </h5>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4">
                        <div class="">
                            <h4 class="text-start">Mulai dari</h4>
                            <div style="color: rgb(255, 153, 0)" class="text-start">
                                <h5><strong>@currency($paketwisata->harga)</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Bagian Reservasi Paket --}}
        <div class="col-lg-5">
            <div class="detail__content">
                <div>
                    <h5>Deskripsi</h5>
                    <p style="text-align: justify">Wayang kertas adalah seni pertunjukan tradisional Indonesia yang
                        menggunakan
                        boneka-boneka yang
                        terbuat dari kertas sebagai tokoh utamanya. Boneka-boneka tersebut dipotong dan dibentuk dengan
                        tangan secara hati-hati untuk menciptakan karakter-karakter yang beraneka ragam. Setiap boneka
                        memiliki desain yang unik dan dihiasi dengan warna-warna cerah yang mencolok.</p>
                </div>
                <div>
                    <h5>Fasilitas</h5>
                    <p style="text-align: justify">
                        - Alat dan bahan pengerjaan</br>
                        - Dokumentasi foto kegiatan</p>
                </div>
            </div>
        </div>
    </div>


    {{-- FORM RESERVASi --}}
    <h4 class="text-center mt-3">Lengkapi data reservasi</h4>
    <p class="text-center color-red"><i>*Pastikan semua formulir telah diisi</i></p>
    <form action="{{ route('pesanan.store', $paketwisata->id) }}" method="POST">
        @csrf
        <div class="row mt-4">
            <div class="col-lg-6 mt-4">
                <div class="mb-3">
                    <label for="tgl_pesan" class="form-label">Tanggal Pemesanan</label>
                    <input type="text" class="form-control" id="tgl_pesan" name="tanggal_pesanan"
                        value="{{ now() }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Pemesan</label>
                    <input type="nama" class="form-control" id="nama" name="nama"
                        placeholder="{{ auth()->user()->nama }}"readonly>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="{{ auth()->user()->email }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="nomorhp" class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control" id="nomorhp" name="nomor_hp"
                        placeholder="{{ auth()->user()->nomor_hp }}" readonly>
                </div>

            </div>
            <div class="col-lg-6 mt-4">
                <div class="mb-3">
                    <label for="tgl_datang" class="form-label">Tanggal Kedatangan</label>
                    <input type="date" class="form-control" id="tgl_datang" name="tanggal_kedatangan">
                </div>
                <div class="mb-3">
                    <label for="jam_datang" class="form-label">Jam Kedatangan</label>
                    <input type="time" class="form-control" id="jam_datang" name="jam_kedatangan">
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah Orang</label>
                    <input type="number" class="form-control" id="jumlah_orang" min="0" name="jumlah_orang"
                        onchange="hitungTotal(this.value)">
                </div>
                <div class="mb-3">
                    <label for="total_harga" class="form-label">Total Harga</label>
                    <input type="text" class="form-control" id="total_harga" name="total_harga" readonly>
                </div>
            </div>
            <div class="text-center mt-4 mb-4">
                <a href="{{ route('wisata.index') }}" class="btn btn-primary ">Kembali</a>
                <button type="submit" class="btn btn-warning">Simpan</button>
            </div>
    </form>
    </div>
</section>
<script>
    if (document.querySelector(".datepicker")) {
        flatpickr(".datepicker", {});
    }
</script>
<script>
    const harga = {{ $paketwisata->harga }}
    const total_hargaElement = document.getElementById("total_harga");

    function hitungTotal(jmlOrang) {
        total_hargaElement.value = jmlOrang * harga
    }
</script>
@include('layout.footer')
