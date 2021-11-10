<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppraisalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appraisals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('competition_id')->unsigned()->index()->nullable();
            $table->bigInteger('dancer_id')->unsigned()->index()->nullable();
            $table->bigInteger('judge_id')->unsigned()->index()->nullable();
            $table->bigInteger('assessments_id')->unsigned()->index()->nullable();
            $table->bigInteger('criterion_id')->unsigned()->index()->nullable();

            $table->timestamps();




            $table->foreign('competition_id')->references('competition_id')->on('competitions');
            $table->foreign('dancer_id')->references('user_id')->on('users');
            $table->foreign('judge_id')->references('user_id')->on('users');
            $table->foreign('assessments_id')->references('assessments_id')->on('assessments');
            $table->foreign('criterion_id')->references('criterion_id')->on('criterions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appraisals');
    }
}
