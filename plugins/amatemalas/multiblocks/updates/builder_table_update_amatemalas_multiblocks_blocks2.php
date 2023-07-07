<?php namespace Amatemalas\MultiBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRwDynamicblocksBlocks2 extends Migration
{
    public function up()
    {
        Schema::table('amatemalas_multiblocks_blocks', function($table)
        {
            $table->integer('type_id')->unsigned();
            $table->dropColumn('category');
        });
    }

    public function down()
    {
        Schema::table('amatemalas_multiblocks_blocks', function($table)
        {
            $table->dropColumn('type_id');
            $table->integer('category')->nullable();
        });
    }
}
