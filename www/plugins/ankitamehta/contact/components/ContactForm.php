<?php namespace ankitamehta\Contact\components;

use Cms\Classes\ComponentBase;

class ContactForm extends ComponentBase
{
    public function componentDetails(){
        return[
            'name' => 'Contact Form',
            'description' => 'Simple Contact Page'
        ]; 
    }
}
