<?php namespace Amatemalas\MultiBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRwDynamicblocksBlocks extends Migration
{
    public function up()
    {
        Schema::create('amatemalas_multiblocks_blocks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('page');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('category')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('amatemalas_multiblocks_blocks');
    }
}
