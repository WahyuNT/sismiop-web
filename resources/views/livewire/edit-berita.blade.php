<div>
    <div class="card card-form mt-3">
        <form wire:submit="update">
            <div class="card-body">

                <div class="div">
                    <div class="mb-3">
                        <label for="judul" class="form-label  ">Judul</label>
                        <input required wire:model.defer="judul" required type="text" class="form-control"
                            name="judul">
                        @error('judul')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deksripsi" class="form-label  ">Deskripsi</label>
                        <div wire:ignore>
                            <textarea required class="min-h-fit h-48 " name="isi" id="isi">{{ $data->isi }}</textarea>
                        </div>

                        @error('isi')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                        <label for="Gambar" class="form-label  ">Gambar <small>(Max
                                4MB)</small> </label>
                        <input wire:model.defer="nama_gambar" type="file" class="form-control">
                        @error('nama_gambar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div> --}}

                    <button wire:click="update" class="btn btn-primary rounded-pill mt-3">Tambah Data</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#isi'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('isi', editor.getData());
                })
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</div>
