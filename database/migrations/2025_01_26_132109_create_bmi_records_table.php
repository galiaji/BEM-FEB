<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bmi_records', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('gender', ['male', 'female']);
            $table->float('height'); // dalam cm
            $table->float('weight'); // dalam kg
            $table->float('bmi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bmi_records');
    }
};