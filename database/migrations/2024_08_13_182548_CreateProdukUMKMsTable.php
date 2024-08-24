<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukUMKMsTable extends Migration
{
    public function up()
    {
        Schema::create('produk_umkms', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->text('deskripsi_produk');
            $table->string('foto_produk')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produk_umkms');
    }
}
