<?php namespace Amatemalas\MultiBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRwDynamicblocksPages extends Migration
{
    public function up()
    {
        Schema::create('amatemalas_multiblocks_pages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('filename');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('amatemalas_multiblocks_pages');
    }
}
