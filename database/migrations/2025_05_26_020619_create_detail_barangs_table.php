<?php
// database/migrations/xxxx_xx_xx_create_detail_barangs_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBarangsTable extends Migration
{
    public function up()
    {
        Schema::create('detail_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('merk');
            $table->string('plat_nomor');
            $table->string('warna');
            $table->string('status_barang')->default('Aktif');
            $table->string('kondisi_barang')->default('Baik');
            $table->string('lokasi');
            $table->date('tanggal_penerimaan');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_barangs');
    }
}
