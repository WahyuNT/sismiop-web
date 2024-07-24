<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-6 ">
                <div class="header-left d-flex align-items-center">
                    <div class="menu-toggle-btn mr-15 d-lg-none d-block">
                        <button data-bs-toggle="modal" data-bs-target="#headerModal" id="menu-toggle"
                            class="main-btn primary-btn btn-hover">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>

                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6 d-flex justify-content-end">

                {{-- <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn text-end btn-danger">Keluar</button>
                </form> --}}

                <div class="dropdown">
                    <button class="btn btn-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        admin
                    </button>
                    <ul class="dropdown-menu dropdown-profil">
                        <li>
                            <a class="dropdown-item item-profil" href="{{ route('profile') }}">
                                <i class="fa-solid fa-user me-2 fa-sm"></i>Edit Profil
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item item-profil">
                                    <i class="fa-solid fa-arrow-right-from-bracket me-2 fa-sm"></i>Keluar
                                </button>
                            </form>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</header>
