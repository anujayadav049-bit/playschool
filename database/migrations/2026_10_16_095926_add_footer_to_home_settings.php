<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('home_settings', function (Blueprint $table) {
            $table->string('footer_logo')->nullable();
            $table->text('footer_description')->nullable();
            $table->string('footer_address')->nullable();
            $table->string('footer_phone')->nullable();
            $table->string('footer_email')->nullable();
            $table->string('footer_facebook')->nullable();
            $table->string('footer_instagram')->nullable();
            $table->string('footer_youtube')->nullable();
            $table->string('footer_copyright')->nullable();
        });
    }
    public function down(): void
    {
        Schema::table('home_settings', function (Blueprint $table) {
            $table->dropColumn(['footer_logo','footer_description','footer_address','footer_phone','footer_email','footer_facebook','footer_instagram','footer_youtube','footer_copyright']);
        });
    }
};