<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->uuid('student_id')->primary();
            $table->string('complete_name');
            $table->enum('gender', ['Male', 'Female']); // Adjusted for enum
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('nre')->nullable();
            $table->uuid('department_id');
            $table->uuid('semester_id');
            $table->integer('start_year');
            $table->string('student_image')->nullable();
            $table->text('observation')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
