    <nav>
        <div class="nav__logo" `>Wayang Kertas</div>
        <ul class="nav__links">
            <li class="link"><a href="{{ route('user.index') }}">Beranda</a></li>
            <li class="link"><a href="{{ route('wisata.index') }}">Paket</a></li>
            <li class="link"><a href="{{ route('user.blog') }}">Blog</a></li>
            <li class="link"><a href="{{ route('tentang.index') }}">Tentang</a></li>
        </ul>
        <ul class="nav__links">
            @auth
                <div class="dropdown">
                    <button class="btn btn-gradient dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> {{ auth()->user()->nama }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i> Profil</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-list"></i> Pesanan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"><i
                                    class="fa-solid fa-arrow-right-from-bracket"></i>
                                Logout</a></li>
                    </ul>
                </div>
                {{-- <li class="link"><a href="#"><i class="fa-solid fa-user"></i> {{ auth()->user()->nama }}</a></li> --}}
            @else
                <li class="link"><a href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i> Masuk</a>
                </li>

                <li class="link"><a href="{{ route('register') }}"><i class="fa-solid fa-pen-to-square"></i> Daftar</a>
                </li>
            @endauth
        </ul>
    </nav>
