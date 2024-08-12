<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_program');
            $table->text('deskripsi_program');
            $table->string('foto_kegiatan')->nullable();
            $table->text('kegiatan_dalam_program');
            $table->dateTime('jadwal');
            $table->text('tujuan');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
