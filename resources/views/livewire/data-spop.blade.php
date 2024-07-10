<div>
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-between align-items-center mb-3">
                <h3 class="m-0"><b>DATA SPOP</b></h3>
                <div class="col-6 d-flex justify-content-end ">
                    <div class="col-lg-3 col-6 px-lg-3 px-1">
                        <select class="w-100 form-select" wire:model="pagination" id="pagination" wire:model="pagination"
                            name="pagination" class="form-select">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="col-lg-5 col-6">
                        <input wire:model="search" type="text" class="form-control" placeholder="Cari Data SPOP">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="div">

        <div class="card card-form ">
            <div class="table-responsive">
                {{-- <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Formulir</th>
                            <th>NOP</th>
                            <th>Petugas Pendata</th>
                            <th>Tanggal Pendata</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($spop as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $item->no_formulir }}</td>
                                <td>{{ $item->{'2_nop_provinsi'} }} {{ $item->{'2_nop_kabupaten'} }}
                                    {{ $item->{'2_nop_kecamatan'} }} {{ $item->{'2_nop_gampong'} }}
                                    {{ $item->{'2_nop_blok'} }} {{ $item->{'2_nop_kode'} }}</td>
                                <td>{{ $item->{'31_nama_jelas_petugas'} }}</td>
                                <td>{{ $item->{'29_tanggal_petugas'} }}</td>
                                <td class="text-center d-flex flex-wrap justify-content-center">
                                    @if ($confirmDelete != $item->id)
                                        <a href="{{ route('detail.spop', ['id' => $item->id]) }}">
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
                </table> --}}
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
                                    <td class="">{{ $item->{'31_nama_jelas_petugas'} }}</td>
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
                {{ $spop->links() }}
            </div>
        </div>

    </div>

</div>
