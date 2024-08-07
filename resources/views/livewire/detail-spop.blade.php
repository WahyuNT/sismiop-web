<div>
    <form wire:submit.prevent="updateData">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-12 d-flex justify-content-between">
                    <div class="div">
                        <a href="{{ route('data.spop') }}">

                            <button type="button" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i></button>
                        </a>
                    </div>
                    <div class="div">
                        <div class="title text-center">
                            <h3><b>PBB - P2 BP3RD KEPULUAN SULA</b></h3>
                        </div>
                    </div>

                    <div class="div d-lg-block d-none">
                        @if ($isEdit == false)
                            <button type="button" wire:click="edit" class="btn btn-primary ">Edit Data</i></button>
                        @elseif ($isEdit == true)
                            <button type="button" wire:click="cancelEdit" class="btn btn-danger ">Batal</i></button>
                            <button type="submit" class="btn btn-info ">Simpan
                                Data</i></button>
                        @endif
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->

        @if ($spop)
            <!-- ========== form-elements-wrapper start ========== -->
            <div class="form-elements-wrapper">
                <div class="card card-form">
                    <div class="col-lg-4 col-12 mb-2 px-1">
                        <label class="text-black text-black fw-bold mb-1" for="no_formulir">1. No Formulir<span
                                class="text-danger">*</span></label>
                        <input {{ $disabled }} required maxlength="9" wire:model.defer="data.no_formulir"
                            class="form-control" name="no_formulir" id="no_formulir" type="text" placeholder="-" />
                    </div>
                    {{-- <div class="div">
                        <h6 class="mb-2 fw-bold text-black">
                            1. Jenis Transaksi<span class="text-danger">*</span>
                        </h6>
                        <div class="d-flex justify-content-start flex-wrap gap-2">
                            <div class="form-check radio-style mb-20">
                                <input {{ $disabled }} maxlength="9" class="form-check-input"
                                    wire:model.defer="data.1_jenis_transaksi" type="radio" value="1"
                                    id="radio-transaksi-1" name="1_jenis_transaksi" required />
                                <label class="text-black form-check-label" for="radio-transaksi-1">
                                    1. Perekaman Data
                                </label>
                            </div>
                            <div class="form-check radio-style mb-20">
                                <input {{ $disabled }} maxlength="9" class="form-check-input"
                                    wire:model.defer="data.1_jenis_transaksi" type="radio" value="2"
                                    id="radio-transaksi-2" name="1_jenis_transaksi" />
                                <label class="text-black form-check-label" for="radio-transaksi-2">
                                    2. Pemutakhiran Data
                                </label>
                            </div>
                            <div class="form-check radio-style mb-20">
                                <input {{ $disabled }} maxlength="9" class="form-check-input"
                                    wire:model.defer="data.1_jenis_transaksi" type="radio" value="3"
                                    id="radio-transaksi-3" name="1_jenis_transaksi" />
                                <label class="text-black form-check-label" for="radio-transaksi-3">
                                    3. Penghapusan Data
                                </label>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="card card-form mt-4">
                    <div class="div">
                        <h6 class="mb-2 fw-bold text-black">2. NOP <span class="text-danger">*</span></h6>
                        <div class="col-12">
    
                            <div class="d-flex flex-wrap">
                                <div class="col-lg-1 col-6 mb-2  px-1">
                                    <label class="text-black  mb-1" for="provinsi">PROV.</label>
    
                                    <select {{ $disabled }} required  wire:model.defer="data.2_nop_provinsi"
                                        class="form-select " aria-label=". example">
                                        <option value="" selected>Pilih Prov</option>
                                        @foreach ($provinsi as $item)
                                            <option value="{{ $item->id }}">{{ $item->id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2 col-6 mb-2 px-lg-3 px-1">
                                    <label class="text-black  mb-1" for="2_nop_kabupaten">KAB.</label>
                                    <input {{ $disabled }} required maxlength="2" class="form-control"
                                        wire:model.defer="data.2_nop_kabupaten" name="2_nop_kabupaten" id="2_nop_kabupaten"
                                        type="text" placeholder="..." />
                                </div>
                                <div class="col-lg-2 col-6 mb-2 px-lg-3 px-1">
                                    <label class="text-black  mb-1" for="2_nop_kecamatan">KEC.</label>
                                    <select {{ $disabled }} required wire:model.defer="data.2_nop_kecamatan"
                                        class="form-select " aria-label=". example">
                                        <option value="" selected>Pilih Kec</option>
                                        @foreach ($kecamatan as $item)
                                            <option value="{{ $item->id }}">{{ $item->NM_KECAMATAN }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2 col-6 mb-2 px-lg-3 px-1">
                                    <label class="text-black  mb-1" for="2_nop_gampong">GAMPONG</label>
    
                                    <select {{ $disabled }} required wire:model.defer="data.2_nop_gampong"
                                        class="form-select " aria-label=". example">
                                        <option value="" selected>Silahkan Pilih</option>
                                        @foreach ($dati2 as $item)
                                            <option value="{{ $item->id }}">{{ $item->NM_DATI2 }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2 col-6 mb-2 px-lg-3 px-1">
                                    <label class="text-black  mb-1" for="2_nop_blok">BLOK</label>
                                    <input {{ $disabled }} required maxlength="4" class="form-control" wire:model.defer="data.2_nop_blok"
                                        name="2_nop_blok" class="form-control" id="2_nop_blok" type="text"
                                        placeholder="..." />
                                </div>
                                <div class="col-lg-2 col-6 mb-2 px-lg-3 px-1">
                                    <label class="text-black  mb-1" for="2_nop_urut">NO.URUT</label>
                                    <input  {{ $disabled }} required  maxlength="4" class="form-control"
                                        wire:model.defer="data.2_nop_urut" name="2_nop_urut" class="form-control"
                                        id="2_nop_urut" type="text" placeholder="..." />
                                </div>
                                <div class="col-lg-1 col-6 mb-2 px-lg-3 px-1">
                                    <label class="text-black  mb-1" for="2_nop_kode">KODE</label>
                                    <input {{ $disabled }} required maxlength="1" class="form-control" wire:model.defer="data.2_nop_kode"
                                        name="2_nop_kode" class="form-control" id="2_nop_kode" type="text"
                                        placeholder="..." />
                                </div>
                            </div>
                        </div>
                        {{-- <h6 class=" my-2">3. NOP BERSAMA</h6>
                        <div class="col-12">
                            <div class="d-flex flex-wrap px-lg-3 px-0">
    
                                <div class="col-lg-1 col-6 mb-2 pe-1">
                                    <label class="text-black mb-1" for="provinsi">PROV.</label>
                                    <input maxlength="2" class="form-control" wire:model="data.3_nop_bersama_provinsi"
                                        name="3_nop_bersama_provinsi" id="provinsi" type="text" placeholder="..." />
                                </div>
                                <div class="col-lg-2 col-6 mb-2 px-1">
                                    <label class="text-black mb-1" for="Kabupaten">KAB.</label>
                                    <input maxlength="2" class="form-control" wire:model="data.3_nop_bersama_kabupaten"
                                        name="3_nop_bersama_kabupaten" id="Kabupaten" type="text"
                                        placeholder="..." />
                                </div>
                                <div class="col-lg-2 col-6 mb-2 px-1">
                                    <label class="text-black mb-1" for="Kecamatan">KEC.</label>
                                    <input maxlength="3" class="form-control" wire:model="data.3_nop_bersama_kecamatan"
                                        name="3_nop_bersama_kecamatan" id="Kecamatan" type="text"
                                        placeholder="..." />
                                </div>
                                <div class="col-lg-2 col-6 mb-2 px-1">
                                    <label class="text-black mb-1" for="Gampong">GAMPONG</label>
                                    <input maxlength="3" class="form-control" wire:model="data.3_nop_bersama_gampong"
                                        name="3_nop_bersama_gampong" id="Gampong" type="text" placeholder="..." />
                                </div>
                                <div class="col-lg-2 col-6 mb-2 px-1">
                                    <label class="text-black mb-1" for="Blok">BLOK</label>
                                    <input maxlength="3" class="form-control" wire:model="data.3_nop_bersama_blok"
                                        name="3_nop_bersama_blok" id="Blok" type="text" placeholder="..." />
                                </div>
                                <div class="col-lg-2 col-6 mb-2 px-1">
                                    <label class="text-black mb-1" for="No.Urut">NO. URUT</label>
                                    <input maxlength="4" class="form-control" wire:model="data.3_no_urut"
                                        name="3_no_urut" id="No.Urut" type="text" placeholder="..." />
                                </div>
                                <div class="col-lg-1 col-6 mb-2 ps-1">
                                    <label class="text-black mb-1" for="Kode">KODE</label>
                                    <input maxlength="1" class="form-control" wire:model="data.3_nop_bersama_kode"
                                        name="3_nop_bersama_kode" id="Kode" type="text" placeholder="..." />
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <h4 class="fw-bold text-lg-center text-start my-3">
                    A. INFORMASI TAMBAHAN UNTUK DATA BARU
                </h4>
                <div class="card card-form">
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-6 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="4_nop_asal">4. NOP ASAL</label>
                            <input {{ $disabled }} maxlength="18" class="form-control"
                                wire:model.defer="data.4_nop_asal" name="4_nop_asal" id="4_nop_asal" type="text"
                                placeholder="-" />
                        </div>
                        <div class="col-lg-6 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="5_no_sppt_lama">5. NO. SPPT LAMA</label>
                            <input {{ $disabled }} maxlength="5" class="form-control"
                                wire:model.defer="data.5_no_sppt_lama" name="5_no_sppt_lama" id="5_no_sppt_lama"
                                type="text" placeholder="-" />
                        </div>
                    </div>
                </div>
                <h4 class="fw-bold text-lg-center text-start my-3">
                    B. DATA LETAK OBJEK PAJAK
                </h4>
                <div class="card card-form">
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-6 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="6_nama_jalan">6. NAMA JALAN</label>
                            <input {{ $disabled }} maxlength="30" class="form-control"
                                wire:model.defer="data.6_nama_jalan" name="6_nama_jalan" id="6_nama_jalan"
                                type="text" placeholder="-" />
                        </div>
                        <div class="col-lg-6 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="7_blok_kav_nomor">7. BLOK / KAV / NOMOR</label>
                            <input {{ $disabled }} maxlength="12" class="form-control"
                                wire:model.defer="data.7_blok_kav_nomor" name="7_blok_kav_nomor"
                                id="7_blok_kav_nomor" type="text" placeholder="-" />
                        </div>
                        <div class="col-lg-6 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="8_gampong">8. GAMPONG</label>
                            <input {{ $disabled }} maxlength="25" class="form-control"
                                wire:model.defer="data.8_gampong" name="8_gampong" id="8_gampong" type="text"
                                placeholder="-" />
                        </div>
                        <div class="col-12 col-lg-6 d-flex flex-wrap">

                            <div class="col-lg-6 col-6 px-lg-3 pe-3 px-0 mb-2">
                                <label class="text-black mb-1" for="9_rw">9. RW</label>
                                <input {{ $disabled }} maxlength="2" class="form-control"
                                    wire:model.defer="data.9_rw" name="9_rw" id="9_rw" type="text"
                                    placeholder="-" />
                            </div>
                            <div class="col-lg-6 col-6 px-lg-3 px-0 mb-2">
                                <label class="text-black mb-1" for="10_rt">10. RT</label>
                                <input {{ $disabled }} maxlength="2" class="form-control"
                                    wire:model.defer="data.10_rt" name="10_rt" id="10_rt" type="text"
                                    placeholder="-" />
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="fw-bold text-lg-center text-start my-3">
                    C. DATA SUBJEK PAJAK
                </h4>
                <div class="card card-form">
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-6 col-12 mb-2 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="11_status">11. STATUS</label>
                            <select {{ $disabled }} wire:model.defer="data.11_status" name="11_status"
                                id="11_status" class="form-select">
                                <option value="">Silahkan Pilih</option>
                                <option value="pemilik">Pemilik</option>
                                <option value="penyewa">Penyewa</option>
                                <option value="pengelola">Pengelola</option>
                                <option value="pemakai">Pemakai</option>
                                <option value="sengketa">Sengketa</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-12 mb-2 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="12_pekerjaan">12. PEKERJAAN</label>
                            <select {{ $disabled }} wire:model.defer="data.12_pekerjaan" name="12_pekerjaan"
                                id="12_pekerjaan" class="form-select">
                                <option value="">Silahkan Pilih</option>
                                <option value="pns">PNS *)</option>
                                <option value="abri">ABRI *)</option>
                                <option value="pensiunan">Pensiunan *)</option>
                                <option value="badan">Badan</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="13_nama_subjek_pajak">13. NAMA SUBJEK PAJAK</label>
                            <input {{ $disabled }} maxlength="30" class="form-control"
                                wire:model.defer="data.13_nama_subjek_pajak" name="13_nama_subjek_pajak"
                                id="13_nama_subjek_pajak" type="text" placeholder="-" />
                        </div>
                        <div class="col-lg-6 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="14_npwp">14. NPWP</label>
                            <input {{ $disabled }} maxlength="11" class="form-control"
                                wire:model.defer="data.14_npwp" name="14_npwp" id="14_npwp" type="text"
                                placeholder="-" />
                        </div>
                        <div class="col-lg-6 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="15_nama_jalan">15. NAMA JALAN</label>
                            <input {{ $disabled }} maxlength="30" class="form-control"
                                wire:model.defer="data.15_nama_jalan" name="15_nama_jalan" id="15_nama_jalan"
                                type="text" placeholder="-" />
                        </div>
                        <div class="col-lg-6 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="16_blok_kav_nomor">16. BLOK / KAV / NOMOR</label>
                            <input {{ $disabled }} maxlength="12" class="form-control"
                                wire:model.defer="data.16_blok_kav_nomor" name="16_blok_kav_nomor"
                                id="16_blok_kav_nomor" type="text" placeholder="-" />
                        </div>
                        <div class="col-lg-6 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="17_gampong">17. GAMPONG</label>
                            <input {{ $disabled }} maxlength="25" class="form-control"
                                wire:model.defer="data.17_gampong" name="17_gampong" id="17_gampong" type="text"
                                placeholder="-" />
                        </div>
                        <div class="col-lg-6 col-12 d-flex flex-wrap">

                            <div class="col-lg-6 col-6 pe-3 px-lg-3 px-0 mb-2">
                                <label class="text-black mb-1" for="18_rw">18. RW</label>
                                <input {{ $disabled }} maxlength="2" class="form-control"
                                    wire:model.defer="data.18_rw" name="18_rw" id="18_rw" type="text"
                                    placeholder="-" />
                            </div>
                            <div class="col-lg-6 col-6 px-lg-3 px-0 mb-2">
                                <label class="text-black mb-1" for="19_rt">19. RT</label>
                                <input {{ $disabled }} maxlength="3" class="form-control"
                                    wire:model.defer="data.19_rt" name="19_rt" id="19_rt" type="text"
                                    placeholder="-" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="20_kecamatan_kabupaten_kota">20. KECAMATAN - KABUPATEN
                                /
                                KOTA (KODE
                                POS)</label>
                            <input {{ $disabled }} maxlength="25" class="form-control"
                                wire:model.defer="data.20_kecamatan_kabupaten_kota" name="20_kecamatan_kabupaten_kota"
                                id="20_kecamatan_kabupaten_kota" type="text" placeholder="-" />
                        </div>
                        <div class="col-lg-6 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="21_nomor_ktp">21. NOMOR KTP</label>
                            <input {{ $disabled }} maxlength="20" class="form-control"
                                wire:model.defer="data.21_nomor_ktp" name="21_nomor_ktp" id="21_nomor_ktp"
                                type="text" placeholder="-" />
                        </div>
                    </div>
                    <small class="mt-2 ps-lg-3 text-black">Catatan : *) yang pernghasilannya semata-mata berasal dari
                        gaji
                        atau uang
                        pensiunan</small>
                </div>
                <h4 class="fw-bold text-lg-center text-start my-3">
                    D. DATA TANAH
                </h4>
                <div class="card card-form">
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-6 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="22_luas_tanah">22. LUAS TANAH</label>
                            <input {{ $disabled }} maxlength="10" class="form-control"
                                wire:model.defer="data.22_luas_tanah" name="22_luas_tanah" id="22_luas_tanah"
                                type="text" placeholder="-" />
                        </div>
                        <div class="col-lg-6 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="23_zona_nilai_tanah">23. ZONA NILAI TANAH</label>
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.23_zona_nilai_tanah" name="23_zona_nilai_tanah"
                                id="23_zona_nilai_tanah" type="text" placeholder="-" />
                        </div>
                        <div class="col-lg-6 col-12 mb-2 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="24_jenis_tanah">24. JENIS TANAH</label>
                            <select {{ $disabled }} wire:model.defer="data.24_jenis_tanah" name="24_jenis_tanah"
                                id="24_jenis_tanah" class="form-select">
                                <option value="">Silahkan Pilih</option>
                                <option value="tanah+bangunan">Tanah + Bangunan</option>
                                <option value="kavling_siap_bangun">Kavling Siap Bangun</option>
                                <option value="tanah_kosong">Tanah Kosong</option>
                                <option value="fasilitas_umum">Fasilitas Umum</option>
                            </select>
                        </div>

                    </div>
                </div>
                <h4 class="fw-bold text-lg-center text-start my-3">
                    E. DATA BANGUNAN
                </h4>
                <div class="card card-form">
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-12 col-12 px-lg-3 px-0 mb-2">
                            <label class="text-black mb-1" for="25_jumlah_bangunan">25. JUMLAH BANGUNAN</label>
                            <input {{ $disabled }} maxlength="3" class="form-control"
                                wire:model.defer="data.25_jumlah_bangunan" name="25_jumlah_bangunan"
                                id="25_jumlah_bangunan" type="text" placeholder="-" />
                        </div>
                    </div>
                </div>
                <h4 class="fw-bold text-lg-center text-start my-3">
                    F. PERNYATAAN SUBJEK PAJAK
                </h4>
                <div class="card card-form">
                    <div class="d-flex flex-wrap">
                        <p>Saya menyatakan bahwa informasi yang telah saya berikan dalam formulir ini termasuk
                            lampirannya
                            adalah
                            benar, jelas dan lengkap menurut keadaan yang sebenarnya, sesuai dengan Pasal 9 ayat (2)
                            Undang-Undang
                            No. 12 Tahun 1985.
                        </p>
                        <div class="col-12 d-flex flex-wrap mt-3">
                            <div class="col-12 col-lg-4 px-3">
                                <p class="text-center fw-bold text-black">26. NAMA SUBJEK PAJAK/KUASANYA</p>
                                <div class="card border-0 ">
                                    <div class="mt-5"></div>
                                    <div class="mt-5"></div>
                                    <input {{ $disabled }} {{ $disabled }} class="input-no-border"
                                        wire:model.defer="data.26_nama_subjek_pajak-kuasanya"
                                        name="26_nama_subjek_pajak-kuasanya" id="26_nama_subjek_pajak-kuasanya"
                                        type="text" placeholder="Masukkan Nama" />

                                </div>
                            </div>
                            <div class="col-12 col-lg-4 px-3">
                                <p class="text-center fw-bold text-black mt-2">27. TANGGAL</p>
                                <div class="card border-0 ">
                                    <div class="mt-5"></div>
                                    <div class="mt-5"></div>
                                    <input {{ $disabled }} {{ $disabled }} class="input-no-border"
                                        wire:model.defer="data.27_tanggal" name="27_tanggal" id="27_tanggal"
                                        type="date" placeholder="Masukkan Nama" />
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 px-3 d-flex flex-wrap justify-content-center ">

                                <p class="text-center fw-bold text-black mt-2">28. TANDA TANGAN</p> <br>

                                @if ($edit28 == false)
                                    <div class="d-flex flex-wrap">
                                        <img alt="Belum ada tanda tangan" class="image-ttd" src="{{ $spop->{'28_tanda_tangan'} }}" width=246
                                            height=164 alt="">
                                        <div class="div d-flex align-items-center justify-content-center mt-2">
                                            <button type="button" wire:click="edit28"
                                                class="btn rounded-pill ms-1 btn-edit-ttd btn-warning py-1"><i
                                                    class="fa-solid fa-pencil "></i></button>
                                        </div>
                                    </div>
                                @endif

                                <div class="card  sign-ttd"
                                    style="{{ $edit28 ? 'display: block' : 'display: none' }}">
                                    <div class="wrapper-sign" id="tempatTTD">
                                        <canvas id="signature-pad_28" class="signature-pad_28" width=246
                                            height=164></canvas>
                                    </div>
                                    <textarea hidden wire:model="newTTD28" name="28_tanda_tangan" id="tanda_tangan_28"></textarea>
                                    <div style="display:block" id="div_button_28">
                                        <div class="d-flex justify-content-center ">

                                            <button id="cancel_28" wire:click="cancelEdit28" type="button"
                                                class="btn rounded-pill btn-danger py-0 mb-2 me-2">Batal</button>
                                            <button type="button" class="btn rounded-pill btn-info me-2 py-0 mb-2"
                                                id="clear_28">Clear</button>
                                            <button wire:click="simpan28" id="simpan_28" type="button"
                                                class="btn rounded-pill btn-success py-0 mb-2 ">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <small>- Dalam hal bertindak selaku kuasa, Surat kuasa harap dilampirkan</small>
                            <small>- Dalam hal Subjek Pajak mendaftarkan Objek Pajak, supaya menggambarkan Sket/Denah
                                Lokasi
                                Objek
                                Pajak</small>
                            <small>- Batas waktu pengembalian SPOP 30 (tiga puluh) hari sejak diterima oleh Subjek Pajak
                                sesuai
                                Pasal
                                9 ayat (2) UU No. 12 Tahun 1985

                        </div>
                    </div>
                </div>
                <h4 class="fw-bold text-lg-center text-start my-3">
                    G. IDENTITAS PENDATA / PEJABAT YANG BERWENANG
                </h4>
                <div class="card card-form">
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-6 col-12 px-3">
                            <p class="text-center text-black fw-bold mb-3">PETUGAS PENDATA</p>
                            <div class="col-12">
                                <label class="mb-1 text-black" for="29_tanggal_petugas">29. TANGGAL</label>
                                <input {{ $disabled }} class="form-control"
                                    wire:model.defer="data.29_tanggal_petugas" name="29_tanggal_petugas"
                                    id="29_tanggal_petugas" type="date" placeholder="Memuat..." />
                            </div>
                            <div class="col-12">
                                <label class="mb-1 mt-2 text-black" for="30_tanda_tangan_petugas">30. TANDA
                                    TANGAN</label><br>
                                @if ($edit30A == false)
                                    <img alt="Belum ada tanda tangan" class="image-ttd" src="{{ $spop->{'30_tanda_tangan_petugas'} }}" width=246
                                        height=164 alt="">
                                @endif
                                @if ($edit30A == false)
                                    <button type="button"wire:click="edit30A"
                                        class="btn rounded-pill  btn-warning py-1 mt-2"><i
                                            class="fa-solid fa-pencil"></i></button>
                                @endif

                                <div class="card  sign-ttd"
                                    style="{{ $edit30A ? 'display: block' : 'display: none' }}">

                                    <div class="wrapper-sign" id="tempatTTD">
                                        <canvas id="signature-pad_30A" class="signature-pad_30A" width=246
                                            height=164></canvas>
                                    </div>
                                    <textarea hidden wire:model="newTTD30A" name="pejabat_tanda_tangan" id="tanda_tangan_30A"></textarea>
                                    <div style="display:block" id="div_button_30A">
                                        <div class="d-flex justify-content-center">
                                            <button id="cancel_30A" wire:click="cancelEdit30A" type="button"
                                                class="btn rounded-pill btn-danger py-0 mb-2 me-2">Batal</button>
                                            <button type="button" class="btn rounded-pill btn-info me-2 py-0 mb-2"
                                                id="clear_30A">Clear</button>
                                            <button wire:click="simpan30A" id="simpan_30A" type="button"
                                                class="btn rounded-pill btn-success py-0 mb-2">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="mb-1 mt-2 text-black" for="31_nama_jelas_petugas">31. NAMA JELAS</label>
                                <input {{ $disabled }} {{ $disabled }} class="form-control"
                                    wire:model.defer="data.31_nama_jelas_petugas" name="31_nama_jelas_petugas"
                                    id="31_nama_jelas_petugas" type="text" placeholder="Memuat..." />
                            </div>
                            <div class="col-12">
                                <label class="mb-1 mt-2 text-black" for="32_nip_petugas">32. NIP</label>
                                <input {{ $disabled }} {{ $disabled }} class="form-control"
                                    wire:model.defer="data.32_nip_petugas" name="32_nip_petugas" id="32_nip_petugas"
                                    type="text" placeholder="Memuat..." />
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 px-3">
                            <p class="text-center text-black mt-3 fw-bold mb-1">MENGETAHUI PEJABAT YANG BERWENANG</p>
                            <div class="col-12">
                                <label class="mb-1 text-black" for="29_tanggal_pejabat">29. TANGGAL</label>
                                <input {{ $disabled }} class="form-control text-black"
                                    wire:model.defer="data.29_tanggal_pejabat" name="29_tanggal_pejabat"
                                    id="29_tanggal_pejabat" type="date" placeholder="Memuat..." />
                            </div>
                            <div class="col-12">
                                <label class="mb-1 text-black mt-2" for="30_tanda_tangan_pejabat">30. TANDA
                                    TANGAN</label><br>
                                @if ($edit30B == false)
                                    <img alt="Belum ada tanda tangan" class="image-ttd" src="{{ $spop->{'30_tanda_tangan_pejabat'} }}" width=246
                                        height=164 alt="">
                                @endif
                                @if ($edit30B == false)
                                    <button type="button"wire:click="edit30B"
                                        class="btn rounded-pill  btn-warning py-1 mt-2"><i
                                            class="fa-solid fa-pencil"></i></button>
                                @endif

                                <div class="card  sign-ttd"
                                    style="{{ $edit30B ? 'display: block' : 'display: none' }}">

                                    <div class="wrapper-sign" id="tempatTTD">
                                        <canvas id="signature-pad_30B" class="signature-pad_30B" width=246
                                            height=164></canvas>
                                    </div>
                                    <textarea hidden wire:model="newTTD30B" name="pejabat_tanda_tangan" id="tanda_tangan_30B"></textarea>
                                    <div style="display:block" id="div_button_30B">
                                        <div class="d-flex justify-content-center">

                                            <button id="cancel_30B" wire:click="cancelEdit30B" type="button"
                                                class="btn rounded-pill btn-danger py-0 mb-2 me-2">Batal</button>
                                            <button type="button" class="btn rounded-pill btn-info me-2 py-0 mb-2"
                                                id="clear_30B">Clear</button>
                                            <button wire:click="simpan30B" id="simpan_30B" type="button"
                                                class="btn rounded-pill btn-success py-0 mb-2">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="mb-1 mt-2 text-black" for="31_nama_jelas_pejabat">31. NAMA
                                        JELAS</label>
                                    <input {{ $disabled }} {{ $disabled }} class="form-control"
                                        wire:model.defer="data.31_nama_jelas_pejabat" name="31_nama_jelas_pejabat"
                                        id="31_nama_jelas_pejabat" type="text" placeholder="Memuat..." />
                                </div>
                                <div class="col-12">
                                    <label class="mb-1 mt-2 text-black" for="32_nip_pejabat">32. NIP</label>
                                    <input {{ $disabled }} {{ $disabled }} class="form-control"
                                        wire:model.defer="data.32_nip_pejabat" name="32_nip_pejabat"
                                        id="32_nip_pejabat" type="text" placeholder="Memuat..." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="fw-bold text-lg-center text-start my-3">
                <u>SKET / DENAH LOKASI OBJEK PAJAK</u>
            </h4>
            @if ($editsket == false)
                <img alt="Belum ada sketsa" class="image-ttd card" src="{{ $spop->{'sket_tanda_tangan'} }}" width=1080 height=500
                    alt="">
                <div class="d-flex justify-content-center">
                    <a target="_blank" href="{{ route('edit.sket', ['id' => $spop->id]) }}">
                        <button type="button" class="btn rounded-pill mt-3 btn-warning py-1"><i
                                class="fa-solid fa-pencil me-2"></i>Edit Denah</button>
                    </a>
                </div>
            @endif


            <div class="d-flex flex-wrap mt-2">
                <div class="col-lg-6 col-12">
                    <p class="mb-2 text-black text-lg-start text-center"><b><i><u>KETERANGAN</u></i></b></p>
                    <ul>
                        <li>- Gambar sket/denah lokasi objek pajak (tanpa skala), yang dihubungkan dengan jalan
                            raya/jalan
                            protokol, jalan lingkungan, dan lain-lain, yang mudah diketahui oleh umum.</li>
                        <li>- Sebutkan batas-batas kepemilikan sebelah Utara, Selatan, Timur, dan Barat.</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <p class="text-lg-center mt-lg-0 mt-2 text-black mb-2"><b><u>Contoh Penggambaran</u></b></p>
                    <img  class="w-lg-75 w-100 rounded" src="{{ asset('img/contoh_map.png') }}" alt="">
                </div>
            </div>


        @endif
        <nav class="navbar bottom-btn-card bg-white navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom px-3 ">

            @if ($isEdit == false)
                <button type="button" wire:click="edit" class="w-100 btn btn-primary my-3 rounded-pill ">Edit
                    Data</i></button>
            @elseif ($isEdit == true)
                <button type="button" wire:click="cancelEdit"
                    class="w-50 btn btn-danger my-3 rounded-pill me-1">Batal</i></button>
                <button type="submit" class="w-50 btn btn-primary my-3 rounded-pill ms-1">Simpan
                    Data</i></button>
            @endif
        </nav>
    </form>

</div>
<script>
    ttd()
    document.addEventListener('livewire:load', function() {
        Livewire.on('dataUpdated', function() {
            ttd()
        });
    });

    function ttd() {
        var signaturePad_28 = new SignaturePad(document.getElementById('signature-pad_28'), {
            backgroundColor: 'rgba(255, 255, 255, 0)',
            penColor: 'rgb(0, 0, 0)'
        });

        var cancelButton_28 = document.getElementById('cancel_28');
        var clearButton_28 = document.getElementById('clear_28');
        var cancelSimpanButton_28 = document.getElementById('cancel_simpan_28');

        var canvasPad_28 = document.getElementById('signature-pad_28');

        canvasPad_28.addEventListener('click', function(event) {
            if (signaturePad_28.isEmpty()) {
                alert("Silahkan petugas Tanda tangan terlebih dahulu.");
            } else {
                var data_28 = signaturePad_28.toDataURL('image/png');

                var tandaTanganInput_28 = document.getElementById('tanda_tangan_28');
                tandaTanganInput_28.value = data_28;

                @this.set('newTTD28', data_28);
            }
        });


        cancelButton_28.addEventListener('click', function(event) {
            event.preventDefault();
            signaturePad_28.clear();
            document.getElementById('tanda_tangan_28').value = "";

        });



        clearButton_28.addEventListener('click', function(event) {
            event.preventDefault();
            signaturePad_28.clear();
            document.getElementById('tanda_tangan_28').value = "";

        });


        var signaturePad_30A = new SignaturePad(document.getElementById('signature-pad_30A'), {
            backgroundColor: 'rgba(255, 255, 255, 0)',
            penColor: 'rgb(0, 0, 0)'
        });
        var signaturePad_30B = new SignaturePad(document.getElementById('signature-pad_30B'), {
            backgroundColor: 'rgba(255, 255, 255, 0)',
            penColor: 'rgb(0, 0, 0)'
        });

        var cancelButton_30A = document.getElementById('cancel_30A');
        var cancelButton_30B = document.getElementById('cancel_30B');

        var clearButton_30A = document.getElementById('clear_30A');
        var clearButton_30B = document.getElementById('clear_30B');



        var cancelSimpanButton_30A = document.getElementById('cancel_simpan_30A');
        var cancelSimpanButton_30B = document.getElementById('cancel_simpan_30B');



        var canvasPad_30A = document.getElementById('signature-pad_30A');
        var canvasPad_30B = document.getElementById('signature-pad_30B');

        canvasPad_30A.addEventListener('click', function(event) {
            if (signaturePad_30A.isEmpty()) {
                alert("Silahkan petugas Tanda tangan terlebih dahulu.");
            } else {
                var data_30A = signaturePad_30A.toDataURL('image/png');

                var tandaTanganInput_30A = document.getElementById('tanda_tangan_30A');
                tandaTanganInput_30A.value = data_30A;

                @this.set('newTTD30A', data_30A);
            }
        });

        canvasPad_30B.addEventListener('click', function(event) {
            if (signaturePad_30B.isEmpty()) {
                alert("Silahkan pejabat Tanda tangan terlebih dahulu.");
            } else {
                var data_30B = signaturePad_30B.toDataURL('image/png');

                var tandaTanganInput_30B = document.getElementById('tanda_tangan_30B');
                tandaTanganInput_30B.value = data_30B;

                @this.set('newTTD30B', data_30B);
            }
        });

        cancelButton_30A.addEventListener('click', function(event) {
            event.preventDefault();
            signaturePad_30A.clear();
            document.getElementById('tanda_tangan_30A').value = "";

        });

        cancelButton_30B.addEventListener('click', function(event) {
            event.preventDefault();
            signaturePad_30B.clear();
            document.getElementById('tanda_tangan_30B').value = "";
        });

        clearButton_30A.addEventListener('click', function(event) {
            event.preventDefault();
            signaturePad_30A.clear();
            document.getElementById('tanda_tangan_30A').value = "";

        });

        clearButton_30B.addEventListener('click', function(event) {
            event.preventDefault();
            signaturePad_30B.clear();
            document.getElementById('tanda_tangan_30B').value = "";
        });
    }
</script>
