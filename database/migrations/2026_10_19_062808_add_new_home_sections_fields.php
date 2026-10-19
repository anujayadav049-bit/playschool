<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(){
    Schema::table('home_settings', function($table){
        $table->string('header_logo')->nullable();
        $table->string('menu_about')->nullable();
        $table->string('menu_activities')->nullable();
        $table->string('menu_admissions')->nullable();
        $table->string('menu_gallery')->nullable();
        $table->string('menu_contact')->nullable();
        $table->string('menu_program')->nullable();
        $table->string('btn_admission_text')->nullable();

        for($i=1; $i<=4; $i++){
            $table->string('home_work'.$i.'_image')->nullable();
            $table->string('home_work'.$i.'_title')->nullable();
            $table->text('home_work'.$i.'_desc')->nullable();
        }
        for($i=1; $i<=6; $i++){
            $table->string('home_brand'.$i.'_image')->nullable();
        }
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_settings', function (Blueprint $table) {
            //
        });
    }
};
