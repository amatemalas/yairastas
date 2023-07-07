<?php namespace Amatemalas\MultiBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRwDynamicblocksBlocks5 extends Migration
{
    public function up()
    {
        Schema::table('amatemalas_multiblocks_blocks', function($table)
        {
            $table->dropColumn('sort_order');
            $table->dropColumn('pages');
        });
    }

    public function down()
    {
        Schema::table('amatemalas_multiblocks_blocks', function($table)
        {
            $table->integer('sort_order')->default(0);
            $table->text('pages');
        });
    }
}