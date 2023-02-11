<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcqQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcq_quizzes', function (Blueprint $table) {
            $table->id();
            $table->longText("question_title");
            $table->string("image")->nullable();
            $table->string("option_one")->nullable();
            $table->string("option_two")->nullable();
            $table->string("option_three")->nullable();
            $table->string("option_four")->nullable();
            $table->integer("right_answer")->nullable();
            $table->string("date")->nullable();
            $table->boolean("is_publish")->default(false);
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
        Schema::dropIfExists('mcq_quizzes');
    }
}
