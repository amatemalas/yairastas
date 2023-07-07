<?php namespace Amatemalas\MultiBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRwDynamicblocksTypes extends Migration
{
    public function up()
    {
        Schema::create('amatemalas_multiblocks_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('file_name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('amatemalas_multiblocks_types');
    }
}
