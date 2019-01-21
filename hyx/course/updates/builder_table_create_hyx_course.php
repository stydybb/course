<?php namespace Hyx\Course\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHyxCourse extends Migration
{
    public function up()
    {
        Schema::create('hyx_course_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->text('body');
            $table->string('category', 255);
            $table->string('unit', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hyx_course_');
    }
}