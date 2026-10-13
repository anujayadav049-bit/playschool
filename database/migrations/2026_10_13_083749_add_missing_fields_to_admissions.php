<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up() {
    Schema::table('admissions', function (Blueprint $table) {
        $table->string('aadhaar_no')->nullable()->after('class_apply');
        $table->string('previous_school')->nullable()->after('aadhaar_no');
        $table->string('state')->nullable()->after('city');
        $table->string('aadhaar_card')->nullable()->after('birth_certificate');
        $table->string('tc')->nullable()->after('aadhaar_card');
    });
}
public function down() {
    Schema::table('admissions', function (Blueprint $table) {
        $table->dropColumn(['aadhaar_no','previous_school','state','aadhaar_card','tc']);
    });
}
};
