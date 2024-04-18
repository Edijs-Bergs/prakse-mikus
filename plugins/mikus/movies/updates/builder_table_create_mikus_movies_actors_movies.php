<?php namespace Mikus\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMikusMoviesActorsMovies extends Migration
{
    public function up()
    {
        Schema::create('mikus_movies_actors_movies', function($table)
        {
            $table->integer('movie_id')->unsigned();
            $table->integer('actor_id')->unsigned();
            $table->primary(['movie_id','actor_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mikus_movies_actors_movies');
    }
}
