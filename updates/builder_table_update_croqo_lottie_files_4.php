<?php namespace Croqo\Lottie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCroqoLottieFiles4 extends Migration
{
    public function up()
    {
        Schema::table('croqo_lottie_files', function($table)
        {
            $table->renameColumn('subtitle', 'slug');
        });
    }
    
    public function down()
    {
        Schema::table('croqo_lottie_files', function($table)
        {
            $table->renameColumn('slug', 'subtitle');
        });
    }
}
