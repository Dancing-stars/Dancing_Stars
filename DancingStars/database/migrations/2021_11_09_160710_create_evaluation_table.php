<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('competition_id')->unsigned()->index()->nullable();
            $table->bigInteger('dancer_id')->unsigned()->index()->nullable();
            $table->bigInteger('judge_id')->unsigned()->index()->nullable();
            $table->bigInteger('rhythm')->unsigned()->index()->nullable();
            $table->bigInteger('energy')->unsigned()->index()->nullable();
            $table->bigInteger('presentation')->unsigned()->index()->nullable();
            $table->string('status');
            $table->timestamps();
            $table->foreign('competition_id')->references('competition_id')->on('competitions');
            $table->foreign('dancer_id')->references('id')->on('users');
            $table->foreign('judge_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluation');
    }
}
