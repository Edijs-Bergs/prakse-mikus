<?php namespace Mikus\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMikusMovies3 extends Migration
{
    public function up()
    {
        Schema::table('mikus_movies_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
    
    public function down()
    {
        Schema::table('mikus_movies_', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
}
