<?php namespace Amatemalas\Yairastas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmatemalasYairastasTags extends Migration
{
    public function up()
    {
        Schema::create('amatemalas_yairastas_tags', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('amatemalas_yairastas_tags');
    }
}
