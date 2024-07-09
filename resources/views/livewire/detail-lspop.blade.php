<div>
    <form wire:submit.prevent="updateData">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-12 d-flex justify-content-between">
                    <div class="div">
                        <a href="{{ route('data.lspop') }}">

                            <button class="btn btn-primary" type="button"><i class="fa-solid fa-arrow-left"></i></button>
                        </a>
                    </div>
                    <div class="div">
                        <div class="title text-center">
                            <h3><b>LAMPIRAN SURAT PEMBERITAHUAN OBJEK PAJAK</b></h3>
                        </div>
                    </div>

                    <div class="d-lg-block d-none">
                        @if ($isEdit == false)
                            <button type="button" wire:click="edit" class="btn btn-info ">Edit Data</i></button>
                        @elseif ($isEdit == true)
                            <button type="button" wire:click="cancelEdit" class="btn btn-danger ">Batal</i></button>
                            <button type="button" wire:click="updateData" class="btn btn-info ">Simpan
                                Data</i></button>
                        @endif
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->

        <!-- ========== form-elements-wrapper start ========== -->
        <div class="card card-form">
            <div class="col-lg-4 col-12 mb-2 px-lg-3 px-1">
                <label class="text-black fw-bold mb-1" for="no_formulir">No Formulir <span
                        class="text-danger">*</span></label>
                <input {{ $disabled }} maxlength="9" wire:model.defer="data.no_formulir" class="form-control"
                    name="no_formulir" id="no_formulir" type="text" placeholder="..." />
            </div>

            <div class="div">
                <h6 class="mb-2 px-lg-3 px-1">
                    Jenis Transaksi<span class="text-danger">*</span>
                </h6>
                <div class="d-flex justify-content-start flex-wrap gap-2">
                    <div class="form-check radio-style mb-20">
                        <input {{ $disabled }} maxlength="9" class="form-check-input" type="radio"
                            value="perekaman_data" id="radio-transaksi-1" wire:model.defer="data.1_jenis_transaksi"
                            name="1_jenis_transaksi" />
                        <label class="text-black  form-check-label" for="radio-transaksi-1">
                            1. Perekaman Data
                        </label>
                    </div>
                    <div class="form-check radio-style mb-20">
                        <input class="form-check-input" type="radio" value="pemutakhiran_data" id="radio-transaksi-2"
                            wire:model.defer="data.1_jenis_transaksi" name="1_jenis_transaksi" />
                        <label class="text-black  form-check-label" for="radio-transaksi-2">
                            2. Pemutakhiran Data
                        </label>
                    </div>
                    <div class="form-check radio-style mb-20">
                        <input class="form-check-input" type="radio" value="penghapusan_data" id="radio-transaksi-3"
                            wire:model.defer="data.1_jenis_transaksi" name="1_jenis_transaksi" />
                        <label class="text-black  form-check-label" for="radio-transaksi-3">
                            3. Penghapusan Data
                        </label>
                    </div>
                    <div class="form-check radio-style mb-20">
                        <input class="form-check-input" type="radio" value="penilaian_individu" id="radio-transaksi-4"
                            wire:model.defer="data.1_jenis_transaksi" name="1_jenis_transaksi" />
                        <label class="text-black  form-check-label" for="radio-transaksi-4">
                            4. Penilaian Individu
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-form mt-4">
            <div class="div">
                <h6 class="mb-2 px-lg-3 px-1">NOP<span class="text-danger">*</span></h6>
                <div class="col-12 px-lg-3 px-0">
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-1 col-6 mb-2 px-lg-3 px-1">
                            <label class="text-black  mb-1" for="provinsi">PROV.</label>
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.2_nop_provinsi" name="2_nop_provinsi" id="provinsi"
                                type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-2 col-6 mb-2 px-lg-3 px-1">
                            <label class="text-black  mb-1" for="2_nop_kabupaten">KAB.</label>
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.2_nop_kabupaten" name="2_nop_kabupaten" id="2_nop_kabupaten"
                                type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-2 col-6 mb-2 px-lg-3 px-1">
                            <label class="text-black  mb-1" for="2_nop_kecamatan">KEC.</label>
                            <input {{ $disabled }} maxlength="3" class="form-control"
                                wire:model.defer="data.2_nop_kecamatan" name="2_nop_kecamatan" id="2_nop_kecamatan"
                                type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-2 col-6 mb-2 px-lg-3 px-1">
                            <label class="text-black  mb-1" for="2_nop_gampong">GAMPONG</label>
                            <input {{ $disabled }} maxlength="3" class="form-control"
                                wire:model.defer="data.2_nop_gampong" name="2_nop_gampong" class="form-control"
                                id="2_nop_gampong" type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-2 col-6 mb-2 px-lg-3 px-1">
                            <label class="text-black  mb-1" for="2_nop_blok">BLOK</label>
                            <input {{ $disabled }} maxlength="4" class="form-control"
                                wire:model.defer="data.2_nop_blok" name="2_nop_blok" class="form-control"
                                id="2_nop_blok" type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-2 col-6 mb-2 px-lg-3 px-1">
                            <label class="text-black  mb-1" for="2_nop_no_urut">NO.URUT</label>
                            <input {{ $disabled }} maxlength="4" class="form-control"
                                wire:model.defer="data.2_nop_no_urut" name="2_nop_no_urut" class="form-control"
                                id="2_nop_no_urut" type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-1 col-6 mb-2 px-lg-3 px-1">
                            <label class="text-black  mb-1" for="2_nop_kode">KODE</label>
                            <input {{ $disabled }} maxlength="1" class="form-control"
                                wire:model.defer="data.2_nop_kode" name="2_nop_kode" class="form-control"
                                id="2_nop_kode" type="text" placeholder="..." />
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap px-lg-3 px-0">
                    <div class="col-lg-6 col-12 mb-2  px-lg-3 px-1 ">
                        <label class="text-black  mb-1" for="3_jumlah_bangunan">3. Jumlah
                            Bangunan</label>
                        <input {{ $disabled }} maxlength="3" class="form-control"
                            wire:model.defer="data.3_jumlah_bangunan" name="3_jumlah_bangunan" id="jumlah_bangunan"
                            type="text" placeholder="..." />
                    </div>
                    <div class="col-lg-6 col-12 mb-2  px-lg-3 px-1">
                        <label class="text-black  mb-1" for="4_bangunan_ke">4. Bangunan Ke</label>
                        <input {{ $disabled }} maxlength="3" class="form-control"
                            wire:model.defer="data.4_bangunan_ke" name="4_bangunan_ke" id="4_bangunan_ke"
                            type="text" placeholder="..." />
                    </div>
                </div>
            </div>
        </div>
        <h4 class=" text-center my-3">
            A. RINCIAN DATA BANGUNAN
        </h4>
        <div class="card card-form">
            <div class="d-flex flex-wrap">
                <div class="col-lg-6 col-12 mb-2 px-lg-3 px-1 ">
                    <label class="text-black " for="5_jenis_penggunaan_bangunan">5. Jenis Penggunaan
                        Bangunan</label>
                    <select {{ $disabled }} name="5_jenis_penggunaan_bangunan"
                        wire:model.defer="data.5_jenis_penggunaan_bangunan" id="5_jenis_penggunaan_bangunan"
                        class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="perumahan">Perumahan</option>
                        <option value="perkantoran_swasta">Perkantoran Swasta</option>
                        <option value="pabrik">Pabrik</option>
                        <option value="toko-apotik-pasar-ruko">Toko/Apotik/Pasar/Ruko</option>
                        <option value="rumah_sakit-klinik">Rumah Sakit/Klinik</option>
                        <option value="olah_raga-rekreasi">Olah Raga/Rekreasi</option>
                        <option value="hotel-wisata">Hotel/Wisata</option>
                        <option value="bengkel-gudang-pertanian">Bengkel/Gudang/Pertanian</option>
                        <option value="gedung_pemerintah">Gedung Pemerintah</option>
                        <option value="lain_lain">Lain-lain</option>
                        <option value="bangunan_tidak_kena_pajak">Bangunan Tidak Kena Pajak</option>
                        <option value="bangunan_parkir">Bangunan Parkir</option>
                        <option value="apartemen">Apartemen</option>
                        <option value="pomp_bensin">Pompa Bensin</option>
                        <option value="tangki_minyak">Tangki Minyak</option>
                        <option value="gedung_sekolah">Gedung Sekolah</option>
                    </select>
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 mb-2">
                    <label class="text-black  " for="6_luas_bangunan">6. Luas
                        Bangunan(M2)</label>
                    <input {{ $disabled }} maxlength="10" class="form-control"
                        wire:model.defer="data.6_luas_bangunan" name="6_luas_bangunan" id="6_luas_bangunan"
                        type="text" placeholder="..." />
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 mb-2">
                    <label class="text-black  " for="7_jumlah_lantai">7. Jumlah Lantai</label>
                    <input {{ $disabled }} maxlength="2" class="form-control"
                        wire:model.defer="data.7_jumlah_lantai" name="7_jumlah_lantai" id="7_jumlah_lantai"
                        type="text" placeholder="..." />
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 mb-2">
                    <label class="text-black  " for="8_tahun_dibangun">8. Tahun
                        Dibangun</label>
                    <input {{ $disabled }} maxlength="4" class="form-control"
                        wire:model.defer="data.8_tahun_dibangun" name="8_tahun_dibangun" id="8_tahun_dibangun"
                        type="text" placeholder="..." />
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 mb-2">
                    <label class="text-black  " for="9_tahun_direnovasi">9. Tahun
                        Direnovasi</label>
                    <input {{ $disabled }} maxlength="4" class="form-control"
                        wire:model.defer="data.9_tahun_direnovasi" name="9_tahun_direnovasi" id="9_tahun_direnovasi"
                        type="text" placeholder="..." />
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 mb-2">
                    <label class="text-black  " for="10_daya_listrik_terpasang">10. Daya
                        Listrik
                        Terpasang
                        (Watt)</label>
                    <input {{ $disabled }} maxlength="10" class="form-control"
                        wire:model.defer="data.10_daya_listrik_terpasang" name="10_daya_listrik_terpasang"
                        id="10_daya_listrik_terpasang" type="text" placeholder="..." />
                </div>
                <div class="col-lg-6 col-12 mb-2 px-lg-3 px-1 mb-2">
                    <label class="text-black" for="11_kondisi_pada_umumnya">11. Kondisi Pada
                        Umumnya</label>
                    <select {{ $disabled }} id="11_kondisi_pada_umumnya"
                        wire:model.defer="data.11_kondisi_pada_umumnya" name="11_kondisi_pada_umumnya"
                        class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="sangat_baik">Sangat Baik</option>
                        <option value="baik">Baik</option>
                        <option value="sedang">Sedang</option>
                        <option value="jelek">Jelek</option>
                    </select>
                </div>
                <div class="col-lg-6 col-12 mb-2 px-lg-3 px-1 mb-2">
                    <label class="text-black" for="12_konstruksi">12. Konstruksi</label>
                    <select {{ $disabled }} id="12_konstruksi" wire:model.defer="data.12_konstruksi"
                        name="12_konstruksi" class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="baja">Baja</option>
                        <option value="beton">Beton</option>
                        <option value="batu_bara">Batu Bata</option>
                        <option value="kayu">Kayu</option>
                    </select>
                </div>
                <div class="col-lg-6 col-12 mb-2 px-lg-3 px-1 mb-2">
                    <label class="text-black" for="13_atap">13. Atap</label>
                    <select {{ $disabled }} id="13_atap" wire:model.defer="data.13_atap" name="13_atap"
                        class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="decrabon-beton-gtg_glazur">Decrabon/Beton/Gtg Glazur</option>
                        <option value="gtg_beton-Alumunium">Gtg Beton/Alumunium</option>
                        <option value="gtg_Biasa-Sirap">Gtg Biasa/Sirap</option>
                        <option value="asbes">Asbes</option>
                        <option value="seng">Seng</option>
                    </select>
                </div>
                <div class="col-lg-6 col-12 mb-2 px-lg-3 px-1 mb-2">
                    <label class="text-black" for="14_dinding">14. Dinding</label>
                    <select {{ $disabled }} id="14_dinding" wire:model.defer="data.14_dinding" name="14_dinding"
                        class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="kaca-alumunium">Kaca/Alumunium</option>
                        <option value="beton">Beton</option>
                        <option value="batu_bata-conblok">Batu Bata/Conblok</option>
                        <option value="kayu">Kayu</option>
                        <option value="seng">Seng</option>
                        <option value="tidak_ada">Tidak Ada</option>
                    </select>
                </div>
                <div class="col-lg-6 col-12 mb-2 px-lg-3 px-1 mb-2">
                    <label class="text-black" for="15_lantai">15. Lantai</label>
                    <select {{ $disabled }} name="15_lantai" id="15_lantai" wire:model.defer="data.15_lantai"
                        class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="marmer">Marmer</option>
                        <option value="keramik">Keramik</option>
                        <option value="teraso">Teraso</option>
                        <option value="ubin_pc-papan">Ubin PC/Papan</option>
                        <option value="semen">Semen</option>
                    </select>
                </div>
                <div class="col-lg-6 col-12 mb-2 px-lg-3 px-1 mb-2">
                    <label class="text-black" for="16_langit_langit">16. Langit - Langit</label>
                    <select {{ $disabled }} name="16_langit_langit" wire:model.defer="data.16_langit_langit"
                        id="16_langit_langit" class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="akustik-jati">Akustik/Jati</option>
                        <option value="triplek-asbes_bambu">Triplek/Asbes Bambu</option>
                        <option value="tidak_ada">Tidak Ada</option>
                    </select>
                </div>
            </div>
        </div>
        <h4 class=" text-center my-3">
            B. FASILITAS
        </h4>
        <div class="card card-form">
            <div class="d-flex flex-wrap">
                <div class="col-lg-6 col-12 px-lg-3 px-1 mb-2">
                    <h6 class=" text-black">17. Jumlah AC</h6>
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-3 col-6 px-2">
                            <label class="text-black " for="17_ac_split">Split</label>
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.17_ac_split" name="17_ac_split" id="17_ac_split"
                                type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-3 col-6 px-2">
                            <label class="text-black " for="17_ac_window">Window</label>
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.17_ac_window" name="17_ac_window" id="17_ac_window"
                                type="text" placeholder="..." />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-2 px-lg-3 px-1 mb-2">
                    <label class="text-black" for="18_ac_central">18. AC Central</label>
                    <select {{ $disabled }} id="18_ac_central" wire:model.defer="data.18_ac_central"
                        name="18_ac_central" class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="ada">Ada</option>
                        <option value="tidak_ada">Tidak Ada</option>
                    </select>
                </div>
                <div class="col-lg-6 px-lg-3 px-1 col-12 mb-2  mb-2">
                    <div class="d-flex flex-wrap ">
                        <div class="col-lg-6 col-12 pe-lg-3">
                            <label class="text-black  " for="19_luas_kolam_renang">19. Luas Kolam
                                Renang(M2)</label>
                            <input {{ $disabled }} maxlength="4" class="form-control"
                                wire:model.defer="data.19_luas_kolam_renang" name="19_luas_kolam_renang"
                                id="19_luas_kolam_renang" type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-6 col-12 ">
                            <label class="text-black mt-3 mt-lg-0 " for="19_tipe_kolam_renang">Tipe Kolam
                                Renang</label>
                            <select {{ $disabled }} id="19_tipe_kolam_renang"
                                wire:model.defer="data.19_tipe_kolam_renang" name="19_tipe_kolam_renang"
                                class="form-select">
                                <option value="">Silahkan Pilih</option>c
                                <option value="plester">Di Plester</option>
                                <option value="pelapis">Dengan Pelapis</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 mb-2">
                    <h6 class="mt-2">20. Luas Perkerasan Halaman (M2)</h6>
                    <div class="d-flex flex-wrap">
                        <div class="col-6 px-2">
                            <label class="text-black  mt-2" for="20_luas_perkerasan_halaman_ringan">Ringan</label>
                            <input {{ $disabled }} maxlength="5" class="form-control"
                                wire:model.defer="data.20_luas_perkerasan_halaman_ringan"
                                name="20_luas_perkerasan_halaman_ringan" id="20_luas_perkerasan_halaman_ringan"
                                type="text" placeholder="..." />
                        </div>
                        <div class="col-6 px-2">
                            <label class="text-black  mt-2" for="20_luas_perkerasan_halaman_sedang">Sedang</label>
                            <input {{ $disabled }} maxlength="5" class="form-control"
                                wire:model.defer="data.20_luas_perkerasan_halaman_sedang"
                                name="20_luas_perkerasan_halaman_sedang" id="20_luas_perkerasan_halaman_sedang=sedang"
                                type="text" placeholder="..." />
                        </div>
                        <div class="col-6 px-2">
                            <label class="text-black  mt-2" for="20_luas_perkerasan_halaman_berat">Berat</label>
                            <input {{ $disabled }} maxlength="5" class="form-control"
                                wire:model.defer="data.20_luas_perkerasan_halaman_berat"
                                name="20_luas_perkerasan_halaman_berat" id="20_luas_perkerasan_halaman_berat"
                                type="text" placeholder="..." />
                        </div>
                        <div class="col-6 px-2">
                            <label class="text-black  mt-2" for="20_luas_perkerasan_halaman_dpl">Dengan
                                Penutup
                                Lantai</label>
                            <input {{ $disabled }} maxlength="5" class="form-control"
                                wire:model.defer="data.20_luas_perkerasan_halaman_dpl"
                                name="20_luas_perkerasan_halaman_dpl" id="20_luas_perkerasan_halaman_dpl"
                                type="text" placeholder="..." />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 mb-2">
                    <h6>21. Jumlah Lapangan Tenis</h6>
                    <div class="d-flex flex-wrap align-items-center mt-1 ">
                        <div class="col-4 text-end pe-2 ">
                            <p></p>
                        </div>
                        <div class="col-4  pe-2">
                            <p class="mb-0 text-black">Dengan Lampu</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0 text-black">Tanpa Lampu</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center ">
                        <div class="col-4 text-end pe-2 ">
                            <small>Beton</small>
                        </div>
                        <div class="col-4  pe-2">
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.21_beton_dengan_lampu" name="21_beton_dengan_lampu"
                                id="21_beton_dengan_lampu" type="text" placeholder="..." />
                        </div>
                        <div class="col-4">
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.21_beton_tanpa_lampu" name="21_beton_tanpa_lampu"
                                id="21_beton_tanpa_lampu" type="text" placeholder="..." />
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center mt-3">
                        <div class="col-4 text-end pe-2 ">
                            <small>Aspal</small>
                        </div>
                        <div class="col-4  pe-2">
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.21_aspal_dengan_lampu" name="21_aspal_dengan_lampu"
                                id="21_aspal_dengan_lampu" type="text" placeholder="..." />
                        </div>
                        <div class="col-4">
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.21_aspal_tanpa_lampu" name="21_aspal_tanpa_lampu"
                                id="21_aspal_tanpa_lampu" type="text" placeholder="..." />
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center mt-3">
                        <div class="col-4 text-end pe-2 ">
                            <small>Tanah Liat/Rumput</small>
                        </div>
                        <div class="col-4  pe-2">
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.21_tanah_dengan_lampu" name="21_tanah_dengan_lampu"
                                id="21_tanah_dengan_lampu" type="text" placeholder="..." />
                        </div>
                        <div class="col-4">
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.21_tanah_tanpa_lampu" name="21_tanah_tanpa_lampu"
                                id="21_tanah_tanpa_lampu" type="text" placeholder="..." />
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 mb-2">
                    <h6>22. Jumlah Lift</h6>
                    <div class="d-flex flex-wrap align-items-center mt-3">
                        <div class="col-6 col-lg-3  pe-2">
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.22_lift_penumpang" name="22_lift_penumpang"
                                id="22_lift_penumpang" type="text" placeholder="..." />
                        </div>
                        <div class="col-4 col-lg-4 ps-0 ">
                            <small>Penumpang</small>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center mt-3">
                        <div class="col-6 col-lg-3  pe-2">
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.22_kapsul" name="22_kapsul" id="22_kapsul" type="text"
                                placeholder="..." />
                        </div>
                        <div class="col-4 col-lg-4 ps-0 ">
                            <small>Kapsul</small>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center mt-3">
                        <div class="col-6 col-lg-3  pe-2">
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.22_barang" name="22_barang" id="22_barang" type="text"
                                placeholder="..." />
                        </div>
                        <div class="col-6 col-lg-4 ps-0 ">
                            <small>Barang</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 mb-2">
                    <h6>23. Jumlah Tangga Berjalan</h6>
                    <div class="d-flex flex-wrap align-items-center mt-3">
                        <div class="col-lg-4 col-6 d-flex justify-content-end ">
                            <small class="text-end pe-2">Lbr ≤ 0.80 M</small>
                        </div>
                        <div class="col-lg-4 col-6  pe-2">
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.23_jumlah_tangga_berjalan_k080"
                                name="23_jumlah_tangga_berjalan_k080" id="23_jumlah_tangga_berjalan_k080"
                                type="text" placeholder="..." />
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center mt-3">
                        <div class="col-lg-4 col-6 d-flex justify-content-end ">
                            <small class="text-end pe-2">Lbr > 0.80 M</small>
                        </div>
                        <div class="col-lg-4 col-6  pe-2">
                            <input {{ $disabled }} maxlength="2" class="form-control"
                                wire:model.defer="data.23_jumlah_tangga_berjalan_b080"
                                name="23_jumlah_tangga_berjalan_b080" id="23_jumlah_tangga_berjalan_b080"
                                type="text" placeholder="..." />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-2 px-lg-3 px-1 mb-2">
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-6 col-12 px-lg-3 px-0">
                            <label class="text-black  mb-1 mt-" for="24_panjang_pagar">24. Panjang
                                Pagar(M2)</label>
                            <input {{ $disabled }} maxlength="4" class="form-control"
                                wire:model.defer="data.24_panjang_pagar" name="24_panjang_pagar"
                                id="24_panjang_pagar" type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-6 col-12 px-lg-3 px-0 ">
                            <label class="text-black  mb-1 " for="24_bahan_pagar">Bahan
                                Pagar(M2)</label>
                            <select {{ $disabled }} id="24_bahan_pagar" wire:model.defer="data.24_bahan_pagar"
                                name="24_bahan_pagar" class="form-select">
                                <option value="">Silahkan Pilih</option>
                                <option value="baja-besi">Baja Besi</option>
                                <option value="bata-batako">Bata Batako</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-2 px-lg-3 px-1 mb-2">
                    <label class="text-black  mb-1 " for="hydrant">25. PEMADAM
                        KEBAKARAN</label>
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="col-lg-2 col-4 text-start pe-2">
                            Hydrant
                        </div>
                        <div class="col-lg-6 col-6 d-flex flex-wrap">
                            <div class="form-check radio-style">
                                <input {{ $disabled }} wire:model.defer="data.25_hydrant"
                                    class="form-check-input" type="radio" value="ada" name="25_hydrant"
                                    id="hydrant-1" />
                                <label class="text-black  form-check-label" for="hydrant-1">
                                    Ada</label>
                            </div>
                            <div class="form-check radio-style">
                                <input {{ $disabled }} wire:model.defer="data.25_hydrant"
                                    class="form-check-input" type="radio" value="tidak" name="25_hydrant"
                                    id="hydrant-2" />
                                <label class="text-black  form-check-label" for="hydrant-2">
                                    Tidak Ada</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="col-lg-2 col-4 text-start pe-2">
                            Sprinkler
                        </div>
                        <div class="col-lg-6 col-6 d-flex flex-wrap">
                            <div class="form-check radio-style">
                                <input {{ $disabled }} wire:model.defer="data.sprinkler" class="form-check-input"
                                    type="radio" value="ada" name="25_sprinkler" id="sprinkler-1" />
                                <label class="text-black  form-check-label" for="sprinkler-1">
                                    Ada</label>
                            </div>
                            <div class="form-check radio-style">
                                <input {{ $disabled }} wire:model.defer="data.sprinkler" class="form-check-input"
                                    type="radio" value="tidak" name="25_sprinkler" id="sprinkler-2" />
                                <label class="text-black  form-check-label" for="sprinkler-2">
                                    Tidak Ada</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="col-lg-2 col-4 text-start pe-2">
                            Fire A1
                        </div>
                        <div class="col-lg-6 col-6 d-flex flex-wrap">
                            <div class="form-check radio-style">
                                <input {{ $disabled }} wire:model.defer="data.25_fireA1" class="form-check-input"
                                    type="radio" value="ada" name="25_fireA1" id="fireA1-1" />
                                <label class="text-black  form-check-label" for="fireA1-1">
                                    Ada</label>
                            </div>
                            <div class="form-check radio-style">
                                <input {{ $disabled }} wire:model.defer="data.25_fireA1" class="form-check-input"
                                    type="radio" value="tidak" name="25_fireA1" id="fireA1-2" />
                                <label class="text-black  form-check-label" for="fireA1-2">
                                    Tidak Ada</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 mb-2">
                    <label class="text-black  mb-1 " for="26_jumlah_saluran_pes_pabx">26. JUMLAH
                        SALURAN PES.
                        PABX</label>
                    <input {{ $disabled }} maxlength="4" class="form-control"
                        wire:model.defer="data.26_jumlah_saluran_pes_pabx" name="26_jumlah_saluran_pes_pabx"
                        id="26_jumlah_saluran_pes_pabx" type="text" placeholder="..." />
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 my-2">
                    <label class="text-black  mb-1 " for="27_kedalaman_sumur_artetis">27.
                        KEDALAMAN
                        SUMUR ARTETIS
                        (M)</label>
                    <input {{ $disabled }} maxlength="4" class="form-control"
                        wire:model.defer="data.27_kedalaman_sumur_artetis" name="27_kedalaman_sumur_artetis"
                        id="27_kedalaman_sumur_artetis" type="text" placeholder="..." />
                </div>
            </div>
        </div>
        <h4 class=" text-center my-3">
            C. DATA TAMBAHAN UNTUK JPB = 3/8
        </h4>
        <div class="card card-form ">
            <P class="fw-bold text-black">PABRIK/BENGKEL/GUDANG/PERTANIAN (JBP=3/8)</P>

            <div class="d-flex flex-wrap">
                <div class="col-lg-6 col-12 px-lg-3 px-1 my-2">
                    <label class="text-black  mb-1 " for="28_tinggi_kolong">28. TINGGI KOLOM
                        (M)</label>
                    <input {{ $disabled }} maxlength="2" class="form-control"
                        wire:model.defer="data.28_tinggi_kolong" name="28_tinggi_kolong" id="28_tinggi_kolong"
                        type="text" placeholder="..." />
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 my-2">
                    <label class="text-black  mb-1 " for="29_lebar_bentang">29. LEBAR BENTANG
                        (M)</label>
                    <input {{ $disabled }} maxlength="2" class="form-control"
                        wire:model.defer="data.29_lebar_bentang" name="29_lebar_bentang" id="29_lebar_bentang"
                        type="text" placeholder="..." />
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 my-2">
                    <label class="text-black  mb-1 " for="30_daya_dukung_lantai">30. DAYA DUKUNG
                        LANTAI
                        (Kg/M²)</label>
                    <input {{ $disabled }} maxlength="4" class="form-control"
                        wire:model.defer="data.30_daya_dukung_lantai" name="30_daya_dukung_lantai"
                        id="30_daya_dukung_lantai" type="text" placeholder="..." />
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 my-2">
                    <label class="text-black  mb-1 " for="31_keliling_dinding">31. KELILING DINDING
                        (M)</label>
                    <input {{ $disabled }} maxlength="4" class="form-control"
                        wire:model.defer="data.31_keliling_dinding" name="31_keliling_dinding"
                        id="31_keliling_dinding" type="text" placeholder="..." />
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-1 my-2">
                    <label class="text-black  mb-1 " for="32_luas_mezzanine">32. LUAS MEZZANINE
                        (M2)</label>
                    <input {{ $disabled }} maxlength="4" class="form-control"
                        wire:model.defer="data.32_luas_mezzanine" name="32_luas_mezzanine" id="32_luas_mezzanine"
                        type="text" placeholder="..." />
                </div>
            </div>
        </div>
        <h4 class=" text-center my-3">
            D. DATA TAMBAHAN UNTUK NON STANDARD
        </h4>
        <div class="card card-form">
            <div class="d-flex flex-wrap">
                <div class="col-lg-6  col-12 px-lg-3 px-1 ">
                    <P class="fw-bold text-black">PERKANTORAN SWASTA/GEDUNG/PEMERINTAHAN (JPB = 2/9)</P>
                    <label class="text-black  mb-1 " for="33_perkantoran_swasta_gedung_pemerintahan">33.
                        KELAS
                        BANGUNAN</label>
                    <select {{ $disabled }} wire:model.defer="data.33_perkantoran_swasta_gedung_pemerintahan"
                        id="33_perkantoran_swasta_gedung_pemerintahan"
                        name="33_perkantoran_swasta_gedung_pemerintahan" class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="kelas_1">Kelas 1</option>
                        <option value="kelas_2">Kelas 2</option>
                        <option value="kelas_3">Kelas 3</option>
                        <option value="kelas_4">Kelas 4</option>
                    </select>
                </div>
                <div class="col-lg-6  col-12 px-lg-3 px-1 ">
                    <P class=" fw-bold text-black mt-2">TOKO/APOTIK/PASAR/RUKO (JPB=4)</P>
                    <label class="text-black  mb-1 " for="34_toko_apotik_pasar_ruko">34.KELAS
                        BANGUNAN
                    </label>
                    <select {{ $disabled }} id="34_toko_apotik_pasar_ruko" name="34_toko_apotik_pasar_ruko"
                        wire:model.defer="data.34_toko_apotik_pasar_ruko" class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="kelas_1">Kelas 1</option>
                        <option value="kelas_2">Kelas 2</option>
                        <option value="4">Kelas 3</option>
                    </select>
                </div>
                <div class="col-lg-12 col-12  px-lg-3 px-1 ">
                    <P class=" fw-bold text-black mt-1">RUMAH SAKIT / KLINK (JPB = 5)</P>
                    <label class="text-black  mb-1 " for="35_rumah_sakit_klinik">35.KELAS BANGUNAN
                    </label>
                    <select {{ $disabled }} id="35_rumah_sakit_klinik"
                        wire:model.defer="data.35_rumah_sakit_klinik" name="35_rumah_sakit_klinik"
                        class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="kelas_1">Kelas 1</option>
                        <option value="kelas_2">Kelas 2</option>
                        <option value="kelas_3">Kelas 3</option>
                        <option value="kelas_4">Kelas 4</option>
                    </select>
                </div>
                <div class="col-lg-12 col-12 px-lg-3 px-1 my-2 ">
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-6 col-12 pe-lg-2">
                            <label class="text-black  mb-1 mt-2" for="36_luas_kamar_dengan_ac_sentral">36.
                                LUAS KAMAR DENGAN AC
                                SENTRAL(M2)</label>
                            <input {{ $disabled }} maxlength="5" class="form-control"
                                wire:model.defer="data.36_luas_kamar_dengan_ac_sentral"
                                name="36_luas_kamar_dengan_ac_sentral" id="36_luas_kamar_dengan_ac_sentral"
                                type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-6 col-12 ps-lg-2">
                            <label class="text-black  mb-1 mt-2" for="37_luas_ruang_lain_dengan_ac_sentral">37.
                                LUAS
                                RUANG LAIN
                                DENGAN
                                AC
                                SENTRAL (M2)</label>
                            <input {{ $disabled }} maxlength="5" class="form-control"
                                wire:model.defer="data.37_luas_ruang_lain_dengan_ac_sentral"
                                name="37_luas_ruang_lain_dengan_ac_sentral" id="37_luas_ruang_lain_dengan_ac_sentral"
                                type="text" placeholder="..." />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  col-12 px-lg-3 px-1 ">
                    <P class=" fw-bold text-black">OLAHRAGA / REKREASI (JBP=6)</P>
                    <label class="text-black  mb-1 " for="38_olahraga_rekreasi">38.KELAS BANGUNAN
                    </label>
                    <select {{ $disabled }} id="38_olahraga_rekreasi"
                        wire:model.defer="data.38_olahraga_rekreasi" name="38_olahraga_rekreasi" class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="kelas_1">Kelas 1</option>
                        <option value="kelas_2">Kelas 2</option>
                    </select>
                </div>
                <div class="col-lg-12 col-12 px-lg-3 px-1 my-2 ">
                    <P class=" fw-bold text-black mt-2">HOTEL / WISMA (JBP = 7)</P>
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-6 col-12 pe-lg-2">
                            <label class="text-black mt-0  mb-0 " for="39_jenis_hotel">39.JENIS HOTEL
                            </label>
                            <select {{ $disabled }} id="39_jenis_hotel" wire:model.defer="data.39_jenis_hotel"
                                name="39_jenis_hotel" class="form-select">
                                <option value="">Silahkan Pilih</option>
                                <option value="non_resort">Non Resort</option>
                                <option value="resort">Resort</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-12 ps-lg-2">
                            <label class="text-black mt-0  mb-0 " for="40_jumlah_bintang">40. JUMLAH
                                BINTANG
                            </label>
                            <select {{ $disabled }} id="40_jumlah_bintang"
                                wire:model.defer="data.40_jumlah_bintang" name="40_jumlah_bintang"
                                class="form-select">
                                <option value="">Silahkan Pilih</option>
                                <option value="bintang_5">Bintang 5</option>
                                <option value="bintang_4">Bintang 4</option>
                                <option value="bintang_3">Bintang 3</option>
                                <option value="bintang_1-2">Bintang 1-2</option>
                                <option value="non_bintang">Non Bintang</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-12 pe-lg-2">
                            <label class="text-black mt-2  mb-0 " for="41_jumlah_kamar">41. JUMLAH
                                KAMAR</label>
                            <input {{ $disabled }} maxlength="4" class="form-control"
                                wire:model.defer="data.41_jumlah_kamar" name="41_jumlah_kamar" id="41_jumlah_kamar"
                                type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-6 col-12 ps-lg-2">
                            <label class="text-black mt-2  mb-0 " for="42_luas_kamar_dengan_ac_sentra">42.
                                LUAS KAMAR DENGAN AC
                                SENTARAL
                                (M2)</label>
                            <input {{ $disabled }} maxlength="5" class="form-control"
                                wire:model.defer="data.42_luas_kamar_dengan_ac_sentra"
                                name="42_luas_kamar_dengan_ac_sentra" id="42_luas_kamar_dengan_ac_sentra"
                                type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-6 col-12 ">
                            <label class="text-black mt-2  mb-0 " for="43_luas_ruang_lain_dengan_ac_sentral">43.
                                LUAS
                                RUANG LAIN
                                DENGAN
                                AC
                                SENTARAL (M2)</label>
                            <input {{ $disabled }} maxlength="5" class="form-control"
                                wire:model.defer="data.43_luas_ruang_lain_dengan_ac_sentral"
                                name="43_luas_ruang_lain_dengan_ac_sentral" id="43_luas_ruang_lain_dengan_ac_sentral"
                                type="text" placeholder="..." />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  col-12 px-lg-3 px-1 ">
                    <P class=" fw-bold text-black">BANGUNAN PARKIR (JPB =12)</P>
                    <label class="text-black  mb-1 " for="44_tipe_bangunan">44.TIPE BANGUNAN
                    </label>
                    <select {{ $disabled }} id="44_tipe_bangunan" wire:model.defer="data.44_tipe_bangunan"
                        name="44_tipe_bangunan" class="form-select ">
                        <option value="">Silahkan Pilih</option>
                        <option value="tipe_4">Tipe 4</option>
                        <option value="tipe_3">Tipe 3</option>
                        <option value="tipe_2">Tipe 2</option>
                        <option value="tipe_1">Tipe 1</option>
                    </select>
                </div>
                <div class="col-lg-12 col-12   px-lg-3 px-1">
                    <P class="fw-bold text-black mt-3">APARTEMEN (JPB = 13)</P>
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-6 col-12  pe-lg-2">
                            <label class="text-black  mb-1 mt-1" for="45_kelas_bangunan">45.KELAS
                                BANGUNAN
                            </label>
                            <select {{ $disabled }} id="45_kelas_bangunan"
                                wire:model.defer="data.45_kelas_bangunan" name="45_kelas_bangunan"
                                class="form-select">
                                <option value="">Silahkan Pilih</option>
                                <option value="tipe_1">Tipe 1</option>
                                <option value="tipe_2">Tipe 2</option>
                                <option value="tipe_3">Tipe 3</option>
                                <option value="tipe_4">Tipe 4</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-12  ps-lg-2">
                            <label class="text-black  mb-1 mt-1" for="46_jumlah_apartemen">46.JUMLAH
                                APARTEMEN </label>
                            <input {{ $disabled }} maxlength="5" class="form-control"
                                wire:model.defer="data.46_jumlah_apartemen" name="46_jumlah_apartemen"
                                id="46_jumlah_apartemen" type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-6 col-12 px-lg-0 pe-lg-2 px-0 ">
                            <label class="text-black  mb-1 mt-1" for="47_luas_apartemen_dengan_ac_sentral">47.
                                LUAS
                                APARTEMEN
                                DENGAN AC
                                SENTRAL (M2) </label>
                            <input {{ $disabled }} maxlength="5" class="form-control"
                                wire:model.defer="data.47_luas_apartemen_dengan_ac_sentral"
                                name="47_luas_apartemen_dengan_ac_sentral" id="47_luas_apartemen_dengan_ac_sentral"
                                type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-6 col-12 px-lg-0 ps-lg-2 px-0 ">
                            <label class="text-black  mb-1 mt-1" for="48_ls_ruang_lain_dengan_ac_sentral">48. LUAS
                                RUANG LAIN
                                DENGAN AC
                                SENTRAL (M2)</label>
                            <input {{ $disabled }} maxlength="5" class="form-control"
                                wire:model.defer="data.48_ls_ruang_lain_dengan_ac_sentral"
                                name="48_ls_ruang_lain_dengan_ac_sentral" id="48_ls_ruang_lain_dengan_ac_sentral"
                                type="text" placeholder="..." />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-12  px-lg-3 px-1 ">
                    <P class=" fw-bold text-black mt-3 ">TANGKI MINYAK (JPB = 15)</P>
                    <div class=" d-flex flex-wrap">
                        <div class="col-lg-6 col-12 pe-lg-2 ps-lg-0  px-0 ">
                            <label class="text-black  mb-1 mt-1" for="49_kapasitas_tangki">49. KAPASITAS
                                TANGKI (M3)</label>
                            <input {{ $disabled }} maxlength="5" class="form-control"
                                wire:model.defer="data.49_kapasitas_tangki" name="49_kapasitas_tangki"
                                id="49_kapasitas_tangki" type="text" placeholder="..." />
                        </div>
                        <div class="col-lg-6 col-12 ps-lg-2  pe-lg-0 px-0 ">
                            <label class="text-black  mb-1 mt-1" for="50_letak_tangki">50. LETAK TANGKI
                            </label>
                            <select {{ $disabled }} id="50_letak_tangki" name="50_letak_tangki"
                                wire:model.defer="data.50_letak_tangki" class="form-select">
                                <option value="">Silahkan Pilih</option>
                                <option value="di_atas_tanah">Di Atas Tanah</option>
                                <option value="di_bawah_tanah">Di Bawah Tanah</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  col-12 px-lg-3 px-1 ">
                    <P class=" fw-bold text-black mt-3">GEDUNG SEKOLAH (JPB=16)</P>
                    <label class="text-black  mb-1 mt-2 " for="51_kelas_bangunan">51. KELAS BANGUNAN
                    </label>
                    <select {{ $disabled }} id="51_kelas_bangunan" wire:model.defer="data.51_kelas_bangunan"
                        name="51_kelas_bangunan" class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="kelas_1">Kelas 1</option>
                        <option value="kelas_2">Kelas 2</option>
                    </select>
                </div>
            </div>
        </div>
        <h4 class=" text-center my-3">
            E. PENILAIAN INDIVIDUAL (X rP. 1.000,-)
        </h4>
        <div class="card card-form ">
            <div class="d-flex flex-wrap">

                <div class="col-12 col-lg-6 px-lg-3 px-1 ">
                    <label class="text-black  mb-1 mt-2 " for="52_nilai_sistem">52. NILAI SISTEM</label>
                    <input {{ $disabled }} maxlength="10" class="form-control"
                        wire:model.defer="data.52_nilai_sistem" name="52_nilai_sistem" id="52_nilai_sistem"
                        type="text" placeholder="..." />
                </div>
                <div class="col-12 col-lg-6 px-lg-3 px-1 ">
                    <label class="text-black  mb-1 mt-2 " for="53_nilai_individual">53. NILAI
                        INDIVIDUAL</label>
                    <input {{ $disabled }} maxlength="10" class="form-control"
                        wire:model.defer="data.53_nilai_individual" name="53_nilai_individual"
                        id="53_nilai_individual" type="text" placeholder="..." />
                </div>
            </div>
        </div>
        <h4 class="fw-bold text-lg-center text-start my-3">
            F. IDENTITAS PENDATA / PEJABAT YANG BERWENANG
        </h4>
        <div class="card card-form ">
            <div class="d-flex flex-wrap">
                <div class="col-6 px-2">
                    <P class="fw-bold text-black mt-3 text-center mb-3">PETUGAS PENDATA</P>
                    <div class="col-12">
                        <label class="text-black fw-bold mb-1 fw-bold" for="54_tanggal_kunjungan_kembali">54. TANGAL
                            KUNJUNGAN
                            KEMBALI</label>
                        <input {{ $disabled }} class="form-control"
                            wire:model.defer="data.54_tanggal_kunjungan_kembali" name="54_tanggal_kunjungan_kembali"
                            id="54_tanggal_kunjungan_kembali" type="date" placeholder="-" />
                    </div>
                    <div class="col-12">
                        <label class="text-black fw-bold mb-1 fw-bold" for="55_tanggal_pendataan">55. TANGAL
                            PENDATAAN</label>
                        <input {{ $disabled }} class="form-control" wire:model.defer="data.55_tanggal_pendataan"
                            name="55_tanggal_pendataan" id="55_tanggal_pendataan" type="date" placeholder="-" />
                    </div>
                    <div class="col-12">
                        <label class="text-black fw-bold mb-1 fw-bold" for="56_tanda_tangan">56. TANDA TANGAN</label>
                        <br>

                        @if ($edit56 == false)
                            <img class="image-ttd"
                                src="{{ asset('img/ttd/lspop/pendata/' . $lspop->{'56_tanda_tangan'}) }}" width=246
                                height=164 alt="">
                        @endif
                        @if ($edit56 == false)
                            <button type="button"wire:click="edit56" class="btn rounded-pill  btn-warning py-1"><i
                                    class="fa-solid fa-pencil"></i></button>
                        @endif

                        <div class="card  sign-ttd" style="{{ $edit56 ? 'display: block' : 'display: none' }}">

                            <div class="wrapper-sign" id="tempatTTD">
                                <canvas id="signature-pad_56" class="signature-pad_56" width=246 height=164></canvas>
                            </div>
                            <textarea wire:model="newTTD56" name="56_tanda_tangan" id="tanda_tangan_56"></textarea>
                            <div style="display:block" id="div_button_56">
                                <div class="d-flex justify-content-center">

                                    <button id="cancel_56" wire:click="cancelEdit56" type="button"
                                        class="btn rounded-pill btn-danger py-0 mb-2 me-2">Batal</button>
                                    <button type="button" class="btn rounded-pill btn-info me-2 py-0 mb-2"
                                        id="clear_56">Clear</button>
                                    <button wire:click="simpan56" id="simpan_56" type="button"
                                        class="btn rounded-pill btn-success py-0 mb-2">Simpan</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 px-2 ">
                        <label class="text-black fw-bold mb-1 fw-bold" for="57_nama_jelas">57. NAMA JELAS</label>
                        <input {{ $disabled }} class="form-control" wire:model.defer="data.57_nama_jelas"
                            name="57_nama_jelas" id="57_nama_jelas" type="text" placeholder="-" />
                    </div>
                    <div class="col-12 px-2 ">
                        <label class="text-black fw-bold mb-1 fw-bold" for="58_nip">58. NIP</label>
                        <input {{ $disabled }} class="form-control" wire:model.defer="data.58_nip"
                            name="58_nip" id="58_nip" type="text" placeholder="-" />
                    </div>
                </div>
                <div class="col-6 px-2">
                    <P class="fw-bold text-black mt-3 text-center mb-3">MENGETAHUI PEJABAT YANG BERWENANG</P>
                    <div class="col-12">
                        <label class="text-black fw-bold mb-1 fw-bold" for="59_tanggal_penelitian">59. TANGAL
                            PENELITIAN</label>
                        <input {{ $disabled }} class="form-control"
                            wire:model.defer="data.59_tanggal_penelitian" name="59_tanggal_penelitian"
                            id="59_tanggal_penelitian" type="date" placeholder="-" />
                    </div>
                    <div class="col-12">
                        <label class="text-black fw-bold mb-1 fw-bold" for="60_tanda_tangan">60. TANDA
                            TANGAN</label><br>

                        @if ($edit60 == false)
                            <img class="image-ttd"
                                src="{{ asset('img/ttd/lspop/pejabat/' . $lspop->{'60_tanda_tangan'}) }}" width=246
                                height=164 alt="">
                        @endif
                        @if ($edit60 == false)
                            <button type="button" wire:click="edit60"
                                class="btn rounded-pill  btn-warning py-1"><i
                                    class="fa-solid fa-pencil"></i></button>
                        @endif

                        <div class="card sign-ttd" style="{{ $edit60 ? 'display: block' : 'display: none' }}">
                            <div class="wrapper-sign" id="tempatTTD" style="display: block">
                                <canvas id="signature-pad_60" class="signature-pad_60" width=246
                                    height=164></canvas>
                            </div>
                            <textarea wire:model="newTTD60" name="60_tanda_tangan" id="tanda_tangan_60"></textarea>
                            <div class="d-flex justify-content-center">
                                <button wire:click="cancelEdit60" id="cancel_60" type="button"
                                    class="btn rounded-pill btn-danger py-0 mb-2 me-2">Batal</button>
                                <button type="button" class="btn rounded-pill btn-info py-0 mb-2 me-2"
                                    id="clear_60">Clear</button>
                                <button wire:click="simpan60" id="simpan_60" type="button"
                                    class="btn rounded-pill btn-success py-0 mb-2">Simpan</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 px-2 ">
                        <label class="text-black fw-bold mb-1 fw-bold" for="61_nama_jelas">61. NAMA JELAS</label>
                        <input {{ $disabled }} class="form-control" wire:model.defer="data.61_nama_jelas"
                            name="61_nama_jelas" id="61_nama_jelas" type="text" placeholder="-" />
                    </div>
                    <div class="col-12 px-2 ">
                        <label class="text-black fw-bold mb-1 fw-bold" for="62_nip">62. NIP</label>
                        <input {{ $disabled }} class="form-control" wire:model.defer="data.62_nip"
                            name="62_nip" id="62_nip" type="text" placeholder="-" />
                    </div>
                </div>
            </div>
        </div>
        {{-- <button class="btn btn-primary w-100 mt-3" wire:click="updateData" type="button">submit</button> --}}
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
    var signaturePad_56 = new SignaturePad(document.getElementById('signature-pad_56'), {
        backgroundColor: 'rgba(255, 255, 255, 0)',
        penColor: 'rgb(0, 0, 0)'
    });
    var signaturePad_60 = new SignaturePad(document.getElementById('signature-pad_60'), {
        backgroundColor: 'rgba(255, 255, 255, 0)',
        penColor: 'rgb(0, 0, 0)'
    });

    var cancelButton_56 = document.getElementById('cancel_56');
    var cancelButton_60 = document.getElementById('cancel_60');

    var clearButton_56 = document.getElementById('clear_56');
    var clearButton_60 = document.getElementById('clear_60');



    var cancelSimpanButton_56 = document.getElementById('cancel_simpan_56');
    var cancelSimpanButton_60 = document.getElementById('cancel_simpan_60');



    var canvasPad_56 = document.getElementById('signature-pad_56');
    var canvasPad_60 = document.getElementById('signature-pad_60');

    canvasPad_56.addEventListener('click', function(event) {
        if (signaturePad_56.isEmpty()) {
            alert("Silahkan petugas Tanda tangan terlebih dahulu.");
        } else {
            var data_56 = signaturePad_56.toDataURL('image/png');

            var tandaTanganInput_56 = document.getElementById('tanda_tangan_56');
            tandaTanganInput_56.value = data_56;

            @this.set('newTTD56', data_56);
        }
    });

    canvasPad_60.addEventListener('click', function(event) {
        if (signaturePad_60.isEmpty()) {
            alert("Silahkan pejabat Tanda tangan terlebih dahulu.");
        } else {
            var data_60 = signaturePad_60.toDataURL('image/png');

            var tandaTanganInput_60 = document.getElementById('tanda_tangan_60');
            tandaTanganInput_60.value = data_60;

            @this.set('newTTD60', data_60);
        }
    });

    cancelButton_56.addEventListener('click', function(event) {
        event.preventDefault();
        signaturePad_56.clear();
        document.getElementById('tanda_tangan_56').value = "";

    });

    cancelButton_60.addEventListener('click', function(event) {
        event.preventDefault();
        signaturePad_60.clear();
        document.getElementById('tanda_tangan_60').value = "";
    });

    clearButton_56.addEventListener('click', function(event) {
        event.preventDefault();
        signaturePad_56.clear();
        document.getElementById('tanda_tangan_56').value = "";

    });

    clearButton_60.addEventListener('click', function(event) {
        event.preventDefault();
        signaturePad_60.clear();
        document.getElementById('tanda_tangan_60').value = "";
    });
</script>
