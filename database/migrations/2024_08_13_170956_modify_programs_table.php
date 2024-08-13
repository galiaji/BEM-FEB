<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyProgramsTable extends Migration
{
    public function up()
    {
        Schema::table('programs', function (Blueprint $table) {
            // Rename 'nama_program' to 'nama'
            $table->renameColumn('nama_program', 'nama');

            // Rename 'deskripsi_program' to 'deskripsi'
            $table->renameColumn('deskripsi_program', 'deskripsi');

            // Remove 'foto_kegiatan' column
            $table->dropColumn('foto_kegiatan');

            // Remove 'kegiatan_dalam_program' column
            $table->dropColumn('kegiatan_dalam_program');

            // Make 'jadwal' nullable
            $table->dateTime('jadwal')->nullable(true)->change();

            // Make 'tujuan' nullable
            $table->text('tujuan')->nullable(true)->change();

            // Remove 'slug' column
            $table->dropColumn('slug');
        });
    }

    public function down()
    {
        Schema::table('programs', function (Blueprint $table) {
            // Rename 'nama' back to 'nama_program'
            $table->renameColumn('nama', 'nama_program');

            // Rename 'deskripsi' back to 'deskripsi_program'
            $table->renameColumn('deskripsi', 'deskripsi_program');

            // Add 'foto_kegiatan' column
            $table->string('foto_kegiatan')->nullable();

            // Add 'kegiatan_dalam_program' column
            $table->text('kegiatan_dalam_program');

            // Change 'jadwal' to non-nullable
            $table->dateTime('jadwal')->nullable(false)->change();

            // Change 'tujuan' to non-nullable
            $table->text('tujuan')->nullable(false)->change();

            // Add 'slug' column
            $table->string('slug')->unique();
        });
    }
}
