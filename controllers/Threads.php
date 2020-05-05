<?php

namespace Flynsarmy\Badfilter\Controllers;

use Backend\Classes\Controller;
use Flynsarmy\Commentable\Models\Thread;

class Threads extends Controller
{
    /**
     * @var array Extensions implemented by this controller.
     */
    public $implement = [
        \Backend\Behaviors\ListController::class
    ];

    /**
     * @var array `ListController` configuration.
     */
    public $listConfig = 'config_list.yaml';

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}

