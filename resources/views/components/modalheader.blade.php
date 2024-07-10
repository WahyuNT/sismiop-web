<!-- Modal -->
<div class="modal fade" id="headerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header py-1 d-flex justify-content-center">
                <h1 class="modal-title  text-primary" id="exampleModalLabel">SISMIOP</h1>
            </div>
            <div class="modal-body">

                <div class="card border-0 modal-body">
                    <a href="{{ route('index') }}">
                        <div
                            class="card card-header-list {{ request()->routeIs('index') ? 'card-header-list-active' : '' }}">
                            <div class="py-2">
                                <div class="d-flex align-items-center justify-content-center flex-wrap">
                                    <i class="fa-solid fa-house me-2"></i>
                                    <p class="text m-0">Beranda</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('data.spop') }}">
                        <div
                            class="card card-header-list {{ request()->routeIs('data.spop') ? 'card-header-list-active' : '' }}">
                            <div class="py-2">
                                <div class="d-flex align-items-center justify-content-center flex-wrap">
                                    <i class="fa-solid fa-book-atlas me-2"></i>
                                    <p class="text m-0">Data SPOP</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('data.lspop') }}" style="all:unset">
                        <div
                            class="card card-header-list {{ request()->routeIs('data.lspop') ? 'card-header-list-active' : '' }}">
                            <div class="py-2">
                                <div class="d-flex align-items-center justify-content-center flex-wrap">
                                    <i class="fa-solid fa-book me-2"></i>
                                    <p class="text m-0">Data LSPOP</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('tambah.spop') }}" style="all:unset">
                        <div
                            class="card card-header-list {{ request()->routeIs('tambah.spop') ? 'card-header-list-active' : '' }}">
                            <div class="py-2">
                                <div class="d-flex align-items-center justify-content-center flex-wrap">
                                    <i class="fa-solid fa-plus me-2"></i>
                                    <p class="text m-0">Tambah Data SPOP</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('tambah.lspop') }}" style="all:unset">
                        <div
                            class="card card-header-list {{ request()->routeIs('tambah.lspop') ? 'card-header-list-active' : '' }}">
                            <div class="py-2">
                                <div class="d-flex align-items-center justify-content-center flex-wrap">
                                    <i class="fa-solid fa-plus me-2"></i>
                                    <p class="text m-0">Tambah Data LSPOP</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('data.terhapus') }}" style="all:unset">
                        <div
                            class="card card-header-list {{ request()->routeIs('data.terhapus') ? 'card-header-list-active' : '' }}">
                            <div class="py-2">
                                <div class="d-flex align-items-center justify-content-center flex-wrap">
                                    <i class="fa-solid fa-trash-can me-2"></i>
                                    <p class="text m-0">Data Terhapus</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        </a>
    </div>

</div>
</div>
</div>
