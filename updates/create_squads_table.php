<?php namespace Kami\Esport\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSquadsTable extends Migration
{
    public function up()
    {
        Schema::create('kami_esport_squads', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('game_id')->unsigned();
            $table->timestamps();

            $table->foreign('game_id')->references('id')->on('kami_esport_games');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kami_esport_squads');
    }
}
