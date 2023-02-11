<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelfieVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selfie_votes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("selfie_id");
            $table->string("name")->nullable();
            $table->string("phone")->nullable();
            $table->timestamps();
            $table->foreign('selfie_id')->references('id')->on('selfie_submissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selfie_votes');
    }
}
