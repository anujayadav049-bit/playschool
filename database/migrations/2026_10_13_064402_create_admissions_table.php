<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('class_apply')->nullable();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('mobile');
            $table->string('email');
            $table->text('address');
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
            $table->string('photo')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};