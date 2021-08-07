<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('id_subject');
            $table->foreign('id_subject')->references('id')->on('subjects')->onDelete('cascade');
            $table->unsignedBigInteger('id_teacher');
            $table->foreign('id_teacher')->references('id')->on('users')->onDelete('cascade');
            $table->enum('year_type', ['one', 'two', 'three']);
            $table->boolean('show_exam')->default(false);
            $table->string('duration');
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
        Schema::dropIfExists('exams');
    }
}
