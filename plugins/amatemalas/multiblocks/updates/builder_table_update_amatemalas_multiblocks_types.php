<?php namespace Amatemalas\MultiBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRwDynamicblocksTypes extends Migration
{
    public function up()
    {
        Schema::table('amatemalas_multiblocks_types', function($table)
        {
            $table->text('visible_fields')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('amatemalas_multiblocks_types', function($table)
        {
            $table->dropColumn('visible_fields');
        });
    }
}
