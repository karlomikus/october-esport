<?php namespace Kami\Esport\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMatchesScoresTable extends Migration
{
    public function up()
    {
        Schema::create('kami_esport_matches_scores', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('match_id')->unsigned();
            $table->integer('home');
            $table->integer('guest');
            $table->foreign('match_id')->references('id')->on('kami_esport_matches');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kami_esport_matches_scores');
    }
}
