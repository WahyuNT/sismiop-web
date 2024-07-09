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



    <div class="form-elements-wrapper">
        <div class="row">
            <div class="card card-form ">

                <div class="table-responsive">

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
                            @foreach ($spop as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->no_formulir }}</td>
                                    <td>4342343sadasdasdasdas{{ $loop->iteration }}</td>
                                    <td>{{ $item->{'31_nama_jelas_petugas'} }}</td>
                                    <td>{{ $item->{'29_tanggal_pejabat'} }}</td>
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
                    </table>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    {{ $spop->links() }}
                </div>
            </div>
        </div>
    </div>

</div>
