<?php namespace Kami\Esport\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMatchesTable extends Migration
{
    public function up()
    {
        Schema::create('kami_esport_matches', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('squad_id')->unsigned();
            $table->integer('opponent_id')->unsigned();
            $table->integer('game_id')->unsigned();
            $table->string('matchlink')->nullable();
            $table->timestamp('date')->nullable();
            $table->timestamps();

            $table->foreign('squad_id')->references('id')->on('kami_esport_squads');
            $table->foreign('opponent_id')->references('id')->on('kami_esport_opponents');
            $table->foreign('game_id')->references('id')->on('kami_esport_games');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kami_esport_matches');
    }
}
