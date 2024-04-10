<?php namespace Mikus\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMikusMoviesMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('mikus_movies_movies_genres', function($table)
        {
            $table->integer('movie_id');
            $table->integer('genre_id');
            $table->primary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mikus_movies_movies_genres');
    }
}
