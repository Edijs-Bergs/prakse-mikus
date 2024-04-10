<?php namespace Mikus\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMikusMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('mikus_movies_genres', function($table)
        {
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mikus_movies_genres');
    }
}
