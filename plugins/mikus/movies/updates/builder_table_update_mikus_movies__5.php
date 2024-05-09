<?php namespace Mikus\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMikusMovies5 extends Migration
{
    public function up()
    {
        Schema::table('mikus_movies_', function($table)
        {
            $table->integer('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('mikus_movies_', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
