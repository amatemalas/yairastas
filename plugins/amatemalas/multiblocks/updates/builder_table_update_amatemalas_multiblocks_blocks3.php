<?php namespace Amatemalas\MultiBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRwDynamicblocksBlocks3 extends Migration
{
    public function up()
    {
        Schema::table('amatemalas_multiblocks_blocks', function($table)
        {
            $table->text('pages');
            $table->dropColumn('page');
        });
    }

    public function down()
    {
        Schema::table('amatemalas_multiblocks_blocks', function($table)
        {
            $table->dropColumn('pages');
            $table->string('page', 191);
        });
    }
}