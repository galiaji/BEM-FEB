<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('programs', function (Blueprint $table) {
            // Temporarily allow NULL values to prevent data truncation issues
            $table->longText('tujuan')->nullable()->change();
        });

        // After the data is successfully migrated, set it back to not null if needed
        Schema::table('programs', function (Blueprint $table) {
            $table->longText('tujuan')->nullable(false)->change();
        });
    }

    public function down()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->text('tujuan')->nullable(false)->change(); // Assuming it was not null before
        });
    }
};
