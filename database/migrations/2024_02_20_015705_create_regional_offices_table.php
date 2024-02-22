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
        Schema::create('tbl_RegionalOffice', function (Blueprint $table) {
            $table->id();
            $table->string('RegionCode');
            $table->string('RegionName');
            $table->string('DirectorName');
            $table->string('AssistantDirectorName');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_RegionalOffice');
    }
};
