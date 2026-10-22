<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(){
  Schema::create('faqs', function($table){
    $table->id();
    $table->string('question');
    $table->text('answer');
    $table->timestamps();
  });
}
    public function down(): void {
        Schema::dropIfExists('faqs');
    }
};