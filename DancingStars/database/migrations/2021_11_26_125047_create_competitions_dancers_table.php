<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionsDancersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions_dancers', function (Blueprint $table) {
            
            $table->bigInteger('competition_id')->unsigned()->index()->nullable();
            $table->bigInteger('dancer_id')->unsigned()->index()->nullable();
            $table->foreign('competition_id')->references('competition_id')->on('competitions');
            $table->foreign('dancer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competitions_dancers');
    }
}
