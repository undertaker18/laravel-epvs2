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
        Schema::create('epvs_forms', function (Blueprint $table) {
            $table->id();
            $table->string('privacy_notice');

            $table->string('fullname1');
            $table->string('fullname2')->nullable();
            $table->string('fullname3')->nullable();

            $table->string('scholarshipStatus1');
            $table->string('scholarshipStatus2')->nullable();
            $table->string('scholarshipStatus3')->nullable();

            $table->string('email1');
            $table->string('email2')->nullable();
            $table->string('email3')->nullable();

            $table->string('department1');
            $table->string('department2')->nullable();
            $table->string('department3')->nullable();

            $table->string('grade_year1');
            $table->string('grade_year2')->nullable();
            $table->string('grade_year3')->nullable();

            $table->string('student_type1');
            $table->string('student_type2')->nullable();
            $table->string('student_type3')->nullable();

            $table->text('payments_for1')->nullable();
            $table->text('payments_for2')->nullable();
            $table->text('payments_for3')->nullable();

            $table->string('each_amount1')->nullable();
            $table->string('each_amount2')->nullable();
            $table->string('each_amount3')->nullable();
            
            $table->string('receipt_type')->nullable();
            $table->string('receipt_filename')->nullable();

            $table->string('reference')->nullable();
            $table->string('amount')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('epvs_forms');
    }
};
