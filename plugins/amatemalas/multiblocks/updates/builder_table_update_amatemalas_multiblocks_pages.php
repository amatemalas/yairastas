<?php namespace Amatemalas\MultiBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRwDynamicblocksPages extends Migration
{
    public function up()
    {
        Schema::table('amatemalas_multiblocks_pages', function($table)
        {
            $table->string('url');
        });
    }
    
    public function down()
    {
        Schema::table('amatemalas_multiblocks_pages', function($table)
        {
            $table->dropColumn('url');
        });
    }
}
