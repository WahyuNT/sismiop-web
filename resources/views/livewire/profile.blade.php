<div>
    <h2 class="text-center mt-3 fw-bold">Ubah Profil</h2>
    <div class="card card-form border-0 mt-3">
        <div class="card-body ">
            <div class="row">
                <div class="col-12">
                    <div class=" mb-3">
                        <label>Username</label>
                        <input disabled class="form-control" class required wire:model.defer="dataAkun.username" type="text"
                            placeholder="username" />
                    </div>
                    @error('username')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <div class=" mb-3">
                        <label>Email</label>
                        <input class="form-control" required wire:model.defer="dataAkun.email" type="email"
                            placeholder="Email" />
                    </div>
                    @error('email')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex">
                    <div class="button-group d-flex justify-content-center flex-wrap">
                        <button type="button" wire:click="update"
                            class="btn btn-primary  rounded-pill w-100 text-center">
                            Perbarui data
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
