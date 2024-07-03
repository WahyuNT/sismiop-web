<div>
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="title ">
                    <h3><b>DATA LSPOP</b></h3>
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
                                    <th scope="row">1</th>
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
                </div>
            </div>
        </div>
 
</div>
