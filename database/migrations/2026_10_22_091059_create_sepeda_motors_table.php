<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_sepeda_motor', function (Blueprint $table) {

            $table->id('id_sepeda_motor');

            $table->string('nama_produk', 255);

            $table->text('spesifikasi');

            $table->unsignedBigInteger('harga_produk');

            $table->unsignedInteger('jumlah_produk');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_sepeda_motor');
    }
};