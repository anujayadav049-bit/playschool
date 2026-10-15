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
    Schema::create('forms', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('slug')->unique();
        $table->timestamps();
    });

    Schema::create('form_fields', function (Blueprint $table) {
        $table->id();
        $table->foreignId('form_id')->constrained('forms')->cascadeOnDelete();
        $table->string('label');
        $table->string('type');
        $table->text('options')->nullable();
        $table->boolean('is_required')->default(1);
        $table->integer('sort_order')->default(0);
        $table->timestamps();
    });
}
public function down(): void
{
    Schema::dropIfExists('form_fields');
    Schema::dropIfExists('forms');
}
};
