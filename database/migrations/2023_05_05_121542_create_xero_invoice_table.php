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
            // xero
            $table->string('users_id')->nullable();
            $table->string('xero_account_id')->nullable();

            // student info
            $table->string('privacy_notice')->nullable();
            $table->string('fullname')->nullable();
            $table->string('scholarshipStatus')->nullable();
            $table->string('email')->nullable();
            $table->string('department')->nullable();
            $table->string('grade_year')->nullable();
            $table->string('student_type')->nullable();
            
            // receipts info
            $table->string('description')->nullable(); //payment for
            $table->string('each_amount')->nullable(); //payment for
            
            $table->string('amount')->default(0)->nullable(); //in ocr scan
            $table->string('reference')->nullable(); //in ocr scan
            $table->date('date')->nullable();  //in ocr scan
            $table->time('time')->nullable();  //in ocr scan

            $table->string('receipt_type')->nullable();
            $table->string('receipt_src')->nullable();
           
            // for status
            $table->string('status')->default(0); // 0 - send, 1 - sent and see the registrar staff
            
            $table->enum('receiptStatus', ['1', '2', '3', '4'])->default(1);   // 1 - pending , 2 - valid  and see the registrar staff, 3 - reject  4 - archive 
            
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
