<?php

namespace Flynsarmy\Badfilter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateThreadsTable extends Migration
{
    public function up()
    {
        Schema::create('flynsarmy_badfilter_threads', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('flynsarmy_badfilter_threads');
    }
}
