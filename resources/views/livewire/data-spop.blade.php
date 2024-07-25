<div>
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-between align-items-center mb-3 flex-wrap">
                <div class="col">
                    <h3 class="mb-2 mb-lg-0"><b>DATA SPOP</b></h3>
                </div>
                <div class="col d-flex justify-content-end d-lg-none d-block">
                    <div class="div">
                        <a href="{{ route('tambah.spop') }}">
                            <button class="btn btn-primary btn-sm rounded-pill ">Tambah Data</button>
                        </a>
                    </div>
                </div>

                <div
                    class="col-12 mt-3 mt-lg-0 col-lg-6 d-flex align-items-center  justify-content-lg-end justify-content-between ">
                    <div class="col-lg-3 col-6 d-lg-block d-none">
                        <div class="px-lg-1 pe-1 ps-1 d-flex  justify-content-end">
                            <a href="{{ route('tambah.spop') }}">
                                <button class="btn btn-primary btn-sm rounded-pill">Tambah Data</button>
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-6 px-lg-1 pe-1 ps-1">
                        <select class="w-100 form-select" wire:model="pagination" id="pagination"
                            wire:model="pagination" name="pagination" class="form-select">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="col-lg-5 col-6 ps-lg-1 ps-1 ">
                        <input wire:model="search" type="text" class="form-control" placeholder="Cari Data SPOP">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="div">

        <div class="card card-form ">
            <div class="table-responsive">
                <div class="table-wrapper table-responsive">
                    <table style="width: 100%" class="table striped-table ">
                        <thead>
                            <tr>
                                <th class="pe-2">
                                    No
                                </th>
                                <th class="pe-4">
                                    No Formulir
                                </th>
                                <th class="pe-5">
                                    NOP
                                </th>
                                <th class="pe-4">
                                    User
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
                            @foreach ($spop as $item)
                                <tr>
                                    <th>{{ ($spop->currentPage() - 1) * $spop->perPage() + $loop->iteration }}</th>

                                    <td class="">{{ $item->no_formulir }}</td>
                                    <td class="">
                                        {{ $item->{'2_nop_provinsi'} }}
                                        {{ $item->{'2_nop_kabupaten'} }}
                                        {{ $item->{'2_nop_kecamatan'} }} {{ $item->{'2_nop_gampong'} }}
                                        {{ $item->{'2_nop_blok'} }} {{ $item->{'2_nop_kode'} }}
                                    </td>
                                    <td class="">{{ $item->user->username }}</td>
                                    <td class="">{{ $item->{'29_tanggal_petugas'} }}</td>
                                    <td
                                        class="text-center
                                        d-flex flex-wrap justify-content-center gap-lg-0 gap-1">
                                        @if ($confirmDelete != $item->id)
                                            <a href="{{ route('detail.spop', ['id' => $item->id]) }}">
                                                <button class="btn btn-sm btn-primary rounded-pill mx-1">Detail</button>
                                            </a>
                                            <div class="div">

                                                <button type="button" wire:click="confirmDelete({{ $item->id }})"
                                                    class="btn btn-sm btn-danger rounded-pill mx-1">Hapus</button>
                                            </div>
                                        @else
                                            <div class="d-flex flex-column">

                                                <small>Apa anda yakin ?</small>
                                                <div class="d-flex justify-content-center gap-2 mt-1">
                                                    <div class="d-flex">

                                                        <button type="button" wire:click="batalDelete"
                                                            class="btn btn-sm btn-danger rounded-pill mx-1">Batal</button>
                                                        <button type="button" wire:click="delete({{ $item->id }})"
                                                            class="btn btn-sm btn-success rounded-pill mx-1">Hapus</button>
                                                    </div>
                                                </div>
                                            </div>
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
                {{ $spop->links() }}
            </div>
        </div>

    </div>

</div>
