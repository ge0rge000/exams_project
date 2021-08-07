<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrueanswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trueanswers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('question_id')->unsigned()->nullable();//// year
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->string('ans');
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
        Schema::dropIfExists('trueanswers');
    }
}
