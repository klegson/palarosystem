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
        Schema::create('tbl_GameEvent', function (Blueprint $table) {
            $table->id();
            $table->string('GameLevel')->comment('Elementary / Secondary');
            $table->string('GameEvent');
            $table->string('GameType')->comment('Regular / SPED');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_GameEvent');
    }
};
