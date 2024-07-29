<div>
    @if ($add == false)
        @if ($idEdit == null)
            <div>
                <h4 class="text-center">Data Dati 2</h4>
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex justify-content-between align-items-center mb-3 flex-wrap">
                            <div class="col d-flex justify-content-start">
                                <div class="px-lg-1 pe-1 ps-1 d-flex  justify-content-end">

                                    <button wire:click="addTrue" class="btn badge btn-primary btn-sm rounded-pill">Tambah
                                        Dati 2</button>
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
                                    <input wire:model="search" type="text" class="form-control"
                                        placeholder="Cari Dati 2">
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
                                                NAMA DATI2
                                            </th>
                                            <th class="pe-5">
                                                PROVINSI
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
                                                <th>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}
                                                </th>
                                                <td class="">{{ $item->NM_DATI2 }}</td>
                                                <td class="">{{ $item->provinsi->NM_PROPINSI }}</td>

                                                <td
                                                    class="text-center
                                            d-flex flex-wrap justify-content-center ">
                                                    @if ($confirmDelete != $item->id)
                                                      
                                                        <button wire:click="edit({{ $item->id }})"
                                                            class="btn badge btn-primary rounded-pill mx-1">Edit</button>
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
                            {{ $data->links() }}
                        </div>
                    </div>

                </div>
            </div>
        @elseif($idEdit != null)
        <div class="div">
            <div class="d-flex flex-wrap align-items-center">
                <button wire:click="back" class="btn btn-primary me-2"><i class="fa-solid fa-arrow-left"></i></button>
                <h4>Tambah Dati 2</h4>
            </div>
            <div class="col-lg-5 col-6 mb-2  mt-3">
                <label class="text-black  mb-1" for="2_nop_kabupaten">Nama Dati 2</label>
                <input required class="form-control" wire:model.defer="NM_DATI2" name="2_nop_kabupaten" type="text"
                    placeholder="Masukkan Nama Dati2" />
                @error('NM_DATI2')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-lg-5 col-6 mb-2  mt-3">
                <label class="text-black  mb-1" for="2_nop_kabupaten">Provinsi</label>
                <select required wire:model.defer="KD_PROPINSI" class="form-select " aria-label=". example">
                    <option value="" selected>Pilih Prov</option>
                    @foreach ($provinsi as $item)
                        <option value="{{ $item->id }}">{{ $item->NM_PROPINSI }}</option>
                    @endforeach
                </select>
                @error('KD_PROPINSI')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button wire:click="update" class="btn btn-primary">Simpan</button>
        @endif
    @else
        <div class="div">
            <div class="d-flex flex-wrap align-items-center">
                <button wire:click="back" class="btn btn-primary me-2"><i class="fa-solid fa-arrow-left"></i></button>
                <h4>Tambah Dati 2</h4>
            </div>
            <div class="col-lg-5 col-6 mb-2  mt-3">
                <label class="text-black  mb-1" for="2_nop_kabupaten">Nama Dati 2</label>
                <input required class="form-control" wire:model.defer="NM_DATI2" name="2_nop_kabupaten" type="text"
                    placeholder="Masukkan Nama Dati2" />
                @error('NM_DATI2')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-lg-5 col-6 mb-2  mt-3">
                <label class="text-black  mb-1" for="2_nop_kabupaten">Provinsi</label>
                <select required wire:model.defer="KD_PROPINSI" class="form-select " aria-label=". example">
                    <option value="" selected>Pilih Prov</option>
                    @foreach ($provinsi as $item)
                        <option value="{{ $item->id }}">{{ $item->NM_PROPINSI }}</option>
                    @endforeach
                </select>
                @error('KD_PROPINSI')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button wire:click="simpan" class="btn btn-primary">Simpan</button>
        </div>
    @endif
</div>
