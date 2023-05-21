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
        Schema::create('bdo_receipt', function (Blueprint $table) {
            $table->id();
            $table->dateTime('posting_datetime');
            $table->string('branch');
            $table->string('description');
            $table->string('debit');
            $table->string('credit');
            $table->string('running_balance');
            $table->string('check_number');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bdo_receipt');
    }
    
};
