<?php
namespace Kami\Esport\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateGamesTable extends Migration
{
    public function up()
    {
        Schema::create('kami_esport_games', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kami_esport_games');
    }
}
