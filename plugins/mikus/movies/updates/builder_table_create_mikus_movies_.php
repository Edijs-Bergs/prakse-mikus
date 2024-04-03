<?php namespace Mikus\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMikusMovies extends Migration
{
    public function up()
    {
        Schema::create('mikus_movies_', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mikus_movies_');
    }
}
