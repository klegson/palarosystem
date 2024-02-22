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
        Schema::create('tbl_UserRole', function (Blueprint $table) {
            $table->id();
            $table->string('UserRole')->comment('Administrator, Coach, RSAC, DSAC, NSAC');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_UserRole');
    }
};

