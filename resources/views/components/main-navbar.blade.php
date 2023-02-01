<nav class="navbar navbar-expand-lg navbar-dark bg-none mb-3" style="background-color: #39E54E">
    <div class="container">
        <img src="{{ asset('img/asset/logo2.png') }}">
        <a class="navbar-brand text-uppercase" href="{{ url('/') }}">
            SISTEM INFORMASI
            <span class="d-block">PENYALURAN BANSOS | KEC. PARUNG PANJANG</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') || Request::is('/*') ? 'active' : '' }} mx-3">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item {{ Request::is('pelayanan') || Request::is('pelayanan*') ? 'active' : '' }} mx-3">
                    <a class="nav-link" href="{{ url('pelayanan') }}">Publikasi</a>
                </li>
                <li class="nav-item {{ Request::is('cetak*') ? 'active' : '' }} mx-3">
                    <a class="nav-link" href="{{ url('cetak') }}">Cetak</a>
                </li>
                @auth
                    @can('umkm')
                        {{-- <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ url('dashboard/pelayanan') }}">Bansos</a>
                        </li> --}}
                    @elsecan('pemerintah')
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ url('pemerintah/umkm') }}">Dashboard</a>
                        </li>
                    @endcan
                    <li class="nav-item ml-3">
                        <form action="{{ url('logout') }}" method="post">
                            @csrf
                            <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Logout?')"
                                class="btn btn-success">Logout</button>
                        </form>
                    </li>
                @else
                    {{-- <li class="nav-item {{ Request::is('signup') ? 'active' : '' }} mx-3">
                        <a class="nav-link" href="{{ url('signup') }}">Sign Up</a>
                    </li> --}}
                    <li class="nav-item {{ Request::is('signin') ? 'active' : '' }} ms-3">
                        <a href="{{ url('signin') }}" class="btn btn-success" style="width: 100px;">Sign In</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
