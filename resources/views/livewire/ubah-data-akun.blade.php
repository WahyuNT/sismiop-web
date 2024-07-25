<div>
    <div class="card card-form border-0 mt-3">
        <div class="card-body ">
            <div class="row">
                <div class="col-12">
                    <div class=" mb-3">
                        <label>Username<span class="text-danger">*</span></label>
                        <input class="form-control" class required wire:model.defer="dataAkun.username" type="text"
                            placeholder="username" />
                        @error('dataAkun.username')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class=" mb-3">
                        <label>Email</label>
                        <input class="form-control" wire:model.defer="dataAkun.email" type="email"
                            placeholder="Email" />
                        @error('dataAkun.email')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class=" mb-3">
                        <label>Role<span class="text-danger">*</span></label>
                        <select wire:model.defer="dataAkun.role_id" class="form-select"
                            aria-label="Default select example">
                            <option value="1">Super Admin</option>
                            <option value="2">Admin</option>
                        </select>
                        @error('dataAkun.role_id')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
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
