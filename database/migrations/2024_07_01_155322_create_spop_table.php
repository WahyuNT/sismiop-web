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
        Schema::create('spop', function (Blueprint $table) {
            $table->id();
            $table->string('1_jenis_transaksi')->nullable();
            $table->string('2_nop_provinsi')->nullable();
            $table->string('2_nop_kabupaten')->nullable();
            $table->string('2_nop_kecamatan')->nullable();
            $table->string('2_nop_gampong')->nullable();
            $table->string('2_nop_blok')->nullable();
            $table->string('2_no_urut')->nullable();
            $table->string('2_nop_kode')->nullable();
            $table->string('3_nop_bersama_provinsi')->nullable();
            $table->string('3_nop_bersama_kabupaten')->nullable();
            $table->string('3_nop_bersama_kecamatan')->nullable();
            $table->string('3_nop_bersama_gampong')->nullable();
            $table->string('3_nop_bersama_blok')->nullable();
            $table->string('3_no_urut')->nullable();
            $table->string('3_nop_bersama_kode')->nullable();
            $table->string('4_nop_asal')->nullable();
            $table->string('5_no_sppt_lama')->nullable();
            $table->string('6_nama_jalan')->nullable();
            $table->string('7_blok_kav_nomor')->nullable();
            $table->string('8_gampong')->nullable();
            $table->string('9_rw')->nullable();
            $table->string('10_rt')->nullable();
            $table->string('11_status')->nullable();
            $table->string('12_pekerjaan')->nullable();
            $table->string('13_nama_subjek_pajak')->nullable();
            $table->string('14_npwp')->nullable();
            $table->string('15_nama_jalan')->nullable();
            $table->string('16_blok_kav_nomor')->nullable();
            $table->string('17_gampong')->nullable();
            $table->string('18_rw')->nullable();
            $table->string('19_rt')->nullable();
            $table->string('20_kecamatan_kabupaten_kota')->nullable();
            $table->string('21_nomor_ktp')->nullable();
            $table->string('22_luas_tanah')->nullable();
            $table->string('23_zona_nilai_tanah')->nullable();
            $table->string('24_jenis_tanah')->nullable();
            $table->string('25_jumlah_bangunan')->nullable();
            $table->string('26_nama_subjek_pajak-kuasanya')->nullable();
            $table->string('27_tanggal')->nullable();
            $table->string('28_tanda_tangan')->nullable();
            $table->string('29_tanggal_petugas')->nullable();
            $table->string('30_tanda_tangan_petugas')->nullable();
            $table->string('31_nama_jelas_petugas')->nullable();
            $table->string('32_nip_petugas')->nullable();
            $table->string('29_tanggal_pejabat')->nullable();
            $table->string('30_tanda_tangan_pejabat')->nullable();
            $table->string('31_nama_jelas_pejabat')->nullable();
            $table->string('32_nip_pejabat')->nullable();
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
        Schema::dropIfExists('spop');
    }
};
