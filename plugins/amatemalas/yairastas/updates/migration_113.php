<?php namespace Amatemalas\Yairastas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration113 extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('gender');
            $table->dropColumn('phone');
        });
    }
}