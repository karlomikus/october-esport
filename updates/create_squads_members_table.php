<?php namespace Kami\Esport\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSquadsMembersTable extends Migration
{
    public function up()
    {
        Schema::create('kami_esport_squads_members', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('squad_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('squad_id')->references('id')->on('kami_esport_squads');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kami_esport_squads_members');
    }
}
