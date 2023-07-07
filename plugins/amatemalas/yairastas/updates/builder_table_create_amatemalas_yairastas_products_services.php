<?php namespace Amatemalas\Yairastas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmatemalasYairastasProductsServices extends Migration
{
    public function up()
    {
        Schema::create('amatemalas_yairastas_products_services', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('product_id');
            $table->string('service_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('amatemalas_yairastas_products_services');
    }
}
