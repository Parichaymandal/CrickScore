<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBattingPerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batting_performances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_id');
            $table->integer('match_id');
            $table->integer('run');
            $table->integer('no_of_fours');
            $table->integer('no_of_sixes');
            $table->string('average');
            $table->integer('bowl');
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
        Schema::drop('batting_performances');
    }
}
