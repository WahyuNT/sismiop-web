<div>
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-12 d-flex justify-content-between">
                <div class="title col-6 ">
                    <h3><b>DATA SPOP</b></h3>
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
                        <input wire:model="search" type="text" class="form-control" placeholder="Cari Data SPOP">
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
                        @foreach ($spop as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->no_formulir }}</td>
                                <td>{{ $item->{'31_nama_jelas_petugas'} }}</td>
                                <td>{{ $item->{'29_tanggal_pejabat'} }}</td>
                                <td class="text-center">
                                    <button wire:click="" class="btn btn-primary rounded-pill mx-1">Detail</button>
                                    <button wire:click="" class="btn btn-warning rounded-pill mx-1">Edit</button>
                                    <button wire:click="" class="btn btn-danger rounded-pill mx-1">Hapus</button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                <div class="d-flex justify-content-center mt-3">
                    {{ $spop->links() }}
                </div>
            </div>
        </div>
    </div>

</div>
