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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('student_number')->unique(); // Student Number
            $table->string('first_name'); // First Name
            $table->string('last_name'); // Last Name
            $table->string('grade_level'); // Grade Level
            $table->string('email')->unique(); // Email
            $table->enum('status', ['Active', 'Inactive'])->default('Active'); // Status
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
