<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToKegiatanTable extends Migration
{
    public function up()
    {
        Schema::table('kegiatan', function (Blueprint $table) {
            $table->string('slug')->unique()->after('deskripsi_kegiatan');
        });
    }

    public function down()
    {
        Schema::table('kegiatan', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
