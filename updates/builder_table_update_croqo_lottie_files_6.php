<?php namespace Croqo\Lottie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCroqoLottieFiles6 extends Migration
{
    public function up()
    {
        Schema::table('croqo_lottie_files', function($table)
        {
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('croqo_lottie_files', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
