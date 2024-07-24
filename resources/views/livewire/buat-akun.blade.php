<div>
    <h3 class="mb-2 mt-3 text-center mb-lg-0"><b>BUAT AKUN</b></h3>
    <div class="card card-form mt-2 border-0">
        <div class="card-body ">
            <div class="row">
                <div class="col-12">
                    <div class=" mb-3">
                        <label>Username</label>
                        <input class="form-control" class required wire:model="dataAkun.username" type="text"
                            placeholder="username" />
                    </div>
                    @error('username')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <div class=" mb-3">
                        <label>Email</label>
                        <input class="form-control" required wire:model="dataAkun.email" type="email"
                            placeholder="Email" />
                    </div>
                    @error('email')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <div class=" mb-3">
                        <label>Password</label>
                        <input class="form-control" required wire:model="dataAkun.password" type="password"
                            placeholder="Password" />
                    </div>
                    @error('password')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <div class=" mb-3">
                        <label>Role</label>
                        <select wire:model="dataAkun.role_id" required class="form-select"
                            aria-label="Default select example">
                            <option selected>Pilih Role</option>
                            <option value="1">Super Admin</option>
                            <option value="2">Admin</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="button-group d-flex justify-content-center flex-wrap">
                        <button type="button" wire:click="simpan"
                            class="btn btn-primary  rounded-pill w-100 text-center">
                            Buat Akun
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
