<?php namespace Amatemalas\Yairastas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmatemalasYairastasProductsProducts extends Migration
{
    public function up()
    {
        Schema::create('amatemalas_yairastas_products_products', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('related_product_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('amatemalas_yairastas_products_products');
    }
}
