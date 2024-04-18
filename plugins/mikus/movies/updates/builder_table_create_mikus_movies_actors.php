<?php namespace Mikus\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMikusMoviesActors extends Migration
{
    public function up()
    {
        Schema::create('mikus_movies_actors', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mikus_movies_actors');
    }
}
