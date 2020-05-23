<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_id');
            $table->integer('team_id');
            $table->integer('run');
            $table->integer('ball');
            $table->integer('wicket');
            $table->integer('over');
            $table->integer('bat1');
            $table->integer('bat2');
            $table->integer('bowler');
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
        Schema::drop('scores');
    }
}
