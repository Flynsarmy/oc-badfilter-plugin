<?php namespace Flynsarmy\Badfilter;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Bad Filter Example',
            'description' => 'Demonstrates an issue with an empty filter causing JS error on list pages',
            'author'      => 'Flyn San',
            'icon'        => 'icon-pencil'
        ];
    }
}
