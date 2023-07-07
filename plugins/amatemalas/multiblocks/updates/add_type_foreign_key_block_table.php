<?php namespace Amatemalas\MultiBlocks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddTypeForeignKeyBlockTable extends Migration
{
    public function up()
    {
        Schema::table('amatemalas_multiblocks_blocks', function($table)
        {
            $table->foreign('type_id')
                ->references('id')
                ->on('amatemalas_multiblocks_types')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('amatemalas_multiblocks_blocks', function($table)
        {
            $table->dropForeign('amatemalas_multiblocks_blocks_type_id_foreign');
        });
    }
}