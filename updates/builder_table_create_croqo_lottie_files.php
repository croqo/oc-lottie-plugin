<?php namespace Croqo\Lottie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCroqoLottieFiles extends Migration
{
    public function up()
    {
        Schema::create('croqo_lottie_files', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('id');
            $table->string('json');
            $table->string('title');
            $table->string('subtitle');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('croqo_lottie_files');
    }
}
