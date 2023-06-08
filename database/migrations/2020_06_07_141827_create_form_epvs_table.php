<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    
    public function up(): void
    {
        Schema::create('form_epvs', function (Blueprint $table) {
            $table->id();
            $table->string('form_key')->default('EPVS-ID-'.str_pad(1, 6, '0', STR_PAD_LEFT));
            
            $table->foreignId('xero_invoice_id')->contrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_epvs');
    }
};
