<?php namespace Amatemalas\Yairastas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmatemalasYairastasServices extends Migration
{
    public function up()
    {
        Schema::create('amatemalas_yairastas_services', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('method')->nullable();
            $table->text('materials')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('amatemalas_yairastas_services');
    }
}
