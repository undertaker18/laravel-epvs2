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
        Schema::create('xero_invoice', function (Blueprint $table) {
            $table->id();
            $table->string('users_id')->nullable();
            $table->string('xero_account_id')->nullable();
            $table->string('description')->nullable();
            $table->string('amount')->default(0)->nullable();
            $table->string('reference')->nullable();
            $table->string('status')->default(0); // 0 - pending, 1 - pending
            $table->timestamp('created_at')->useCurrent();

            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xero_invoice');
    }
};
