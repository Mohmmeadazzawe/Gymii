<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_times', function (Blueprint $table) {
            $table->id();
            $table->enum('day',['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']);
            $table->string('time');
            $table->unsignedBigInteger('training_id');
            $table->foreign('training_id')->on('trainings')->references('id')->cascadeOnDelete();
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
        Schema::dropIfExists('training_times');
    }
}
