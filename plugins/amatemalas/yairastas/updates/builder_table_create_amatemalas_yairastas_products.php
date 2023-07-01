<?php namespace Amatemalas\Yairastas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmatemalasYairastasProducts extends Migration
{
    public function up()
    {
        Schema::create('amatemalas_yairastas_products', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->string('slug');
            $table->decimal('price', 10, 2);
            $table->integer('stock');
            $table->boolean('is_active');
            $table->boolean('is_featured');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('amatemalas_yairastas_products');
    }
}