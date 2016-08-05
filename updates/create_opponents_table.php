<?php
namespace Kami\Esport\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateOpponentsTable extends Migration
{
    public function up()
    {
        Schema::create('kami_esport_opponents', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kami_esport_opponents');
    }
}
