<?php namespace shahEducation\Enquiry;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return[
            'shahEducation\enquiry\components\Enquiry'  => 'Enquiry'
        ];
    }

    public function registerSettings()
    {
    }
}
