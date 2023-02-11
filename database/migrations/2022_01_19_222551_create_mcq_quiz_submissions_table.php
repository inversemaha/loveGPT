<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcqQuizSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcq_quiz_submissions', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("phone");
            $table->integer("question_id");
            $table->string("district")->nullable();
            $table->string("upazila")->nullable();
            $table->integer("answer");
            $table->boolean("is_right_ans")->default(false);
            $table->boolean("is_winner")->default(false);
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
        Schema::dropIfExists('mcq_quiz_submissions');
    }
}
