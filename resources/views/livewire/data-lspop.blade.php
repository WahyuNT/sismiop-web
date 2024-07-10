<div>
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-between align-items-center mb-3 flex-wrap">
                <h3 class="mb-2 mb-lg-0"><b>DATA LSPOP</b></h3>

                <div class="col-12 col-lg-6 d-flex justify-content-lg-end justify-content-between ">
                    <div class="col-lg-4 col-3 px-lg-1 pe-1">
                        <select class="w-100 form-select" wire:model="jenisTransaksi" id="jenisTransaksi"
                            wire:model="jenisTransaksi" name="jenisTransaksi" class="form-select">
                            <option value="" selected>Semua Jenis</option>
                            <option value="1">Perekaman Data</option>
                            <option value="2">Pemutakhiran Data</option>
                            <option value="3">Penghapusan Data</option>

                        </select>
                    </div>
                    <div class="col-lg-3 col-3 px-lg-1 pe-1 ps-1">
                        <select class="w-100 form-select" wire:model="pagination" id="pagination"
                            wire:model="pagination" name="pagination" class="form-select">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="col-lg-5 col-6 ps-lg-1 ps-1 ">
                        <input wire:model="search" type="text" class="form-control" placeholder="Cari Data LSPOP">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="form-elements-wrapper">
        <div class="row">
            <div class="card card-form">
                {{-- <div class="table-responsive">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">No Formulir</th>
                                <th scope="col">NOP</th>
                                <th scope="col">Petugas Pendata</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lspop as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->no_formulir }}</td>
                                    <td>839201302{{ $loop->iteration }}</td>
                                    <td>{{ $item->{'57_nama_jelas'} }}</td>
                                    <td>{{ $item->{'59_tanggal_penelitian'} }}</td>
                                    <td class="text-center d-flex flex-wrap justify-content-center">
                                        @if ($confirmDelete != $item->id)
                                            <a href="{{ route('detail.lspop', ['id' => $item->id]) }}">
                                                <button class="btn btn-primary rounded-pill mx-1">Detail</button>
                                            </a>
                                            <div class="div">

                                                <button type="button" wire:click="confirmDelete({{ $item->id }})"
                                                    class="btn btn-danger rounded-pill mx-1">Hapus</button>
                                            </div>
                                        @else
                                            <button type="button" wire:click="batalDelete"
                                                class="btn btn-danger rounded-pill mx-1">Batal</button>
                                            <button type="button" wire:click="delete({{ $item->id }})"
                                                class="btn btn-success rounded-pill mx-1">Hapus</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div> --}}
                <div class="table-responsive">
                    <div class="table-wrapper table-responsive">
                        <table style="width: 100%" class="table striped-table ">
                            <thead>
                                <tr>
                                    <th class="pe-2">
                                        No
                                    </th>
                                    <th class="pe-4">
                                        Jenis Transaksi
                                    </th>
                                    <th class="pe-4">
                                        No Formulir
                                    </th>
                                    <th class="pe-5">
                                        NOP
                                    </th>
                                    <th class="pe-4">
                                        Petugas Pendata
                                    </th>
                                    <th class="pe-4">
                                        Tanggal Pendata
                                    </th>
                                    <th class="text-center">
                                        Aksi
                                    </th>
                                </tr>
                                <!-- end table row-->
                            </thead>
                            <tbody>
                                @foreach ($lspop as $item)
                                    <tr>
                                        <th>{{ ($lspop->currentPage() - 1) * $lspop->perPage() + $loop->iteration }}
                                        </th>
                                        <td class="">
                                            @if ($item->{'1_jenis_transaksi'} == '1')
                                                <span class="badge text-bg-warning rounded-pill">Perekaman Data</span>
                                            @elseif($item->{'1_jenis_transaksi'} == '2')
                                                <span class="badge text-bg-success rounded-pill">Pemutakhiran
                                                    Data</span>
                                            @elseif($item->{'1_jenis_transaksi'} == '3')
                                                <span class="badge text-bg-danger rounded-pill">Penghapusan Data</span>
                                            @elseif($item->{'1_jenis_transaksi'} == '4')
                                                <span class="badge text-bg-info rounded-pill">Penilaian Individu</span>
                                            @endif

                                        </td>
                                        <td class="">{{ $item->no_formulir }}</td>
                                        <td class="">
                                            {{ $item->{'2_nop_provinsi'} }}
                                            {{ $item->{'2_nop_kabupaten'} }}
                                            {{ $item->{'2_nop_kecamatan'} }} {{ $item->{'2_nop_gampong'} }}
                                            {{ $item->{'2_nop_blok'} }} {{ $item->{'2_nop_kode'} }}
                                        </td>
                                        <td class="">{{ $item->{'57_nama_jelas'} }}</td>
                                        <td class="">{{ $item->{'55_tanggal_pendataan'} }}</td>
                                        <td
                                            class="text-center
                                        d-flex flex-wrap justify-content-center gap-lg-0 gap-1">
                                            @if ($confirmDelete != $item->id)
                                                <div class="div">

                                                    <a href="{{ route('detail.lspop', ['id' => $item->id]) }}">
                                                        <button type="button"
                                                            class="btn btn-sm btn-primary rounded-pill mx-1">Detail</button>
                                                    </a>
                                                </div>
                                                <div class="div">
                                                    <button type="button"
                                                        wire:click="confirmDelete({{ $item->id }})"
                                                        class="btn btn-sm btn-danger rounded-pill mx-1">Hapus</button>
                                                </div>
                                            @else
                                                <button type="button" wire:click="batalDelete"
                                                    class="btn btn-sm btn-danger rounded-pill mx-1">Batal</button>
                                                <button type="button" wire:click="delete({{ $item->id }})"
                                                    class="btn btn-sm btn-success rounded-pill mx-1">Hapus</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    {{ $lspop->links() }}
                </div>
            </div>
        </div>
    </div>

</div>
