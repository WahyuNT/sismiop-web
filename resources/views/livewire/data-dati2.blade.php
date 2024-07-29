<div>
    <div>
        <h4 class="text-center">Data Dati 2</h4>
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-12 d-flex justify-content-between align-items-center mb-3 flex-wrap">
                    <div class="col d-flex justify-content-start">
                        <div class="px-lg-1 pe-1 ps-1 d-flex  justify-content-end">
                            <a href="{{ route('berita.tambah') }}">
                                <button class="btn badge btn-primary btn-sm rounded-pill">Tambah Dati 2</button>
                            </a>
                        </div>
                    </div>

                    <div
                        class="col-12 mt-3 mt-lg-0 col-lg-6 d-flex align-items-center  justify-content-lg-end justify-content-between ">

                        <div class="col-lg-4 col-6 px-lg-1 pe-1 ps-1">
                            <select class="w-100 form-select" wire:model="pagination" id="pagination"
                                wire:model="pagination" name="pagination" class="form-select">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div class="col-lg-8 col-6 ps-lg-1 ps-1 ">
                            <input wire:model="search" type="text" class="form-control" placeholder="Cari Dati 2">
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
                                    <th class="pe-5">
                                        NAMA KECAMATAN
                                    </th>
                                    <th class="pe-5">
                                        DATI 2
                                    </th>
                                    <th class="text-center">
                                        Aksi
                                    </th>
                                </tr>
                                <!-- end table row-->
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <th>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</th>
                                        <td class="">{{ $item->NM_DATI2 }}</td>
                                        <td class="">{{ $item->KD_PROPINSI }}</td>

                                        <td
                                            class="text-center
                                            d-flex flex-wrap justify-content-center ">
                                            @if ($confirmDelete != $item->id)
                                                <a href="{{ route('berita.edit', $item->id) }}">
                                                    <button
                                                        class="btn badge btn-primary rounded-pill mx-1">Edit</button>
                                                </a>
                                                <div class="div">
                                                    <button type="button"
                                                        wire:click="confirmDelete({{ $item->id }})"
                                                        class="btn badge btn-danger rounded-pill mx-1">Hapus</button>
                                                </div>
                                            @else
                                                <div class="d-flex flex-column">

                                                    <small>Apa anda yakin ?</small>
                                                    <div class="d-flex justify-content-center gap-2 mt-1">
                                                        <div class="d-flex">

                                                            <button type="button" wire:click="batalDelete"
                                                                class="btn badge btn-danger rounded-pill mx-1">Batal</button>
                                                            <button type="button"
                                                                wire:click="delete({{ $item->id }})"
                                                                class="btn badge btn-success rounded-pill mx-1">Hapus</button>
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
                    {{-- {{ $spop->links() }} --}}
                </div>
            </div>

        </div>
    </div>

</div>
