<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBowlingPerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bowling_performances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_id');
            $table->integer('match_id');
            $table->integer('run');
            $table->integer('wicket');
            $table->integer('extra');

            $table->string('economy');
            $table->integer('over');
            $table->boolean('oncrease');
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
        Schema::drop('bowling_performances');
    }
}
