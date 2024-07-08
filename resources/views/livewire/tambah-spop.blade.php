<div>
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="title text-center">
                    <h3><b>PBB - P2 BP3RD KEPULUAN SULA</b></h3>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <!-- ========== form-elements-wrapper start ========== -->
    <div class="form-elements-wrapper">
        <div class="row">
            <div class="card card-form">
                <div class="col-lg-4 col-12 mb-2 px-1">
                    <label class="text-black fw-bold mb-1" for="no_formulir">No Formulir</label>
                    <input wire:model="data.no_formulir" class="form-control" name="no_formulir" id="no_formulir"
                        type="text" placeholder="Masukkan Data" />
                </div>
                <div class="div">
                    <h6 class="mb-25">
                        1. Jenis Transaksi<span class="text-danger">*</span>
                    </h6>
                    <div class="d-flex justify-content-start gap-2">
                        <div class="form-check radio-style mb-20">
                            <input class="form-check-input" wire:model="data.1_jenis_transaksi" type="radio"
                                value="1" id="radio-transaksi-1" name="1_jenis_transaksi" required />
                            <label class="form-check-label" for="radio-transaksi-1">
                                1. Perekaman Data
                            </label>
                        </div>
                        <div class="form-check radio-style mb-20">
                            <input class="form-check-input" wire:model="data.1_jenis_transaksi" type="radio"
                                value="2" id="radio-transaksi-2" name="1_jenis_transaksi" />
                            <label class="form-check-label" for="radio-transaksi-2">
                                2. Pemutakhiran Data
                            </label>
                        </div>
                        <div class="form-check radio-style mb-20">
                            <input class="form-check-input" wire:model="data.1_jenis_transaksi" type="radio"
                                value="3" id="radio-transaksi-3" name="1_jenis_transaksi" />
                            <label class="form-check-label" for="radio-transaksi-3">
                                3. Penghapusan Data
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-form mt-4">
                <div class="div">
                    <h6 class="mb-25">2. NOP<span class="text-danger">*</span></h6>
                    <div class="col-12">

                        <div class="d-flex flex-wrap">
                            <div class="col-lg-1 col-12 mb-2 px-1">
                                <label class="text-black mb-1" for="provinsi">PROV.</label>
                                <input class="form-control" wire:model="data.2_nop_provinsi" name="2_nop_provinsi"
                                    id="provinsi" type="text" placeholder="Masukkan Data" />
                            </div>
                            <div class="col-lg-2 col-12 mb-2 px-1">
                                <label class="text-black mb-1" for="Kabupaten">KAB.</label>
                                <input class="form-control" wire:model="data.2_nop_kabupaten" name="2_nop_kabupaten"
                                    id="Kabupaten" type="text" placeholder="Masukkan Data" />
                            </div>
                            <div class="col-lg-2 col-12 mb-2 px-1">
                                <label class="text-black mb-1" for="Kecamatan">KEC.</label>
                                <input class="form-control" wire:model="data.2_nop_kecamatan" name="2_nop_kecamatan"
                                    id="Kecamatan" type="text" placeholder="Masukkan Data" />
                            </div>
                            <div class="col-lg-2 col-12 mb-2 px-1">
                                <label class="text-black mb-1" for="Gampong">GAMPONG</label>
                                <input class="form-control" wire:model="data.2_nop_gampong" name="2_nop_gampong"
                                    id="Gampong" type="text" placeholder="Masukkan Data" />
                            </div>
                            <div class="col-lg-2 col-12 mb-2 px-1">
                                <label class="text-black mb-1" for="Blok">BLOK</label>
                                <input class="form-control" wire:model="data.2_nop_blok" name="2_nop_blok"
                                    id="Blok" type="text" placeholder="Masukkan Data" />
                            </div>
                            <div class="col-lg-2 col-12 mb-2 px-1">
                                <label class="text-black mb-1" for="No.Urut">NO. URUT</label>
                                <input class="form-control" wire:model="data.2_no_urut" name="2_no_urut"
                                    id="No.Urut" type="text" placeholder="Masukkan Data" />
                            </div>
                            <div class="col-lg-1 col-12 mb-2 px-1">
                                <label class="text-black mb-1" for="Kode">KODE</label>
                                <input class="form-control" wire:model="data.2_nop_kode" name="2_nop_kode"
                                    id="Kode" type="text" placeholder="Kode" />
                            </div>
                        </div>
                    </div>
                    <h6 class=" my-3">3. NOP BERSAMA <span class="text-danger">*</span></h6>
                    <div class="col-12">
                        <div class="d-flex flex-wrap">

                            <div class="col-lg-1 col-12 mb-2 px-1">
                                <label class="mb-1" for="provinsi">Provinsi</label>
                                <input class="form-control" wire:model="data.3_nop_bersama_provinsi"
                                    name="3_nop_bersama_provinsi" id="provinsi" type="text"
                                    placeholder="Masukkan Data" />
                            </div>
                            <div class="col-lg-2 col-12 mb-2 px-1">
                                <label class="mb-1" for="Kabupaten">Kabupaten</label>
                                <input class="form-control" wire:model="data.3_nop_bersama_kabupaten"
                                    name="3_nop_bersama_kabupaten" id="Kabupaten" type="text"
                                    placeholder="Masukkan Data" />
                            </div>
                            <div class="col-lg-2 col-12 mb-2 px-1">
                                <label class="mb-1" for="Kecamatan">Kecamatan</label>
                                <input class="form-control" wire:model="data.3_nop_bersama_kecamatan"
                                    name="3_nop_bersama_kecamatan" id="Kecamatan" type="text"
                                    placeholder="Masukkan Data" />
                            </div>
                            <div class="col-lg-2 col-12 mb-2 px-1">
                                <label class="mb-1" for="Gampong">Gampong</label>
                                <input class="form-control" wire:model="data.3_nop_bersama_gampong"
                                    name="3_nop_bersama_gampong" id="Gampong" type="text"
                                    placeholder="Masukkan Data" />
                            </div>
                            <div class="col-lg-2 col-12 mb-2 px-1">
                                <label class="mb-1" for="Blok">Blok</label>
                                <input class="form-control" wire:model="data.3_nop_bersama_blok"
                                    name="3_nop_bersama_blok" id="Blok" type="text"
                                    placeholder="Masukkan Data" />
                            </div>
                            <div class="col-lg-2 col-12 mb-2 px-1">
                                <label class="mb-1" for="No.Urut">No.Urut</label>
                                <input class="form-control" wire:model="data.3_no_urut" name="3_no_urut"
                                    id="No.Urut" type="text" placeholder="Masukkan Data" />
                            </div>
                            <div class="col-lg-1 col-12 mb-2 px-1">
                                <label class="mb-1" for="Kode">Kode</label>
                                <input class="form-control" wire:model="data.3_nop_bersama_kode"
                                    name="3_nop_bersama_kode" id="Kode" type="text"
                                    placeholder="Masukkan Data" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="fw-bold text-lg-center text-start my-3">
                A. INFORMASI TAMBAHAN UNTUK DATA BARU
            </h4>
            <div class="card card-form">
                <div class="d-flex flex-wrap">
                    <div class="col-lg-6 col-12 px-3 mb-2">
                        <label class="mb-1" for="4_nop_asal">4. NOP ASAL</label>
                        <input class="form-control" wire:model="data.4_nop_asal" name="4_nop_asal" id="4_nop_asal"
                            type="text" placeholder="Masukkan Data" />
                    </div>
                    <div class="col-lg-6 col-12 px-3 mb-2">
                        <label class="mb-1" for="5_no_sppt_lama">5. NO. SPPT LAMA</label>
                        <input class="form-control" wire:model="data.5_no_sppt_lama" name="5_no_sppt_lama"
                            id="5_no_sppt_lama" type="text" placeholder="Masukkan Data" />
                    </div>
                </div>
            </div>
        </div>
        <h4 class="fw-bold text-lg-center text-start my-3">
            B. DATA LETAK OBJEK PAJAK
        </h4>
        <div class="card card-form">
            <div class="d-flex flex-wrap">
                <div class="col-lg-6 col-12 px-3 mb-2">
                    <label class="mb-1" for="6_nama_jalan">6. NAMA JALAN</label>
                    <input class="form-control" wire:model="data.6_nama_jalan" name="6_nama_jalan" id="6_nama_jalan"
                        type="text" placeholder="Masukkan Data" />
                </div>
                <div class="col-lg-6 col-12 px-3 mb-2">
                    <label class="mb-1" for="7_blok_kav_nomor">7. BLOK / KAV / NOMOR</label>
                    <input class="form-control" wire:model="data.7_blok_kav_nomor" name="7_blok_kav_nomor"
                        id="7_blok_kav_nomor" type="text" placeholder="Masukkan Data" />
                </div>
                <div class="col-lg-6 col-12 px-3 mb-2">
                    <label class="mb-1" for="8_gampong">8. GAMPONG</label>
                    <input class="form-control" wire:model="data.8_gampong" name="8_gampong" id="8_gampong"
                        type="text" placeholder="Masukkan Data" />
                </div>
                <div class="col-6 d-flex flex-wrap">

                    <div class="col-lg-6 col-12 px-3 mb-2">
                        <label class="mb-1" for="9_rw">9. RW</label>
                        <input class="form-control" wire:model="data.9_rw" name="9_rw" id="9_rw"
                            type="text" placeholder="Masukkan Data" />
                    </div>
                    <div class="col-lg-6 col-12 px-3 mb-2">
                        <label class="mb-1" for="10_rt">10. RT</label>
                        <input class="form-control" wire:model="data.10_rt" name="10_rt" id="10_rt"
                            type="text" placeholder="Masukkan Data" />
                    </div>
                </div>
            </div>
        </div>
        <h4 class="fw-bold text-lg-center text-start my-3">
            C. DATA SUBJEK PAJAK
        </h4>
        <div class="card card-form">
            <div class="d-flex flex-wrap">
                <div class="col-lg-6 col-12 mb-2 px-3 mb-2">
                    <label for="11_status">11. STATUS</label>
                    <select wire:model="data.11_status" name="11_status" id="11_status" class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="pemilik">Pemilik</option>
                        <option value="penyewa">Penyewa</option>
                        <option value="pengelola">Pengelola</option>
                        <option value="pemakai">Pemakai</option>
                        <option value="sengketa">Sengketa</option>
                    </select>
                </div>
                <div class="col-lg-6 col-12 mb-2 px-3 mb-2">
                    <label for="12_pekerjaan">12. PEKERJAAN</label>
                    <select wire:model="data.12_pekerjaan" name="12_pekerjaan" id="12_pekerjaan"
                        class="form-select">
                        <option value="">Silahkan Pilih</option>
                        <option value="pns">PNS *)</option>
                        <option value="abri">ABRI *)</option>
                        <option value="pensiunan">Pensiunan *)</option>
                        <option value="badan">Badan</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="col-lg-6 col-12 px-3 mb-2">
                    <label class="mb-1" for="13_nama_subjek_pajak">13. NAMA SUBJEK PAJAK</label>
                    <input class="form-control" wire:model="data.13_nama_subjek_pajak" name="13_nama_subjek_pajak"
                        id="13_nama_subjek_pajak" type="text" placeholder="Masukkan Data" />
                </div>
                <div class="col-lg-6 col-12 px-3 mb-2">
                    <label class="mb-1" for="14_npwp">14. NPWP</label>
                    <input class="form-control" wire:model="data.14_npwp" name="14_npwp" id="14_npwp"
                        type="text" placeholder="Masukkan Data" />
                </div>
                <div class="col-lg-6 col-12 px-3 mb-2">
                    <label class="mb-1" for="15_nama_jalan">15. NAMA JALAN</label>
                    <input class="form-control" wire:model="data.15_nama_jalan" name="15_nama_jalan"
                        id="15_nama_jalan" type="text" placeholder="Masukkan Data" />
                </div>
                <div class="col-lg-6 col-12 px-3 mb-2">
                    <label class="mb-1" for="16_blok_kav_nomor">16. BLOK / KAV / NOMOR</label>
                    <input class="form-control" wire:model="data.16_blok_kav_nomor" name="16_blok_kav_nomor"
                        id="16_blok_kav_nomor" type="text" placeholder="Masukkan Data" />
                </div>
                <div class="col-lg-6 col-12 px-3 mb-2">
                    <label class="mb-1" for="17_gampong">17. GAMPONG</label>
                    <input class="form-control" wire:model="data.17_gampong" name="17_gampong" id="17_gampong"
                        type="text" placeholder="Masukkan Data" />
                </div>
                <div class="col-lg-6 col-12 d-flex flex-wrap">

                    <div class="col-lg-6 col-12 px-3 mb-2">
                        <label class="mb-1" for="18_rw">18. RW</label>
                        <input class="form-control" wire:model="data.18_rw" name="18_rw" id="18_rw"
                            type="text" placeholder="Masukkan Data" />
                    </div>
                    <div class="col-lg-6 col-12 px-3 mb-2">
                        <label class="mb-1" for="19_rt">19. RT</label>
                        <input class="form-control" wire:model="data.19_rt" name="19_rt" id="19_rt"
                            type="text" placeholder="Masukkan Data" />
                    </div>
                </div>
                <div class="col-lg-6 col-12 px-3 mb-2">
                    <label class="mb-1" for="20_kecamatan_kabupaten_kota">20. KECAMATAN - KABUPATEN / KOTA (KODE
                        POS)</label>
                    <input class="form-control" wire:model="data.20_kecamatan_kabupaten_kota"
                        name="20_kecamatan_kabupaten_kota" id="20_kecamatan_kabupaten_kota" type="text"
                        placeholder="Masukkan Data" />
                </div>
                <div class="col-lg-6 col-12 px-3 mb-2">
                    <label class="mb-1" for="21_nomor_ktp">21. NOMOR KTP</label>
                    <input class="form-control" wire:model="data.21_nomor_ktp" name="21_nomor_ktp" id="21_nomor_ktp"
                        type="text" placeholder="Masukkan Data" />
                </div>
            </div>
            <small class="mt-2 ps-3">Catatan : *) yang pernghasilannya semata-mata berasal dari gaji atau uang
                pensiunan</small>
        </div>
        <h4 class="fw-bold text-lg-center text-start my-3">
            D. DATA TANAH
        </h4>
        <div class="card card-form">
            <div class="d-flex flex-wrap">
                <div class="col-lg-6 col-12 px-3 mb-2">
                    <label class="mb-1" for="22_luas_tanah">22. LUAS TANAH</label>
                    <input class="form-control" wire:model="data.22_luas_tanah" name="22_luas_tanah"
                        id="22_luas_tanah" type="text" placeholder="Masukkan Data" />
                </div>
                <div class="col-lg-6 col-12 px-3 mb-2">
                    <label class="mb-1" for="23_zona_nilai_tanah">23. ZONA NILAI TANAH</label>
                    <input class="form-control" wire:model="data.23_zona_nilai_tanah" name="23_zona_nilai_tanah"
                        id="23_zona_nilai_tanah" type="text" placeholder="Masukkan Data" />
                </div>
                <div class="col-lg-6 col-12 mb-2 px-3 mb-2">
                    <label for="24_jenis_tanah">24. JENIS TANAH</label>
                    <select wire:model="data.24_jenis_tanah" name="24_jenis_tanah" id="24_jenis_tanah"
                        class="form-select">
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
                <div class="col-lg-6 col-12 px-3 mb-2">
                    <label class="mb-1" for="25_jumlah_bangunan">25. JUMLAH BANGUNAN</label>
                    <input class="form-control" wire:model="data.25_jumlah_bangunan" name="25_jumlah_bangunan"
                        id="25_jumlah_bangunan" type="text" placeholder="Masukkan Data" />
                </div>
            </div>
        </div>
        <h4 class="fw-bold text-lg-center text-start my-3">
            F. PERNYATAAN SUBJEK PAJAK
        </h4>
        <div class="card card-form">
            <div class="d-flex flex-wrap">
                <p>Saya menyatakan bahwa informasi yang telah saya berikan dalam formulir ini termasuk lampirannya
                    adalah
                    benar, jelas dan lengkap menurut keadaan yang sebenarnya, sesuai dengan Pasal 9 ayat (2)
                    Undang-Undang
                    No. 12 Tahun 1985.
                </p>
                <div class="col-12 d-flex flex-wrap mt-3">
                    <div class="col-4 px-3">
                        <p class="text-center fw-bold text-black">26. NAMA SUBJEK PAJAK/KUASANYA</p>
                        <div class="card border-0 ">
                            <div class="mt-5"></div>
                            <div class="mt-5"></div>
                            <input class="input-no-border" wire:model="data.26_nama_subjek_pajak-kuasanya"
                                name="26_nama_subjek_pajak-kuasanya" id="26_nama_subjek_pajak-kuasanya"
                                type="text" placeholder="Masukkan Nama" />

                        </div>
                    </div>
                    <div class="col-4 px-3">
                        <p class="text-center fw-bold text-black">27. TANGGAL</p>
                        <div class="card border-0 ">
                            <div class="mt-5"></div>
                            <div class="mt-5"></div>
                            <input class="input-no-border" wire:model="data.26_nama_subjek_pajak-kuasanya"
                                name="26_nama_subjek_pajak-kuasanya" id="26_nama_subjek_pajak-kuasanya"
                                type="date" placeholder="Masukkan Nama" />
                        </div>
                    </div>
                    <div class="col-4 px-3">
                        <p class="text-center fw-bold text-black">28. TANDA TANGAN</p>
                        <div class="d-flex justify-content-center">
                            <div class="card sign-ttd">
                                <div class="wrapper-sign" id="tempatTTD" style="display: block">
                                    <canvas id="signature-pad_28" class="signature-pad_28" width=246
                                        height=100></canvas>
                                </div>
                                <textarea hidden wire:model="data.28_tanda_tangan" name="28_tanda_tangan" id="tanda_tangan_28"></textarea>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn rounded-pill btn-danger py-0 mb-2"
                                        id="clear_28">Clear</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <ul>
                        <li>- Dalam hal bertindak selaku kuasa, Surat kuasa harap dilampirkan</li>
                        <li>- Dalam hal Subjek Pajak mendaftarkan Objek Pajak, supaya menggambarkan Sket/Denah Lokasi
                            Objek
                            Pajak</li>
                        <li>- Batas waktu pengembalian SPOP 30 (tiga puluh) hari sejak diterima oleh Subjek Pajak sesuai
                            Pasal
                            9 ayat (2) UU No. 12 Tahun 1985</li>
                    </ul>
                </div>
            </div>
        </div>
        <h4 class="fw-bold text-lg-center text-start my-3">
            G. IDENTITAS PENDATA / PEJABAT YANG BERWENANG
        </h4>
        <div class="card card-form">
            <div class="d-flex flex-wrap">
                <div class="col-6 px-3">
                    <p class="text-center fw-bold mb-3">PETUGAS PENDATA</p>
                    <div class="col-12">
                        <label class="mb-1" for="29_tanggal_petugas">29. TANGGAL</label>
                        <input class="form-control" wire:model="data.29_tanggal_petugas" name="29_tanggal_petugas"
                            id="29_tanggal_petugas" type="date" placeholder="Masukkan Data" />
                    </div>

                    <div class="col-12">
                        <label class="mb-1" for="30_tanda_tangan_pejabat_pejabat">30. TANDA TANGAN</label>
                        <div class="card sign-ttd">
                            <div class="wrapper-sign" id="tempatTTD" style="display: block">
                                <canvas id="signature-pad_petugas" class="signature-pad_petugas" width=246
                                    height=164></canvas>
                            </div>
                            <textarea hidden wire:model="data.petugas_tanda_tangan" name="petugas_tanda_tangan" id="tanda_tangan_petugas"></textarea>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn rounded-pill btn-danger py-0 mb-2"
                                    id="clear_petugas">Clear</button>
                            </div>

                        </div>
                        <div class="col-12">
                            <label class="mb-1" for="31_nama_jelas_pejabat">31. NAMA JELAS</label>
                            <input class="form-control" wire:model="data.31_nama_jelas_pejabat"
                                name="31_nama_jelas_pejabat" id="31_nama_jelas_pejabat" type="text"
                                placeholder="Masukkan Data" />
                        </div>
                        <div class="col-12">
                            <label class="mb-1" for="32_nip_pejabat">32. NIP</label>
                            <input class="form-control" wire:model="data.32_nip_pejabat" name="32_nip_pejabat"
                                id="32_nip_pejabat" type="text" placeholder="Masukkan Data" />
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="mb-1" for="31_nama_jelas_petugas">31. NAMA JELAS</label>
                        <input class="form-control" wire:model="data.31_nama_jelas_petugas"
                            name="31_nama_jelas_petugas" id="31_nama_jelas_petugas" type="text"
                            placeholder="Masukkan Data" />
                    </div>
                    <div class="col-12">
                        <label class="mb-1" for="32_nip_petugas">32. NIP</label>
                        <input class="form-control" wire:model="data.32_nip_petugas" name="32_nip_petugas"
                            id="32_nip_petugas" type="text" placeholder="Masukkan Data" />
                    </div>
                </div>
                <div class="col-6 px-3">
                    <p class="text-center fw-bold mb-3">MENGETAHUI PEJABAT YANG BERWENANG</p>
                    <div class="col-12">
                        <label class="mb-1" for="29_tanggal_pejabat">29. TANGGAL</label>
                        <input class="form-control" wire:model="data.29_tanggal_pejabat" name="29_tanggal_pejabat"
                            id="29_tanggal_pejabat" type="text" placeholder="Masukkan Data" />
                    </div>
                    <div class="col-12">
                        <label class="mb-1" for="30_tanda_tangan_pejabat_petugas">30. TANDA TANGAN</label>
                        <div class="card sign-ttd">
                            <div class="wrapper-sign" id="tempatTTD" style="display: block">
                                <canvas id="signature-pad_pejabat" class="signature-pad_pejabat" width=246
                                    height=164></canvas>
                            </div>
                            <textarea hidden wire:model="data.pejabat_tanda_tangan" name="pejabat_tanda_tangan" id="tanda_tangan_pejabat"></textarea>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn rounded-pill btn-danger py-0 mb-2"
                                    id="clear_pejabat">Clear</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="fw-bold text-lg-center text-start my-3"><u>
                SKET / DENAH LOKASI OBJEK PAJAK</u>
        </h4>
        <div class="card ">
            <div class="wrapper-sign border-0 " id="tempatTTD" style="display: block">
                <canvas id="signature-pad_sket" class="signature-pad_sket" width=1080 height=512></canvas>
            </div>
            <div class="d-flex justify-content-center gap-2">
                <button type="button" class="btn rounded-pill btn-warning py-0 mb-2 mt-1"
                    id="undo_sket">Undo</button>
                <button type="button" class="btn rounded-pill btn-danger py-0 mb-2 mt-1"
                    id="clear_sket">Clear</button>


            </div>
            <textarea hidden wire:model="data.sket_tanda_tangan" name="sket_tanda_tangan" id="tanda_tangan_sket"></textarea>
        </div>
        <div class="d-flex flex-wrap mt-4">
            <div class="col-6">
                <p class="mb-2"><b><i><u>KETERANGAN</u></i></b></p>
                <ul>
                    <li>- Gambar sket/denah lokasi objek pajak (tanpa skala), yang dihubungkan dengan jalan raya/jalan
                        protokol, jalan lingkungan, dan lain-lain, yang mudah diketahui oleh umum.</li>
                    <li>- Sebutkan batas-batas kepemilikan sebelah Utara, Selatan, Timur, dan Barat.</li>
                </ul>
            </div>
            <div class="col-6 text-center">
                <p class="text-center mb-2"><b><u>Contoh Penggambaran</u></b></p>
                <img class="w-75 rounded" src="{{ asset('img/contoh_map.png') }}" alt="">
            </div>
        </div>
        <button class="btn btn-primary" type="button" wire:click="simpan">Simpan Data</button>
    </div>
</div>

<script>
    var signaturePad_petugas = new SignaturePad(document.getElementById('signature-pad_petugas'), {
        backgroundColor: 'rgba(255, 255, 255, 0)',
        penColor: 'rgb(0, 0, 0)'
    });
    var signaturePad_pejabat = new SignaturePad(document.getElementById('signature-pad_pejabat'), {
        backgroundColor: 'rgba(255, 255, 255, 0)',
        penColor: 'rgb(0, 0, 0)'
    });

    var cancelButton_petugas = document.getElementById('clear_petugas');
    var cancelButton_pejabat = document.getElementById('clear_pejabat');

    var canvasPad_petugas = document.getElementById('signature-pad_petugas');
    var canvasPad_pejabat = document.getElementById('signature-pad_pejabat');

    canvasPad_petugas.addEventListener('click', function(event) {
        if (signaturePad_petugas.isEmpty()) {
            alert("Silahkan petugas Tanda tangan terlebih dahulu.");
        } else {
            var data_petugas = signaturePad_petugas.toDataURL('image/png');

            var tandaTanganInput_petugas = document.getElementById('tanda_tangan_petugas');
            tandaTanganInput_petugas.value = data_petugas;

            @this.set('data.petugas_tanda_tangan', data_petugas);
        }
    });

    canvasPad_pejabat.addEventListener('click', function(event) {
        if (signaturePad_pejabat.isEmpty()) {
            alert("Silahkan pejabat Tanda tangan terlebih dahulu.");
        } else {
            var data_pejabat = signaturePad_pejabat.toDataURL('image/png');

            var tandaTanganInput_pejabat = document.getElementById('tanda_tangan_pejabat');
            tandaTanganInput_pejabat.value = data_pejabat;

            @this.set('data.pejabat_tanda_tangan', data_pejabat);
        }
    });

    cancelButton_petugas.addEventListener('click', function(event) {
        event.preventDefault();
        signaturePad_petugas.clear();
        document.getElementById('tanda_tangan_petugas').value = "";
    });

    cancelButton_pejabat.addEventListener('click', function(event) {
        event.preventDefault();
        signaturePad_pejabat.clear();
        document.getElementById('tanda_tangan_pejabat').value = "";
    });
</script>
<script>
    var signaturePad_sket = new SignaturePad(document.getElementById('signature-pad_sket'), {
        backgroundColor: 'rgba(255, 255, 255, 0)',
        penColor: 'rgb(0, 0, 0)'
    });

    var undoButton_sket = document.getElementById('undo_sket');
    var redoButton_sket = document.getElementById('redo_sket');
    var cancelButton_sket = document.getElementById('clear_sket');
    var canvasPad_sket = document.getElementById('signature-pad_sket');

    canvasPad_sket.addEventListener('click', function(event) {
        if (signaturePad_sket.isEmpty()) {
            alert("Silahkan petugas Tanda tangan terlebih dahulu.");
        } else {
            storeSket()
        }
    });


    cancelButton_sket.addEventListener('click', function(event) {
        event.preventDefault();
        signaturePad_sket.clear();
        document.getElementById('tanda_tangan_sket').value = "";
    });

    undoButton_sket.addEventListener("click", function(event) {
        var data = signaturePad_sket.toData();
        if (data) {
            data.pop(); // remove the last dot or line
            signaturePad_sket.fromData(data);
            storeSket()
        }
    });

    function storeSket() {
        var data_sket = signaturePad_sket.toDataURL('image/png');
        var tandaTanganInput_sket = document.getElementById('tanda_tangan_sket');
        tandaTanganInput_sket.value = data_sket;

        @this.set('data.sket_tanda_tangan', data_sket);
    }
</script>
<script>
    var signaturePad_28 = new SignaturePad(document.getElementById('signature-pad_28'), {
        backgroundColor: 'rgba(255, 255, 255, 0)',
        penColor: 'rgb(0, 0, 0)'
    });

    var cancelButton_28 = document.getElementById('clear_28');
    var canvasPad_28 = document.getElementById('signature-pad_28');

    canvasPad_28.addEventListener('click', function(event) {
        if (signaturePad_28.isEmpty()) {
            alert("Silahkan petugas Tanda tangan terlebih dahulu.");
        } else {
            var data_28 = signaturePad_28.toDataURL('image/png');

            var tandaTanganInput_28 = document.getElementById('tanda_tangan_28');
            tandaTanganInput_28.value = data_28;

            @this.set('data.28_tanda_tangan', data_28);
        }
    });

    cancelButton_28.addEventListener('click', function(event) {
        event.preventDefault();
        signaturePad_28.clear();
        document.getElementById('tanda_tangan_28').value = "";
    });
</script>
