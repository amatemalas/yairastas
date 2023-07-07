<?php namespace Amatemalas\Yairastas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAmatemalasYairastasContacts extends Migration
{
    public function up()
    {
        Schema::create('amatemalas_yairastas_contacts', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('subject');
            $table->text('message');
            $table->string('gender');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('amatemalas_yairastas_contacts');
    }
}
