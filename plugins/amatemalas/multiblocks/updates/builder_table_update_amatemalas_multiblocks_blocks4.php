<?php namespace Amatemalas\MultiBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRwDynamicblocksBlocks4 extends Migration
{
    public function up()
    {
        Schema::table('amatemalas_multiblocks_blocks', function($table)
        {
            $table->string('title', 191)->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('amatemalas_multiblocks_blocks', function($table)
        {
            $table->string('title', 191)->nullable(false)->change();
        });
    }
}