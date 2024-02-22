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
        Schema::create('tbl_AthletePBParticipation', function (Blueprint $table) {
            $table->id();
            $table->string('AthleteCode');
            // $table->timestamp('InclusiveDates')->useCurrent();
            $table->timestamp('InclusiveDates')->useCurrent();
            $table->string('EventName');
            $table->string('Venue');
            $table->string('Remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_AthletePBParticipation');
    }
};
