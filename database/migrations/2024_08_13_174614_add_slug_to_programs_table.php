<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class addslugtoprogramstable extends Migration
{
    public function up(): void
    {
        Schema::table('programs', function (Blueprint $table) {
            // Add 'slug' column
            $table->string('slug')->unique();

            // Make 'tujuan' and 'jadwal' columns nullable
            $table->string('tujuan')->nullable()->change();
            $table->dateTime('jadwal')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('programs', function (Blueprint $table) {
            // Remove 'slug' column
            $table->dropColumn('slug');

            // Revert 'tujuan' and 'jadwal' columns to be non-nullable
            $table->string('tujuan')->nullable(false)->change();
            $table->dateTime('jadwal')->nullable(false)->change();
        });
    }
}
