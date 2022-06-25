<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('teacher_id');
            $table->integer('nis');
            $table->integer('nisn');
            $table->string('name');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('religion');
            $table->string('address');
            $table->enum('gender',['laki-laki','perempuan']);
            $table->string('name_student_guardian');
            $table->string('status_student_guardian');
            $table->string('photo_student');
            $table->timestamps();

            $table->foreign('class_id')
            ->references('id')->on('classeds')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('teacher_id')
            ->references('id')->on('teachers')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
