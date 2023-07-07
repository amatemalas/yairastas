<?php namespace Amatemalas\Yairastas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmatemalasYairastasFaqs extends Migration
{
    public function up()
    {
        Schema::create('amatemalas_yairastas_faqs', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('question');
            $table->text('answer');
            $table->string('category');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('amatemalas_yairastas_faqs');
    }
}