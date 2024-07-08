<div>
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-between">
                <div class="title col-6 ">
                    <h3><b>DATA LSPOP</b></h3>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <div class="col-3 px-3">
                        <select wire:model="pagination" id="pagination" wire:model="pagination" name="pagination"
                            class="form-select">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="col-5">
                        <input wire:model="search" type="text" class="form-control" placeholder="Cari Data LSPOP">
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

                                            <button type="button" wire:click="deletePermanen({{ $item->id }})"
                                                class="btn btn-danger rounded-pill mx-1">Hapus</button>
                                        </div>
                                    @else
                                        <button type="button" wire:click="batalDelete"
                                            class="btn btn-danger rounded-pill mx-1">Batal</button>
                                        <button type="button" wire:click="deletePermanen({{ $item->id }})"
                                            class="btn btn-success rounded-pill mx-1">Hapus</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-3">
                    {{ $lspop->links() }}
                </div>
            </div>
        </div>
    </div>

</div>
