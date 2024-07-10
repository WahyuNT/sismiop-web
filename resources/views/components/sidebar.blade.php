<aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
        <h2 class="text-primary fw-bold text-center">SISIMIOP</h2>
    </div>
    <nav class="sidebar-nav">
        <ul>

            <li class="nav-item d-flex align-items-center">
                <a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'card-sidebar-active' : '' }}">
                    <i class="fa-solid fa-house me-2"></i></i>
                    <p class="text m-0">Beranda</p>
                </a>
            </li>
            <li class="nav-item d-flex align-items-center">
                <a href="{{ route('data.spop') }}"
                    class="{{ request()->routeIs('data.spop') ? 'card-sidebar-active' : '' }}">
                    <i class="fa-solid fa-book-atlas me-2 "></i>
                    <p class="text m-0">Data SPOP</p>
                </a>
            </li>
            <li class="nav-item d-flex align-items-center ">

                <a href="{{ route('data.lspop') }}"
                    class="{{ request()->routeIs('data.lspop') ? 'card-sidebar-active' : '' }}">
                    <i class="fa-solid fa-book me-2"></i>
                    <p class="text m-0">Data LSPOP</p>
                </a>
            </li>
            <li class="nav-item d-flex align-items-center">
                <a href="{{ route('tambah.spop') }}"
                    class="{{ request()->routeIs('tambah.spop') ? 'card-sidebar-active' : '' }}">
                    <i class="fa-solid fa-plus me-2"></i>
                    <p class="text m-0">Tambah Data SPOP</p>
                </a>
            </li>
            <li class="nav-item d-flex align-items-center ">
                <a href="{{ route('tambah.lspop') }}"
                    class="{{ request()->routeIs('tambah.lspop') ? 'card-sidebar-active' : '' }}">
                    <i class="fa-solid fa-plus me-2"></i>
                    <p class="text m-0">Tambah Data LSPOP</p>
                </a>
            </li>
            <li class="nav-item d-flex align-items-center ">
                <a href="{{ route('data.terhapus') }}"
                    class="{{ request()->routeIs('data.terhapus') ? 'card-sidebar-active' : '' }}">
                    <i class="fa-solid fa-trash-can me-2"></i>
                    <p class="text m-0">Data Terhapus</p>
                </a>
            </li>

        </ul>
    </nav>

</aside>
