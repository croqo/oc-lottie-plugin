<?php namespace Croqo\Lottie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCroqoLottieFiles2 extends Migration
{
    public function up()
    {
        Schema::table('croqo_lottie_files', function($table)
        {
            $table->integer('id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('croqo_lottie_files', function($table)
        {
            $table->string('id', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
