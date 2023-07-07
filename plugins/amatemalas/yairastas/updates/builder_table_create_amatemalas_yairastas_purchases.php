<?php namespace Amatemalas\Yairastas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmatemalasYairastasPurchases extends Migration
{
    public function up()
    {
        Schema::create('amatemalas_yairastas_purchases', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->integer('product_id')->unsigned();
            $table->text('comment');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('amatemalas_yairastas_purchases');
    }
}
