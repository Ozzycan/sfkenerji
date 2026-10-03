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
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('hero_badge')->nullable();
            $table->string('hero_title')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('hero_cta_1')->nullable();
            $table->string('hero_cta_2')->nullable();

            $table->string('vision_badge')->nullable();
            $table->text('vision_quote')->nullable();

            $table->text('about_features')->nullable(); // JSON

            $table->string('services_badge')->nullable();
            $table->string('services_title')->nullable();
            $table->text('services_description')->nullable();

            $table->string('projects_badge')->nullable();
            $table->string('projects_title')->nullable();

            $table->string('simulator_badge')->nullable();
            $table->string('simulator_title')->nullable();
            $table->text('simulator_description')->nullable();
            $table->string('simulator_info_1')->nullable();
            $table->string('simulator_info_2')->nullable();
            $table->text('simulator_trees_text')->nullable();

            $table->string('packages_badge')->nullable();
            $table->string('packages_title')->nullable();
            $table->text('packages_description')->nullable();

            $table->text('partners')->nullable(); // JSON
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn([
                'hero_badge',
                'hero_title',
                'hero_description',
                'hero_cta_1',
                'hero_cta_2',
                'vision_badge',
                'vision_quote',
                'about_features',
                'services_badge',
                'services_title',
                'services_description',
                'projects_badge',
                'projects_title',
                'simulator_badge',
                'simulator_title',
                'simulator_description',
                'simulator_info_1',
                'simulator_info_2',
                'simulator_trees_text',
                'packages_badge',
                'packages_title',
                'packages_description',
                'partners'
            ]);
        });
    }
};
