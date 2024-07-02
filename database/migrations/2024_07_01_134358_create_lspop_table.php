<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lspop', function (Blueprint $table) {
            $table->id();
            $table->string('no_formulir');
            $table->string('1_jenis_transaksi');
            $table->string('2_nop_provinsi')->nullable();
            $table->string('2_nop_kabupaten')->nullable();
            $table->string('2_nop_kecamatan')->nullable();
            $table->string('2_nop_gampong')->nullable();
            $table->string('2_nop_blok')->nullable();
            $table->string('2_nop_no_urut')->nullable();
            $table->string('2_nop_kode')->nullable();
            $table->string('3_jumlah_bangunan')->nullable();
            $table->string('4_bangunan_ke')->nullable();
            $table->string('5_jenis_penggunaan_bangunan')->nullable();
            $table->string('6_luas_bangunan')->nullable();
            $table->string('7_jumlah_lantai')->nullable();
            $table->string('8_tahun_dibangun')->nullable();
            $table->string('9_tahun_direnovasi')->nullable();
            $table->string('10_daya_listrik_terpasang')->nullable();
            $table->string('11_kondisi_pada_umumnya')->nullable();
            $table->string('12_konstruksi')->nullable();
            $table->string('13_atap')->nullable();
            $table->string('14_dinding')->nullable();
            $table->string('15_lantai')->nullable();
            $table->string('16_langit_langit')->nullable();
            $table->string('17_ac_split')->nullable();
            $table->string('17_ac_window')->nullable();
            $table->string('18_ac_central')->nullable();
            $table->string('19_luas_kolam_renang')->nullable();
            $table->string('19_tipe_kolam_renang')->nullable();
            $table->string('20_luas_perkerasan_halaman_ringan')->nullable();
            $table->string('20_luas_perkerasan_halaman_sedang')->nullable();
            $table->string('20_luas_perkerasan_halaman_berat')->nullable();
            $table->string('20_luas_perkerasan_halaman_dpl')->nullable();
            $table->string('21_beton_dengan_lampu')->nullable();
            $table->string('21_beton_tanpa_lampu')->nullable();
            $table->string('21_aspal_dengan_lampu')->nullable();
            $table->string('21_aspal_tanpa_lampu')->nullable();
            $table->string('21_tanah_dengan_lampu')->nullable();
            $table->string('21_tanah_tanpa_lampu')->nullable();
            $table->string('22_lift_penumpang')->nullable();
            $table->string('22_kapsul')->nullable();
            $table->string('22_barang')->nullable();
            $table->string('23_jumlah_tangga_berjalan_k080')->nullable();
            $table->string('23_jumlah_tangga_berjalan_b080')->nullable();
            $table->string('24_panjang_pagar')->nullable();
            $table->string('24_bahan_pagar')->nullable();
            $table->string('25_hydrant')->nullable();
            $table->string('25_sprinkler')->nullable();
            $table->string('25_fireA1')->nullable();
            $table->string('26_jumlah_saluran_pes_pabx')->nullable();
            $table->string('27_kedalaman_sumur_artetis')->nullable();
            $table->string('28_tinggi_kolom')->nullable();
            $table->string('29_lebar_bentang')->nullable();
            $table->string('30_daya_dukung_lantai')->nullable();
            $table->string('31_keliling_dinding')->nullable();
            $table->string('32_luas_mezzanine')->nullable();
            $table->string('33_perkantoran_swasta_gedung_pemerintahan')->nullable();
            $table->string('34_toko_apotik_pasar_ruko')->nullable();
            $table->string('35_rumah_sakit_klinik')->nullable();
            $table->string('36_luas_kamar_dengan_ac_sentral')->nullable();
            $table->string('37_luas_ruang_lain_dengan_ac_sentral')->nullable();
            $table->string('38_olahraga_rekreasi')->nullable();
            $table->string('39_jenis_hotel')->nullable();
            $table->string('40_jumlah_bintang')->nullable();
            $table->string('41_jumlah_kamar')->nullable();
            $table->string('42_luas_kamar_dengan_ac_sentra')->nullable();
            $table->string('43_luas_ruang_lain_dengan_ac_sentral')->nullable();
            $table->string('44_tipe_bangunan')->nullable();
            $table->string('45_kelas_bangunan')->nullable();
            $table->string('46_jumlah_apartemen')->nullable();
            $table->string('47_luas_apartemen_dengan_ac_sentral')->nullable();
            $table->string('48_ls_ruang_lain_dengan_ac_sentral')->nullable();
            $table->string('49_kapasitas_tangki')->nullable();
            $table->string('50_letak_tangki')->nullable();
            $table->string('51_kelas_bangunan')->nullable();
            $table->string('52_nilai_sistem')->nullable();
            $table->string('53_nilai_individual')->nullable();
            $table->date('54_tanggal_kunjungan_kembali')->nullable();
            $table->date('55_tanggal_pendataan')->nullable();
            $table->string('56_tanda_tangan')->nullable();
            $table->string('57_nama_jelas')->nullable();
            $table->string('58_nip')->nullable();
            $table->date('59_tanggal_penelitian')->nullable();
            $table->string('60_tanda_tangan')->nullable();
            $table->string('61_nama_jelas')->nullable();
            $table->string('62_nip')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lspop');
    }
};
