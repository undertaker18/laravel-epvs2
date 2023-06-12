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
        Schema::create('upload_forms', function (Blueprint $table) {
            $table->id();
           
            $table->text('payments_for');
            $table->string('each_amount');
            $table->string('receipt_type');
            $table->string('receipt_filename');

            $table->foreignId('form_epv_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploadform');
    }
};
