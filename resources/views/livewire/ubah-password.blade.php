<div>
    <h2 class="text-center mt-3 fw-bold">Ubah Kata Sandi</h2>
    <div class="card card-form mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class=" mb-3">
                        <label>Password Baru</label>
                        <input class="form-control" required wire:model="password" type="password"
                            placeholder="Kata Sandi" />
                    </div>
                    @error('password')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <div class=" mb-3">
                        <label>Konfirmasi Password Baru</label>
                        <input class="form-control" required wire:model="password_confirm" type="password"
                            placeholder="Ulangi Katasandi" />
                    </div>
                    @error('password_confirm')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-flex">
                    <div class="button-group d-flex justify-content-center flex-wrap">
                        <button type="button" wire:click="update"
                            class="btn btn-primary  rounded-pill w-100 text-center">
                            Ubah Kata Sandi
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
