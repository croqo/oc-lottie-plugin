<?php namespace Croqo\Lottie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCroqoLottieFiles5 extends Migration
{
    public function up()
    {
        Schema::table('croqo_lottie_files', function($table)
        {
            $table->string('description');
        });
    }
    
    public function down()
    {
        Schema::table('croqo_lottie_files', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
