<div>
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-between align-items-center mb-3 flex-wrap">
                <h3 class="mb-2 mb-lg-0"><b>DATA AKUN</b></h3>

                <div class="col-12 col-lg-6 d-flex justify-content-lg-end justify-content-between ">
                    <div class="col-lg-4 col-3 px-lg-1 pe-1">
                        <select class="w-100 form-select" wire:model="role" id="role" wire:model="role" name="role"
                            class="form-select">
                            <option value="" selected>Semua Role</option>
                            <option value="1">Super Admin</option>
                            <option value="2">Admin</option>

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
                        <input wire:model="search" type="text" class="form-control" placeholder="Cari Data Akun">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card card-form mt-3">
        <div class="card-body">
            <div class="table-responsive">
                <div class="table-wrapper table-responsive">
                    <table style="width: 100%" class="table striped-table ">
                        <thead>
                            <tr>
                                <th class="text-center pe-2">
                                    No
                                </th>
                                <th class="text-center pe-4">
                                    Username
                                </th>
                                <th class="text-center pe-4">
                                    Email
                                </th>
                                <th class="text-center pe-4">
                                    Role
                                </th>
                                <th class="text-center pe-4">
                                    Aksi
                                </th>

                            </tr>
                            <!-- end table row-->
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <th>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</th>

                                    <td class=" text-start">{{ $item->username }}</td>
                                    <td class=" text-center">{{ $item->email }}</td>
                                    <td class=" text-center">
                                        @if ($item->role_id == 1)
                                            Super Admin
                                        @elseif ($item->role_id == 2)
                                            Admin
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-center gap-2 flex-wrap">
                                        @if ($confirmDelete != $item->id)
                                            <a href="{{ route('ubah-data-akun', ['id' => $item->id]) }}">
                                                <button class="btn btn-sm btn-primary rounded-pill">Edit Akun</button>
                                            </a>
                                            @if ($item->status == 'aktif')
                                                <div class="div">
                                                    <button type="button" wire:click="tangguhkan({{ $item->id }})"
                                                        class="btn btn-sm btn-warning rounded-pill">Tangguhkan</button>
                                                </div>
                                            @elseif($item->status == 'tidak_aktif')
                                                <div class="div">
                                                    <button type="button" wire:click="aktifkan({{ $item->id }})"
                                                        class="btn btn-sm btn-success rounded-pill">Aktifkan</button>
                                                </div>
                                            @endif
                                            <button wire:click="confirmDelete({{ $item->id }})"
                                                class="btn btn-sm btn-danger rounded-pill"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        @else
                                            <div class="d-flex flex-column">
                                                <small>Apa anda yakin menghapus?</small>
                                                <div class="d-flex justify-content-center gap-2 mt-1 flex-wrap">
                                                    <button wire:click="delete({{ $item->id }})"
                                                        class="btn btn-sm btn-danger rounded-pill">Delete</button>
                                                    <button wire:click="batalDelete"
                                                        class="btn btn-sm btn-success rounded-pill">Batal</button>
                                                </div>
                                            </div>
                                        @endif

                                    </td>
                                    {{-- <td
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
                                    </td> --}}
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
