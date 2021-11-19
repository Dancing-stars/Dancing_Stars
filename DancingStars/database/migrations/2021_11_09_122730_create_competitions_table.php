<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->id('competition_id');
            $table->string('competiotion_name');
            $table->bigInteger('type')->unsigned()->index()->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
            $table->foreign('type')->references('type_id')->on('competitions_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competitions');
    }
}
