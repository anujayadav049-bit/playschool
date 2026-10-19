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
       Schema::create('about_settings', function (Blueprint $table) {
    $table->id();
    $table->string('title')->nullable();
    $table->text('description')->nullable();
    $table->string('image1')->nullable();
    $table->string('image2')->nullable();
    $table->string('image3')->nullable();
    $table->string('mission_title')->nullable();
    $table->text('mission_desc')->nullable();
    $table->string('vision_title')->nullable();
    $table->text('vision_desc')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_settings');
    }
};
