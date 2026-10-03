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
        Schema::table('energy_packages', function (Blueprint $table) {
            $table->string('kva_badge')->nullable();
            $table->string('type_badge')->nullable();
            $table->string('daily_production')->nullable();
            $table->boolean('is_popular')->default(false);
            $table->json('features')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('energy_packages', function (Blueprint $table) {
            $table->dropColumn(['kva_badge', 'type_badge', 'daily_production', 'is_popular', 'features']);
        });
    }
};
