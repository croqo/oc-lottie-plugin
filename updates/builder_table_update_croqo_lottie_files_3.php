<?php namespace Croqo\Lottie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCroqoLottieFiles3 extends Migration
{
    public function up()
    {
        Schema::table('croqo_lottie_files', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('croqo_lottie_files', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
