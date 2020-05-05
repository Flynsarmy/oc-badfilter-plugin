<?php

namespace Flynsarmy\Badfilter\Updates;

use Flynsarmy\Badfilter\Models\Thread;
use October\Rain\Database\Updates\Seeder;

class InitialSeed extends Seeder
{
    public function run()
    {
        $thread = Thread::create([
            'title' => 'First row',
        ]);

        $thread = Thread::create([
            'title' => 'Second row',
        ]);
    }
}
