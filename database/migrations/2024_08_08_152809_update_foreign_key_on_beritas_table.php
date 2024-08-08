<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeignKeyOnBeritasTable extends Migration
{
    public function up()
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->dropForeign(['program_id']);
            $table->foreign('program_id')
                ->references('id')
                ->on('programs')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->dropForeign(['program_id']);
            $table->foreign('program_id')
                ->references('id')
                ->on('programs')
                ->onDelete('restrict');
        });
    }
}
