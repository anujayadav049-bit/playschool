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
    Schema::create('page_settings', function (Blueprint $table) {
        $table->id();
        $table->string('page_slug'); // about, program, gallery, contact, admissions, activities, faq
        $table->string('banner_title')->nullable();
        $table->string('banner_subtitle')->nullable();
        $table->string('title')->nullable();
        $table->longText('description')->nullable();
        $table->string('image')->nullable();
        $table->string('image2')->nullable();
        $table->string('meta_title')->nullable();
        $table->text('meta_description')->nullable();
        $table->longText('extra_json')->nullable(); // mission, vision etc ke liye
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_settings');
    }
};
