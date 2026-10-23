<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(){
        Schema::create('admission_settings', function (Blueprint $table) {
            $table->id();
            $table->string('sub_title')->default('Join Us');
            $table->string('title')->default('Admission');
            $table->string('title_highlight')->default('Open 2026-27');
            $table->text('description')->nullable();
            
            $table->string('step1_title')->default('Step 1: Visit Us');
            $table->string('step1_sub')->default('Campus Tour');
            $table->text('step1_desc')->nullable();
            $table->string('step1_link')->default('/contact');
            $table->string('step1_btn')->default('Get Direction');

            $table->string('step2_title')->default('Step 2: Fill Form');
            $table->string('step2_sub')->default('Registration');
            $table->text('step2_desc')->nullable();
            $table->string('step2_link')->default('#admission-form');
            $table->string('step2_btn')->default('Fill Form');

            $table->string('step3_title')->default('Step 3: Confirm Seat');
            $table->string('step3_sub')->default('Welcome');
            $table->text('step3_desc')->nullable();
            $table->string('step3_link')->default('/contact');
            $table->string('step3_btn')->default('Contact Us');

            $table->text('age_criteria')->nullable(); // ek line per item
            $table->text('documents')->nullable();

            $table->string('form_title')->default('Admission Enquiry Form');
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('admission_settings'); }
};