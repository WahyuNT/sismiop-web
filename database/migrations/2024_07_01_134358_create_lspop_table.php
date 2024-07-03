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
            $table->string('no_formulir', 50)->nullable();
            $table->enum('status', ['aktif', 'tidak_aktif']);
            $table->string('1_jenis_transaksi', 50);
            $table->string('2_nop_provinsi', 50)->nullable();
            $table->string('2_nop_kabupaten', 50)->nullable();
            $table->string('2_nop_kecamatan', 50)->nullable();
            $table->string('2_nop_gampong', 50)->nullable();
            $table->string('2_nop_blok', 50)->nullable();
            $table->string('2_nop_no_urut', 50)->nullable();
            $table->string('2_nop_kode', 50)->nullable();
            $table->string('3_jumlah_bangunan', 50)->nullable();
            $table->string('4_bangunan_ke', 50)->nullable();
            $table->string('5_jenis_penggunaan_bangunan', 50)->nullable();
            $table->string('6_luas_bangunan', 50)->nullable();
            $table->string('7_jumlah_lantai', 50)->nullable();
            $table->string('8_tahun_dibangun', 50)->nullable();
            $table->string('9_tahun_direnovasi', 50)->nullable();
            $table->string('10_daya_listrik_terpasang', 50)->nullable();
            $table->string('11_kondisi_pada_umumnya', 50)->nullable();
            $table->string('12_konstruksi', 50)->nullable();
            $table->string('13_atap', 50)->nullable();
            $table->string('14_dinding', 50)->nullable();
            $table->string('15_lantai', 50)->nullable();
            $table->string('16_langit_langit', 50)->nullable();
            $table->string('17_ac_split', 50)->nullable();
            $table->string('17_ac_window', 50)->nullable();
            $table->string('18_ac_central', 50)->nullable();
            $table->string('19_luas_kolam_renang', 50)->nullable();
            $table->string('19_tipe_kolam_renang', 50)->nullable();
            $table->string('20_luas_perkerasan_halaman_ringan', 50)->nullable();
            $table->string('20_luas_perkerasan_halaman_sedang', 50)->nullable();
            $table->string('20_luas_perkerasan_halaman_berat', 50)->nullable();
            $table->string('20_luas_perkerasan_halaman_dpl', 50)->nullable();
            $table->string('21_beton_dengan_lampu', 50)->nullable();
            $table->string('21_beton_tanpa_lampu', 50)->nullable();
            $table->string('21_aspal_dengan_lampu', 50)->nullable();
            $table->string('21_aspal_tanpa_lampu', 50)->nullable();
            $table->string('21_tanah_dengan_lampu', 50)->nullable();
            $table->string('21_tanah_tanpa_lampu', 50)->nullable();
            $table->string('22_lift_penumpang', 50)->nullable();
            $table->string('22_kapsul', 50)->nullable();
            $table->string('22_barang', 50)->nullable();
            $table->string('23_jumlah_tangga_berjalan_k080', 50)->nullable();
            $table->string('23_jumlah_tangga_berjalan_b080', 50)->nullable();
            $table->string('24_panjang_pagar', 50)->nullable();
            $table->string('24_bahan_pagar', 50)->nullable();
            $table->string('25_hydrant', 50)->nullable();
            $table->string('25_sprinkler', 50)->nullable();
            $table->string('25_fireA1', 50)->nullable();
            $table->string('26_jumlah_saluran_pes_pabx', 50)->nullable();
            $table->string('27_kedalaman_sumur_artetis', 50)->nullable();
            $table->string('28_tinggi_kolom', 50)->nullable();
            $table->string('29_lebar_bentang', 50)->nullable();
            $table->string('30_daya_dukung_lantai', 50)->nullable();
            $table->string('31_keliling_dinding', 50)->nullable();
            $table->string('32_luas_mezzanine', 50)->nullable();
            $table->string('33_perkantoran_swasta_gedung_pemerintahan', 50)->nullable();
            $table->string('34_toko_apotik_pasar_ruko', 50)->nullable();
            $table->string('35_rumah_sakit_klinik', 50)->nullable();
            $table->string('36_luas_kamar_dengan_ac_sentral', 50)->nullable();
            $table->string('37_luas_ruang_lain_dengan_ac_sentral', 50)->nullable();
            $table->string('38_olahraga_rekreasi', 50)->nullable();
            $table->string('39_jenis_hotel', 50)->nullable();
            $table->string('40_jumlah_bintang', 50)->nullable();
            $table->string('41_jumlah_kamar', 50)->nullable();
            $table->string('42_luas_kamar_dengan_ac_sentra', 50)->nullable();
            $table->string('43_luas_ruang_lain_dengan_ac_sentral', 50)->nullable();
            $table->string('44_tipe_bangunan', 50)->nullable();
            $table->string('45_kelas_bangunan', 50)->nullable();
            $table->string('46_jumlah_apartemen', 50)->nullable();
            $table->string('47_luas_apartemen_dengan_ac_sentral', 50)->nullable();
            $table->string('48_ls_ruang_lain_dengan_ac_sentral', 50)->nullable();
            $table->string('49_kapasitas_tangki', 50)->nullable();
            $table->string('50_letak_tangki', 50)->nullable();
            $table->string('51_kelas_bangunan', 50)->nullable();
            $table->string('52_nilai_sistem', 50)->nullable();
            $table->string('53_nilai_individual', 50)->nullable();
            $table->date('54_tanggal_kunjungan_kembali')->nullable();
            $table->date('55_tanggal_pendataan')->nullable();
            $table->string('56_tanda_tangan', 50)->nullable();
            $table->string('57_nama_jelas', 50)->nullable();
            $table->string('58_nip', 50)->nullable();
            $table->date('59_tanggal_penelitian')->nullable();
            $table->string('60_tanda_tangan', 50)->nullable();
            $table->string('61_nama_jelas', 50)->nullable();
            $table->string('62_nip', 50)->nullable();

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
