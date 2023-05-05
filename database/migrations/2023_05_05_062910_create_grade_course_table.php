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
        Schema::create('grade_course', function (Blueprint $table) {
            $table->id();
            $table->string('elementary_list');
            $table->string('junior_high_list');
            $table->string('senior_high_list');
            $table->string('college_list');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grade_course');
    }
};
