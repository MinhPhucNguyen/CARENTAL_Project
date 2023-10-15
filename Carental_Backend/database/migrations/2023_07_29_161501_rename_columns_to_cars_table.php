<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->float('fuel_consumption')->after('speed')->nullable();
            $table->tinyInteger('delivery_enable')->after('fuel_consumption')->default('0')->comment('0=disable; 1=enable');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};