<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_SDOs', function (Blueprint $table) {
            $table->id();
            $table->string('SDOCode');
            $table->string('SDOName');
            $table->string('SDSName');
            $table->string('ASDSName');
            $table->string('Type')->comment('Province / City');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_SDOs');
    }
};
