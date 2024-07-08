<div>
    @if ($lspopEdit == false && $spopEdit == false)
        <div class="d-flex flex-wrap pt-5 justify-content-center">
            <div class="col-lg-3 px-3 mb-4 col-6 mt-5">
                <div class="card card-dashboard py-3 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center ">
                            <img src="{{ asset('img/lspop-trash.webp') }}" class="img-dashboard" alt="">
                        </div>
                        <h5 class="mb-2 text-center mt-3">Data LSPOP Terhapus</h5>

                        <div class="d-flex justify-content-center">

                            <button wire:click="editLspop" class="btn btn-primary px-4  rounded-pill">Buka</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-3 mb-4 col-6 mt-5">
                <div class="card card-dashboard py-3 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center ">
                            <img src="{{ asset('img/spop-trash.webp') }}" class="img-dashboard" alt="">
                        </div>
                        <h5 class="mb-2 text-center mt-3">Data SPOP Terhapus</h5>

                        <div class="d-flex justify-content-center">

                            <button wire:click="editSpop" class="btn btn-primary px-4  rounded-pill">Buka</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($lspopEdit == true && $spopEdit == false)
        <div class="div">
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <div class="title col-6 ">
                            <div class="d-flex flex-wrap align-items-center">
                                <button class="btn btn-primary me-2" wire:click="back"><i
                                        class="fa-solid fa-arrow-left"></i></button>
                                <h3><b>Data LSPOP</b></h3>
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <div class="col-3 px-3">
                                <select wire:model="pagination" id="pagination" wire:model="pagination"
                                    name="pagination" class="form-select">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="col-5">
                                <input wire:model="search" type="text" class="form-control"
                                    placeholder="Cari Data Terhapus">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-elements-wrapper">
                <div class="row">
                    <div class="card card-form">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">No Formulir</th>
                                    <th scope="col">Petugas Pendata</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($lspop as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->no_formulir }}</td>
                                        <td>{{ $item->{'57_nama_jelas'} }}</td>
                                        <td>{{ $item->{'59_tanggal_penelitian'} }}</td>
                                        <td class="text-center d-flex flex-wrap justify-content-center">
                                            <a href="{{ route('detail.lspop', ['id' => $item->id]) }}">
                                                <button class="btn btn-primary rounded-pill mx-1">Detail</button>
                                            </a>
                                            <div class="div">
                                                <button type="button" wire:click="deletePermanenLspop({{ $item->id }})"
                                                    class="btn btn-danger rounded-pill mx-1">Hapus</button>
                                            </div>
                                            <div class="div">
                                                <button type="button" wire:click="pulihkanLspop({{ $item->id }})"
                                                    class="btn btn-success rounded-pill mx-1">Pulihkan Data</button>
                                            </div>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>Tidak ada data</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-3">
                            {{ $lspop->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($spopEdit == true && $lspopEdit == false)
        <div class="div">
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <div class="title col-6 ">
                            <div class="d-flex flex-wrap align-items-center">
                                <button class="btn btn-primary me-2" wire:click="back"><i
                                        class="fa-solid fa-arrow-left"></i></button>
                                <h3><b>Data SPOP</b></h3>
                            </div>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <div class="col-3 px-3">
                                <select wire:model="pagination" id="pagination" wire:model="pagination"
                                    name="pagination" class="form-select">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="col-5">
                                <input wire:model="search" type="text" class="form-control"
                                    placeholder="Cari Data Terhapus">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-elements-wrapper">
                <div class="row">
                    <div class="card card-form">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">No Formulir</th>
                                    <th scope="col">Petugas Pendata</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($spop as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->no_formulir }}</td>
                                        <td>{{ $item->{'31_nama_jelas_petugas'} }}</td>
                                        <td>{{ $item->{'29_tanggal_petugas'} }}</td>
                                        <td class="text-center d-flex flex-wrap justify-content-center">

                                            <a href="{{ route('detail.spop', ['id' => $item->id]) }}">
                                                <button class="btn btn-primary rounded-pill mx-1">Detail</button>
                                            </a>
                                            <div class="div">
                                                <button type="button" wire:click="deletePermanenSpop({{ $item->id }})"
                                                    class="btn btn-danger rounded-pill mx-1">Hapus</button>
                                            </div>
                                            <div class="div">
                                                <button type="button" wire:click="pulihkanSpop({{ $item->id }})"
                                                    class="btn btn-success rounded-pill mx-1">Pulihkan Data</button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>Tidak ada data</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-3">
                            {{ $lspop->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif




</div>
