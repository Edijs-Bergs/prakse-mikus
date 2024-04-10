<?php namespace Mikus\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMikusMovies extends Migration
{
    public function up()
    {
        Schema::table('mikus_movies_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mikus_movies_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
