<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSchoolworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_schoolworks', function (Blueprint $table) {
            $table->id();
            $table->integer('score')->nullable();
            $table->unsignedBigInteger('media_id')->nullable();
            $table->foreignId('schoolwork_id')->constrained('schoolworks')->onDelete('cascade');
            $table->unsignedBigInteger('course_student_id');
            $table->foreign('course_student_id')->references('student_id')->on('course_students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_schoolworks');
    }
}