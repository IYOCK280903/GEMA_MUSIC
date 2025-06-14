<nav class="main-nav">
    <ul>
        <li><a href="#">Beranda</a></li>
        <li class="dropdown">
            <a href="#">profile sekolah <span class="arrow-down"></span></a>
            {{-- Konten dropdown akan diletakkan di sini --}}
        </li>
        <li><a href="#">Jadwal</a></li>
        <li class="dropdown {{ request()->routeIs('enrollment.index') ? 'active' : '' }}">
            <a href="{{ route('enrollment.index') }}">Pendaftaran <span class="arrow-down"></span></a>
            {{-- Konten dropdown akan diletakkan di sini --}}
        </li>
        <li class="dropdown">
            <a href="#">Pengaturan <span class="arrow-down"></span></a>
            {{-- Konten dropdown akan diletakkan di sini --}}
        </li>
    </ul>
</nav>