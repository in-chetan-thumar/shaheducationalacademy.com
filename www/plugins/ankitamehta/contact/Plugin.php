<?php namespace AnkitaMehta\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return[
            'ankitamehta\Contact\components\ContactForm' => 'contactForm'
        ];
    }

    public function registerSettings()
    {
    }
}
