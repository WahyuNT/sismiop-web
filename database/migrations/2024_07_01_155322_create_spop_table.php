<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spop', function (Blueprint $table) {
            $table->id();
            $table->string('no_formulir')->nullable();
            $table->enum('status', ['aktif', 'tidak_aktif']);
            $table->string('1_jenis_transaksi', 50)->nullable();
            $table->string('2_nop_provinsi', 50)->nullable();
            $table->string('2_nop_kabupaten', 50)->nullable();
            $table->string('2_nop_kecamatan', 50)->nullable();
            $table->string('2_nop_gampong', 50)->nullable();
            $table->string('2_nop_blok', 50)->nullable();
            $table->string('2_no_urut', 50)->nullable();
            $table->string('2_nop_kode', 50)->nullable();
            $table->string('3_nop_bersama_provinsi', 50)->nullable();
            $table->string('3_nop_bersama_kabupaten', 50)->nullable();
            $table->string('3_nop_bersama_kecamatan', 50)->nullable();
            $table->string('3_nop_bersama_gampong', 50)->nullable();
            $table->string('3_nop_bersama_blok', 50)->nullable();
            $table->string('3_no_urut', 50)->nullable();
            $table->string('3_nop_bersama_kode', 50)->nullable();
            $table->string('4_nop_asal', 50)->nullable();
            $table->string('5_no_sppt_lama', 50)->nullable();
            $table->string('6_nama_jalan', 50)->nullable();
            $table->string('7_blok_kav_nomor', 50)->nullable();
            $table->string('8_gampong', 50)->nullable();
            $table->string('9_rw', 50)->nullable();
            $table->string('10_rt', 50)->nullable();
            $table->string('11_status', 50)->nullable();
            $table->string('12_pekerjaan', 50)->nullable();
            $table->string('13_nama_subjek_pajak', 50)->nullable();
            $table->string('14_npwp', 50)->nullable();
            $table->string('15_nama_jalan', 50)->nullable();
            $table->string('16_blok_kav_nomor', 50)->nullable();
            $table->string('17_gampong', 50)->nullable();
            $table->string('18_rw', 50)->nullable();
            $table->string('19_rt', 50)->nullable();
            $table->string('20_kecamatan_kabupaten_kota', 50)->nullable();
            $table->string('21_nomor_ktp', 50)->nullable();
            $table->string('22_luas_tanah', 50)->nullable();
            $table->string('23_zona_nilai_tanah', 50)->nullable();
            $table->string('24_jenis_tanah', 50)->nullable();
            $table->string('25_jumlah_bangunan', 50)->nullable();
            $table->string('26_nama_subjek_pajak-kuasanya', 50)->nullable();
            $table->string('27_tanggal', 50)->nullable();
            $table->string('28_tanda_tangan', 50)->nullable();
            $table->string('29_tanggal_petugas', 50)->nullable();
            $table->string('30_tanda_tangan_petugas', 50)->nullable();
            $table->foreignId('31_nama_jelas_petugas', 50)->nullable()->constrained('users')->onDelete('set null');
            $table->string('32_nip_petugas', 50)->nullable();
            $table->string('29_tanggal_pejabat', 50)->nullable();
            $table->string('30_tanda_tangan_pejabat', 50)->nullable();
            $table->string('31_nama_jelas_pejabat', 50)->nullable();
            $table->string('32_nip_pejabat', 50)->nullable();
            $table->string('sket_tanda_tangan', 255)->nullable();
            $table->longText('sket_base64')->nullable();
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
