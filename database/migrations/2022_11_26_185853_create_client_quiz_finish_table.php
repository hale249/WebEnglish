<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientQuizFinishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_quiz_finish', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_quiz_id');
            $table->unsignedBigInteger('question_id');
            $table->string('client_answer')->nullable();
            $table->string('correct_answer')->nullable();
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
        Schema::dropIfExists('client_quiz_finish');
    }
}
