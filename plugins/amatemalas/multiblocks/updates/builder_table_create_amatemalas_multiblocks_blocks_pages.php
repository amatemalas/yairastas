<?php namespace Amatemalas\MultiBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRwDynamicblocksBlocksPages extends Migration
{
    public function up()
    {
        Schema::create('amatemalas_multiblocks_blocks_pages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('page_id')->unsigned();
            $table->integer('block_id')->unsigned();
            $table->integer('sort_order')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('amatemalas_multiblocks_blocks_pages');
    }
}
